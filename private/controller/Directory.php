<?php
namespace Controller;
include API_DIR.'Header.php';

class Directory extends Controller{
	public function index(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');		
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['keys'] = \Util\get('keys') ;	
			$data['letter'] = \Util\get('letter') ;	
			$data['sql'] = array();	
			$messagesPerPage = 20 ;			
			$data['count'] = \Api\Directory::count_contacts($id_user, $data['keys'], $data['letter'])['total'] ;
			$numberOfPages = ceil($data['count'] / $messagesPerPage);
			if(\Util\get('page')) {
				$currentPage = intval(\Util\get('page'));
				if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
			} else {
				$currentPage = 1; 
			} 
			$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
			$data['numberOfPages'] = $numberOfPages ;
			$data['currentPage'] = $currentPage ;
			$data['sql'] = \Api\Directory::contacts($id_user, $firstEntry, $messagesPerPage, $data['keys'], $data['letter']);
			return $this->out($data,'directory'.S.'index',true);
		}
	}
	
	public function ctSearch(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');			
			$data['keys'] = \Util\get('keys') ;	
			$data['letter'] = \Util\get('letter') ;	
			$data['sql'] = array();	
			$messagesPerPage = 20 ;			
			$data['count'] = \Api\Directory::count_contacts($id_user, $data['keys'], $data['letter'])['total'] ;
			$numberOfPages = ceil($data['count'] / $messagesPerPage);
			if(\Util\get('page')) {
				$currentPage = intval(\Util\get('page'));
				if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
			} else {
				$currentPage = 1; 
			} 
			$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
			$data['numberOfPages'] = $numberOfPages ;
			$data['currentPage'] = $currentPage ;
			$data['sql'] = \Api\Directory::contacts($id_user, $firstEntry, $messagesPerPage, $data['keys'], $data['letter']);
			return $this->out($data,'directory'.S.'ctSearch',true);
		}
	}
	
	public function Activity(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{
			$id_user = \Api\User::get_current_user()->get('id_user');
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();		
			$data['keys'] = \Util\get('keys') ;	
			$data['letter'] = \Util\get('letter') ;	
			$data['sql'] = array();	
			$messagesPerPage = 20 ;			
			$data['count'] = \Api\Directory::getCountItemList($data['keys'], $data['letter'])['total'] ;
			$numberOfPages = ceil($data['count'] / $messagesPerPage);
			if(\Util\get('page')) {
				$currentPage = intval(\Util\get('page'));
				if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
			} else {
				$currentPage = 1; 
			} 
			$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
			$data['numberOfPages'] = $numberOfPages ;
			$data['currentPage'] = $currentPage ;
			$data['sql'] = \Api\Directory::getList($firstEntry, $messagesPerPage, $data['keys'], $data['letter']);
			return $this->out($data,'directory'.S.'activity',true);
		}
	}	
	
	public function search(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');		
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['label'] = \Util\get('label') ;
			$data['sql'] = array();	
			$messagesPerPage = 20 ;			
			$data['count'] = \Api\Directory::count_contacts_directory($data['label'])['total'] ;
			$numberOfPages = ceil($data['count'] / $messagesPerPage);
			if(\Util\get('page')) {
				$currentPage = intval(\Util\get('page'));
				if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
			} else {
				$currentPage = 1; 
			} 
			$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
			$data['numberOfPages'] = $numberOfPages ;
			$data['currentPage'] = $currentPage ;
			$data['sql'] = \Api\Directory::contacts_directory($firstEntry, $messagesPerPage, $data['label']);
			return $this->out($data,'directory'.S.'search',true);
		}
	}
}