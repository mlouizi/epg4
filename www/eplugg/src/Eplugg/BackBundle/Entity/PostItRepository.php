<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 03/06/16
 * Time: 16:38
 */

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\EntityRepository;


class PostItRepository extends EntityRepository
{

    public function findAllFriendsPost($currentUser, $page = 0)
    {
        return $this->getEntityManager()->createQuery('
SELECT p  FROM EpluggBackBundle:PostIT p
LEFT JOIN EpluggBackBundle:Relationship r
WITH (( p.user = r.userOne OR p.user = r.userTwo AND r.status = 2) )
WHERE ((r.userOne = :currentuser OR r.userTwo = :currentuser )  AND r.status = 2) OR p.user = :currentuser
ORDER  BY p.dateAjout DESC
        ')
            ->setParameter('currentuser', $currentUser)
            ->setMaxResults(5)
            ->setFirstResult(($page-1)*5)
            ->getResult();
    }




}
