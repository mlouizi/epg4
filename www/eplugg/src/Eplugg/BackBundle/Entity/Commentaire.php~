<?php

namespace  Eplugg\BackBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Eplugg\BackBundle\Entity\Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eplugg\BackBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $message
     *
     * @ORM\Column(name="message", type="text")
     * @Assert\NotBlank()
     */
    private $message;

    /**
     * @var datetime $dateAjout
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     * @Assert\DateTime()
     */
    private $dateAjout;



    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\BackBundle\Entity\PostIt", inversedBy="comments")
     * @ORM\JoinColumn(name="postIt_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $postIt;


    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return PostIt
     */
    public function getPostIt()
    {
        return $this->postIt;
    }

    /**
     * @param PostIt $postIt
     */
    public function setPostIt($postIt)
    {
        $this->postIt = $postIt;
    }




    public function __construct()
    {
        $this->dateAjout = new \Datetime('now');
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
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateAjout
     *
     * @param datetime $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    /**
     * Get dateAjout
     *
     * @return datetime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }


    public function setArticle(PostIt $postIt)
    {
        $this->postIt = $postIt;
    }


    public function getArticle()
    {
        return $this->postIt;
    }
}
