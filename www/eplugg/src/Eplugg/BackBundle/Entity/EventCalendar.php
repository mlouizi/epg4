<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class EventCalendar
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$user_events")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id", nullable=false)
     */
    protected $createdBy;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $created;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $eventDate;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $title;

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
     * Set created
     *
     * @param \DateTime $created
     * @return EventCalendar
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

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     * @return EventCalendar
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime 
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return EventCalendar
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set ceatedBy
     *
     * @param \Eplugg\UserBundle\Entity\User $ceatedBy
     * @return EventCalendar
     */
    public function setCeatedBy(\Eplugg\UserBundle\Entity\User $ceatedBy)
    {
        $this->ceatedBy = $ceatedBy;

        return $this;
    }

    /**
     * Get ceatedBy
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getCeatedBy()
    {
        return $this->ceatedBy;
    }

    /**
     * Set createdBy
     *
     * @param \Eplugg\UserBundle\Entity\User $createdBy
     * @return EventCalendar
     */
    public function setCreatedBy(\Eplugg\UserBundle\Entity\User $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
