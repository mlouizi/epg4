<?php
namespace Controller;
include API_DIR.'Header.php';

class Message extends Controller {
	public function index(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$uid = \Util\get('uid');		
			if(!is_numeric($uid)) $uid=null;
			if(\Util\post('send_message')) :
				$res = \Api\Message::SendMessage(\Util\post('message'),$uid);
				\Util\redirect('/messages'.(($uid)? '?uid='.$uid : ''));
			endif ;		
			list($messages,$friend_info) = \Api\Message::getMessages($uid);	
			$r = \Api\Header::get_top();
			$data = $r->data ;	
			$data['contacts'] = \Api\Message::getContacts($uid);
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['messages'] = $messages;
			$data['friend_info'] = $friend_info;
			return $this->out($data,'message/index',true);
		}
	}
	
	public function contacts(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$uid = \Util\get('uid');		
			if(!is_numeric($uid)) $uid=null;
			if(\Util\post('send_message')) :
				$res = \Api\Message::SendMessage(\Util\post('message'),$uid);
				\Util\redirect('/messages'.(($uid)? '?uid='.$uid : ''));
			endif ;		
			list($messages,$friend_info) = \Api\Message::getMessages($uid);	
			$r = \Api\Header::get_top();
			$data = $r->data ;	
			$data['contacts'] = \Api\Message::getContacts($uid);
			$data['suggestions'] = \Api\Suggestion::getSuggestion();		
			$data['friend_info'] = $friend_info;
			return $this->out($data,'message/contacts',true);
		}
	}
	
	public function search(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');
			$uid = \Util\get('uid');		
			if(!is_numeric($uid)) $uid=null;
			$keys = \Util\post('keys');
			$data['uid'] = \Util\post('uid');
			$data['contacts'] = \Api\Message::getContacts($uid, $keys);
			return $this->out($data,'message/search',true);
		}
	}
}