<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 03/06/16
 * Time: 16:38
 */

namespace Eplugg\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;


class UserRepository extends EntityRepository
{

    public function findAllFriends($currentUser, $pager = 0, $page = 1)
    {
        $sql = 'SELECT u2  FROM EpluggUserBundle:User u2
                INNER JOIN EpluggBackBundle:Relationship r4
                WITH (( u2.id = r4.userOne OR u2.id = r4.userTwo AND r4.status = 2) )
                WHERE (r4.userOne = :currentuser OR r4.userTwo = :currentuser ) AND u2.id <> :currentuser  AND r4.status = 2';
        $query = $this->getEntityManager()->createQuery($sql)->setParameter('currentuser', $currentUser);
        if($pager)
        {
            $query->setMaxResults($pager)->setFirstResult(($page-1)*$pager);
        }
        return $query->getResult();
    }

    public function findFriendByLetter($currentUser, $letter, $pager = 0, $page = 1)
    {
        $sql = 'SELECT u2  FROM EpluggUserBundle:User u2
                INNER JOIN EpluggBackBundle:Relationship r4
                WITH (( u2.id = r4.userOne OR u2.id = r4.userTwo AND r4.status = 2) )
                WHERE (r4.userOne = :currentuser OR r4.userTwo = :currentuser ) AND u2.id <> :currentuser  AND r4.status = 2
                AND (u2.firstName LIKE :letter)';
        $query = $this->getEntityManager()->createQuery($sql)->setParameter('currentuser', $currentUser)->setParameter('letter', $letter . '%');
        if($pager)
        {
            $query->setMaxResults($pager)->setFirstResult(($page-1)*$pager);
        }
        return $query->getResult();

    }

    public function findFriendByNomPrenom($currentUser, $search, $pager = 0, $page =1)
    {
        $sql = 'SELECT u  FROM EpluggUserBundle:User u
                INNER JOIN EpluggBackBundle:Relationship r
                WITH (( u.id = r.userOne OR u.id = r.userTwo AND r.status = 2) )
                WHERE (r.userOne = :currentuser OR r.userTwo = :currentuser ) AND u.id <> :currentuser  AND r.status = 2
                AND (CONCAT(CONCAT(u.firstName, \' \'), u.lastName) LIKE :search
                OR CONCAT(CONCAT(u.lastName, \' \'), u.firstName) LIKE :search)';
        $query = $this->getEntityManager()->createQuery($sql)->setParameter('currentuser', $currentUser)->setParameter('search','%' . $search . '%');
        if($pager)
        {
            $query->setMaxResults($pager)->setFirstResult(($page-1)*$pager);
        }
        return $query->getResult();

    }

}

