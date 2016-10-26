<?php
// src/Eplugg/BackBundle/Entity/Page.php

namespace Eplugg\BackBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $slug;
    
	/**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $title;
    
	/**
     * @ORM\Column(type="text", nullable=false)
     *
     */
    protected $body;
    
	/**
     * @ORM\Column(type="datetime")
     *
     */
    protected $created;
    
	/**
     * @ORM\Column(type="datetime")
     *
     */
    protected $updated;
    
	/**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $status = false;
    
	/**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $promoteFooterMenu = false;
    
	/**
    * @ORM\Column(type="integer", nullable=true)
    * @Assert\Range(
    *      min = -50,
    *      max = 50,
    * )
    */
    protected $weight = 0;
    
	/**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $menuTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     */
    protected $lang;
	
	 /**
	  * @ORM\ManyToOne(targetEntity="Eplugg\BackBundle\Entity\Page")
	  * @ORM\JoinColumn(nullable=true)
	  */
	 private $trPage;
  

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
     * Set slug
     *
     * @param string $slug
     * @return Page
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Page
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
     * Set body
     *
     * @param string $body
     * @return Page
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
     * Set created
     *
     * @param \DateTime $created
     * @return Page
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return Page
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set promoteFooterMenu
     *
     * @param boolean $promoteFooterMenu
     * @return Page
     */
    public function setPromoteFooterMenu($promoteFooterMenu)
    {
        $this->promoteFooterMenu = $promoteFooterMenu;

        return $this;
    }

    /**
     * Get promoteFooterMenu
     *
     * @return boolean 
     */
    public function getPromoteFooterMenu()
    {
        return $this->promoteFooterMenu;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Page
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Page
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get statu
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set menuTitle
     *
     * @param string $menuTitle
     * @return Page
     */
    public function setMenuTitle($menuTitle)
    {
        $this->menuTitle = $menuTitle;

        return $this;
    }

    /**
     * Get menuTitle
     *
     * @return string 
     */
    public function getMenuTitle()
    {
        return $this->menuTitle;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Page
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set trPage
     *
     * @param \Eplugg\BackBundle\Entity\Page $trPage
     * @return Page
     */
    public function setTrPage(\Eplugg\BackBundle\Entity\Page $trPage = null)
    {
        $this->trPage = $trPage;

        return $this;
    }

    /**
     * Get trPage
     *
     * @return \Eplugg\BackBundle\Entity\Page 
     */
    public function getTrPage()
    {
        return $this->trPage;
    }

}
