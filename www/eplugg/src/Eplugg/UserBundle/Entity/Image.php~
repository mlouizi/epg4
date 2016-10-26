<?php
namespace Eplugg\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Description of File
 *
 * @ORM\Entity
 * mimeTypes = {"image/jpg", "image/jpeg", "image/gif", "image/png"},
 * maxSize = "5000k",
 * @ORM\HasLifecycleCallbacks
 */
class Image {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $name;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    protected $cropped = false;
    /**
     * @var integer $gender
     * @ORM\Column(name="startWidth", type="integer", nullable=true)
     */
    protected $startWidth;
    /**
     * @var integer $gender
     * @ORM\Column(name="endtWidth", type="integer", nullable=true)
     */
    protected $endWidth;
    /**
     * @var integer $gender
     * @ORM\Column(name="startHeight", type="integer", nullable=true)
     */
    protected $startHeight;
    /**
     * @var integer $gender
     * @ORM\Column(name="endHeight", type="integer", nullable=true)
     */
    protected $endHeight;


    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
    public function getCroppedAbsolutePath()
    {
        return null === $this->path ? null : $this->getCroppedUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }
    public function getCroppedWebPath()
    {
        return null === $this->path ? null : $this->getCroppedUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    protected function getCroppedUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getCroppedUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/pictures';
    }
    protected function getCroppedUploadDir()
    {
        return 'uploads/pictures/cropped';
    }
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->path = $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
        $id = md5(uniqid());
        $this->file->move($this->getUploadRootDir(),$id . '_' . $this->file->getClientOriginalName());
        if($this->cropped) {
            $source_path = $this->getUploadRootDir() . '/' . $id . '_' . $this->file->getClientOriginalName();
            $destination = $this->getCroppedUploadRootDir(). '/' . $id . '_' . $this->file->getClientOriginalName();
            $this->crop($source_path, $destination);
           // $this->file->move($this->getCroppedUploadRootDir(),$id . '_' . $this->file->getClientOriginalName());
        }
        $this->name = $this->path = $id . '_' . $this->file->getClientOriginalName();

        $this->file = null;
    }
    public function crop($path, $destination) {
        list($source_width, $source_height, $source_type) = getimagesize($path);
        switch ($source_type) {
            case IMAGETYPE_GIF:
                $source_gdim = imagecreatefromgif($path);
                break;
            case IMAGETYPE_JPEG:
                $source_gdim = imagecreatefromjpeg($path);
                break;
            case IMAGETYPE_PNG:
                $source_gdim = imagecreatefrompng($path);
                break;

        }
        $croppedImage = imagecrop ($source_gdim , array('x' =>$this->startWidth , 'y' => $this->startHeight, 'width' => $this->endWidth - $this->startWidth, 'height'=> $this->endHeight - $this->startHeight));
        imagejpeg($croppedImage,$destination, 100);

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
     * Set name
     *
     * @param string $name
     * @return File
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set cropped
     *
     * @param boolean $cropped
     * @return Image
     */
    public function setCropped($cropped)
    {
        $this->cropped = $cropped;

        return $this;
    }

    /**
     * Get cropped
     *
     * @return boolean 
     */
    public function getCropped()
    {
        return $this->cropped;
    }

    /**
     * Set startWidth
     *
     * @param integer $startWidth
     * @return Image
     */
    public function setStartWidth($startWidth)
    {
        $this->startWidth = $startWidth;

        return $this;
    }

    /**
     * Get startWidth
     *
     * @return integer 
     */
    public function getStartWidth()
    {
        return $this->startWidth;
    }

    /**
     * Set endWidth
     *
     * @param integer $endWidth
     * @return Image
     */
    public function setEndWidth($endWidth)
    {
        $this->endWidth = $endWidth;

        return $this;
    }

    /**
     * Get endWidth
     *
     * @return integer 
     */
    public function getEndWidth()
    {
        return $this->endWidth;
    }

    /**
     * Set startHeight
     *
     * @param integer $startHeight
     * @return Image
     */
    public function setStartHeight($startHeight)
    {
        $this->startHeight = $startHeight;

        return $this;
    }

    /**
     * Get startHeight
     *
     * @return integer 
     */
    public function getStartHeight()
    {
        return $this->startHeight;
    }

    /**
     * Set endHeight
     *
     * @param integer $endHeight
     * @return Image
     */
    public function setEndHeight($endHeight)
    {
        $this->endHeight = $endHeight;

        return $this;
    }

    /**
     * Get endHeight
     *
     * @return integer 
     */
    public function getEndHeight()
    {
        return $this->endHeight;
    }
}
