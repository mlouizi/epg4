<?php
namespace Api;
use \Database\DB as DB;
class Suggestion extends EPluggApi{
	public static function getSuggestion($id_user=NULL){
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user'=>$id_user);
		$sql = "SELECT 
			(SELECT count(DISTINCT(R.id_user1)) from relations R, relations R1 WHERE R.id_user1 = R1.id_user1 AND R.id_user2=:id_user AND R1.id_user2= U.id_user AND R.relation_status=1 AND R1.relation_status=1 ) AS common_friends, 
			(Select count(*) as total from invitations I where I.id_user_to = :id_user AND I.id_user_from = U.id_user AND I.invitation_status = 0) AS is_invited,
			(Select count(*) as total from invitations I where I.id_user_to = U.id_user AND I.id_user_from = :id_user AND I.invitation_status = 0) AS has_invited,
			U.id_user, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job, U.company_name, U.company_logo, U.company_activity, U.company_city, U.company_country 
			FROM suggestions S, users U 
			WHERE S.id_user_to = :id_user AND S.suggestion_status=0 AND U.id_user=S.id_user_suggested
		";
		$suggestions = DB::query($sql,$sql_args);

		$rand  = 0;
		$count = DB::query_one("SELECT count(id_user) as total FROM users", array());

		$rand = ($count['total'] - 20) > 0 ? rand(0, $count['total'] - 20) : rand(0, $count['total']);	
	
		if(count($suggestions)<20) :	
			$sql = "
				SELECT 
					(SELECT count(DISTINCT(R.id_user1)) from relations R, relations R1 WHERE R.id_user1 = R1.id_user1 AND R.id_user2=:id_user AND R1.id_user2= U.id_user AND R.relation_status=1 AND R1.relation_status=1 ) AS common_friends,
					(Select count(*) as total from invitations I where I.id_user_to = :id_user AND I.id_user_from = U.id_user AND I.invitation_status IN (0,1)) AS is_invited,
					(Select count(*) as total from invitations I where I.id_user_to = U.id_user AND I.id_user_from = :id_user AND I.invitation_status IN (0,1)) AS has_invited,
					U.id_user, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job, U.company_name, U.company_logo, U.company_activity, U.company_city, U.company_country 
				FROM users U 
				WHERE U.id_user NOT IN (SELECT R.id_user1 FROM relations R where R.id_user1=:id_user group by R.id_user1) 
				AND U.id_user NOT IN (SELECT S.id_user_suggested FROM suggestions S WHERE S.id_user_to = :id_user group by S.id_user_suggested) 
			    LIMIT $rand, 20
			";
			$suggestions = array_merge($suggestions, DB::query($sql,$sql_args));
			shuffle($suggestions);
		endif ;	
		return  $suggestions;
	}
	
	public static function contacts($uid, $id_user) {	
		$sql_args = array('id_user' => $id_user, 'uid' => $uid);
		$sql = "SELECT U.id_user, U.user_picture, U.gendre, UPPER(U.lastname) as lastname, U.firstname, U.job FROM users U , relations R where U.id_user != :id_user AND U.id_user NOT IN (SELECT U.id_user FROM users U , relations R where U.id_user != :uid AND (U.id_user=R.id_user1 OR R.id_user2 = U.id_user) AND (R.id_user1 = :uid OR  R.id_user2 = :uid ) group by U.id_user) AND U.id_user != :uid AND (U.id_user=R.id_user1 OR R.id_user2 = U.id_user) AND  (R.id_user1 = :id_user OR  R.id_user2 = :id_user ) AND R.relation_status=1 group by U.id_user order by U.lastname ASC ";
		$res = DB::query($sql,$sql_args);
		return $res;		
	}
	
	public static function suggest( $lSuggests, $uid=NULL, $id_user=NULL) {
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$data = array() ;
		if($uid) :
			$sql_args = array('uid' => $uid);			
			$sql = "SELECT U.id_user, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname FROM users U WHERE U.id_user = :uid ";
			$user_info = DB::query_one($sql,$sql_args);				
			if($user_info) :
				foreach($lSuggests as $item) :
					$sql_args = array('item' => $item, 'uid' => $uid);			
					$sql = "SELECT * FROM suggestions S WHERE (S.id_user_to = :uid AND S.id_user_suggested = :item) OR (S.id_user_to = :item AND S.id_user_suggested = :uid)";
					$suggestion = DB::query_one($sql,$sql_args);
					if(!$suggestion) :
						$sql_args = array('item' => $item, 'id_user' => $id_user, 'uid' => $uid);				
						$sql = "Insert into suggestions (`id_user_from`, `id_user_to`, `id_user_suggested`, `suggestion_status`, `suggestion_time`) VALUES(:id_user, :item, :uid, 0, '".date('Y-m-d H:i:s')."')";
						$res = DB::insert($sql,$sql_args);
					endif ;
				endforeach ;
				$data['success'] = TRUE ;
				$data['message'] = \Lang\suggestion_send_success ;
			else :
				$data['success'] = FALSE ;
				$data['message'] = \Lang\contact_error ;		
			endif ;
		else :
			$data['success'] = FALSE ;
			$data['message'] = \Lang\select_contact ;
		endif ;		
		return $data;
	}
}
