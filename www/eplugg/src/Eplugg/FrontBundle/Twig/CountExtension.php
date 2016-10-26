<?php

namespace Eplugg\FrontBundle\Twig;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CountExtension extends \Twig_Extension
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em  = $em;
    }

    public function getFilters()
    {
        return array(
        );
    }

    public function getFunctions()
    {
        return array(
            'getcomments' => new \Twig_Function_Method($this,'getcomments'),
            'getlikedpost' => new \Twig_Function_Method($this,'getlikedpost'),
            'likedPostOrNot' => new \Twig_Function_Method($this,'likedPostOrNot'),
            'getsourcepost' => new \Twig_Function_Method($this,'getsourcepost'),

        );
    }


    public function getcomments($idPost){
        $post =$this->em->getRepository('EpluggBackBundle:PostIt')->find($idPost);
        return $this->em->getRepository('EpluggBackBundle:Commentaire')->findBy(array('postIt'=>$post));

    }
    public function getlikedpost($idPost){
        return $this->em->getRepository('EpluggBackBundle:LikePostIt')->findLikedpost($idPost);
    }

    public function getsourcepost($idPost){

        $post = $this->em->getRepository('EpluggBackBundle:PostIt')->find($idPost);
        return $post->getPositSource();

    }

    public function likedPostOrNot($idPost,$userid){

        $post =$this->em->getRepository('EpluggBackBundle:LikePostIt')->findUserLikedpost($idPost,$userid);
        $liked=false;
        if ($post) {

            $liked=true;
        }
        return $liked;

    }

    public function getName()
    {
        return 'count_extension';
    }
}



















/*



class CountDatabase extends \Twig_Extension
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em  = $em;

    }


    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('countUserNewsletter', array($this, 'countUserNewsletter'), array(
                'needs_environment' => true
            )),
        );
    }


    public function getName()
    {
        return 'countDatabase';
    }






    public function countUserNewsletter()
    {

        $news = $this->em->getRepository('FttNewsletterBundle:Newsletter')->findAll();
        return count($news);

    }


    public function countNotReadedMsg()
    {

        $contactNotReaded = $this->em->getRepository('FttFrontOfficeBundle:Contact')->findBy(array('readed'=> 0));

        return count($contactNotReaded);
    }
    public function countMsg()
    {

        $contact = $this->em->getRepository('FttFrontOfficeBundle:Contact')->findAll();

        return count($contact);


    }




}
*/