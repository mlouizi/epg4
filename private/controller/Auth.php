<?php
namespace Controller;

class Auth extends Controller {
	public function login(){
		$data = [] ;
		$result = \Api\User::verify_login(strtolower(\Util\post('login_email')),\Util\post('login_password'));
		if($result->is_success()){
			\Api\User::do_login($result);
			\Util\redirect('/');
			die();
		}
		if($_POST) : $data['login_error'] = true ; endif ;
		return $this->out($data,'login',true); 
	}
	
	public function password(){
		$data = [] ;
		if($_POST) :
			$result = \Api\User::email_exists(strtolower(\Util\post('login_email'))) ;
			if($result){
				\Api\User::getPassword(strtolower(\Util\post('login_email')));	
				\Util\redirect('/login/password?success=1');			
			} else {
				$data['password_error'] = true ;
			}			
		endif ;		
		return $this->out($data,'password',true); 
	}
	
	public function logout(){
		if(\Api\User::logout()->is_success()) \Util\redirect('/');
		die();
		return $this->out(\Api\User::logout()->data);
	}

	public function is_logged_in(){
		return $this->out(\Api\User::is_logged_in()->data);
	}
}