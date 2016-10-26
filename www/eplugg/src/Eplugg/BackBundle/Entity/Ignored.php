<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="ignored",uniqueConstraints={@ORM\UniqueConstraint(name="dimension", columns={"user_fromIgnored_id", "user_ignored_id"})})
 */
class Ignored{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_fromIgnored")
     * @ORM\JoinColumn(name="user_fromIgnored_id", referencedColumnName="id", nullable=false)
     */
    protected $fromIgnored;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$users_ignored")
     * @ORM\JoinColumn(name="user_ignored_id", referencedColumnName="id", nullable=false)
     */
    protected $ignored;

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
     * Set fromIgnored
     *
     * @param \Eplugg\UserBundle\Entity\User $fromIgnored
     * @return Ignored
     */
    public function setFromIgnored(\Eplugg\UserBundle\Entity\User $fromIgnored)
    {
        $this->fromIgnored = $fromIgnored;

        return $this;
    }

    /**
     * Get fromIgnored
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getFromIgnored()
    {
        return $this->fromIgnored;
    }

    /**
     * Set ignored
     *
     * @param \Eplugg\UserBundle\Entity\User $ignored
     * @return Ignored
     */
    public function setIgnored(\Eplugg\UserBundle\Entity\User $ignored)
    {
        $this->ignored = $ignored;

        return $this;
    }

    /**
     * Get ignored
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getIgnored()
    {
        return $this->ignored;
    }
}
