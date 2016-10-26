<?php
namespace Api;

use \Database\DB as DB;

class Search extends EPluggApi{
	public static function count_contacts_home($searchValues) {
		$sql_args = array() ;
		$where = " where U.login_email != '' ";
		if($searchValues['advancedSearch'] && $searchValues['advancedSearch']==1) :
			$where .= ($searchValues['gendre']!='')? " AND U.gendre = '{$searchValues['gendre']}'" : '' ;
			$where .= ($searchValues['firstname']!='')? " AND LOWER(U.firstname) like '%{$searchValues['firstname']}%'" : '' ;
			$where .= ($searchValues['lastname']!='')? " AND LOWER(U.lastname) like '%{$searchValues['lastname']}%'" : '' ;
			$where .= ($searchValues['job']!='')? " AND LOWER(U.job) like '%{$searchValues['job']}%'" : '' ;
			$where .= ($searchValues['company_name']!='')? " AND LOWER(U.company_name) like '%{$searchValues['company_name']}%'" : '' ;
			$where .= ($searchValues['activity']!='')? " AND LOWER(U.company_activity) like '%{$searchValues['activity']}%'" : '' ;
			$where .= ($searchValues['country']!='')? " AND U.company_country = '".$searchValues['country']."'" : '' ;
			$where .= ($searchValues['company_city']!='')? " AND LOWER(U.company_city) like '%{$searchValues['company_city']}%'" : '' ;			
		endif ;
		$sql = "SELECT COUNT(*) AS total FROM users U ".$where;		
		$res = DB::query_one($sql,$sql_args);		
		return $res ;
	}
	
	public static function search_contacts_home($searchValues,$firstEntry, $id_user, $messagesPerPage) {
		$sql_args = array('id_user' => $id_user) ;
		$where = " where U.login_email != '' ";	
		if($searchValues['advancedSearch']) :
			$where .= ($searchValues['gendre']!='')? " AND U.gendre = '{$searchValues['gendre']}'" : '' ;
			$where .= ($searchValues['firstname']!='')? " AND LOWER(U.firstname) like '%{$searchValues['firstname']}%'" : '' ;
			$where .= ($searchValues['lastname']!='')? " AND LOWER(U.lastname) like '%{$searchValues['lastname']}%'" : '' ;
			$where .= ($searchValues['job']!='')? " AND LOWER(U.job) like '%{$searchValues['job']}%'" : '' ;
			$where .= ($searchValues['company_name']!='')? " AND LOWER(U.company_name) like '%{$searchValues['company_name']}%'" : '' ;
			$where .= ($searchValues['activity']!='')? " AND LOWER(U.company_activity) like '%{$searchValues['activity']}%'" : '' ;
			$where .= ($searchValues['country']!='')? " AND U.company_country = '".$searchValues['country']."'" : '' ;
			$where .= ($searchValues['company_city']!='')? " AND LOWER(U.company_city) like '%{$searchValues['company_city']}%'" : '' ;
		endif ;
		$sql = "SELECT U.job, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.company_name, U.company_country, U.company_city, U.company_activity, U.company_logo, U.id_user FROM users U ".$where."  group by U.id_user limit $firstEntry, $messagesPerPage";
		$res = DB::query($sql,$sql_args);
		return $res;		
	}
	
	public static function count_contacts($searchValues, $id_user, $directory=false) {
		$sql_args = array('id_user' => $id_user) ;		
		$where = " where U.id_user != :id_user ";
		if(isset($directory) && $directory==1) : $where .= ' and R.id_user2=U.id_user and R.id_user1 = :id_user AND R.relation_status=1 ' ; endif ;
		if($searchValues['topSearch'] && $searchValues['topSearch']==1) :
			$where .= 'AND (LOWER(U.company_activity) like :activity OR LOWER(U.firstname) like :firstname OR LOWER(U.lastname) like :lastname OR LOWER(U.job) like :job OR LOWER(U.company_name) like :company_name OR LOWER(U.company_city) like :company_city) ' ;
			$sql_args = array( 				
				'id_user' => $id_user,
				'activity'	=> "%{$searchValues['search']}%", 
				'firstname' => "%{$searchValues['search']}%",  
				'lastname' => "%{$searchValues['search']}%", 
				'job'	=> "%{$searchValues['search']}%", 
				'company_name'	=> "%{$searchValues['search']}%", 
				'company_city' =>"%{$searchValues['search']}%"
			);
		elseif($searchValues['advancedSearch'] && $searchValues['advancedSearch']==1) :
			$where .= ($searchValues['gendre']!='')? " AND U.gendre = '{$searchValues['gendre']}'" : '' ;
			$where .= ($searchValues['firstname']!='')? " AND LOWER(U.firstname) like '%{$searchValues['firstname']}%'" : '' ;
			$where .= ($searchValues['lastname']!='')? " AND LOWER(U.lastname) like '%{$searchValues['lastname']}%'" : '' ;
			$where .= ($searchValues['job']!='')? " AND LOWER(U.job) like '%{$searchValues['job']}%'" : '' ;
			$where .= ($searchValues['company_name']!='')? " AND LOWER(U.company_name) like '%{$searchValues['company_name']}%'" : '' ;
			$where .= ($searchValues['activity']!='')? " AND LOWER(U.company_activity) like '%{$searchValues['activity']}%'" : '' ;
			$where .= ($searchValues['country']!='' && isset(\Core\Config\Vars::$countries[$searchValues['country']]))? " AND U.company_country = '".$searchValues['country']."'" : '' ;
			$where .= ($searchValues['company_city']!='')? " AND LOWER(U.company_city) like '%{$searchValues['company_city']}%'" : '' ;
			$sql_args = array('id_user' => $id_user);
		endif ;
		$sql = "SELECT COUNT(*) AS total FROM users U ".((isset($directory) && $directory==1)? ', relations R ' : '').$where;
		$res = DB::query_one($sql,$sql_args);		
		return $res ;
	}
	
	public static function search_contacts($searchValues,$firstEntry, $id_user, $messagesPerPage, $directory=false) {			
		$sql_args = array('id_user' => $id_user) ;
		$where = " where U.id_user != :id_user ";
		if(isset($directory) && $directory==1) : $where .= ' and R.id_user2=U.id_user and R.id_user1 = :id_user AND R.relation_status=1 ' ; endif ;
		if($searchValues['topSearch']) :
			$where .= 'AND (LOWER(U.company_activity) like :activity OR LOWER(U.firstname) like :firstname OR LOWER(U.lastname) like :lastname OR LOWER(U.job) like :job OR LOWER(U.company_name) like :company_name OR LOWER(U.company_city) like :company_city) ' ;
			$sql_args = array( 				
				'id_user' => $id_user,
				'activity'	=> "%{$searchValues['search']}%", 
				'firstname' => "%{$searchValues['search']}%",  
				'lastname' => "%{$searchValues['search']}%", 
				'job'	=> "%{$searchValues['search']}%", 
				'company_name'	=> "%{$searchValues['search']}%",  
				'company_city' =>"%{$searchValues['search']}%"
			);
		elseif($searchValues['advancedSearch']) :
			$where .= ($searchValues['gendre']!='')? " AND U.gendre = '{$searchValues['gendre']}'" : '' ;
			$where .= ($searchValues['firstname']!='')? " AND LOWER(U.firstname) like '%{$searchValues['firstname']}%'" : '' ;
			$where .= ($searchValues['lastname']!='')? " AND LOWER(U.lastname) like '%{$searchValues['lastname']}%'" : '' ;
			$where .= ($searchValues['job']!='')? " AND LOWER(U.job) like '%{$searchValues['job']}%'" : '' ;
			$where .= ($searchValues['company_name']!='')? " AND LOWER(U.company_name) like '%{$searchValues['company_name']}%'" : '' ;
			$where .= ($searchValues['activity']!='')? " AND LOWER(U.company_activity) like '%{$searchValues['activity']}%'" : '' ;
			$where .= ($searchValues['country']!='' && isset(\Core\Config\Vars::$countries[$searchValues['country']]))? " AND U.company_country = '".$searchValues['country']."'" : '' ;
			$where .= ($searchValues['company_city']!='')? " AND LOWER(U.company_city) like '%{$searchValues['company_city']}%'" : '' ;			
			$sql_args = array('id_user' => $id_user);
		endif ;
		$sql = "SELECT 
			(SELECT count(DISTINCT(R.id_user1)) from relations R, relations R1 WHERE R.id_user1 = R1.id_user1 AND R.id_user2=:id_user AND R1.id_user2= U.id_user AND R.relation_status=1 AND R1.relation_status=1 ) AS common_friends, 
			(Select count(*) as total from invitations I where I.id_user_to = :id_user AND I.id_user_from = U.id_user AND I.invitation_status IN (0,1)) AS is_invited,
			(Select count(*) as total from invitations I where I.id_user_to = U.id_user AND I.id_user_from = :id_user AND I.invitation_status IN (0,1)) AS has_invited,		
			U.job, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.company_name, U.company_country, U.company_city, U.company_activity, U.company_logo, U.id_user 
		FROM users U ".((isset($directory) && $directory==1)? ', relations R ' : '').$where."  group by U.id_user limit $firstEntry, $messagesPerPage";		
		$res = DB::query($sql,$sql_args);
		return $res;		
	}
}