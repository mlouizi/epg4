<?php
namespace Controller;
include API_DIR.'Header.php';

class Invitation extends Controller {
	public function index(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');
			$invitations = \Api\Invitation::getInvitations();
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['invitations'] = $invitations ;
			return $this->out($data,'invitation/index',true);
		}
	}
	
	public function plugger(){	
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$data = array() ;
			if(\Util\post('uid')) :
				$res = \Api\Invitation::plugger(\Util\post('uid'));
				$data = $res ;
			endif;
			return $this->out($data);
		}
	}
	
	public function vplugger(){	
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$data = array() ;
			if(\Util\post('uid')) :
				$res = \Api\Invitation::vplugger(\Util\post('uid'));
				$data = $res ;
			endif;
			return $this->out($data);	
		}
	}
	
	public function iplugger(){	
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$data = array() ;
			if(\Util\post('uid')) : $data = \Api\Invitation::iplugger(\Util\post('uid')); endif;
			return $this->out($data);	
		}
	}
}