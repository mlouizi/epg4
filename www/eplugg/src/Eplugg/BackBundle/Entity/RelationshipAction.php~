<?php

namespace Eplugg\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ralationship_actions")
 */
class RelationshipAction {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_action")
     * @ORM\JoinColumn(name="user_action_id", referencedColumnName="id", nullable=false)
     */
    protected $userAction;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 0,
     *      max = 4,
     * )
     * 0 - Block User
     * 1 - Add to Friend List
     * 2 - Accept Friendship request
     * 3 - Refuse Friendship request
     * 4 - Cancelled
     */
    protected $actionType;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $actionDate;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\BackBundle\Entity\Relationship", inversedBy="$actions")
     * @ORM\JoinColumn(nullable=false)

     */

    private $relationship;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userAction
     *
     * @param string $userAction
     * @return RelationshipAction
     */
    public function setUserAction($userAction)
    {
        $this->userAction = $userAction;

        return $this;
    }

    /**
     * Get userAction
     *
     * @return string 
     */
    public function getUserAction()
    {
        return $this->userAction;
    }

    /**
     * Set actionType
     *
     * @param integer $actionType
     * @return RelationshipAction
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return integer 
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set actionDate
     *
     * @param \DateTime $actionDate
     * @return RelationshipAction
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;

        return $this;
    }

    /**
     * Get actionDate
     *
     * @return \DateTime 
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * Set relationship
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $relationship
     * @return RelationshipAction
     */
    public function setRelationship(\Eplugg\BackBundle\Entity\Relationship $relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * Get relationship
     *
     * @return \Eplugg\BackBundle\Entity\Relationship 
     */
    public function getRelationship()
    {
        return $this->relationship;
    }
}
