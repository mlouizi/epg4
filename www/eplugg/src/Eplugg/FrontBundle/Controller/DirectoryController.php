<?php

namespace Eplugg\FrontBundle\Controller;

use Eplugg\UserBundle\Entity\Experience;
use Eplugg\UserBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Eplugg\BackBundle\Entity\Relationship;
use Eplugg\BackBundle\Entity\RelationshipAction;
use Eplugg\UserBundle\Entity\File;
use Eplugg\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class DirectoryController extends Controller
{

    public function DirectoryAction()
    {   $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->get('request');
        $letter = $request->query->get('letter');
        $search = $request->query->get('keys');
        $friend_twig = array();

        if(isset($search)) {
            $friends =$em->getRepository('EpluggUserBundle:User')->findFriendByNomPrenom($currentUser->getId(),$search);
        }
        elseif(!empty($letter)) {
            $friends =$em->getRepository('EpluggUserBundle:User')->findFriendByLetter($currentUser->getId(),$letter);
        }
        else {
            $friends =$em->getRepository('EpluggUserBundle:User')->findAllFriends($currentUser->getId());
        }
        foreach($friends as  $friend){
            $friend_twig[]= array(
                'id'=>$friend->getId(),
                'profile_url' => $this->generateUrl('eplugg_profile_page', array('uid' => $friend->getId()), true),
                'job' => $friend->getJob(),
                'gendre' => $friend->getGender(),
                'firstname' => $friend->getFirstName(),
                'lastname' => $friend->getLastName(),
                'user_picture' => (!empty($avatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/' . $avatar->getCroppedWebPath() : $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/images/avatar.png' ,
                'company_name' => $friend->getCompanyName(),
                'company_country' => $friend->getCompanyCountry(),
                'company_city' => $friend->getCompanyCity(),
                'company_activity' => $friend->getActivitiesFormatted(),
                'company_logo' => (!empty($companyAvatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/' . $companyAvatar->getCroppedWebPath() : '/images/avatar-company.png',
            );
        }
        if(isset($search)) {
            return $this->render('EpluggFrontBundle:Repertoire:Repertoire_bloc_friends.html.twig', array('annuaire' => $friend_twig));

        }
        else {
            return $this->render('EpluggFrontBundle:Repertoire:Repertoire.html.twig', array('annuaire' => $friend_twig));

        }
    }








}
