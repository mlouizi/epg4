<?php
// src/AppBundle/Entity/User.php

namespace Eplugg\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Eplugg\BackBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Tests\Console\Descriptor\ObjectsProvider;
/**
 * @ORM\Entity(repositoryClass="Eplugg\UserBundle\Entity\UserRepository")
 * @ORM\Table(name="fos_user")
 * @UniqueEntity("email")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your First Name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your Last Name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $lastName;

    /**
     * @var integer $gender
     * @ORM\Column(name="gender", type="integer")
     * groups={"Registration", "Profile"}
     */
    protected $gender;

    /**
     * @var string $job
     * @ORM\Column(name="job", type="string", length=255)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $job;

    /**
     * @var string $sociaux
     * @ORM\Column(name="sociaux", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $sociaux;

    /**
     * @var string $mobile
     * @ORM\Column(name="mobile_phone", type="string", length=50, nullable=true)
     *     max=50,
     *     groups={"Registration", "Profile"}
     */
    protected $mobile;

    /**
     * @var string $direct_phone
     * @ORM\Column(name="direct_phone", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $direct_phone;

    /**
     * @ORM\OneToOne(targetEntity="Eplugg\UserBundle\Entity\Image", cascade={"remove"})
     * @ORM\JoinColumn(name="avatar_id", referencedColumnName="id", nullable=true)
     */
    protected $avatar;

    /**
     * @var string $company_name
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $company_name;

    /**
     * @var string $company_activity
     * @ORM\Column(name="company_activity", type="string", length=165, nullable=true)
     *     max=165,
     *     groups={"Registration", "Profile"}
     */
    protected $company_activity;

    /**
     * @var string $company_city
     * @ORM\Column(name="company_country", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $company_country;

    /**
     * @var string $company_city
     * @ORM\Column(name="company_city", type="string", length=50, nullable=true)
     *     max=50,
     *     groups={"Registration", "Profile"}
     */
    protected $company_city;

    /**
     * @var string $company_address
     * @ORM\Column(name="company_address", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $company_address;

    /**
     * @var string $company_tel
     * @ORM\Column(name="company_tel", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $company_tel;

    /**
     * @var string $company_fax
     * @ORM\Column(name="company_fax", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $company_fax;

    /**
     * @var string $company_website
     * @ORM\Column(name="company_website", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $company_website;

    /**
     * @var string $company_logo
     * @ORM\Column(name="company_logo", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $company_logo;

    /**
     * @var integer $birthday
     * @ORM\Column(name="birthday", type="integer", length=10, nullable=true)
     *     max=10,
     *     groups={"Registration", "Profile"}
     */
    protected $birthday;

    /**
     * @var integer $birthmonth
     * @ORM\Column(name="birthmonth", type="integer", length=10)
     *     max=10,
     *     groups={"Registration", "Profile"}
     */
    protected $birthmonth;

    /**
     * @var integer $birthyear
     * @ORM\Column(name="birthyear", type="integer", length=10)
     *     max=10,
     *     groups={"Registration", "Profile"}
     */
    protected $birthyear;

    /**
     * @var string $moreEmails
     * @ORM\Column(name="moreEmails", type="string", length=500, nullable=true)
     *     max=500,
     *     groups={"Registration", "Profile"}
     */
    protected $more_emails;

    /**
     * @ORM\Column(type="boolean", nullable=false, name="profileCompleted")
     */
    protected $profileCompleted = false;

    /**
     * @ORM\OneToOne(targetEntity="Eplugg\UserBundle\Entity\File", cascade={"remove"})
     * @ORM\JoinColumn(name="cv_id", referencedColumnName="id", nullable=true)
     */
    protected $cv;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\UserBundle\Entity\Experience", mappedBy="relationship", cascade={"remove"})
     */
    private $experiences;

    /**
     * @ORM\OneToOne(targetEntity="Eplugg\UserBundle\Entity\Image", cascade={"remove"})
     * @ORM\JoinColumn(name="avatar_company_id", referencedColumnName="id", nullable=true)
     */
    protected $companyAvatar;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Relationship", mappedBy="relationship", cascade={"remove"})
     */
    private $users_one;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Relationship", mappedBy="relationship", cascade={"remove"})
     */
    private $users_two;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Relationship", mappedBy="relationship", cascade={"remove"})
     */
    private $messagesSource;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Message", mappedBy="message", cascade={"remove"})
     */
    private $messagesDestination;

    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Message", mappedBy="message", cascade={"remove"})
     */
    private $users_action;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Suggestion", mappedBy="suggestion", cascade={"remove"})
     */
    private $users_from_suggestion;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Suggestion", mappedBy="suggestion", cascade={"remove"})
     */
    private $users_to_suggestion;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Suggestion", mappedBy="suggestion", cascade={"remove"})
     */
    private $users_suggested;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Ignored", mappedBy="ignored", cascade={"remove"})
     */
    private $user_fromIgnored_id;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\Ignored", mappedBy="ignored", cascade={"remove"})
     */
    private $user_ignored_id;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\EventCalendar", mappedBy="event", cascade={"remove"})
     */
    private $user_events;
    /**
     * @ORM\ManyToMany(targetEntity="Eplugg\BackBundle\Entity\Activity", inversedBy="users", cascade={"persist"})
     * @ORM\JoinTable(name="users_activities",
     *   joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="activity_id", referencedColumnName="id")}
     * )
     */
    private $activities;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\ProfileLog", mappedBy="profile_log", cascade={"remove"})
     */
    private $userLog;
    /**
     * @ORM\OneToMany(targetEntity="Eplugg\BackBundle\Entity\ProfileLog", mappedBy="profile_log", cascade={"remove"})
     */
    private $userLogTarget;
    /**
     * @var integer $timer
     * @ORM\Column(name="timer", type="integer", length=50, nullable=true)
     *     max=50,
     *     groups={"Registration", "Profile"}
     */
    private $timer;
    /**
     * @var integer $status
     * @ORM\Column(name="status", type="integer", length=50, nullable=true)
     *     max=50,
     *     groups={"Registration", "Profile"}
     */
    private $status = 0;
    /**
     * @var string $latitude
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $latitude = NULL;
    /**
     * @var string $longitude
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     *     max=255,
     *     groups={"Registration", "Profile"}
     */
    protected $longitude = NULL;
    public function __construct()
    {
        parent::__construct();
        $this->activities = new ArrayCollection();
    }
    public function setEmail($email)
    {
        parent::setEmail($email);
        $this->setUsername($email);
    }
    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return User
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set sociaux
     *
     * @param string $sociaux
     * @return User
     */
    public function setSociaux($sociaux)
    {
        $this->sociaux = $sociaux;

        return $this;
    }

    /**
     * Get sociaux
     *
     * @return string 
     */
    public function getSociaux()
    {
        return $this->sociaux;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set direct_phone
     *
     * @param string $directPhone
     * @return User
     */
    public function setDirectPhone($directPhone)
    {
        $this->direct_phone = $directPhone;

        return $this;
    }

    /**
     * Get direct_phone
     *
     * @return string 
     */
    public function getDirectPhone()
    {
        return $this->direct_phone;
    }

    /**
     * Set user_picture
     *
     * @param string $userPicture
     * @return User
     */
    public function setUserPicture($userPicture)
    {
        $this->user_picture = $userPicture;

        return $this;
    }

    /**
     * Get user_picture
     *
     * @return string 
     */
    public function getUserPicture()
    {
        return $this->user_picture;
    }

    /**
     * Set company_name
     *
     * @param string $companyName
     * @return User
     */
    public function setCompanyName($companyName)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get company_name
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set company_activity
     *
     * @param string $companyActivity
     * @return User
     */
    public function setCompanyActivity($companyActivity)
    {
        $this->company_activity = $companyActivity;

        return $this;
    }

    /**
     * Get company_activity
     *
     * @return string 
     */
    public function getCompanyActivity()
    {
        return $this->company_activity;
    }

    /**
     * Set company_country
     *
     * @param string $companyCountry
     * @return User
     */
    public function setCompanyCountry($companyCountry)
    {
        $this->company_country = $companyCountry;

        return $this;
    }

    /**
     * Get company_country
     *
     * @return string 
     */
    public function getCompanyCountry()
    {
        return $this->company_country;
    }

    /**
     * Set company_city
     *
     * @param string $companyCity
     * @return User
     */
    public function setCompanyCity($companyCity)
    {
        $this->company_city = $companyCity;

        return $this;
    }

    /**
     * Get company_city
     *
     * @return string 
     */
    public function getCompanyCity()
    {
        return $this->company_city;
    }

    /**
     * Set company_address
     *
     * @param string $companyAddress
     * @return User
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->company_address = $companyAddress;

        return $this;
    }

    /**
     * Get company_address
     *
     * @return string 
     */
    public function getCompanyAddress()
    {
        return $this->company_address;
    }

    /**
     * Set company_tel
     *
     * @param string $companyTel
     * @return User
     */
    public function setCompanyTel($companyTel)
    {
        $this->company_tel = $companyTel;

        return $this;
    }

    /**
     * Get company_tel
     *
     * @return string
     */
    public function getCompanyTel()
    {
        return $this->company_tel;
    }

    /**
     * Set company_fax
     *
     * @param string $companyFax
     * @return User
     */
    public function setCompanyFax($companyFax)
    {
        $this->company_fax = $companyFax;

        return $this;
    }

    /**
     * Get company_fax
     *
     * @return string
     */
    public function getCompanyFax()
    {
        return $this->company_fax;
    }

    /**
     * Set company_website
     *
     * @param string $companyWebsite
     * @return User
     */
    public function setCompanyWebsite($companyWebsite)
    {
        $this->company_website = $companyWebsite;

        return $this;
    }

    /**
     * Get company_website
     *
     * @return string
     */
    public function getCompanyWebsite()
    {
        return $this->company_website;
    }

    /**
     * Set company_logo
     *
     * @param string $companyLogo
     * @return User
     */
    public function setCompanyLogo($companyLogo)
    {
        $this->company_logo = $companyLogo;

        return $this;
    }

    /**
     * Get company_logo
     *
     * @return string 
     */
    public function getCompanyLogo()
    {
        return $this->company_logo;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthmonth
     *
     * @param integer $birthmonth
     * @return User
     */
    public function setBirthmonth($birthmonth)
    {
        $this->birthmonth = $birthmonth;

        return $this;
    }

    /**
     * Get birthmonth
     *
     * @return integer 
     */
    public function getBirthmonth()
    {
        return $this->birthmonth;
    }

    /**
     * Set birthyear
     *
     * @param string $birthyear
     * @return User
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Get birthyear
     *
     * @return string 
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Set profileCompleted
     *
     * @param \bool $profileCompleted
     * @return User
     */
    public function setProfileCompleted($profileCompleted)
    {
        $this->profileCompleted = $profileCompleted;

        return $this;
    }

    /**
     * Get profileCompleted
     *
     * @return \bool 
     */
    public function getProfileCompleted()
    {
        return $this->profileCompleted;
    }

    /**
     * Set more_emails
     *
     * @param string $moreEmails
     * @return User
     */
    public function setMoreEmails($moreEmails)
    {
        $this->more_emails = $moreEmails;

        return $this;
    }
    /**
     * Get more_emails
     *
     * @return string 
     */
    public function getMoreEmails()
    {
        return $this->more_emails;
    }
    public function getUploadRootDir()
    {
        // absolute path to your directory where images must be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'uploads/users';
    }

    public function getAbsolutePath()
    {
        return null === $this->company_logo ? null : $this->getUploadRootDir().'/'.$this->company_logo;
    }

    public function getWebPath()
    {
        return null === $this->company_logo ? null : '/'.$this->getUploadDir().'/'.$this->company_logo;
    }


    /**
     * Set cv
     *
     * @param \Eplugg\UserBundle\Entity\File $cv
     * @return User
     */
    public function setCv(\Eplugg\UserBundle\Entity\File $cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return \Eplugg\UserBundle\Entity\File 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Add experiences
     *
     * @param \Eplugg\UserBundle\Entity\Experience $experiences
     * @return User
     */
    public function addExperience(\Eplugg\UserBundle\Entity\Experience $experiences)
    {
        $this->experiences[] = $experiences;

        return $this;
    }

    /**
     * Remove experiences
     *
     * @param \Eplugg\UserBundle\Entity\Experience $experiences
     */
    public function removeExperience(\Eplugg\UserBundle\Entity\Experience $experiences)
    {
        $this->experiences->removeElement($experiences);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Set avatar
     *
     * @param \Eplugg\UserBundle\Entity\Image $avatar
     * @return User
     */
    public function setAvatar(\Eplugg\UserBundle\Entity\Image $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Eplugg\UserBundle\Entity\Image 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set companyAvatar
     *
     * @param \Eplugg\UserBundle\Entity\Image $companyAvatar
     * @return User
     */
    public function setCompanyAvatar(\Eplugg\UserBundle\Entity\Image $companyAvatar = null)
    {
        $this->companyAvatar = $companyAvatar;

        return $this;
    }

    /**
     * Get companyAvatar
     *
     * @return \Eplugg\UserBundle\Entity\Image 
     */
    public function getCompanyAvatar()
    {
        return $this->companyAvatar;
    }

    /**
     * Add users_one
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $usersOne
     * @return User
     */
    public function addUsersOne(\Eplugg\BackBundle\Entity\Relationship $usersOne)
    {
        $this->users_one[] = $usersOne;

        return $this;
    }

    /**
     * Remove users_one
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $usersOne
     */
    public function removeUsersOne(\Eplugg\BackBundle\Entity\Relationship $usersOne)
    {
        $this->users_one->removeElement($usersOne);
    }

    /**
     * Get users_one
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersOne()
    {
        return $this->users_one;
    }

    /**
     * Add users_two
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $usersTwo
     * @return User
     */
    public function addUsersTwo(\Eplugg\BackBundle\Entity\Relationship $usersTwo)
    {
        $this->users_two[] = $usersTwo;

        return $this;
    }

    /**
     * Remove users_two
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $usersTwo
     */
    public function removeUsersTwo(\Eplugg\BackBundle\Entity\Relationship $usersTwo)
    {
        $this->users_two->removeElement($usersTwo);
    }

    /**
     * Get users_two
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersTwo()
    {
        return $this->users_two;
    }

    /**
     * Add users_action
     *
     * @param \Eplugg\BackBundle\Entity\RelationshipAction $usersAction
     * @return User
     */
    public function addUsersAction(\Eplugg\BackBundle\Entity\RelationshipAction $usersAction)
    {
        $this->users_action[] = $usersAction;

        return $this;
    }

    /**
     * Remove users_action
     *
     * @param \Eplugg\BackBundle\Entity\RelationshipAction $usersAction
     */
    public function removeUsersAction(\Eplugg\BackBundle\Entity\RelationshipAction $usersAction)
    {
        $this->users_action->removeElement($usersAction);
    }

    /**
     * Get users_action
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersAction()
    {
        return $this->users_action;
    }

    /**
     * Add messagesSource
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $messagesSource
     * @return User
     */
    public function addMessagesSource(\Eplugg\BackBundle\Entity\Relationship $messagesSource)
    {
        $this->messagesSource[] = $messagesSource;

        return $this;
    }

    /**
     * Remove messagesSource
     *
     * @param \Eplugg\BackBundle\Entity\Relationship $messagesSource
     */
    public function removeMessagesSource(\Eplugg\BackBundle\Entity\Relationship $messagesSource)
    {
        $this->messagesSource->removeElement($messagesSource);
    }

    /**
     * Get messagesSource
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesSource()
    {
        return $this->messagesSource;
    }

    /**
     * Add messagesDestination
     *
     * @param \Eplugg\BackBundle\Entity\Message $messagesDestination
     * @return User
     */
    public function addMessagesDestination(\Eplugg\BackBundle\Entity\Message $messagesDestination)
    {
        $this->messagesDestination[] = $messagesDestination;

        return $this;
    }

    /**
     * Remove messagesDestination
     *
     * @param \Eplugg\BackBundle\Entity\Message $messagesDestination
     */
    public function removeMessagesDestination(\Eplugg\BackBundle\Entity\Message $messagesDestination)
    {
        $this->messagesDestination->removeElement($messagesDestination);
    }

    /**
     * Get messagesDestination
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessagesDestination()
    {
        return $this->messagesDestination;
    }

    /**
     * Add users_from_suggestion
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersFromSuggestion
     * @return User
     */
    public function addUsersFromSuggestion(\Eplugg\BackBundle\Entity\Suggestion $usersFromSuggestion)
    {
        $this->users_from_suggestion[] = $usersFromSuggestion;

        return $this;
    }

    /**
     * Remove users_from_suggestion
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersFromSuggestion
     */
    public function removeUsersFromSuggestion(\Eplugg\BackBundle\Entity\Suggestion $usersFromSuggestion)
    {
        $this->users_from_suggestion->removeElement($usersFromSuggestion);
    }

    /**
     * Get users_from_suggestion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersFromSuggestion()
    {
        return $this->users_from_suggestion;
    }

    /**
     * Add users_to_suggestion
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersToSuggestion
     * @return User
     */
    public function addUsersToSuggestion(\Eplugg\BackBundle\Entity\Suggestion $usersToSuggestion)
    {
        $this->users_to_suggestion[] = $usersToSuggestion;

        return $this;
    }

    /**
     * Remove users_to_suggestion
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersToSuggestion
     */
    public function removeUsersToSuggestion(\Eplugg\BackBundle\Entity\Suggestion $usersToSuggestion)
    {
        $this->users_to_suggestion->removeElement($usersToSuggestion);
    }

    /**
     * Get users_to_suggestion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersToSuggestion()
    {
        return $this->users_to_suggestion;
    }

    /**
     * Add users_suggested
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersSuggested
     * @return User
     */
    public function addUsersSuggested(\Eplugg\BackBundle\Entity\Suggestion $usersSuggested)
    {
        $this->users_suggested[] = $usersSuggested;

        return $this;
    }

    /**
     * Remove users_suggested
     *
     * @param \Eplugg\BackBundle\Entity\Suggestion $usersSuggested
     */
    public function removeUsersSuggested(\Eplugg\BackBundle\Entity\Suggestion $usersSuggested)
    {
        $this->users_suggested->removeElement($usersSuggested);
    }

    /**
     * Get users_suggested
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsersSuggested()
    {
        return $this->users_suggested;
    }

    /**
     * Add user_fromIgnored_id
     *
     * @param \Eplugg\BackBundle\Entity\Ignored $userFromIgnoredId
     * @return User
     */
    public function addUserFromIgnoredId(\Eplugg\BackBundle\Entity\Ignored $userFromIgnoredId)
    {
        $this->user_fromIgnored_id[] = $userFromIgnoredId;

        return $this;
    }

    /**
     * Remove user_fromIgnored_id
     *
     * @param \Eplugg\BackBundle\Entity\Ignored $userFromIgnoredId
     */
    public function removeUserFromIgnoredId(\Eplugg\BackBundle\Entity\Ignored $userFromIgnoredId)
    {
        $this->user_fromIgnored_id->removeElement($userFromIgnoredId);
    }

    /**
     * Get user_fromIgnored_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFromIgnoredId()
    {
        return $this->user_fromIgnored_id;
    }

    /**
     * Add user_ignored_id
     *
     * @param \Eplugg\BackBundle\Entity\Ignored $userIgnoredId
     * @return User
     */
    public function addUserIgnoredId(\Eplugg\BackBundle\Entity\Ignored $userIgnoredId)
    {
        $this->user_ignored_id[] = $userIgnoredId;

        return $this;
    }

    /**
     * Remove user_ignored_id
     *
     * @param \Eplugg\BackBundle\Entity\Ignored $userIgnoredId
     */
    public function removeUserIgnoredId(\Eplugg\BackBundle\Entity\Ignored $userIgnoredId)
    {
        $this->user_ignored_id->removeElement($userIgnoredId);
    }

    /**
     * Get user_ignored_id
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserIgnoredId()
    {
        return $this->user_ignored_id;
    }


    /**
     * Add user_events
     *
     * @param \Eplugg\BackBundle\Entity\EventCalendar $userEvents
     * @return User
     */
    public function addUserEvent(\Eplugg\BackBundle\Entity\EventCalendar $userEvents)
    {
        $this->user_events[] = $userEvents;

        return $this;
    }

    /**
     * Remove user_events
     *
     * @param \Eplugg\BackBundle\Entity\EventCalendar $userEvents
     */
    public function removeUserEvent(\Eplugg\BackBundle\Entity\EventCalendar $userEvents)
    {
        $this->user_events->removeElement($userEvents);
    }

    /**
     * Get user_events
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserEvents()
    {
        return $this->user_events;
    }



    /**
     * Add activities
     *
     * @param \Eplugg\BackBundle\Entity\Activity $activities
     * @return User
     */
    public function addActivity(\Eplugg\BackBundle\Entity\Activity $activities)
    {
        $this->activities[] = $activities;

        return $this;
    }

    /**
     * Remove activities
     *
     * @param \Eplugg\BackBundle\Entity\Activity $activities
     */
    public function removeActivity(\Eplugg\BackBundle\Entity\Activity $activities)
    {
        $this->activities->removeElement($activities);
    }
    /**
     * Remove activities
     *
     * @param \Eplugg\BackBundle\Entity\Activity $activities
     */
    public function removeAllActivities()
    {
        foreach($this->activities as $activity) {
            $this->activities->removeElement($activity);

        }
    }
    /**
     * Get activities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivities()
    {
        return $this->activities;
    }
    public function getActivitiesFormatted()
    {
        $activities_array = array();
        foreach($this->activities as $activity) {
            $activities_array[] = $activity->getName();
        }
        $activities = '#' . implode('#', $activities_array);
        return $activities;
    }

    /**
     * Add userLog
     *
     * @param \Eplugg\BackBundle\Entity\ProfileLog $userLog
     * @return User
     */
    public function addUserLog(\Eplugg\BackBundle\Entity\ProfileLog $userLog)
    {
        $this->userLog[] = $userLog;

        return $this;
    }

    /**
     * Remove userLog
     *
     * @param \Eplugg\BackBundle\Entity\ProfileLog $userLog
     */
    public function removeUserLog(\Eplugg\BackBundle\Entity\ProfileLog $userLog)
    {
        $this->userLog->removeElement($userLog);
    }

    /**
     * Get userLog
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserLog()
    {
        return $this->userLog;
    }

    /**
     * Add userLogTarget
     *
     * @param \Eplugg\BackBundle\Entity\ProfileLog $userLogTarget
     * @return User
     */
    public function addUserLogTarget(\Eplugg\BackBundle\Entity\ProfileLog $userLogTarget)
    {
        $this->userLogTarget[] = $userLogTarget;

        return $this;
    }

    /**
     * Remove userLogTarget
     *
     * @param \Eplugg\BackBundle\Entity\ProfileLog $userLogTarget
     */
    public function removeUserLogTarget(\Eplugg\BackBundle\Entity\ProfileLog $userLogTarget)
    {
        $this->userLogTarget->removeElement($userLogTarget);
    }

    /**
     * Get userLogTarget
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserLogTarget()
    {
        return $this->userLogTarget;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     * @return User
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;

        return $this;
    }

    /**
     * Get timer
     *
     * @return integer 
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set latitude
     *
     * @param string $latitude
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set longitude
     *
     * @param string $longitude
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
