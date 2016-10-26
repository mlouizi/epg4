<?php
namespace Eplugg\FrontBundle\EventListener;

use Doctrine\ORM\Event;
use Eplugg\BackBundle\Entity\ProfileLog;
use Eplugg\UserBundle\Entity\User;
use Eplugg\BackBundle\Entity\Activity;
use Symfony\Component\DependencyInjection\ContainerAware;
class UserListener extends ContainerAware
{
    protected $updated;
    protected $types;
    protected $user;
    /**
     * Gets all the entities to flush
     *
     * @param Event\OnFlushEventArgs $eventArgs Event args
     */
    public function onFlush(Event\OnFlushEventArgs $eventArgs)
    {
        $this->types = array();
        $this->updated = false;
        $em = $eventArgs->getEntityManager();
        $uow = $em->getUnitOfWork();
        foreach ($uow->getScheduledEntityInsertions() as $entity) {
            if($entity instanceof Activity) {
                $this->types["update_company_informations"] = 1;
                $this->updated = true;
            }
        }
        foreach ($uow->getScheduledEntityUpdates() as $entity) {
            if($entity instanceof User) {
                $this->user = $entity;
            }
            foreach($uow->getEntityChangeSet($entity) as $field => $changes) {
                switch($field) {
                    case "company_name":
                    case "company_country":
                    case "company_city":
                    case "company_address":
                    case "company_tel":
                    case "company_fax":
                    case "job":
                    case "company_website":
                    case "company_logo":
                    case "companyAvatar":
                    case "activities":
                        $this->types["update_company_informations"] = 1;
                        $this->updated = true;
                        break;
                    case "firstName":
                    case "lastName":
                    case "gender":
                    case "sociaux":
                    case "mobile":
                    case "direct_phone":
                    case "birthday":
                    case "birthmonth":
                    case "birthyear":
                    case "more_emails":
                    case "cv":
                        $this->types["update_personal_informations"] = 1;
                        $this->updated = true;
                        break;
                    case "avatar":
                        $this->types["update_profile_avatar"] = 1;
                        $this->updated = true;
                        break;
                }
            }
        }
    }
    public function postFlush(Event\PostFlushEventArgs $eventArgs)
    {
        if($this->updated && !empty($this->user)) {
            $currentDate = new \DateTime();
            $entityManager = $eventArgs->getEntityManager();

            foreach($this->types as $logType => $val) {
                if(!empty($val)) {
                    $profileLog = new ProfileLog();
                    $profileLog->setCreated($currentDate);
                    $profileLog->setUser($this->user);
                    $profileLog->setLogType($logType);
                    $entityManager->persist($profileLog);
                }
            }
            $this->types = array();
            $this->updated = false;
            $entityManager->flush();

        }

    }
}