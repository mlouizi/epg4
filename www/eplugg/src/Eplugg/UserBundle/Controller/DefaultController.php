<?php

namespace Eplugg\UserBundle\Controller;

use Eplugg\UserBundle\Entity\User;
use Eplugg\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EpluggUserBundle:Default:index.html.twig', array('name' => $name));
    }

}
