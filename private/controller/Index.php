<?php
namespace Controller;
include API_DIR.'Header.php';
include API_DIR.'Search.php';
include API_DIR.'Cv.php';

class Index extends Controller {
	public function main(){		
		if(\Api\User::is_logged_in()->is_success()){
			if(\Api\User::step_two_completed()->has_error()){				
				\Util\redirect('/signup_step2');
				die();
			}else{
				$id_user = \Api\User::get_current_user()->get('id_user');
				$r = \Api\Header::get_top();
				$data = $r->data ;
				$data['suggestions'] = \Api\Suggestion::getSuggestion();
				$data['directories'] = \Api\Directory::getList(0,20);
				$messagesPerPage = 10 ;
				$data['count'] = \Api\Activity::getCountNews()['total'] ;				
				$numberOfPages = ceil($data['count'] / $messagesPerPage);				
				if(\Util\get('page')) {
					$currentPage = intval(\Util\get('page'));
					if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
				} else {
					$currentPage = 1; 
				} 
				$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
				$data['numberOfPages'] = $numberOfPages ;				
				$data['contacts'] = \Api\Message::getContacts();
				$list_contacts = array() ;
				foreach($data['contacts'] as $item): $list_contacts[] = $item['id_user'] ; endforeach ;
				$data['news'] = \Api\Activity::getNews($firstEntry, $messagesPerPage)->data['news'];
				$data['list_users'] = $list_contacts; 				
				return $this->out($data,'user_index',true);
			}
		} else {
			return $this->out([],'index',true); 
		}
	}
	
	public function search(){
		if(\Util\post('topSearch') || \Util\post('advancedSearch') || !isset($_SESSION['searchValues'])) :
			$data['searchValues'] = array(
				'gendre' => \Util\post('gendre'),
				'firstname' => strtolower(\Util\post('firstname')),
				'lastname' => strtolower(\Util\post('lastname')),
				'job' => strtolower(\Util\post('job')),
				'company_name' => strtolower(\Util\post('company_name')),
				'activity' => strtolower(\Util\post('company_activity')),
				'country' => \Util\post('company_country'),
				'company_city' => strtolower(\Util\post('company_city')),
				'search' => strtolower(\Util\post('topSearchInput')),
				'topSearch' => \Util\post('topSearch'),
				'advancedSearch' => \Util\post('advancedSearch')
			);
			$_SESSION['searchValues'] = $data['searchValues'];
		else :
			$data['searchValues'] = $_SESSION['searchValues'];
		endif ;
		$data['sql'] = array();	
		$messagesPerPage = 20 ;			
		$data['count'] = \Api\Search::count_contacts_home($data['searchValues'])['total'] ;
		$numberOfPages = ceil($data['count'] / $messagesPerPage);
		if(isset($_REQUEST['page'])) {
		     $currentPage = intval($_REQUEST['page']);
     		if($currentPage> $numberOfPages) $currentPage = $numberOfPages ;
		} else {
		    $currentPage = 1; 
		}	 
		$firstEntry = ($currentPage - 1) * $messagesPerPage; 		
		$data['numberOfPages'] = $numberOfPages ;
		$data['currentPage'] = $currentPage ;
		$data['sql'] = \Api\Search::search_contacts_home($data['searchValues'], $firstEntry, NULL, $messagesPerPage);
		return $this->out($data,'search',true);	
	}
	
	public function profile(){
		$id = \Util\get('id');
		if(!is_numeric($id)) \Util\redirect('/') ;
		if(\Api\User::is_logged_in()->is_success()){
			\Util\redirect('/user?id='.$id);
			die();			
		} else {			
			$r = \Api\VisitCard::get_full($id, 'user_profile');
			$data = $r->data;	
			return $this->out($data,'profile',true);	
		}
	}
	
	public function change_language(){
		if(isset($_GET['c']) and is_string($_GET['c'])) \Api\User::set_lang($_GET['c']);
		\Util\redirect('/');
	}
	
	public function legal_informations(){
		$user_lang=null;
		$user_lang = \Util\get_cookie_language();
		if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
		$data = [] ;
		if(\Api\User::is_logged_in()->is_success()){
			$id_user = \Api\User::get_current_user()->get('id_user');	
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['is_logged_in'] = true ;
		} else {
			$data['is_logged_in'] = false ;
		}
		return $this->out($data,'pages'.S.$user_lang.S.'legal_info',true);
	}
	
	public function about(){
		$user_lang=null;
		$user_lang = \Util\get_cookie_language();
		if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
		$data = [] ;
		if(\Api\User::is_logged_in()->is_success()){
			$id_user = \Api\User::get_current_user()->get('id_user');	
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['is_logged_in'] = true ;
		} else {
			$data['is_logged_in'] = false ;
		}
		return $this->out($data,'pages'.S.$user_lang.S.'about',true);
	}
	
	public function terms(){
		$user_lang=null;
		$user_lang = \Util\get_cookie_language();
		if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
		$data = [] ;
		if(\Api\User::is_logged_in()->is_success()){
			$id_user = \Api\User::get_current_user()->get('id_user');	
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			$data['is_logged_in'] = true ;
		} else {
			$data['is_logged_in'] = false ;
		}
		return $this->out($data,'pages'.S.$user_lang.S.'terms',true);
	}
}