<?php
namespace Controller;
include API_DIR.'GlobalUtil.php';
include API_DIR.'Suggestion.php';

class Suggestion extends Controller {
	public function index(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');
			$data['uid'] = \Util\get('uid') ;
			$data['success'] = \Util\get('success');
			$data['lSuggests']= \Util\post('lSuggests');
			if($data['uid']) :
				if($data['lSuggests']) :
					$data = \Api\Suggestion::suggest( $data['lSuggests'], $data['uid'], $id_user);
					if($data['success']) return \Util\redirect('/suggest?uid='.$data['uid'].'&success=1');
				endif;
				$data['contacts'] = \Api\Suggestion::contacts($data['uid'],$id_user);
			endif;
			return $this->out($data,'suggestion/index',true);
		}
	}
}