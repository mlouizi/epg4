<?php

namespace Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LikePostIt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eplugg\BackBundle\Entity\LikePostItRepository")
 */
class LikePostIt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\BackBundle\Entity\PostIt")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $posit;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $user;

    /**
     * @var datetime $dateLike
     *
     * @ORM\Column(name="dateLike", type="datetime")
     * @Assert\DateTime()
     */
    protected $dateLike;




    public function __construct()
    {
        $this->dateLike = new \DateTime('now');

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
     * Set dateLike
     *
     * @param \DateTime $dateLike
     * @return LikePostIt
     */
    public function setDateLike($dateLike)
    {
        $this->dateLike = $dateLike;

        return $this;
    }

    /**
     * Get dateLike
     *
     * @return \DateTime 
     */
    public function getDateLike()
    {
        return $this->dateLike;
    }

    /**
     * Set posit
     *
     * @param \Eplugg\BackBundle\Entity\PostIt $posit
     * @return LikePostIt
     */
    public function setPosit(\Eplugg\BackBundle\Entity\PostIt $posit = null)
    {
        $this->posit = $posit;

        return $this;
    }

    /**
     * Get posit
     *
     * @return \Eplugg\BackBundle\Entity\PostIt 
     */
    public function getPosit()
    {
        return $this->posit;
    }

    /**
     * Set user
     *
     * @param \Eplugg\UserBundle\Entity\User $user
     * @return LikePostIt
     */
    public function setUser(\Eplugg\UserBundle\Entity\User $user = null)
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
