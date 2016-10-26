<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="suggestion",uniqueConstraints={@ORM\UniqueConstraint(name="dimension", columns={"user_to_id", "user_suggested_id"})})
 */
class Suggestion {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_from_suggestion")
     * @ORM\JoinColumn(name="user_from_id", referencedColumnName="id", nullable=false)
     */
    protected $from;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_to_suggestion")
     * @ORM\JoinColumn(name="user_to_id", referencedColumnName="id", nullable=false)
     */
    protected $to;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_suggested")
     * @ORM\JoinColumn(name="user_suggested_id", referencedColumnName="id", nullable=false)
     */
    protected $suggested;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $timeSended;

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
     * Set timeSended
     *
     * @param \DateTime $timeSended
     * @return Suggestion
     */
    public function setTimeSended($timeSended)
    {
        $this->timeSended = $timeSended;

        return $this;
    }

    /**
     * Get timeSended
     *
     * @return \DateTime 
     */
    public function getTimeSended()
    {
        return $this->timeSended;
    }

    /**
     * Set from
     *
     * @param \Eplugg\UserBundle\Entity\User $from
     * @return Suggestion
     */
    public function setFrom(\Eplugg\UserBundle\Entity\User $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param \Eplugg\UserBundle\Entity\User $to
     * @return Suggestion
     */
    public function setTo(\Eplugg\UserBundle\Entity\User $to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set suggested
     *
     * @param \Eplugg\UserBundle\Entity\User $suggested
     * @return Suggestion
     */
    public function setSuggested(\Eplugg\UserBundle\Entity\User $suggested)
    {
        $this->suggested = $suggested;

        return $this;
    }

    /**
     * Get suggested
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getSuggested()
    {
        return $this->suggested;
    }
}
