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
class MapclicController extends Controller
{
    public function mapclicAction()
    {
        $abs = array(
            0 => '0.31', 1 => '0.1905', 2 => '0.25', 3 => '0.263', 4 => '0.42', 5 => '0.404', 6 => '0.466', 7 => '0.1905', 8 => '0.48', 9 => '0.31',
            10 => '0.31', 11 => '0.31', 12 => '0.31', 13 => '0.31', 14 => '0.31', 15 => '0.31', 16 => '0.31', 17 => '0.31', 18 => '0.31', 19 => '0.31'
        ) ;
        $ord = array(
            0 => '0.385', 1 => '0.448', 2 => '0.385', 3 => '0.455', 4 => '0.35', 5 => '0.4265', 6 => '0.4185', 7 => '0.33', 8 => '0.35', 9 => '0.305',
            10 => '0.305', 11 => '0.305', 12 => '0.305', 13 => '0.305', 14 => '0.305', 15 => '0.305', 16 => '0.305', 17 => '0.305', 18 => '0.305', 19 => '0.305'
        ) ;
        $locations = array();
        $repository = $this->getDoctrine()
            ->getRepository('EpluggUserBundle:User');
        $query = $repository->createQueryBuilder('u')
            ->where('u.profileCompleted = true')
            ->where('u.id != 1')
            ->addSelect('RAND() as HIDDEN rand')
            ->orderBy('rand')
            ->setMaxResults(10)
            ->getQuery();
        $users = $query->getResult();
        $i=0;
        foreach($users as $user) {
            $location = array() ;
            $location['id'] = $user->getID();
            $location['title'] = $user->getFirstName() . ' ' . $user->getLastName();
            $avatar = ($user->getAvatar()) ? $this->container->get('templating.helper.assets')->getUrl($user->getAvatar()->getCroppedWebPath()) :  $this->container->get('templating.helper.assets')->getUrl('images/avatar.png');
            $company_avatar = ($user->getCompanyAvatar()) ? $this->container->get('templating.helper.assets')->getUrl($user->getCompanyAvatar()->getCroppedWebPath()) :  $this->container->get('templating.helper.assets')->getUrl('images/avatar-company.png');
            $location['description'] = '<div class="yellow"><img src="/images/arrow-yelow-big.png" /></div>
        			<div id="card_user">
						<div class="img_profil"><a href=""><img src="' . $avatar . '" alt="" width="48" height="48" /></a></div>
          				<div class="descp_card">
							<strong><a href="">' . $user->getFirstName() . ' ' . $user->getLastName() . '</a></strong>
							<em>'. $user->getJob() .'</em>
						</div>
          				<div class="clear"></div>
        			</div>
        			<div id="card_company">
						<div class="img_profil"><a ><img src="' . $company_avatar . '" alt="" width="48" height="48" /></a></div>
						<div class="descp_card">
							<strong><a >' . $user->getCompanyName() .'</a></strong>
							<em>' . $user->getActivitiesFormatted() . '</em>
							<ul><li>'. $user->getCompanyCity() .', '. $user->getCompanyCountry() .'</li></ul>
						</div>
						<div class="clear"></div>
			  		</div>
        		</div>';
            $location['x'] = $abs[$i] ;
            $location['y'] = $ord[$i] ;
            $location['zoom'] = 0 ;
            $locations[] = $location ;
            $i++;
        }
        $image = $this->container->get('templating.helper.assets')->getUrl('images/photo.jpg');

        $data = array("mapwidth" => "800", "mapheight" => "600", "levels" => array(array( "id" => "members", "title" => "Members", "map" => $image, "show" => "true", "locations"	=> $locations)));
        return new JsonResponse($data);

    }
}