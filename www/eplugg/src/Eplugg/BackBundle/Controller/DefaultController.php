<?php

namespace Eplugg\BackBundle\Controller;
use Eplugg\UserBundle\Entity\User;
use Eplugg\BackBundle\Entity\Page;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    public function adminAction()
    {
        return new RedirectResponse($this->generateUrl('eplugg_back_users'));
        return $this->render('EpluggBackBundle:Default:admin.html.twig', array());
    }
    public function usersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM Eplugg\UserBundle\Entity\User u');
        $users = $query->getResult();
        return $this->render('EpluggBackBundle:Default:users.html.twig', array('users' => $users));
    }
    public function pagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT p FROM Eplugg\BackBundle\Entity\Page p');
        $pages = $query->getResult();
        return $this->render('EpluggBackBundle:Default:pages.html.twig', array('pages' => $pages));
    }
    public function userDeleteAction($uid) {
        $data = array();
        $confirmationForm = $this->get('request')->request->get('form');
        if(isset($confirmationForm["valid"]) && $confirmationForm["valid"]) {
            $userManager = $this->container->get('fos_user.user_manager');
            $user = $userManager->findUserBy(array('id' => $uid));

            $userManager->deleteUser($user);

            return $this->render('EpluggBackBundle:Default:user_deleted.html.twig', array());

        }
        else {
        $form = $this->createFormBuilder($data)
            ->add('delete', 'submit')
            ->add('valid', 'hidden', array(
                'data' => '1'
            ))
            ->getForm();
        return $this->render('EpluggBackBundle:Default:user_delete_confirmation.html.twig', array('form' => $form->createView(), 'uid' => $uid));
        }
    }
    public function userBlockAction($uid) {
        $data = array();
        $confirmationForm = $this->get('request')->request->get('form');
        if(isset($confirmationForm["valid"]) && $confirmationForm["valid"]) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
            $user->setEnabled(false);

            $em->flush();
            return $this->render('EpluggBackBundle:Default:user_blocked.html.twig', array());

        }
        else {
            $form = $this->createFormBuilder($data)
                ->add('block', 'submit')
                ->add('valid', 'hidden', array(
                    'data' => '1'
                ))
                ->getForm();
            return $this->render('EpluggBackBundle:Default:user_block_confirmation.html.twig', array('form' => $form->createView(), 'uid' => $uid));
        }
    }
    public function userActivateAction($uid) {
        $data = array();
        $confirmationForm = $this->get('request')->request->get('form');
        if(isset($confirmationForm["valid"]) && $confirmationForm["valid"]) {
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
            $user->setEnabled(true);

            $em->flush();
            return $this->render('EpluggBackBundle:Default:user_activated.html.twig', array());

        }
        else {
            $form = $this->createFormBuilder($data)
                ->add('block', 'submit')
                ->add('valid', 'hidden', array(
                    'data' => '1'
                ))
                ->getForm();
            return $this->render('EpluggBackBundle:Default:user_activate_confirmation.html.twig', array('form' => $form->createView(), 'uid' => $uid));
        }
    }
    public function userEditAction($uid) {
        $ConstantManager = $this->container->get('constant_manager');
        $countries = $ConstantManager::countryArray();
        $mounths = $ConstantManager::mounthsArray();
        $yearsArray = $ConstantManager::yearsArray();
        $civilities = $ConstantManager::civilityArray();
        $years = array();
        for($year= $yearsArray["start"]; $year<= $yearsArray["end"]; $year++) {
            $years[$year] = $year;
        }
        $days = array();
        for($day= 1; $day<= 31; $day++) {
            $days[$day] = $day;
        }

        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($uid);
        $form = $this->createFormBuilder($user)

            ->add('firstName', 'text', array('required' => false, 'data' => $user->getFirstName()))
            ->add('lastName', 'text', array('required' => false, 'data' => $user->getLastName()))
            ->add('email', 'email', array('required' => false, 'data' => $user->getEmail()))
            ->add('job', 'text', array('required' => false, 'data' => $user->getJob()))
            ->add('birthday', 'choice', array(
                'choices' => $days,
                'data' => $user->getBirthday(),
            ))
            ->add('birthmonth', 'choice', array(
                'required' => false,
                'choices' => $mounths,
                'data' => $user->getBirthmonth()))
            ->add('birthyear', 'choice', array(
                'required' => false,
                'choices' => $years,
                'data' => $user->getBirthyear()))
            ->add('gender', 'choice', array(
                'required' => false,
                'choices' => $civilities,
                'data' => $user->getGender()))
            ->add('plainPassword', 'repeated', array(
                'required' => false,
                'type' => 'password',
                'first_options'  => array('required' => false, 'label' => 'Password'),
                'second_options' => array('required' => false, 'label' => 'Repeat Password')))
            ->add('company_name', 'text', array('required' => false, 'data' => $user->getCompanyName(), 'label' => 'Establishment'))
            ->add('company_activity', 'text', array('required' => false, 'data' => $user->getCompanyActivity(), 'label' => 'Activities'))
            ->add('company_country', 'choice', array(
                'data' => $user->getCompanyCountry(),
                'required' => false,
                'choices' => $countries,
                'label' => 'Country'
            ))
            ->add('company_city', 'text', array(
                'required' => false,
                'data' => $user->getCompanyCity(),
                'label' => 'City'
                ))
            ->add('mobile', 'text', array(
            'required' => false,
            'data' => $user->getMobile(),
            'label' => 'Mobile'
            ))
            ->add('direct_phone', 'text', array(
                'required' => false,
                'data' => $user->getDirectPhone(),
                'label' => 'Direct Phone'
            ))
            ->add('more_emails', 'text', array(
                'required' => false,
                'data' => $user->getMoreEmails(),
                'label' => 'Emails'
            ))
            ->add('sociaux', 'text', array(
                'required' => false,
                'data' => $user->getSociaux(),
                'label' => 'sociaux'
            ))
            ->add('company_tel', 'text', array(
                'required' => false,
                'data' => $user->getCompanyTel(),
                'label' => 'Company Telephone'
            ))
            ->add('company_fax', 'text', array(
                'required' => false,
                'data' => $user->getCompanyFax(),
                'label' => 'Company Fax'
            ))
            ->add('company_website', 'text', array(
                'required' => false,
                'data' => $user->getCompanyWebsite(),
                'label' => 'Company website'
            ))
            ->add('company_address', 'text', array(
                'required' => false,
                'data' => $user->getCompanyAddress(),
                'label' => 'Company address'
            ))
            ->add('company_address', 'text', array(
                'required' => false,
                'data' => $user->getCompanyAddress(),
                'label' => 'Company address'
            ))
            ->add('submit', 'submit')
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user->setProfileCompleted(true);
            $em->persist($user);
            $em->flush();
            return new RedirectResponse($this->generateUrl('eplugg_back_users'));

        }
        return $this->render('EpluggBackBundle:Default:user_edit.html.twig', array('form' => $form->createView(), 'uid' => $uid));

    }
    public function userAddAction() {
        $ConstantManager = $this->container->get('constant_manager');
        $countries = $ConstantManager::countryArray();
        $mounths = $ConstantManager::mounthsArray();
        $yearsArray = $ConstantManager::yearsArray();
        $civilities = $ConstantManager::civilityArray();
        $years = array();
        for($year= $yearsArray["start"]; $year<= $yearsArray["end"]; $year++) {
            $years[$year] = $year;
        }
        $days = array();
        for($day= 1; $day<= 31; $day++) {
            $days[$day] = $day;
        }
        $em = $this->getDoctrine()->getEntityManager();
        $user = new User();
        $form = $this->createFormBuilder($user)

            ->add('firstName', 'text', array('required' => true))
            ->add('lastName', 'text', array('required' => true))
            ->add('email', 'email', array('required' => true))
            ->add('job', 'text', array('required' => true))
            ->add('birthday', 'choice', array(
                'choices' => $days,
                'data' => $user->getBirthday(),
                'required' => true
            ))
            ->add('birthmonth', 'choice', array(
                'required' => true,
                'choices' => $mounths,
                ))
            ->add('birthyear', 'choice', array(
                'choices' => $years,
                'required' => true
                ))
            ->add('gender', 'choice', array(
                'required' => true,
                'choices' => $civilities,
                ))
            ->add('plainPassword', 'repeated', array(
                'required' => true,
                'type' => 'password',
                'first_options'  => array('required' => true, 'label' => 'Password'),
                'second_options' => array('required' => true, 'label' => 'Repeat Password')))
            ->add('company_name', 'text', array('required' => false, 'label' => 'Establishment'))
            ->add('company_activity', 'text', array('required' => false, 'label' => 'Activities'))
            ->add('company_country', 'choice', array(
                'required' => false,
                'choices' => $countries,
                'label' => 'Country'
            ))
            ->add('company_city', 'text', array(
                'required' => false,
                'label' => 'City'
            ))
            ->add('mobile', 'text', array(
                'required' => false,
                'label' => 'Mobile'
            ))
            ->add('direct_phone', 'text', array(
                'required' => false,
                'label' => 'Direct Phone'
            ))
            ->add('more_emails', 'text', array(
                'required' => false,
                'label' => 'Emails'
            ))
            ->add('sociaux', 'text', array(
                'required' => false,
                'label' => 'sociaux'
            ))
            ->add('company_tel', 'text', array(
                'required' => false,
                'label' => 'Company Telephone'
            ))
            ->add('company_fax', 'text', array(
                'required' => false,
                'label' => 'Company Fax'
            ))
            ->add('company_website', 'text', array(
                'required' => false,
                'label' => 'Company website'
            ))
            ->add('company_address', 'text', array(
                'required' => false,
                'label' => 'Company address'
            ))

            ->add('submit', 'submit')
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user->setProfileCompleted(true);
            $em->persist($user);
            $em->flush();
            return new RedirectResponse($this->generateUrl('eplugg_back_users'));

        }
        return $this->render('EpluggBackBundle:Default:user_add.html.twig', array('form' => $form->createView()));
    }
    public function pageAddAction() {
	
	   $languages = $this->container->getParameter('languages');
	   
	   $idTrPage = $this->get('request')->query->get('trPage');
	   $existe = array();
	   if($idTrPage){
			$em = $this->getDoctrine()->getEntityManager();
			$trPage = $em->getRepository('EpluggBackBundle:Page')->find($idTrPage);
			if($trPage){
				if($trPage->getTrPage()){
					 return $this->redirect($this->generateUrl('eplugg_add_page')."?trPage=".$trPage->getTrPage()->getId());
				}
			    $existe[] = $trPage->getLang();
				$pages = $em->getRepository('EpluggBackBundle:Page')->findBy(array('trPage'=>$idTrPage));
				foreach($pages as $p){
					$existe[] = $p->getLang();
				}
			}
	   }
	   $choices = array_diff ($languages, $existe);
	   if(!$choices){
			 $this->get('session')->getFlashBag()->add('error', 'pageTraduite');
			 return $this->redirect($this->generateUrl('eplugg_back_pages'));
	   }
	
        $em = $this->getDoctrine()->getEntityManager();
        $page = new Page();
        $form = $this->createFormBuilder($page)
            ->add('title', 'text', array('required' => true))
            ->add('body', 'textarea', array('required' => true))
            ->add('slug', 'text', array('required' => true, 'label' => 'Path'))
            ->add('weight', 'text', array('required' => true))
            ->add('promoteFooterMenu', 'checkbox',array(
                'label'    => 'Display on Footer menu',
                'required' => false,
            ))
            ->add('status', 'checkbox',array(
                'label'    => 'Publish',
                'required' => false,
            ))
            ->add('menuTitle', 'text', array('required' => false, 'label' => 'Menu Title'))
			->add('lang', 'choice', array('choices'  => array_combine($choices, $choices)))
            ->add('submit', 'submit')

            ->getForm();
			
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $page->setCreated(new \DateTime());
            $page->setUpdated(new \DateTime());
			$idTrPage = $this->get('request')->request->get('idTrPage');
			if($idTrPage) {
			    $trPage = $em->getRepository('EpluggBackBundle:Page')->find($idTrPage);
				if(!$em->getRepository('EpluggBackBundle:Page')->findOneBy(array("trPage" => $idTrPage, "lang" => $page->getLang())) &&  !$trPage->getTrPage()){
					$trPage = $em->getRepository('EpluggBackBundle:Page')->find($idTrPage);
					$page->setTrPage($trPage);
				}
            }
			$em->persist($page);
            $em->flush();
            return new RedirectResponse($this->generateUrl('eplugg_back_pages'));

        }
        return $this->render('EpluggBackBundle:Default:page_add.html.twig', array('form' => $form->createView(), 'idTrPage' => $idTrPage));

    }
    public function pagepublishAction($pid)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('Eplugg\BackBundle\Entity\Page')->find($pid);
        $page->setStatus(true);

        $em->flush();
        return new RedirectResponse($this->generateUrl('eplugg_back_pages'));

    }
    public function pageunpublishAction($pid)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('Eplugg\BackBundle\Entity\Page')->find($pid);
        $page->setStatus(false);

        $em->flush();
        return new RedirectResponse($this->generateUrl('eplugg_back_pages'));

    }
    public function pageEditAction($pid) {
        $em = $this->getDoctrine()->getEntityManager();
        $page = $em->getRepository('Eplugg\BackBundle\Entity\Page')->find($pid);
        $form = $this->createFormBuilder($page)
            ->add('title', 'text', array('required' => true))
            ->add('body', 'textarea', array('required' => true))
            ->add('slug', 'text', array('required' => true, 'label' => 'Path'))
            ->add('weight', 'text', array('required' => true))
            ->add('promoteFooterMenu', 'checkbox',array(
                'label'    => 'Display on Footer menu',
                'required' => false,
            ))
            ->add('status', 'checkbox',array(
                'label'    => 'Publish',
                'required' => false,
            ))
            ->add('menuTitle', 'text', array('required' => false, 'label' => 'Menu Title'))
            ->add('submit', 'submit')

            ->getForm();


        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();
            return new RedirectResponse($this->generateUrl('eplugg_back_pages'));

        }
        return $this->render('EpluggBackBundle:Default:page_edit.html.twig', array('form' => $form->createView(), 'pid' => $pid));

    }

    public function pageDeleteAction($pid) {
        $data = array();
        $confirmationForm = $this->get('request')->request->get('form');
        if(isset($confirmationForm["valid"]) && $confirmationForm["valid"]) {
            $em = $this->getDoctrine()->getEntityManager();
            $page = $em->getRepository('Eplugg\BackBundle\Entity\Page')->find($pid);
            $em->remove($page);
            $em->flush();
            return $this->render('EpluggBackBundle:Default:page_deleted.html.twig', array());

        }
        else {
            $form = $this->createFormBuilder($data)
                ->add('delete', 'submit')
                ->add('valid', 'hidden', array(
                    'data' => '1'
                ))
                ->getForm();
            return $this->render('EpluggBackBundle:Default:page_delete_confirmation.html.twig', array('form' => $form->createView(), 'pid' => $pid));
        }
    }
}
