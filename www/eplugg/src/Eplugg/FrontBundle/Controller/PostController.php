<?php

namespace Eplugg\FrontBundle\Controller;

use Eplugg\BackBundle\Entity\Commentaire;
use Eplugg\BackBundle\Entity\LikePostIt;
use Eplugg\BackBundle\Entity\PostIt;
use Eplugg\FrontBundle\Form\PostForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PostController extends Controller
{
    /************************************Ajout + Supression Commentaire  *****************************************************/


    public function createCommentAjaxAction(){

        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $request = $this->get('request');
        $content = $request->query->get('content');
        $postid = $request->query->get('postid');
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($postid);
        if(!$post){
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        if(!empty($content)){
            $comment = new  Commentaire();
            $comment->setUser($currentUser);
            $comment->setPostIt($post);
            $comment->setMessage($content);
            $em->persist($comment);
            $em->flush();
        }
        $comments =$em->getRepository('EpluggBackBundle:Commentaire')->findBy(array('postIt'=>$post));
        return $this->render('@EpluggFront/Post/commentaires.html.twig', array('comments'=>$comments,'post'=>$post));
    }
    public function deleteCommentAjaxAction(){
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $request = $this->get('request');
        $postid = $request->query->get('postid');
        $commentid = $request->query->get('commentid');
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($postid);
        if(!$post){
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        $comment =$em->getRepository('EpluggBackBundle:Commentaire')->find($commentid);
        if (!$comment) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }
        if($comment->getUser()->getId()==$currentUser->getId()){
            $em->remove($comment);
            $em->flush();
        }
        $comments =$em->getRepository('EpluggBackBundle:Commentaire')->findBy(array('postIt'=>$post));
        return $this->render('@EpluggFront/Post/commentaires.html.twig', array('comments'=>$comments,'post'=>$post));
    }

    /************************************Ajout + Supression +partage statut  *****************************************************/

    public function NewPostAction($page = 1)
    {   $request = $this->get('request');
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $companyAvatar = $currentUser->getCompanyAvatar();
        $avatar = $currentUser->getAvatar();
        $userpicture =(!empty($avatar)) ? $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/' . $avatar->getCroppedWebPath() : $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath() .'/images/avatar.png' ;
        $em= $this->getDoctrine()->getManager();
        $posts =$em->getRepository('EpluggBackBundle:PostIt')->findAllFriendsPost($currentUser->getId(), $page);
        $post = new  PostIt();
        $form = $this->createForm(new PostForm(),$post);
        $form->handleRequest($request);
        if($form->isValid()) {
            $post->setUser($currentUser);
            $post->upload();
            $em->persist($post);
            $em->flush();
            unset($post);
            unset($form);
            return $this->redirectToRoute('post_add');
        }
        return $this->render('@EpluggFront/Post/post_new.html.twig', array('form' => $form->createView(),'posts'=>$posts,'userpic' =>$userpicture));
    }


    public function deletePostAction($id){
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        $em->remove($post);
        $em->flush();
        return $this->redirectToRoute('post_add');
    }


    public function sharePostAction($idpost)
    {
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $em= $this->getDoctrine()->getManager();
        $post_source  =$em->getRepository('EpluggBackBundle:PostIt')->find($idpost);
        if(!$post_source){
            throw  $this->createNotFoundException('unable to find id post source entity');
        }
        $post = new  PostIt();
        $post->setUser($currentUser);
        if(!$post_source->getPositSource())
        {
            $post_source  =$em->getRepository('EpluggBackBundle:PostIt')->find($idpost);
        }
        else{
            $post_source  =$em->getRepository('EpluggBackBundle:PostIt')->find($post_source->getPositSource());
        }
        $post->setPath($post_source->getPath());
        $post->setContenu($post_source->getContenu());
        $post->setPositSource($post_source);
        $em->persist($post);
        $em->flush();
        return $this->redirectToRoute('post_add');
    }

    public function showPostAction($idpost)
    {
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($idpost);
        if (!$post) {

            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        return $this->render('@EpluggFront/Post/one_Post_Show.html.twig', array('post'=>$post,'post_source'=>$post->getPositSource()));
    }


    /************************************Boutton j'aime + j'aime pas *****************************************************/
    public function LikePostAjaxAction()
    {
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $request = $this->get('request');
        $postid = $request->query->get('postid');
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($postid);
        $liked=false;
        if (!$post) {
            $liked=true;
            throw $this->createNotFoundException('Unable to find Post entity.');
        }
        $postliked =$em->getRepository('EpluggBackBundle:LikePostIt')->findUserLikedpost($postid,$currentUser->getId());
        if ($postliked) {
            return new Response('Vous aimez deja le statut');
        }
            $likePost = new  LikePostIt();
            $likePost->setUser($currentUser);
            $likePost->setPosit($post);
            $em->persist($likePost);
            $em->flush();
            $liked=true;
        $likepost = $em->getRepository('EpluggBackBundle:LikePostIt')->findLikedpost($postid);
        return $this->render('@EpluggFront/Post/like_post_block.html.twig', array('postlike'=>$likepost,'post'=>$post,"likedpostsameuser"=>$liked));



    }


    public function dislikePostAjaxAction()
    {
        $currentUser = $this->get('security.token_storage')->getToken()->getUser();
        $request = $this->get('request');
        $postid = $request->query->get('postid');
        $em= $this->getDoctrine()->getManager();
        $post =$em->getRepository('EpluggBackBundle:PostIt')->find($postid);
        $liked=true;
        $postliked =$em->getRepository('EpluggBackBundle:LikePostIt')->findUserLikedpost($postid,$currentUser->getId());

        if (!$postliked) {
            $liked=false;
            throw $this->createNotFoundException('Unable to find Liked Post entity.');
        }
        $em->remove($postliked[0]);
        $em->flush();
        $liked=false;
        $likepost = $em->getRepository('EpluggBackBundle:LikePostIt')->findLikedpost($postid);
        return $this->render('@EpluggFront/Post/like_post_block.html.twig', array('postlike'=>$likepost,'post'=>$post,"likedpostsameuser"=>$liked));



    }



}
