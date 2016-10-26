<?php
namespace Eplugg\FrontBundle\Controller;

use Eplugg\BackBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class MessagesController extends Controller
{
    public function MessagesAction($uid = NULL)
    {
        $currentUser = $this->get('security.context')->getToken()->getUser();

        /*$sql = 'select * from (select * from message order by message.message_group_id, message.time_sended desc) x group by x.message_group_id';*/
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare('select id from (select * from message WHERE message.user_source_id = :user OR message.user_destination_id = :user order by message.message_group_id, message.time_sended   desc) x group by x.message_group_id');
        $statement->bindValue('user', $currentUser->getId());
        $statement->execute();
        $Contacts = $statement->fetchAll();
        $ids = array();
        foreach($Contacts as $id) {
            $ids[] = $id['id'];
        }
        $messagesContacts = array();
        if(!empty($ids)) {
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQueryBuilder();
            $query->select('m');
            $query->from('Eplugg\BackBundle\Entity\Message', 'm');
            $query->where($query->expr()->in('m.id', $ids))->orderBy('m.timeSended', 'DESC');
            $messagesContacts = $query->getQuery()->getResult();
        }

        if (empty($uid)) {
            $repository = $this->getDoctrine()
                ->getRepository('Eplugg\BackBundle\Entity\Message');
            $query = $repository->createQueryBuilder('m');
            $query = $query->where($query->expr()->orX('m.source = :user', 'm.destination = :user'))
                ->setParameter('user', $currentUser->getId())
                ->orderBy('m.timeSended', 'DESC')
                ->setMaxResults(1)
                ->getQuery();

            $lastMessage = $query->getResult();

            if(!empty($lastMessage)) {
                $lastMessage = $lastMessage[key($lastMessage)];
                if ($lastMessage->getSource()->getId() == $currentUser->getId()) {
                    $uid = $lastMessage->getDestination()->getId();
                } else {
                    $uid = $lastMessage->getSource()->getId();
                }
            }

        }

        $messagesList = array();
        if (!empty($uid)) {
            $repository = $this->getDoctrine()
                ->getRepository('Eplugg\BackBundle\Entity\Message');
            $query = $repository->createQueryBuilder('m');
            $query = $query->where($query->expr()->orX(
                $query->expr()->andX('m.source = :source', 'm.destination = :destination'),
                $query->expr()->andX('m.destination = :source', 'm.source = :destination')
            ))
                ->setParameter('source', $currentUser->getId())
                ->setParameter('destination', $uid)
                ->orderBy('m.timeSended', 'ASC')
                ->getQuery();
            $messagesList = $query->getResult();

            if (!empty($messagesList)) {

                $repository = $this->getDoctrine()
                    ->getRepository('Eplugg\BackBundle\Entity\Message');
                $query = $repository->createQueryBuilder('m');
                $query->update('Eplugg\BackBundle\Entity\Message', 'm')
                    ->set('m.status', $query->expr()->literal(1));
                $query->where($query->expr()->andX('m.source = :source', 'm.destination = :destination', 'm.status = 0'))
                    ->setParameter('source', $uid)
                    ->setParameter('destination', $currentUser->getId());
                $query = $query->getQuery();
                $number = $query->execute();

            }
        }
        $message = new Message();
        $form = $this->createFormBuilder($message)
            ->add('body', 'textarea', array(
                'data' => ''
            ))
            ->add('destination_uid', 'hidden', array(
                'data' => $uid,
                'mapped' => false,
            ))
            ->getForm();
        $destination_uid = $form->get('destination_uid')->getData();

        $request = $this->get('request');

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $destination = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($destination_uid);
            $currentDate = new \DateTime();
            $message->setSource($currentUser);
            $message->setDestination($destination);
            $groupId = '';
            if ($currentUser->getId() < $destination->getId()) {
                $groupId = $currentUser->getId() . '-' . $destination->getId();
            } else {
                $groupId = $destination->getId() . '-' . $currentUser->getId();
            }
            $message->setMessageGroupId($groupId);
            $message->setTimeSended($currentDate);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            return new RedirectResponse($this->generateUrl('eplugg_messages_user', array('uid' => $uid)));

        }
        return $this->render('EpluggFrontBundle:Messages:messages.html.twig', array('form' => $form->createView(), 'uid' => $uid, 'messagesList' => $messagesList, 'messagesContacts' => $messagesContacts, 'currentUid' => $currentUser->getId()));



    }
    public function MessagesSearchAction() {

        $currentUser = $this->get('security.context')->getToken()->getUser();
        $messagesContacts = array();
            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare('select id from (select * from message WHERE message.user_source_id = :user OR message.user_destination_id = :user order by message.message_group_id, message.time_sended   desc) x group by x.message_group_id');
            $statement->bindValue('user', $currentUser->getId());
            $statement->execute();
            $Contacts = $statement->fetchAll();
            $ids = array();
            foreach ($Contacts as $id) {
                $ids[] = $id['id'];
            }
            $search = $this->get('request')->request->get('keys');
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQueryBuilder();
            $query->select('m');
            $query->from('Eplugg\BackBundle\Entity\Message', 'm')->leftJoin('m.source', 'u1')->leftJoin('m.destination', 'u2');
            $query->where($query->expr()->andX(
                $query->expr()->in('m.id', $ids),
                $query->expr()->orX(
                    $query->expr()->andX($query->expr()->concat($query->expr()->concat('u1.firstName', '\' \''), 'u1.lastName') .  ' LIKE :search', 'u2.id = :currentUserId'),
                    $query->expr()->andX($query->expr()->concat($query->expr()->concat('u2.firstName', '\' \''), 'u2.lastName') .  ' LIKE :search', 'u1.id = :currentUserId')
                )
            ))->orderBy('m.timeSended', 'DESC')->setParameter('search', '%' . $search  .  '%')->setParameter('currentUserId', $currentUser->getId());
            $messagesContacts = $query->getQuery()->getResult();

        return $this->render('EpluggFrontBundle:Messages:messages_search.html.twig', array( 'messagesContacts' => $messagesContacts, 'currentUid' => $currentUser->getId()));

    }
    public function usersChatAction()
    {
        $userOne = $this->getUser();
        $repository = $this->getDoctrine()->getRepository('Eplugg\BackBundle\Entity\Relationship');
        $amis1 = $repository->findBy(array('userOne'=>$userOne, 'status'=>2));
        $amis2 = $repository->findBy(array('userTwo'=>$userOne, 'status'=>2));
        $repositoryMsg = $this->getDoctrine()->getRepository('Eplugg\BackBundle\Entity\Message');
        $tab = array();
        $i=0;
        foreach($amis1 as $ami)
        {
            $user = $ami->getUserTwo();
            $tab[$i]['id']  = $user->getId();
            $tab[$i]['username']  = $user->getFirstName() . ' ' . $user->getLastName() ;

            if(($user->getStatus() == 0) || (time() - $user->getTimer()>5)){
                $tab[$i]['status'] = "offline-status-friend";
            }
            else{
                $tab[$i]['status'] = "online-status-friend";
            }

            $tab[$i]['image'] = "none.png";
            if($user->getAvatar()){
                $tab[$i]['image']  = $user->getAvatar()->getPath();
            }

            $messages = $repositoryMsg->findby(array('source'=> $user, 'destination'=> $userOne, 'status'=>false));

            if($messages != null)
                $tab[$i]['statusMsg'] = '<div class="icon_status_friend status-friend new-message" data-contact="'.$user->getId().'" data="on"></div>';
            else
                $tab[$i]['statusMsg'] = "";

            $i++;
        }

        foreach($amis2 as $ami)
        {
            $user = $ami->getUserOne();
            $tab[$i]['id']  = $user->getId();
            $tab[$i]['username']  = $user->getFirstName() . ' ' . $user->getLastName();

            if(($user->getStatus() == 0) || (time() - $user->getTimer()>2)){
                $tab[$i]['status'] = "offline-status-friend";
            }
            else{
                $tab[$i]['status'] = "online-status-friend";
            }

            $tab[$i]['image'] = "none.png";
            if($user->getAvatar()){
                $tab[$i]['image']  = $user->getAvatar()->getPath();
            }

            $messages = $repositoryMsg->findby(array('source'=> $user, 'destination'=> $userOne, 'status'=>false));

            if($messages!=null)
                $tab[$i]['statusMsg'] = '<div class="icon_status_friend status-friend new-message" data-contact="'.$user->getId().'" data="on"></div>';
            else
                $tab[$i]['statusMsg'] = "";

            $i++;
        }

        return new JsonResponse($tab);
    }

    public function updateMyStatusAction()
    {
        $user = $this->getUser();
        $user->setStatus($this->getRequest()->get('status'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new Response("update");
    }


    public function getMsgBoxAction()
    {
        $userTwo = $this->getRequest()->get('usertwo');
        $em = $this->getDoctrine()->getManager();
        $destination = $em->getRepository('Eplugg\UserBundle\Entity\User')->find($userTwo);

        $currentUser = $this->get('security.context')->getToken()->getUser();

        return $this->render('EpluggFrontBundle:Messages:msg_box_chat.html.twig', array('currentUser' => $currentUser, 'destination' => $destination));
    }


    public function refreshTimerAndStatusAction()
    {
        $user = $this->getUser();
        $user->setTimer(time());
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new Response($user->getStatus());
    }

    public function reloadMessagesAction() {

        $currentUser = $this->getUser();
        $userTwo = $this->getRequest()->get('usertwo');
        $destination = $this->getDoctrine()->getRepository('Eplugg\UserBundle\Entity\User')->find($userTwo);

        $repository = $this->getDoctrine()->getRepository('Eplugg\BackBundle\Entity\Message');
        $messages = $repository->findby(array('messageGroupId'=>array($currentUser->getId().'-'.$userTwo, $userTwo.'-'.$currentUser->getId())));

        return $this->render('EpluggFrontBundle:Messages:reload_messages_chat.html.twig', array('messages' => $messages, 'destination'=>$destination));
    }

    public function sendMessageAction(){

        $currentUser = $this->getUser();
        $userTwo = $this->getRequest()->get('usertwo');
        $destination = $this->getDoctrine()->getRepository('Eplugg\UserBundle\Entity\User')->find($userTwo);
        $body = $this->getRequest()->get('message');

        $message = new Message();
        $message->setSource($currentUser);
        $message->setDestination($destination);
        $message->setBody($body);

        $groupId = '';
        if($currentUser->getId() < $destination->getId()) {
            $groupId = $currentUser->getId() . '-' . $destination->getId();
        }
        else {
            $groupId = $destination->getId() . '-' . $currentUser->getId();
        }
        $message->setMessageGroupId($groupId);
        $message->setTimeSended(new \DateTime());
        $em = $this->getDoctrine()->getManager();
        $em->persist($message);
        $em->flush();

        return new Response("sendMessage");
    }

    public function readApprovedAction(){
        $currentUser = $this->getUser();
        $userTwo = $this->getRequest()->get('usertwo');
        $destination = $this->getDoctrine()->getRepository('Eplugg\UserBundle\Entity\User')->find($userTwo);

        $repository = $this->getDoctrine()->getRepository('Eplugg\BackBundle\Entity\Message');
        $messages = $repository->findby(array('source'=> $destination, 'destination'=> $currentUser));

        foreach($messages as $msg){
            $msg->setStatus(true);
        }
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return new Response("Read Approved");
    }
    public function searchFriendAction(){

        $currentUser = $this->getUser();
        $search = $this->getRequest()->get('search');
        $repository = $this->getDoctrine()->getRepository('Eplugg\UserBundle\Entity\User');
        $users = $repository->findFriendByNomPrenom($currentUser, $search);

        $repositoryMsg = $this->getDoctrine()->getRepository('Eplugg\BackBundle\Entity\Message');
        $tab = array();
        $i=0;
        foreach($users as $user)
        {
            $tab[$i]['id']  = $user->getId();
            $tab[$i]['username']  = $user->getUsername();

            if(($user->getStatus() == 0) || (time() - $user->getTimer()>5)){
                $tab[$i]['status'] = "offline-status-friend";
            }
            else{
                $tab[$i]['status'] = "online-status-friend";
            }

            $tab[$i]['image'] = "none.png";
            if($user->getAvatar()){
                $tab[$i]['image']  = $user->getAvatar()->getPath();
            }

            $messages = $repositoryMsg->findby(array('source'=> $user, 'destination'=> $currentUser, 'status'=>false));

            if($messages != null)
                $tab[$i]['statusMsg'] = '<div class="icon_status_friend status-friend new-message" data-contact="'.$user->getId().'" data="on"></div>';
            else
                $tab[$i]['statusMsg'] = "";

            $i++;
        }
        return new JsonResponse($tab);

    }
}