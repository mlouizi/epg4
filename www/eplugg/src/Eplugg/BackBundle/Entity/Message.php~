<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="message")
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $timeSended;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$messagesSource")
     * @ORM\JoinColumn(name="user_source_id", referencedColumnName="id", nullable=false)
     */
    protected $source;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$messagesDestination")
     * @ORM\JoinColumn(name="user_destination_id", referencedColumnName="id", nullable=false)
     */
    protected $destination;

    /**
     * @ORM\Column(type="text", nullable=false)
     *
     */
    protected $body;
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $messageGroupId;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $status = false;
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
     * @return Message
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
     * Set body
     *
     * @param string $body
     * @return Message
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set source
     *
     * @param \Eplugg\UserBundle\Entity\User $source
     * @return Message
     */
    public function setSource(\Eplugg\UserBundle\Entity\User $source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set destination
     *
     * @param \Eplugg\UserBundle\Entity\User $destination
     * @return Message
     */
    public function setDestination(\Eplugg\UserBundle\Entity\User $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return \Eplugg\UserBundle\Entity\User 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set messageGroupId
     *
     * @param string $messageGroupId
     * @return Message
     */
    public function setMessageGroupId($messageGroupId)
    {
        $this->messageGroupId = $messageGroupId;

        return $this;
    }

    /**
     * Get messageGroupId
     *
     * @return string 
     */
    public function getMessageGroupId()
    {
        return $this->messageGroupId;
    }



    /**
     * Set status
     *
     * @param boolean $status
     * @return Message
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
