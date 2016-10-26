<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 09/06/16
 * Time: 15:36
 */

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\EntityRepository;

class LikePostItRepository extends EntityRepository
{
    public function findUserLikedpost($idpost,$currentiduser)
    {

       $post =  $this->getEntityManager()->createQuery('
SELECT l  FROM EpluggBackBundle:LikePostIt l
WHERE l.user = :currentuser  AND l.posit = :postid
        ')->setParameter('currentuser', $currentiduser)->setParameter('postid', $idpost)->getResult();
 return $post;

    }



    public function findLikedpost($idpost)
    {
        return $this->getEntityManager()->createQuery('
SELECT l FROM EpluggBackBundle:LikePostIt l
WHERE  l.posit = :postid
        ')->setParameter('postid', $idpost)->getResult();
    }

}
