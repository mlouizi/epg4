<?php
namespace Api;
use \Database\DB as DB;
class Activity extends EPluggApi{
	public static function signed_up($id_user=null){
		if(is_null($id_user)){ $id_user = \Api\User::get_current_user()->get('id_user'); }
		$sql_args = array( 'id_user'=>$id_user, 'activity'=>'0' );
		DB::insert('INSERT INTO activity (id_user,activity) VALUES(:id_user,:activity)',$sql_args);
	}	
	
	public static function getCountNews($id= NULL, $id_user=NULL){
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user'=>$id_user);
		$where = " where (U.id_user=A.id_user OR A.id_user2 = U.id_user) AND (A.id_user = :id_user OR A.id_user2 = :id_user OR A.id_user IN (SELECT R.id_user2 FROM relations R where R.id_user1=:id_user AND R.relation_status=1) OR A.id_user2 IN (SELECT R1.id_user2 FROM relations R1 where R1.id_user1=:id_user AND R1.relation_status=1))";
		if($id) : $sql_args['id'] = $id ; $where .= " AND A.id_user=:id OR A.id_user2 = :id " ; endif ;
		$sql = "SELECT count(Distinct(A.id_activity)) AS total FROM activity A, users U ".$where ;		
		$ret = DB::query_one($sql,$sql_args);
		return $ret;
	}	
		
	public static function getNews($firstEntry, $messagesPerPage, $id= NULL, $id_user=NULL){
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user'=>$id_user);
		$where = " where (U.id_user=A.id_user OR A.id_user2 = U.id_user) AND ( A.id_user = :id_user OR A.id_user2 = :id_user OR A.id_user IN (SELECT R.id_user2 FROM relations R where R.id_user1=:id_user AND R.relation_status=1) OR A.id_user2 IN (SELECT R1.id_user2 FROM relations R1 where R1.id_user1=:id_user AND R1.relation_status=1))";
		if($id) : $sql_args['id'] = $id ; $where .= " AND A.id_user=:id OR A.id_user2 = :id AND U.id_user = :id" ; endif ;
		$sql = " SELECT 
			(Select count(*) as total from invitations I where I.id_user_to = :id_user AND I.id_user_from = U.id_user AND I.invitation_status IN (0,1)) AS is_invited,
			(Select count(*) as total from invitations I where I.id_user_to = U.id_user AND I.id_user_from = :id_user AND I.invitation_status IN (0,1)) AS has_invited,
			A.id_activity, A.activity_time, A.activity, A.description, A.id_user as id_user1, A.id_user2, U.id_user, U.gold, U.company_name, U.company_logo, U.company_activity, U.company_city, U.company_country, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job FROM activity A, users U ".$where." group by A.id_activity ORDER BY A.id_activity DESC limit $firstEntry, $messagesPerPage" ;			

		$ret['news'] = DB::query($sql,$sql_args);

		return \Util\success($ret);
	}
		
	public static function getActivityDesc($item){
		$ret = '';
		switch($item['activity']){
			case 0:
				$ret = \Lang\label_activity." <img alt='' src='images/eplugg_home.png'>" ;
				break;
			case 1:
				break;
			case 2:
				$ret = \Lang\label_activity2 ;
				break;
			case 3:
				$ret = \Lang\label_activity3 ;
				break;
			case 4:
				$ret = \Lang\label_activity4 ;
				break;
			case 5:
				$ret = \Lang\label_activity5 ;
				break;
			case 6:
				$ret = \Lang\label_activity6 ;
				break;
			case 7:
				$ret = \Lang\label_activity7 ;
				break;
			case 8:
				$ret = \Lang\label_activity8 ;
				break;
			case 9:
				$ret = \Lang\label_activity9 ;
				break;
			case 10:
				$ret = \Lang\label_activity10 ;
				break;
			case 11:
				$ret = \Lang\label_activity11 ;
				break;
		}	
		return $ret;
	}
}