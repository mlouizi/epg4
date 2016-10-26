<?php
namespace Eplugg\FrontBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
class SearchController extends Controller
{
    public function AllUsersAction() {

        $request = $this->get('request');
        $page = $request->query->get('page');
        if(empty($page)) {
            $page = 1;
        }
        $limit = 50;
        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\UserBundle\Entity\User');
        $query = $repository->createQueryBuilder('u');
        $query = $query->where('u.enabled = true')
            ->setFirstResult(($page-1)*$limit)
            ->setMaxResults($limit)
            ->getQuery();
        $users = $query->getResult();
        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\UserBundle\Entity\User');
        $count = $repository->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.enabled = true')
            ->getQuery()
            ->getSingleScalarResult();
        $ConstantManager = $this->container->get('constant_manager');
        $countries = $ConstantManager::countryArray();
        $mounths = $ConstantManager::mounthsArray();
        $years = $ConstantManager::yearsArray();
        $civilities = $ConstantManager::civilityArray();
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        return $this->render('EpluggFrontBundle:Search:all_users.html.twig', array(
            'users' => $users,
            'total' => $count,
            'csrf_token' => $csrfToken,
            'dateSelect' => array(
                'mounths' => $mounths,
                'years' => $years,
            ),
            'countries' => $countries,
            'civilities' => $civilities)
        );

    }
    public function SearchUsersAction() {

        $request = $this->get('request');
        $search = $request->request->get('topSearchInput');
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $return = array();

        if(!empty($search)) {
            $my_friends = 'SELECT u2.id  FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r4 WITH (( u2.id = r4.userOne OR u2.id = r4.userTwo AND r4.status = 2) )
	                WHERE (r4.userOne = :currentuser OR r4.userTwo = :currentuser ) AND u2.id <> :currentuser  AND r4.status = 2';

            $my_friends2 = 'SELECT u3.id  FROM EpluggUserBundle:User u3 INNER JOIN EpluggBackBundle:Relationship r5 WITH (( u3.id = r5.userOne OR u3.id = r5.userTwo AND r5.status = 2) )
	                WHERE (r5.userOne = :currentuser OR r5.userTwo = :currentuser ) AND u3.id <> :currentuser  AND r5.status = 2';
            $sql = "SELECT u as user, r1.id as is_invited, r2.id has_invited, count(r3) as common_friends
            FROM EpluggUserBundle:User u
            LEFT JOIN EpluggBackBundle:Relationship r1 WITH (r1.userOne = u.id AND r1.userTwo = :currentuser)
            LEFT JOIN EpluggBackBundle:Relationship r2 WITH (r2.userOne = :currentuser AND r1.id = u.id)
            LEFT JOIN EpluggBackBundle:Relationship r3 WITH (((r3.userOne = u.id AND r3.userTwo IN ($my_friends)) OR (r3.userTwo = u.id AND r3.userOne IN ($my_friends2))) AND r3.status = 2 )
            WHERE (CONCAT(CONCAT(u.firstName, ' '), u.lastName) LIKE :search
            OR CONCAT(CONCAT(u.lastName, ' '), u.firstName) LIKE :search
            OR u.company_city LIKE :search
            OR u.company_address LIKE :search
            OR u.company_website LIKE :search
            OR u.email LIKE :search
            OR u.job LIKE :search
            OR u.mobile = :searchFull
            OR u.direct_phone = :searchFull
            OR u.company_name LIKE :search) AND u.id <> :currentuser AND u.enabled = 1
            GROUP BY u
            ORDER BY common_friends DESC
            ";
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($sql)
                ->setMaxResults(5)
                ->setParameter('search', '%' . $search  .  '%')
                ->setParameter('searchFull', $search)
                ->setParameter('currentuser', $currentUser->getId());
            $users = $query->getResult();
            foreach($users as $user) {
                $avatar = $user["user"]->getAvatar();
                $companyAvatar = $user["user"]->getCompanyAvatar();
                $return[] = array(
                    'profile_url' => $this->generateUrl('eplugg_profile_page', array('uid' => $user['user']->getId()), true),
                    'common_friends' => $user['common_friends'],
                    'is_invited' => (!empty($user['is_invited'])) ? 1 : 0,
                    'has_invited' => (!empty($user['has_invited'])) ? 1 : 0,
                    'job' => $user["user"]->getJob(),
                    'gendre' => $user["user"]->getGender(),
                    'firstname' => $user["user"]->getFirstName(),
                    'lastname' => $user["user"]->getLastName(),
                    'user_picture' => (!empty($avatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/' . $avatar->getCroppedWebPath() : $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/images/avatar.png' ,
                    'company_name' => $user["user"]->getCompanyName(),
                    'company_country' => $user["user"]->getCompanyCountry(),
                    'company_city' => $user["user"]->getCompanyCity(),
                    'company_activity' => $user["user"]->getActivitiesFormatted(),
                    'company_logo' => (!empty($companyAvatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/' . $companyAvatar->getCroppedWebPath() : '/images/avatar-company.png',
                );
            }
        }
        return new JsonResponse($return);


    }
    public function SearchUsersPageAction() {

        $request = $this->get('request');
        $search = $request->query->get('topSearchInput');
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $users = array();
        $page = ($request->query->get('page')) ? $request->query->get('page') : 1;
        $advancedSearch = ($request->query->get('form')) ? $request->query->get('form') : array();
        $directory = ($request->query->get('directory')) ? true : false;
        $my_friends = 'SELECT u2.id  FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r4 WITH (( u2.id = r4.userOne OR u2.id = r4.userTwo AND r4.status = 2) )
	                WHERE (r4.userOne = :currentuser OR r4.userTwo = :currentuser ) AND u2.id <> :currentuser  AND r4.status = 2';

        $my_friends2 = 'SELECT u3.id  FROM EpluggUserBundle:User u3 INNER JOIN EpluggBackBundle:Relationship r5 WITH (( u3.id = r5.userOne OR u3.id = r5.userTwo AND r5.status = 2) )
	                WHERE (r5.userOne = :currentuser OR r5.userTwo = :currentuser ) AND u3.id <> :currentuser  AND r5.status = 2';
        $onlyFriendCondition = '';
        $sql = '';
        if($directory) {
            $onlyFriendCondition = 'AND r6.id is NOT NULL';
        }
        if(!empty($advancedSearch["advancedSearch"])) {
            $conditions = array();
            if(isset($advancedSearch["gendre"]) && $advancedSearch["gendre"] != 'all') {
                $conditions[] = "u.gender = " . $advancedSearch["gendre"];
            }
            if(!empty($advancedSearch["first_name"])) {
                $conditions[] = "u.firstName = '" . $advancedSearch["first_name"] . "'";
            }
            if(!empty($advancedSearch["last_name"])) {
                $conditions[] = "u.lastName = '" . $advancedSearch["last_name"] . "'";
            }
            if(!empty($advancedSearch["job"])) {
                $conditions[] = "u.job = '" . $advancedSearch["job"] . "'";
            }
            if(!empty($advancedSearch["company_name"])) {
                $conditions[] = "u.company_name = '" . $advancedSearch["company_name"] . "'";
            }
            if(!empty($advancedSearch["company_city"])) {
                $conditions[] = "u.company_city = '" . $advancedSearch["company_city"] . "'";
            }
            if(!empty($advancedSearch["country"])) {
                $conditions[] = "u.company_country = '" . $advancedSearch["country"] . "'";
            }
            if(!empty($advancedSearch["activity"])) {
                $conditions[] = "ac.name = '" . $advancedSearch["activity"] . "'";
            }
            if(!empty($conditions)) {
                $strConditions = '(' . implode(' AND ', $conditions) . ') AND ';
            }
            else {
                $strConditions = "";
            }
            $sql = "SELECT u as user, r1.id as is_invited, r2.id has_invited, count(r3) as common_friends
            FROM EpluggUserBundle:User u
            LEFT JOIN EpluggBackBundle:Relationship r1 WITH (r1.userOne = u.id AND r1.userTwo = :currentuser)
            LEFT JOIN EpluggBackBundle:Relationship r2 WITH (r2.userOne = :currentuser AND r1.id = u.id)
            LEFT JOIN EpluggBackBundle:Relationship r3 WITH (((r3.userOne = u.id AND r3.userTwo IN ($my_friends)) OR (r3.userTwo = u.id AND r3.userOne IN ($my_friends2))) AND r3.status = 2 )
            LEFT JOIN EpluggBackBundle:Relationship r6 WITH (((r6.userOne = u.id AND r6.userTwo = :currentuser) OR (r6.userTwo = u.id AND r6.userOne = :currentuser)) AND r6.status = 2)
            LEFT JOIN u.activities ac
            WHERE " . $strConditions . "u.id <> :currentuser AND u.enabled = 1 " . $onlyFriendCondition . "
            GROUP BY u
            ORDER BY common_friends DESC
            ";
        }
        elseif(!empty($search)) {
            $sql = "
SELECT u as user, r1.id as is_invited, r2.id has_invited, count(r3) as common_friends
            FROM EpluggUserBundle:User u
            LEFT JOIN EpluggBackBundle:Relationship r1 WITH (r1.userOne = u.id AND r1.userTwo = :currentuser)
            LEFT JOIN EpluggBackBundle:Relationship r2 WITH (r2.userOne = :currentuser AND r1.id = u.id)
            LEFT JOIN EpluggBackBundle:Relationship r3 WITH (((r3.userOne = u.id AND r3.userTwo IN ($my_friends)) OR (r3.userTwo = u.id AND r3.userOne IN ($my_friends2))) AND r3.status = 2 )
            LEFT JOIN EpluggBackBundle:Relationship r6 WITH (((r6.userOne = u.id AND r6.userTwo = :currentuser) OR (r6.userTwo = u.id AND r6.userOne = :currentuser)) AND r6.status = 2)
            LEFT JOIN u.activities ac
            WHERE (CONCAT(CONCAT(u.firstName, ' '), u.lastName) LIKE :search
            OR CONCAT(CONCAT(u.lastName, ' '), u.firstName) LIKE :search
            OR u.company_city LIKE :search
            OR u.company_address LIKE :search
            OR u.company_website LIKE :search
            OR ac.name LIKE :search
            OR u.email LIKE :search
            OR u.job LIKE :search
            OR u.mobile = :searchFull
            OR u.direct_phone = :searchFull
            OR u.company_name LIKE :search) AND u.id <> :currentuser AND u.enabled = 1 " . $onlyFriendCondition . "
            GROUP BY u
            ORDER BY common_friends DESC
            ";

        }
        if(!empty($sql)) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($sql);
            if(!empty($search)) {
                $query
                    ->setParameter('search', '%' . $search  .  '%')
                    ->setParameter('searchFull', $search);
            }
            $query->setParameter('currentuser', $currentUser->getId());
            $users = $query->getResult();
            $count = count($users);
            $query = $em->createQuery($sql)
                ->setMaxResults(50)
                ->setFirstResult(($page-1)*50);
            if(!empty($search)) {
                $query
                    ->setParameter('search', '%' . $search  .  '%')
                    ->setParameter('searchFull', $search);
            }
            $query->setParameter('currentuser', $currentUser->getId());
            $users = $query->getResult();
        }
        return $this->render('EpluggFrontBundle:Search:search_page.html.twig', array('users' => $users, 'next' => ($page+1), 'search' => $search, 'total' => $count, 'directory' => $directory));

    }
    public function advancedSearchBlockAction() {
        $ConstantManager = $this->container->get('constant_manager');
        $countries = $ConstantManager::countryArray();

        $civilities = array_merge(array('all' =>'',), $ConstantManager::civilityArray());
        $data = array();
        $form = $this->createFormBuilder($data)
            ->add('gendre', 'choice', array(
                'choices' => $civilities,
                'data' => 'all',
                'required' => false
            ))
            ->add('first_name', 'text', array('required' => false))
            ->add('last_name', 'text', array('required' => false))
            ->add('job', 'text', array('required' => false))
            ->add('company_name', 'text', array('required' => false))
            //todo activity
            ->add('activity', 'text', array('required' => false))
            ->add('company_city', 'text', array('required' => false))
            ->add('country', 'choice', array(
                'choices' => $countries,
                'required' => false
            ))

            ->add('advancedSearch', 'hidden', array(
                'data' => '1',
            ))
            ->getForm();
        return $this->render('EpluggFrontBundle:Search:advanced_search_block.html.twig', array('form' => $form->createView()));
    }
    public function commomFriendsAction($uid) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $my_friends = "SELECT u2.id  FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r2 WITH (( (u2.id = r2.userOne OR u2.id = r2.userTwo) AND r2.status = 2) )
	                WHERE (r2.userOne = :currentuser OR r2.userTwo = :currentuser ) AND u2.id <> :currentuser  AND r2.status = 2";
        $sql = "SELECT u1 From EpluggUserBundle:User u1
              INNER JOIN EpluggBackBundle:Relationship r1 WITH ((u1.id = r1.userOne AND r1.userTwo = :uid) OR (u1.id = r1.userTwo AND  r1.userOne = :uid)) AND r1.status = 2
              WHERE r1.status = 2 AND ( u1.id IN ($my_friends) )
              ";
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($sql);

        $query->setParameter('currentuser', $currentUser->getId())
            ->setParameter('uid', $uid);
        $users = $query->getResult();
        return $this->render('EpluggFrontBundle:Search:common_friends_popin.html.twig', array('users' => $users));

    }

}

