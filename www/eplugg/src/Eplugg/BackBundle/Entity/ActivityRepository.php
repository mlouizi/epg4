<?php
namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ActivityRepository extends EntityRepository
{
    public function findMostUsedActivitiesOfFriends($currentUser, $returnAllRow = false, $letter = '')
    {
        if ($returnAllRow == true) {
            $limit = '';
        } else {
            $limit = 'LIMIT 0 , 5';
        }
        if (!empty($letter)) {
            $where_letter = 'AND  `name` LIKE  :letter';
        } else {
            $where_letter = '';
        }

        $sql = '
SELECT DISTINCT activity_id, name, COUNT( DISTINCT user_id ) as nbr_repeat_activity
FROM users_activities
INNER JOIN activity ON ( users_activities.activity_id = activity.id )
INNER JOIN ralationship ON ( (
users_activities.user_id = ralationship.user_one_id
OR users_activities.user_id = ralationship.user_two_id
)
AND ralationship.status =2 )
WHERE (
user_id NOT IN (:currentuser)

' . $where_letter . '
)
GROUP BY activity_id
ORDER BY  nbr_repeat_activity DESC

' . $limit;
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare($sql);
        $statement->bindValue('currentuser', $currentUser);
        if (!empty($letter)) {
            $statement->bindValue('letter', $letter . '%');
        }

        $statement->execute();
        return $statement->fetchAll();
    }

    public function findUsersbyActivity($id, $currentUser, $page)
    {
        $sql = 'select  DISTINCT user_id,job,gender,first_name,last_name,company_name,
                company_country,company_city,avatar_id
                company_activity,activity_id,name
                FROM users_activities
                INNER JOIN ralationship ON ( (users_activities.user_id = ralationship.user_one_id
                OR users_activities.user_id = ralationship.user_two_id)AND ralationship.status =2 )
                INNER JOIN activity ON ( users_activities.activity_id = activity.id )
                INNER JOIN fos_user ON ( users_activities.user_id = fos_user.id )
                WHERE (activity_id = :activity_id AND user_id NOT IN (:currentuser))
                LIMIT 50 OFFSET ' .(($page-1)*50) .  '';
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare($sql);
        $statement->bindValue('activity_id', $id);
        $statement->bindValue('currentuser', $currentUser);
        $statement->execute();
        return $statement->fetchAll();
    }
}