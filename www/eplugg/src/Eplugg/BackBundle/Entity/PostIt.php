<?php

namespace  Eplugg\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Eplugg\BackBundle\Entity
 *
 * @ORM\Table(name="post_it")
 * @ORM\Entity(repositoryClass="Eplugg\BackBundle\Entity\PostItRepository")
 */
class PostIt
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
     *
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     *
     * @ORM\Column(name="dateAjout", type="datetime")
     * @Assert\DateTime()
     */
    private $dateAjout;


    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Commentaire", mappedBy="postIt")
     */
    protected $comments;
    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\BackBundle\Entity\PostIt")
     * @ORM\JoinColumn(name="source_post_id", referencedColumnName="id", nullable=true,onDelete="CASCADE")
     */
    protected $posit_source;

    /**
     * @ORM\ManyToOne(targetEntity="Eplugg\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $user;



    /**
     * @var string
     *
     * @ORM\Column(name="pathImage", type="string", length=255, nullable=true)
     */
    private $path;


    /**
     *
     * @Assert\File(
     *     maxSize = "8M",
     *     mimeTypes = {"image/jpeg", "image/gif", "image/png", "image/tiff"},
     *     maxSizeMessage = "Taille maximale est 8M.",
     *     mimeTypesMessage = "seul les fichiers de type image sont acceptés."
     * )
     */
    public $fileImage;



    /**
     * @var string
     *
     * @ORM\Column(name="pathPdf", type="string", length=255, nullable=true)
     */
    private $pathPdf;


    /**
     * @Assert\File(
     *     maxSize = "10M",
     *     mimeTypes = {"application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Importez un fichier PDF valide"
     * )
     */
    public $filePdf;

    public function __construct()
    {
        $this->dateAjout = new \DateTime('now');
        $this->comments = new ArrayCollection();
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
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateAjout
     *
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    /**
     * Get dateAjout
     *
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }



    /**
     * getCommentaires
     *
     * @return array $commentaires
     */
    public function getCommentaires()
    {
        return $this->comments;
    }


    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/posts/images';
    }



    function getPath() {
        return $this->path;
    }

    function setPath($path) {
        $this->path = $path;
    }

    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->fileImage) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the target filename to move to
        $this->fileImage->move($this->getUploadRootDir(), $this->fileImage->getClientOriginalName());

        // set the path property to the filename where you'ved saved the file

        $this->path = $this->fileImage->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->fileImage = null;
    }



    public function getAbsolutePathPDF()
    {
        return null === $this->pathPdf ? null : $this->getUploadRootDir().'/'.$this->pathPdf;
    }

    public function getWebPathPDF()
    {
        return null === $this->pathPdf ? null : $this->getUploadDir().'/'.$this->pathPdf;
    }

    protected function getUploadDirPDF()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/posts/PDF';
    }

    function getPathPDF() {
        return $this->pathPdf;
    }
    function setPathPDF($pathPdf) {
        $this->pathPdf = $pathPdf;
    }
    public function uploadPDf()
    {
        // the file property can be empty if the field is not required
        if (null === $this->filePdf) {
            return;
        }
        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the target filename to move to
        $this->filePdf->move($this->getUploadRootDir(), $this->filePdf->getClientOriginalName());

        // set the path property to the filename where you'ved saved the file
        $this->path = $this->filePdf->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->filePdf = null;
    }





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
     * @return mixed
     */
    public function getPositSource()
    {
        return $this->posit_source;
    }

    /**
     * @param mixed $posit_source
     */
    public function setPositSource($posit_source)
    {
        $this->posit_source = $posit_source;
    }







    /**
     * Add comments
     *
     * @param \Eplugg\BackBundle\Entity\Commentaire $comments
     * @return PostIt
     */
    public function addComment(\Eplugg\BackBundle\Entity\Commentaire $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Eplugg\BackBundle\Entity\Commentaire $comments
     */
    public function removeComment(\Eplugg\BackBundle\Entity\Commentaire $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}
