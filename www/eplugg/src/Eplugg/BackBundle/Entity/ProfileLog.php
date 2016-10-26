<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="profile_log")
 */
class ProfileLog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$userLog")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    protected $user;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $logType;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$userLogTarget")
     * @ORM\JoinColumn(name="target_user_id", referencedColumnName="id", nullable=true)
     */
    protected $targetUser;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $created;

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
     * Set logType
     *
     * @param string $logType
     * @return ProfileLog
     */
    public function setLogType($logType)
    {
        $this->logType = $logType;

        return $this;
    }

    /**
     * Get logType
     *
     * @return string 
     */
    public function getLogType()
    {
        return $this->logType;
    }

    /**
     * Set user
     *
     * @param \Eplugg\UserBundle\Entity\User $user
     * @return ProfileLog
     */
    public function setUser(\Eplugg\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set targetUser
     *
     * @param \Eplugg\UserBundle\Entity\User $targetUser
     * @return ProfileLog
     */
    public function setTargetUser(\Eplugg\UserBundle\Entity\User $targetUser = null)
    {
        $this->targetUser = $targetUser;

        return $this;
    }

    /**
     * Get targetUser
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getTargetUser()
    {
        return $this->targetUser;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return ProfileLog
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
