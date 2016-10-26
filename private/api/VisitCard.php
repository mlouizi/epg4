<?php
namespace Api;

use \Database\DB as DB;

class VisitCard extends EPluggApi {
	public static function get_mini($id_user=null, $type='user_info'){
		if(is_null($id_user)){ $id_user = \Api\User::get_current_user()->get('id_user'); }
		$sql_args = array('id_user' => $id_user);
		$ret[$type] = DB::query_one(\SqlLib\user_info_min, $sql_args);
		$ret[$type]['activities'] = DB::query(\SqlLib\user_activities, $sql_args);
		return \Util\success($ret);
	}
	
	public static function get_full($id_user=null, $type='user_info', $uid=NULL){
		if(is_null($id_user)) $id_user = \Api\User::get_current_user()->get('id_user'); 
		$sql_args = array('id_user' => $id_user, 'uid' => $uid );
		$ret[$type] = DB::query_one(\SqlLib\user_info_full, $sql_args);
		return \Util\success($ret);
	}
}