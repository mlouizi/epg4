<?php

namespace Eplugg\FrontBundle\Controller;

use Eplugg\BackBundle\Entity\Activity;
use Eplugg\UserBundle\Entity\Experience;
use Eplugg\UserBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Eplugg\BackBundle\Entity\Relationship;
use Eplugg\BackBundle\Entity\RelationshipAction;
use Eplugg\UserBundle\Entity\File;
use Eplugg\UserBundle\Entity\User;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class DefaultController extends Controller
{

    public function indexAction()
    {
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        $admin = $securityContext->isGranted('ROLE_ADMIN');

        if($admin) {
            return new RedirectResponse($this->generateUrl('eplugg_back_homepage'));
        }
        else if($authenticated) {
            $user = $this->get('security.context')->getToken()->getUser();
            if(!$user->getProfileCompleted()) {
                return new RedirectResponse($this->generateUrl('eplug_signup_step2'));
            }
            $request = $this->get('request');
            $page = ($request->query->get('page')) ? $request->query->get('page') : 1;

            return $this->forward('EpluggFrontBundle:Post:NewPost', array(
                '_route' => $request->attributes->get('_route'),
                '_route_params' => $request->attributes->get('_route_params'),
                'page' => $page,
            ));
        }
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        $ConstantManager = $this->container->get('constant_manager');
        $countries = $ConstantManager::countryArray();
        $mounths = $ConstantManager::mounthsArray();
        $years = $ConstantManager::yearsArray();
        $civilities = $ConstantManager::civilityArray();
		
        return $this->render('EpluggFrontBundle:Default:index.html.twig', array(
                'authenticated' => $authenticated,
                'csrf_token' => $csrfToken,
                'dateSelect' => array(
                    'mounths' => $mounths,
                    'years' => $years,
                ),
                'countries' => $countries,
                'civilities' => $civilities,
            )
        );
    }
	
    public function checkMailAction() {
        $mail = $_POST["mail"];
        $user = $this->getDoctrine()
            ->getRepository('Eplugg\UserBundle\Entity\User')
            ->findOneBy(array('email' => $mail));
        if(!empty($user)) {

            return new JsonResponse(array('exist' => true));
        }
        else {
            return new JsonResponse(array('exist' => false));
        }
        return true;
    }
    public function signupStepTwoAction() {
        $user = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        if($authenticated && !$user->getProfileCompleted()) {
            $form = $this->createFormBuilder($user)
                ->add('direct_phone', 'text', array('required' => false))
                ->add('mobile', 'text', array('required' => false))
                ->add('sociaux', 'text', array('required' => false))
                ->add('more_emails', 'text', array('required' => false))

                ->add('company_tel', 'text', array('required' => false))
                ->add('company_fax', 'text', array('required' => false))
                ->add('company_website', 'text', array('required' => false))
                ->add('company_address', 'text', array('required' => false))
                ->add('avatar_user_id', 'hidden', array(
                    "mapped" => false,
                ))
                ->add('avatar_company_id', 'hidden', array(
                    "mapped" => false,
                ))
                ->getForm();
            $request = $this->get('request');
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $user->setProfileCompleted(true);
                $avatarUserId = $data = $form->get('avatar_user_id')->getData();
                $avatarCompanyId = $data = $form->get('avatar_company_id')->getData();
                if(!empty($avatarUserId)) {
                    $em = $this->getDoctrine()->getManager();
                    $image = $em->getRepository('Eplugg\UserBundle\Entity\Image')->find($avatarUserId);
                    $user->setAvatar($image);
                }
                if(!empty($avatarCompanyId)) {
                    $em = $this->getDoctrine()->getManager();
                    $image = $em->getRepository('Eplugg\UserBundle\Entity\Image')->find($avatarCompanyId);
                    $user->setCompanyAvatar($image);
                }
                $em->persist($user);
                $em->flush();
                return new RedirectResponse($this->generateUrl('eplugg_front_homepage'));

            }
            return $this->render('EpluggFrontBundle:Default:signup_steptwo.html.twig', array('form' => $form->createView(), 'user' => $user));
        }
        else {
            return new RedirectResponse($this->generateUrl('eplugg_front_homepage'));

        }

    }
    public function pageDisplayAction($slug) {
        $repository = $this->getDoctrine()
            ->getRepository('EpluggBackBundle:Page');
        $query = $repository->createQueryBuilder('p')
            ->where('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery();

        $page = $query->getResult();
        if(!empty($page)) {
            return $this->render('EpluggFrontBundle:Default:page_edito.html.twig', array('page' => $page[0]));

        }
        else {
            throw $this->createNotFoundException('Page Not Found');
        }
    }
    public function profileAction($uid) {
		//print_r($this->get('request')->getLocale());die;
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated = $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        if($authenticated && $currentUser->getId() == $uid) {
		   //print_r($this->get('request')->getLocale());die;
            return new RedirectResponse($this->generateUrl('fos_user_profile_show'));
        }
        else {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
            if ($this->has('security.csrf.token_manager')) {
                $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
            } else {
                $csrfToken = $this->has('form.csrf_provider')
                    ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                    : null;
            }
            $job = $user->getJob();


            $invitReceived = false;
            $invitSended = false;
            $isFriend = false;
            if($authenticated) {
                $repository = $this->getDoctrine()
                    ->getRepository('Eplugg\BackBundle\Entity\Relationship');
                $query = $repository->createQueryBuilder('r');
                $query = $query->where($query->expr()->orX(
                    $query->expr()->andX('r.userOne = :userOne', 'r.userTwo = :userTwo'),
                    $query->expr()->andX('r.userOne = :userTwo', 'r.userTwo = :userOne')

                ))
                    ->setParameter('userOne', $currentUser->getId())
                    ->setParameter('userTwo', $user->getId())
                    ->setMaxResults(1)
                    ->getQuery();
                $relationships = $query->getResult();
                if(!empty($relationships) && is_array($relationships)) {
                    $relationship = $relationships[key($relationships)];
                    if($relationship->getStatus() == 1) {
                        if($relationship->getUserOne()->getId() == $currentUser->getId()) {
                            $invitSended = true;
                        }
                        else if($relationship->getUserOne()->getId() == $user->getId()) {
                            $invitReceived = true;

                        }
                    }
                    elseif($relationship->getStatus() == 2) {
                        $isFriend = true;
                    }
                }
                return $this->render('EpluggFrontBundle:Default:profile.html.twig', array('user' => $user, 'csrfToken' => $csrfToken, 'invitReceived' => $invitReceived, 'invitSended' => $invitSended, 'isFriend' =>$isFriend));

            }
            else {
                return $this->render('EpluggFrontBundle:Default:profile_anonyme.html.twig', array('user' => $user, 'csrfToken' => $csrfToken, 'invitReceived' => $invitReceived, 'invitSended' => $invitSended, 'isFriend' =>$isFriend));

            }



        }
    }

    public function addFriendAction($uid){

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
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        if(empty($user)) {
            return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));
        }

        if($authenticated && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') && $tokenParam == $csrfToken) {
            $em = $this->getDoctrine()
                   ->getManager();
            $query = $em->createQueryBuilder('s');
            $query->delete('EpluggBackBundle:Suggestion', 's');
            $query->where($query->expr()->orX(
                $query->expr()->andX('s.to = :currentUser', 's.suggested = :user'),
                $query->expr()->andX('s.suggested = :currentUser', 's.to = :user')
            ))
            ->setParameter('currentUser', $currentUser->getId())
            ->setParameter('user', $user->getId());
            $deleted = $query->getQuery()->getResult();
            $currentDate = new \DateTime();
            $relationship = new Relationship();
            $relationship->setUserOne($currentUser);
            $relationship->setUserTwo($user);
            $relationship->setStatus(1);
            $action = new RelationshipAction();
            $action->setUserAction($currentUser);
            $action->setActionType(1);

            $action->setActionDate($currentDate);
            $action->setRelationship($relationship);
            $em = $this->getDoctrine()->getManager();
            $em->persist($relationship);

            $em->persist($action);

            $em->flush();

            return new JsonResponse(array('done' => true, 'message' => 'Invitation envoyée avec succés.'));
        }
        return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));

    }
    public function cancelFriendAction($uid){

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
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        if(empty($user)) {
            return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));
        }
        if($authenticated && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') && $tokenParam == $csrfToken) {
            $repository = $this->getDoctrine()
                ->getRepository('Eplugg\BackBundle\Entity\Relationship');
            $query = $repository->createQueryBuilder('r');
            $query = $query->where($query->expr()->orX(
                $query->expr()->andX('r.userOne = :userOne', 'r.userTwo = :userTwo'),
                $query->expr()->andX('r.userOne = :userTwo', 'r.userTwo = :userOne')
            ))
                ->setParameter('userOne', $currentUser->getId())
                ->setParameter('userTwo', $user->getId())
                ->setMaxResults(1)
                ->getQuery();
            $relationships = $query->getResult();
            if(!empty($relationships) && is_array($relationships)) {
                $relationship = $relationships[key($relationships)];
                $status = $relationship->getStatus();
                if($status == 1 || $status == 2) {
                    $em->remove($relationship);
                    $em->flush();
                }

            }

            return new JsonResponse(array('done' => true, 'message' => 'Invitation annulé avec succés.'));
        }
        return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));

    }
    public function acceptFriendAction($uid){
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
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        if(empty($user)) {
            return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));
        }

        if($authenticated && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') && $tokenParam == $csrfToken) {
            $repository = $this->getDoctrine()
                ->getRepository('Eplugg\BackBundle\Entity\Relationship');
            $query = $repository->createQueryBuilder('r');
            $query = $query->where($query->expr()->orX(
                $query->expr()->andX('r.userOne = :userOne', 'r.userTwo = :userTwo'),
                $query->expr()->andX('r.userOne = :userTwo', 'r.userTwo = :userOne')
            ))
                ->setParameter('userOne', $currentUser->getId())
                ->setParameter('userTwo', $user->getId())
                ->setMaxResults(1)
                ->getQuery();
            $relationships = $query->getResult();
            if(!empty($relationships) && is_array($relationships)) {
                $relationship = $relationships[key($relationships)];
                $status = $relationship->getStatus();
                if($status == 1) {
                    $relationship->setStatus(2);
                    $currentDate = new \DateTime();
                    $action = new RelationshipAction();
                    $action->setUserAction($currentUser);
                    $action->setActionType(2);
                    $action->setActionDate($currentDate);
                    $action->setRelationship($relationship);
                    $em = $this->getDoctrine()->getManager();

                    $em->persist($action);

                    $em->flush();
                }

            }

            return new JsonResponse(array('done' => true, 'message' => 'Invitation accepté avec succés.'));
        }
        return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));

    }
    function headerConnectedAction($originalRequest) {
        $currentUser = $this->get('security.context')->getToken()->getUser();

        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\BackBundle\Entity\Relationship');


        $query = $repository->createQueryBuilder('r')
            ->where('r.userTwo = :uid','r.status = :status')
            ->setParameter('uid', $currentUser->getId())
            ->setParameter('status', 1)
            ->getQuery();
        $invitations = $query->getResult();
        $invitationsSummary = array_slice($invitations, 0, 3);
        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\BackBundle\Entity\Message');
        $query = $repository->createQueryBuilder('m')
            ->where('m.destination = :destination','m.status = :status')
            ->setParameter('destination', $currentUser->getId())
            ->setParameter('status', 0)
            ->getQuery();
        $messages = $query->getResult();
        $messagesSummary = array();
        if(!empty($messages)) {
            $messagesSummary = $messages[key($messages)];
        }
        $date = new \DateTime();
        $today = $date->format('Y-m-d');
        $repository = $this->getDoctrine()
            ->getRepository('EpluggBackBundle:EventCalendar');
        $query = $repository->createQueryBuilder('e')
            ->where('e.createdBy = :uid')
            ->andWhere('e.eventDate = :date')

            ->setParameter('uid', $currentUser->getId())
            ->setParameter('date', $today)

            ->getQuery();
        $events = $query->getResult();


        return $this->render('EpluggFrontBundle:logged_in:header.html.twig', array('user' => $currentUser, 'invitations' => $invitations, 'invitationsSummary' => $invitationsSummary, 'messages' => $messages, 'messagesSummary' => $messagesSummary, 'events' => $events, 'originalRequest' => $originalRequest));

    }
    function invitationsAction() {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        if(!$authenticated) {
            return new RedirectResponse($this->generateUrl('eplugg_front_homepage'));

        }
        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\BackBundle\Entity\Relationship');
        $query = $repository->createQueryBuilder('r')
            ->where('r.userTwo = :uid','r.status = :status')
            ->setParameter('uid', $currentUser->getId())
            ->setParameter('status', 1)
            ->getQuery();
        $invitations = $query->getResult();
        return $this->render('EpluggFrontBundle:Default:invitations.html.twig', array('user' => $currentUser, 'invitations' => $invitations, 'csrfToken' => $csrfToken));

    }
    function deleteFriendAction($uid) {
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
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        if(empty($user)) {
            return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));
        }
        if($authenticated && (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') && $tokenParam == $csrfToken) {
            $repository = $this->getDoctrine()
                ->getRepository('Eplugg\BackBundle\Entity\Relationship');
            $query = $repository->createQueryBuilder('r');
            $query = $query->where($query->expr()->orX(
                $query->expr()->andX('r.userOne = :userOne', 'r.userTwo = :userTwo'),
                $query->expr()->andX('r.userOne = :userTwo', 'r.userTwo = :userOne')
            ))
                ->setParameter('userOne', $currentUser->getId())
                ->setParameter('userTwo', $user->getId())
                ->setMaxResults(1)
                ->getQuery();
            $relationships = $query->getResult();
            if(!empty($relationships) && is_array($relationships)) {
                $relationship = $relationships[key($relationships)];
                $status = $relationship->getStatus();
                if($status == 1 || $status == 2) {
                    $em->remove($relationship);
                    $em->flush();
                }

            }

            return new JsonResponse(array('done' => true, 'message' => 'Contact supprimé avec succés.'));
        }
        return new JsonResponse(array('done' => false, 'message' => 'you are not allowed to do this action'));

    }
    public function editProfileAction() {
        $trans = $this->get('translator');
        $user = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.authorization_checker');
        $authenticated =  $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
        if($authenticated) {
            $ConstantManager = $this->container->get('constant_manager');
            $countries = $ConstantManager::countryArray();

            $form = $this->createFormBuilder($user)
                ->add('firstName', 'text', array('required' => true))
                ->add('lastName', 'text', array('required' => true))
                ->add('job', 'text', array('required' => false))
                ->add('direct_phone', 'text', array('required' => false))
                ->add('mobile', 'text', array('required' => false))
                ->add('sociaux', 'text', array('required' => false))
                ->add('more_emails', 'text', array('required' => false))
                ->add('company_name', 'text', array('required' => false))
                ->add('activities', 'text', array('required' => false, 'mapped' => false, 'data' => $user->getActivitiesFormatted() ))
                ->add('company_tel', 'text', array('required' => false))
                ->add('company_fax', 'text', array('required' => false))
                ->add('company_website', 'text', array('required' => false))
                ->add('company_address', 'text', array('required' => false))
                ->add('company_city', 'text', array('required' => false))
                ->add('company_country', 'choice', array(
                    'data' => $user->getCompanyCountry(),
                    'required' => false,
                    'choices' => $countries,
                    'label' => $trans->trans('Pays')
                ))
                ->add('avatar_user_id', 'hidden', array(
                    "mapped" => false,
                ))
                ->add('avatar_company_id', 'hidden', array(
                    "mapped" => false,
                ))
                ->getForm();

            $request = $this->get('request');
            $form->handleRequest($request);
            if ($form->isValid()) {
                $avatarUserId = $data = $form->get('avatar_user_id')->getData();
                $avatarCompanyId = $data = $form->get('avatar_company_id')->getData();

                if(!empty($avatarUserId)) {
                    $em = $this->getDoctrine()->getManager();
                    $image = $em->getRepository('Eplugg\UserBundle\Entity\Image')->find($avatarUserId);
                    $user->setAvatar($image);
                }
                if(!empty($avatarCompanyId)) {
                    $em = $this->getDoctrine()->getManager();
                    $image = $em->getRepository('Eplugg\UserBundle\Entity\Image')->find($avatarCompanyId);
                    $user->setCompanyAvatar($image);
                }
                $activities = $form->get('activities')->getData();
                $activities_array = explode('#', $activities);
                $activities_array = array_unique($activities_array);
                $user->removeAllActivities();
                foreach($activities_array as $activityStr) {
                    if(!empty($activityStr)) {
                        $repository = $this->getDoctrine()
                            ->getRepository('Eplugg\BackBundle\Entity\Activity');
                        $query = $repository->createQueryBuilder('a')
                            ->where('a.name = :name')
                            ->setMaxResults(1)
                            ->setParameter('name', $activityStr)
                            ->getQuery();
                        $result = $query->getResult();
                        if(!empty($result[0])) {
                            $activity = $result[0];
                        }
                        else {
                            $activity = new Activity();
                            $activity->setName($activityStr);

                        }
                        $user->addActivity($activity);
                    }

                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return new RedirectResponse($this->generateUrl('fos_user_profile_show'));


            }

            return $this->render('EpluggFrontBundle:Default:edit_profile.html.twig', array('form' => $form->createView(), 'user' => $user ));
        }

    }
    public function uploadCvAction() {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $file = new File();
        $form = $this->createFormBuilder($file)
            ->add('file')
            ->add('submit', 'submit', array('label' => 'Enregistrer'))
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        $valid = false;

        if ($form->isValid()) {
            $valid = true;
            $em = $this->getDoctrine()->getManager();
            $file->setName($file->file->getClientOriginalName());
            $file->upload();
            $currentUser->setCv($file);
            $em->persist($file);
            $em->flush();
        }
        return $this->render('EpluggFrontBundle:popin:add_cv.html.twig', array('form' => $form->createView(), 'valid' => $valid));

    }
    function addExperienceAction() {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $experience = new Experience();
        $form = $this->createFormBuilder($experience)
            ->add('etablissement')
            ->add('title')
            ->add('address')
            ->add('startDate', 'text')
            ->add('endDate', 'text')
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        $valid = false;
        if ($form->isValid()) {
            $valid = true;
            $em = $this->getDoctrine()->getManager();
            $experience->setUser($currentUser);
            $em->persist($experience);
            $em->flush();
        }
        return $this->render('EpluggFrontBundle:popin:add_experience.html.twig', array('form' => $form->createView(), 'valid' => $valid));

    }
    function editExperienceAction($eid) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('Eplugg\UserBundle\Entity\Experience')->find($eid);
        $form = $this->createFormBuilder($experience)
            ->add('etablissement')
            ->add('title')
            ->add('address')
            ->add('startDate', 'text',array(
                'data' => $experience->getStartDate()->format('d-m-Y')
            ))
            ->add('endDate', 'text',array(
                'data' => $experience->getendDate()->format('d-m-Y')
            ))
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        $valid = false;

        if ($form->isValid()) {
            $valid = true;

            $em = $this->getDoctrine()->getManager();
            $experience->setUser($currentUser);
            $em->persist($experience);
            $em->flush();
        }
        return $this->render('EpluggFrontBundle:popin:edit_experience.html.twig', array('form' => $form->createView(), 'valid' => $valid));

    }
    function deleteExperienceAction($eid) {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $experience = $em->getRepository('Eplugg\UserBundle\Entity\Experience')->find($eid);
        if($experience->getUser()->getId() == $currentUser->getId()) {
            $em->remove($experience);
            $em->flush();

        }
        return new RedirectResponse($this->generateUrl('fos_user_profile_show'));

    }
    function getExperiencesAction($ownProfile,$uid) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);

        $repository = $this->getDoctrine()
            ->getRepository('Eplugg\UserBundle\Entity\Experience');
        $query = $repository->createQueryBuilder('e')
            ->where('e.user = :uid')
            ->setParameter('uid', $uid)
            ->orderBy('e.startDate', 'ASC')
            ->orderBy('e.endDate', 'ASC')
            ->getQuery();
        $experiences = $query->getResult();

        return $this->render('EpluggFrontBundle:Default:experiences.html.twig', array('experiences' => $experiences, 'ownProfile' => $ownProfile));

    }
    function leftSidebarConnectedAction() {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $mostUsedActivities =$em->getRepository('EpluggBackBundle:Activity')->findMostUsedActivitiesOfFriends($currentUser->getId());


        return $this->render('EpluggFrontBundle:logged_in:left_sidebar.html.twig', array('activities' => $mostUsedActivities,'user' => $currentUser));

    }
    function UploadAvatarAction($avatarType) {

        $currentUser = $this->get('security.context')->getToken()->getUser();
        $image = new Image();

        $form = $this->createFormBuilder($image)
            ->add('file', 'file')
            ->add('startWidth', 'hidden')
            ->add('endWidth', 'hidden')
            ->add('startHeight', 'hidden')
            ->add('endHeight', 'hidden')
            ->getForm();

        $request = $this->get('request');
        $form->handleRequest($request);
        $valid = false;
        $imageId= null;
        if ($form->isValid()) {
            $valid = true;
            $em = $this->getDoctrine()->getManager();
            $image->setCropped(true);
            $image->upload();
            $em->persist($image);
            $em->flush();
            $imageId = $image->getId();
            $imageUrl =  $this->container->get('templating.helper.assets')->getUrl($image->getCroppedWebPath());

            return new JsonResponse(array('valid' => $valid, 'imageId' => $imageId, 'imageUrl' => $imageUrl));

        }
        return $this->render('EpluggFrontBundle:popin:upload_avatar.html.twig', array('form' => $form->createView(), 'valid' => $valid, 'imageId' => $imageId, 'avatarType'=> $avatarType));

    }
    function NewsAction($uid)
    {
        $repository = $this->getDoctrine()
            ->getRepository('EpluggBackBundle:ProfileLog');
        $query = $repository->createQueryBuilder('l')
            ->where('l.user = :uid')
            ->setParameter('uid', $uid)
            ->orderBy('l.created', 'DESC')

            ->setMaxResults(10)
            ->getQuery();
        $logs = $query->getResult();
        return $this->render('EpluggFrontBundle:Default:block_news.html.twig', array('logs' => $logs));

    }
    function VipAction($uid) {
        $vip = false;
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        $job = $user->getJob();
        if(!empty($job)) {
            $sql = "SELECT u2.id, COUNT(r2) cnt FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r2 WITH (( (u2.id = r2.userOne OR u2.id = r2.userTwo) AND r2.status = 2) )
	                 WHERE u2.job = :job GROUP BY u2.id ORDER BY cnt DESC";
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery($sql);
            $query->setParameter('job', $job);
            $query->setMaxResults(1);
            $vip = $query->getResult();
            if(isset($vip[0]["id"]) && $vip[0]["id"] == $user->getId()) {
                $vip = true;
            }
        }
        return $this->render('EpluggFrontBundle:Default:vip.html.twig', array('vip' => $vip));
    }


}
