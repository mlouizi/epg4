<?php
namespace Api;
use \Database\DB as DB;
class Directory extends EPluggApi{
	public static function getRepertoire($id_user) {	
		$sql_args = array('id_user' => $id_user);	
		$sql = "select R.id_user2 from relations R where R.id_user1 = :id_user AND R.relation_status=1 group by R.id_user2" ;
		$res = DB::query($sql,$sql_args);
		return $res;		
	}
	
	public static function count_contacts($id_user, $keys=NULL, $letter=NULL) {
		$sql_args = array('id_user' => $id_user);
		$sql = "SELECT COUNT(U.id_user) AS total FROM users U , relations R where U.id_user = R.id_user2 AND R.id_user1 = :id_user AND R.relation_status=1".(($keys)? " AND (U.firstname like '%{$keys}%' OR U.lastname like '%{$keys}%')" : '').(($letter)? " AND U.firstname like '{$letter}%'" : '');		
		$res = DB::query_one($sql,$sql_args);
		return $res ;
	}
	
	public static function contacts($id_user, $firstEntry=NULL, $messagesPerPage=NULL, $keys=NULL, $letter=NULL) {	
		$sql_args = array('id_user' => $id_user);	
		$sql = "SELECT (SELECT count(DISTINCT(R.id_user1)) from relations R, relations R1 WHERE R.id_user1 = R1.id_user1 AND R.id_user2=:id_user AND R1.id_user2= U.id_user AND R.relation_status=1 AND R1.relation_status=1 ) AS common_friends, U.job, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.company_name, U.company_country, U.company_city, U.company_activity, U.company_logo,  U.id_user FROM users U , relations R where U.id_user = R.id_user2 AND R.id_user1 = :id_user AND R.relation_status=1".(($keys)? " AND (U.firstname like '%{$keys}%' OR U.lastname like '%{$keys}%')" : '').(($letter)? " AND U.firstname like '{$letter}%'" : '')." group by U.id_user order by U.lastname ASC".((isset($firstEntry) && $messagesPerPage)? " limit $firstEntry, $messagesPerPage" : '');
		$res = DB::query($sql,$sql_args);
		return $res;		
	}
	
	public static function getCountItemList($keys=NULL, $letter=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user' => $id_user);
		$where  = " where UA.id_user=R.id_user2 AND R.id_user1=:id_user AND UA.id_user!=:id_user " ;
		$where .= ($keys)? " AND UA.activity like '%{$keys}%' " : '' ;
		$where .= ($letter)? " AND UA.activity like '{$letter}%'" : '' ;		
		$sql = "SELECT count(Distinct(UA.activity)) as total, UA.activity from user_activity UA, relations R ".$where;
		$res = DB::query_one($sql,$sql_args);		
		return $res ;
	}
	
	public static function getList($firstEntry=NULL, $messagesPerPage=NULL, $keys=NULL, $letter=NULL, $id_user=NULL) {
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user'); 
		$sql_args = array('id_user' => $id_user);
		$where  = " where UA.id_user=R.id_user2 AND R.id_user1=:id_user AND UA.id_user!=:id_user " ;
		$where .= ($keys)? " AND UA.activity like '%{$keys}%' " : '' ;
		$where .= ($letter)? " AND UA.activity like '{$letter}%'" : '' ;		
		$sql = "SELECT count(UA.activity) as total, UA.activity from user_activity UA, relations R ".$where." group by UA.activity order by total DESC ".((isset($firstEntry) && $messagesPerPage)? " limit $firstEntry, $messagesPerPage" : '');
		$res = DB::query($sql,$sql_args);		
		return $res ;
	}	
	
	public static function count_contacts_directory($label=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');	
		$sql_args = array('id_user' => $id_user);	
		$sql = "SELECT COUNT(Distinct(U.id_user)) AS total FROM users U, user_activity UA, relations R where U.id_user=UA.id_user AND UA.id_user=R.id_user2 AND R.id_user1=:id_user AND UA.id_user!=:id_user ".(($label)? " AND UA.activity = '{$label}'" : '');
		$res = DB::query_one($sql,$sql_args);				
		return $res ;
	}	
	
	public static function contacts_directory($firstEntry=NULL, $messagesPerPage=NULL, $label=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');	
		$sql_args = array('id_user' => $id_user);	
		$sql = "SELECT (SELECT count(DISTINCT(R.id_user1)) from relations R1, relations R2 WHERE R1.id_user1 = R2.id_user1 AND R1.id_user2=:id_user AND R2.id_user2= U.id_user AND R1.relation_status=1 AND R2.relation_status=1 ) AS common_friends, U.job, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.gendre, U.company_name, U.company_country, U.company_city, U.id_user, U.company_logo, U.company_activity 
		FROM users U, user_activity UA, relations R where U.id_user=UA.id_user AND UA.id_user=R.id_user2 AND R.id_user1=:id_user AND UA.id_user!=:id_user ".(($label)? " AND UA.activity = '{$label}'" : '')." group by U.id_user order by U.lastname ASC".((isset($firstEntry) && $messagesPerPage)? " limit $firstEntry, $messagesPerPage" : '');
		$res = DB::query($sql,$sql_args);		
		return $res;		
	}	
}