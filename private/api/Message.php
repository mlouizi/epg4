<?php
namespace Api;

use \Database\DB as DB;

class Message extends EPluggApi{
	public static function headerMessages($id_user=NULL){
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user'=>$id_user);
		$sql = "SELECT IF(count(M.message) - SUM(M.message_status) > 0,1, 0) AS message_status,
		U.id_user, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, 
		M.message,  M.msg_time FROM users U, messages M WHERE U.id_user=M.id_user_from AND M.id_user_to=:id_user GROUP BY U.id_user ORDER BY M.msg_time DESC" ;
		$res = DB::query($sql,$sql_args);
		
		return \Util\success(array('messages'=>$res));
	} 
	
	public static function count_unread($messages){
		$count_unread = 0;
		foreach($messages as $m){
			if(isset($m['message_status']) && ($m['message_status'] == 1)) $count_unread += 1;
		}
		return $count_unread;
	}
	
	public static function getContacts( $uid=NULL, $keys=NULL, $firstEntry=NULL, $messagesPerPage=NULL, $id_user=NULL) { 
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');	
		$sql_args = array('id_user' => $id_user);
		$sql = "SELECT U.id_user, U.last_message, UPPER(U.lastname) as lastname, U.gendre, U.firstname, U.user_picture FROM users U where U.id_user != :id_user AND ((U.id_user IN (SELECT R.id_user2 FROM relations R where R.id_user1 = :id_user AND  R.relation_status=1  group by R.id_user2)) OR (U.id_user IN (SELECT U1.id_user FROM users U1 , messages M where (U1.id_user=M.id_user_to OR M.id_user_from = U1.id_user) AND (M.id_user_to = :id_user OR  M.id_user_from = :id_user ) group by U1.id_user))	".(($uid)? 'OR U.id_user='.$uid : '').") ".(($keys)? " AND (U.lastname like '%{$keys}%' OR U.firstname like '%{$keys}%')" : '')." group by U.id_user order by U.last_message DESC";
		$res = DB::query($sql,$sql_args);
		return $res;	
	}
	
	public static function getMessages($uid=NULL, $ro = true){
		$id_user = \Api\User::get_current_user()->get('id_user');		
		if(!$uid) :
			$sql_args = array('id_user' => $id_user);			
			$sql = "SELECT U.id_user, U.last_message, UPPER(U.lastname) as lastname, U.gendre, U.firstname, U.user_picture FROM users U where U.id_user != :id_user AND ((U.id_user IN (SELECT R.id_user2 FROM relations R where R.id_user1 = :id_user AND  R.relation_status=1 group by R.id_user2)) OR (U.id_user IN (SELECT U.id_user FROM users U , messages M where (U.id_user=M.id_user_to OR M.id_user_from = U.id_user) AND (M.id_user_to = :id_user OR  M.id_user_from = :id_user ) group by U.id_user))) group by U.id_user order by U.last_message DESC";
			$user_info = DB::query_one($sql,$sql_args);
		else : 
			$sql_args = array('uid' => $uid);			
			$sql = "SELECT U.id_user, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname FROM users U WHERE U.id_user = :uid ";
			$user_info = DB::query_one($sql,$sql_args);	
		endif ;
		$sql_args = array('id_user' => $id_user, 'uid' => $user_info['id_user']);				
		$sql = "SELECT U.id_user, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname, M.msg_time, M.message FROM messages M, users U WHERE ((M.id_user_to = :uid AND M.id_user_from = :id_user) OR (M.id_user_to = :id_user AND M.id_user_from = :uid)) AND M.id_user_from = U.id_user ORDER BY M.`msg_time` ASC";
		$messages = DB::query($sql,$sql_args);

		if ($ro) {
			$sql_args = array('id_user' => $id_user, 'uid' => $user_info['id_user']);
			$sql = "UPDATE messages SET `message_status`=1 WHERE id_user_to = :id_user AND id_user_from = :uid";
			$res = DB::update($sql,$sql_args);
		}	
		return array($messages,$user_info);
	}
	
	public static function SendMessage($message, $uid=NULL){
		$id_user = \Api\User::get_current_user()->get('id_user');		
		if(!$uid) :
			$sql_args = array('id_user' => $id_user);			
			$sql = "SELECT U.id_user, U.last_message, UPPER(U.lastname) as lastname, U.gendre, U.firstname, U.user_picture FROM users U , relations R where U.id_user != :id_user AND (U.id_user=R.id_user1 OR R.id_user2 = U.id_user) AND  (R.id_user1 = :id_user OR  R.id_user2 = :id_user ) AND R.relation_status=1 group by U.id_user order by U.last_message DESC ";
			$user_info = DB::query_one($sql,$sql_args);
			$uid = $user_info['id_user'] ;
		endif ;
		$sql_args = array('id_user' => $id_user, 'uid' => $uid, 'message' => $message);				
		$sql = "Insert into messages (`id_user_to`, `id_user_from`, `msg_time`, `message`, `message_status`) VALUES(:uid, :id_user, '".date('Y-m-d H:i:s')."', :message, 0)";
		$res = DB::insert($sql,$sql_args);
		$sql_args = array('id_user' => $id_user, 'uid' => $uid);	
		$sql = "update users set `last_message` = '".date('Y-m-d H:i:s')."' where id_user IN (:uid, :id_user)";
		$res = DB::insert($sql,$sql_args);
		return $res;
	}
}