<?php

namespace Eplugg\FrontBundle\Controller;

use Eplugg\UserBundle\Entity\Experience;
use Eplugg\BackBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ActivityController extends Controller
{


    public function searchUserByActivityAction($id)
    {
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->get('request');
        $letter = $request->query->get('letter');
        $page = ($request->query->get('page')) ? $request->query->get('page') : 1;
        $users = $em->getRepository('EpluggBackBundle:Activity')->findUsersbyActivity($id, $currentUser->getId(), $page);
        if (!$users) {
            throw $this->createNotFoundException('Unable to find users of activity entity.');
        }
        $user_twig = array();
        foreach ($users as $user) {
            $user_twig[] = array(
                'id' => $user['user_id'],
                'profile_url' => $this->generateUrl('eplugg_profile_page', array('uid' => $user['user_id']), true),
                'job' => $user['job'],
                'gendre' => $user['gender'],
                'firstname' => $user['first_name'],
                'lastname' => $user['last_name'],
                'user_picture' => (!empty($avatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/' . $avatar->getCroppedWebPath() : $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/images/avatar.png',
                'company_name' => $user['company_name'],
                'company_country' => $user['company_country'],
                'company_city' => $user['company_city'],
                'company_activity' => $user['company_activity'],
                'company_logo' => (!empty($companyAvatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() . '/' . $companyAvatar->getCroppedWebPath() : '/images/avatar-company.png',
                'acitvity_id' => $user['activity_id'],
                'acitvity_name' => $user['name'],
            );


        }
        return $this->render('@EpluggFront/Activity/activity.html.twig', array('annuaire' => $user_twig, 'name_activity' => $users[0]['name']));
    }


    public function UsersActivitiesAction()
    {
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $request = $this->get('request');
        $letter = $request->query->get('letter');
        $keys = $request->query->get('keys');

        if (isset($keys)) {
            $activities = $em->getRepository('EpluggBackBundle:Activity')->findMostUsedActivitiesOfFriends($currentUser->getId(), true, $keys);
        } elseif (!empty($letter)) {

            $activities = $em->getRepository('EpluggBackBundle:Activity')->findMostUsedActivitiesOfFriends($currentUser->getId(), true, $letter);
        } else {
            $activities = $em->getRepository('EpluggBackBundle:Activity')->findMostUsedActivitiesOfFriends($currentUser->getId(), true);
        }
        if(isset($keys)) {
            return $this->render('@EpluggFront/Activity/block_activity_list_annuaire.html.twig', array('activities' => $activities));

        }
        return $this->render('@EpluggFront/Activity/annuaire_activity.html.twig', array('activities' => $activities));


    }


}
