<?php

namespace Eplugg\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class LocalizationController extends Controller
{

    public function mapLocalizationAction()
    {
    	$currentUser = $this->get('security.context')->getToken()->getUser();
	$sql = 'SELECT u2  FROM EpluggUserBundle:User u2 INNER JOIN EpluggBackBundle:Relationship r2 WITH (( u2.id = r2.userOne OR u2.id = r2.userTwo AND r2.status = 2) )
	                WHERE (r2.userOne = :currentUser OR r2.userTwo = :currentUser ) AND u2.id <> :currentUser  AND r2.status = 2 AND u2.status = 1 AND u2.longitude IS NOT NULL AND u2.latitude IS NOT NULL';
	     $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery($sql);
        $query->setParameter('currentUser', $currentUser->getId());
        $friends = $query->getResult(); 
	$friendsOnline = array();   
       	foreach($friends as $friend) {
 	if(!(($friend->getStatus() == 0) || (time() - $friend->getTimer()>5))){
                $friendsOnline[] = $friend;
            }
    
	}
        return $this->render('@EpluggFront/Localization/map_localization.html.twig', array('currentUser' => $currentUser, 'friendsOnline' => $friendsOnline ));

    }
  public function updateCoordinationsAction() {
       $request = $this->get('request');
       $geo = $request->query->get('geo');
       $currentUser = $this->get('security.context')->getToken()->getUser();
       $return = array('success' => false);
       if($geo) {
       	 $return['success'] = true;
       	 $longitude = $request->query->get('lon');
       	 $latitude = $request->query->get('lat');
   
       }
	else {
	    $longitude = $latitude  = NULL;
	}
	$currentUser->setLongitude($longitude);
   	$currentUser->setLatitude($latitude);
	$em = $this->getDoctrine()->getManager();
   	$em->persist($currentUser);
    	 $em->flush();
        return new JsonResponse($return);

    }
}