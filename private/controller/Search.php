<?php
namespace Controller;
include API_DIR.'Header.php';
include API_DIR.'Search.php';

class Search extends Controller {
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
			if(\Util\post('topSearch') || \Util\post('advancedSearch') || !isset($_SESSION['searchValues'])) :
				$data['searchValues'] = array(
					'gendre' => \Util\post('gendre'),
					'firstname' => strtolower(\Util\post('firstname')),
					'lastname' => strtolower(\Util\post('lastname')),
					'job' => strtolower(\Util\post('job')),
					'company_name' =>strtolower( \Util\post('company_name')),
					'activity' => strtolower(\Util\post('activity')),
					'country' => \Util\post('country'),
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
			$messagesPerPage = 15 ;			
			$data['count'] = \Api\Search::count_contacts($data['searchValues'],$id_user, \Util\get('directory'))['total'] ;
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
			$data['sql'] = \Api\Search::search_contacts($data['searchValues'], $firstEntry, $id_user, $messagesPerPage, \Util\get('directory'));
			return $this->out($data,'search'.S.'index',true);
		}
	}
	
	public function advanced(){
		if(\Api\User::step_two_completed()->has_error()){				
			\Util\redirect('/signup_step2');
			die();
		}else{	
			$id_user = \Api\User::get_current_user()->get('id_user');	
			$r = \Api\Header::get_top();
			$data = $r->data ;
			$data['suggestions'] = \Api\Suggestion::getSuggestion();
			$data['directories'] = \Api\Directory::getList(0,20);
			return $this->out($data,'search'.S.'advanced',true);
		}
	}
	
	
}