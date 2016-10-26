<?php
// src/Eplugg/BackBundle/Entity/Experience.php

namespace Eplugg\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="Experience")
 */
class Experience
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $etablissement
     * @ORM\Column(name="etablissement", type="string", length=255, nullable=true)
     *     max=255,
     */
    protected $etablissement;
    /**
     * @var string $title
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     *     max=255,
     */
    protected $title;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $startDate;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $endDate;
    /**
     * @var string $address
     * @ORM\Column(name="address", type="string", length=500, nullable=true)
     *     max=500,
     */
    protected $address;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User", inversedBy="$experiences")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $user;

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
     * Set etablissement
     *
     * @param string $etablissement
     * @return Experience
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Experience
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Experience
     */
    public function setStartDate($startDate)
    {
        $this->startDate = new \DateTime($startDate);

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Experience
     */
    public function setEndDate($endDate)
    {
        $this->endDate = new \DateTime($endDate);
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Experience
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set user
     *
     * @param \Eplugg\UserBundle\Entity\User $user
     * @return Experience
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
}
