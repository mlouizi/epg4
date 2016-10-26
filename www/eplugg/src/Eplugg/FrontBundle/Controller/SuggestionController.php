<?php
namespace Eplugg\FrontBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use Eplugg\BackBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Eplugg\BackBundle\Entity\Ralationship;
use Eplugg\BackBundle\Entity\Suggestion;
use Eplugg\BackBundle\Entity\Ignored;

class SuggestionController extends Controller
{
    public function SuggestUserAction($uid)
    {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $error = false;
        $success = false;
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        if(!$authenticated || $currentUser->getId() == $uid) {
            $error = true;
        }
        else {
            $request = $this->get('request');
            $suggestions = $request->request->get('suggestion');
            $token =  $request->request->get('token');
            if(!empty($suggestions)) {
                if($csrfToken == $token ) {
                    $ids = explode(',', $suggestions);

                    $em = $this->getDoctrine()->getManager();
                    $suggested = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
                    $currentDate = new \DateTime();
                    foreach($ids as $id) {
                        $suggestion = new Suggestion();
                        $suggestion->setTimeSended($currentDate);
                        $suggestion->setSuggested($suggested);
                        $suggestion->setFrom($currentUser);
                        $to = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($id);
                        $suggestion->setTo($to);
                        $em->persist($suggestion);
                    }
                    $em->flush();
                    $em->clear();
                    $success = true;
                }
            }
        }

        return $this->render('EpluggFrontBundle:Suggestion:user_suggest.html.twig', array('error' => $error,'csrfToken' => $csrfToken, 'uid'=> $uid, 'success' => $success));
    }
    public function SuggestGetUsersAction($uid) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        $request = $this->get('request');
        $tokenParam = $request->query->get('token');
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
      //  if($authenticated && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') && $tokenParam == $csrfToken && $uid != $currentUser->getId()) {

            $hisRelations = 'SELECT u4.id  FROM  EpluggUserBundle:User u4 INNER JOIN EpluggBackBundle:Relationship r4 WITH ( u4.id = r4.userOne OR u4.id = r4.userTwo )
            WHERE (r4.userOne = :user  OR r4.userTwo = :user ) AND u4.id <> :user ';
            $sql = 'SELECT u1  FROM EpluggUserBundle:User u1 INNER JOIN EpluggBackBundle:Relationship r1 WITH (( u1.id = r1.userOne OR u1.id = r1.userTwo AND r1.status = 2) ) LEFT JOIN EpluggBackBundle:Suggestion s WITH (u1.id = s.to AND s.suggested = :user)
                        WHERE (r1.userOne = :currentUser OR r1.userTwo = :currentUser ) AND u1.id <> :currentUser  AND r1.status = 2 AND s.id IS NULL AND u1.id NOT IN (' . $hisRelations . ')';
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($sql);
            $query->setParameter('currentUser', $currentUser->getId())
                ->setParameter('user', $uid);
            $users = $query->getResult();
            $usersNames = array();
            foreach ($users as $user) {

                $avatar = (!empty($user->getAvatar()) && !empty($user->getAvatar()->getCroppedAbsolutePath())) ? $user->getAvatar()->getCroppedAbsolutePath() : $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/images/avatar.png';
                $infos = array('name' => $user->getFirstName(), 'lastName' => $user->getLastName(), 'job' => $user->getJob(), 'avatar' => $avatar);
                $usersNames[] = array('value' => $user->getId(), 'label' => $user->getFirstName() . ' ' . $user->getLastName(), 'infos' => $infos);
            }
            return new JsonResponse(array('valid' => true, 'users' => $usersNames));
      /*  }
        else {
            return new JsonResponse(array('valid' => false));

        }*/
    }
    public function SuggestedUsersAction($all = true) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $my_friends = 'SELECT u2.id  FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r2 WITH (( u2.id = r2.userOne OR u2.id = r2.userTwo AND r2.status = 2) )
	                WHERE (r2.userOne = :currentUser OR r2.userTwo = :currentUser ) AND u2.id <> :currentUser  AND r2.status = 2';
        $my_friends2 = 'SELECT u3.id  FROM EpluggUserBundle:User u3 INNER JOIN EpluggBackBundle:Relationship r3 WITH (( u3.id = r3.userOne OR u3.id = r3.userTwo AND r3.status = 2) )
	                WHERE (r3.userOne = :currentUser  OR r3.userTwo = :currentUser ) AND u3.id <> :currentUser  AND r3.status = 2';
        $my_relations = 'SELECT u4.id  FROM  EpluggUserBundle:User u4 INNER JOIN EpluggBackBundle:Relationship r4 WITH ( u4.id = r4.userOne OR u4.id = r4.userTwo )

	                      WHERE (r4.userOne = :currentUser  OR r4.userTwo = :currentUser ) AND u4.id <> :currentUser';
        $sql = 'SELECT count(r1), u1
                  FROM  EpluggUserBundle:User u1

                  LEFT JOIN EpluggBackBundle:Relationship r1 WITH ( u1.id = r1.userOne OR u1.id = r1.userTwo )
                  LEFT JOIN EpluggBackBundle:ignored i WITH (u1.id = i.ignored AND i.fromIgnored = :currentUser)
                  WHERE
                  (
                  (r1.userOne IN (' . $my_friends . ') AND r1.userTwo =  u1.id  AND r1.status = 2)
                    OR
                  (r1.userTwo IN (' . $my_friends2 . ')  AND r1.userOne =  u1.id  AND r1.status = 2)
                    OR
                    (u1.company_country = :country AND u1.company_city = :city)
                  )
                  AND u1.id NOT IN (' . $my_relations . ')
                  AND u1.id <> :currentUser
                  AND i.id IS NULL GROUP BY u1.id';
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($sql);
        if($all) {
            $request = $this->getRequest();
            $page = ($request->query->get('page')) ? $request->query->get('page') : 1;
            $query->setMaxResults(5)
            ->setFirstResult(($page-1)*5);
        }
        $query->setParameter('currentUser', $currentUser->getId())
            ->setParameter('country', $currentUser->getCompanyCountry())
            ->setParameter('city', $currentUser->getCompanyCity());
        $moreUsers = $query->getResult();

        if($all) {
            return $this->render('EpluggFrontBundle:Suggestion:suggested_list_auto.html.twig', array('users' => $moreUsers, 'next' => ($page)));

        }
        else {
            shuffle ($moreUsers);
            $users = array_splice($moreUsers, 0, 5);
            return $this->render('EpluggFrontBundle:Suggestion:suggested_block.html.twig', array('users' => $users, 'moreUsers' => $moreUsers));
        }
    }
    public function suggestedNotificationBlockAction($blockNotification = true) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\BackBundle\Entity\Suggestion');
        $query = $repository->createQueryBuilder('s');
        $query = $query->where('s.to = :currentUser')
            ->orderBy('s.timeSended', 'DESC')
            ->setParameter('currentUser', $currentUser->getId());
        if($blockNotification) {
            $query = $query->setMaxResults(3);
        }
        $suggestions = $query->getQuery()->getResult();
        if($blockNotification) {

            return $this->render('EpluggFrontBundle:Suggestion:suggested_notifications_block.html.twig', array('suggestions' => $suggestions));
        }
        else {
            if ($this->has('security.csrf.token_manager')) {
                $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
            } else {
                $csrfToken = $this->has('form.csrf_provider')
                    ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                    : null;
            }
            return $this->render('EpluggFrontBundle:Suggestion:suggested_list_block.html.twig', array('suggestions' => $suggestions, 'csrfToken' => $csrfToken));

        }
    }
    public function IgnoreUserAction($uid) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        if($currentUser->getId() != $uid) {
            try {
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
                $ignored = new Ignored();
                $ignored->setFromIgnored($currentUser);
                $ignored->setIgnored($user);
                $em->persist($ignored);
                $em->flush();
                $em->clear();
                return new JsonResponse(array('success' => true));
            }
            catch(\Exception $e) {
            }
        }
        return new JsonResponse(array('success' => false));

    }
}
