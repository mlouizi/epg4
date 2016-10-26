<?php

namespace Eplugg\FrontBundle\Twig;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

use Doctrine\ORM\EntityManager;
class AppExtension extends \Twig_Extension
{
    protected $container;
    protected $defaultLocale;
    public function __construct(EntityManager $em,   $container)
    {
        $this->container = $container;
        $this->em = $em;

    }
    public function getGlobals()
    {
        return array(
            "MenuFooter" => $this->getMenuFooter(),
        );
    }

    public function getMenuFooter()
    {
        $local = $this->container->get('request')->getLocale();
        $lang = (!empty($local)) ? $local : 'fr';
        $repository = $this->em->getRepository('EpluggBackBundle:Page');
        $query = $repository->createQueryBuilder('p')
            ->where('p.promoteFooterMenu = :promote')
            ->andWhere("p.lang = :lang")
            ->setParameter('promote', true)
            ->setParameter('lang', $lang)
            ->orderBy('p.weight', 'ASC')
            ->getQuery();

        $pages = $query->getResult();
        return $pages;
    }

    public function getName()
    {
        return 'app_extension';
    }
}