<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ralationship")
 */
class Relationship {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_one")
     * @ORM\JoinColumn(name="user_one_id", referencedColumnName="id", nullable=false)
     */
    protected $userOne;

     /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_two")
     * @ORM\JoinColumn(name="user_two_id", referencedColumnName="id", nullable=false)
     */
    protected $userTwo;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 0,
     *      max = 4,
     * )
     * 0 - Blocked
     * 1 - Pending
     * 2 - Accpeted
     * 3 - Refused
     * 4 - Cancelled
     */
    protected $status;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\RelationshipAction", mappedBy="relationship", cascade={"remove"})
     */
    private $actions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set userOne
     *
     * @param string $userOne
     * @return Relationship
     */
    public function setUserOne($userOne)
    {
        $this->userOne = $userOne;

        return $this;
    }

    /**
     * Get userOne
     *
     * @return string 
     */
    public function getUserOne()
    {
        return $this->userOne;
    }

    /**
     * Set userTwo
     *
     * @param string $userTwo
     * @return Relationship
     */
    public function setUserTwo($userTwo)
    {
        $this->userTwo = $userTwo;

        return $this;
    }

    /**
     * Get userTwo
     *
     * @return string 
     */
    public function getUserTwo()
    {
        return $this->userTwo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Relationship
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add actions
     *
     * @param \Eplugg\BackBundle\Entity\RelationshipAction $actions
     * @return Relationship
     */
    public function addAction(\Eplugg\BackBundle\Entity\RelationshipAction $actions)
    {
        $this->actions[] = $actions;

        return $this;
    }

    /**
     * Remove actions
     *
     * @param \Eplugg\BackBundle\Entity\RelationshipAction $actions
     */
    public function removeAction(\Eplugg\BackBundle\Entity\RelationshipAction $actions)
    {
        $this->actions->removeElement($actions);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActions()
    {
        return $this->actions;
    }
}
