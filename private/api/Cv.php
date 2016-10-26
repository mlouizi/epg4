<?php
namespace Api;
use \Database\DB as DB;
class Cv extends EPluggApi {	
	public static function getCvs($uid) {
		$sql_args = array('uid' => $uid);			
		$sql = "SELECT * FROM cv_pro C WHERE C.id_user = :uid order by from_date DESC";
		$cvs = DB::query($sql,$sql_args);	
		return $cvs;
	}
	
	public static function getCv($id, $id_user) {
		$sql_args = array('id' => $id, 'id_user' => $id_user);			
		$sql = "SELECT * FROM cv_pro C WHERE C.id = :id AND C.id_user = :id_user order by from_date DESC";
		$cv = DB::query_one($sql,$sql_args);	
		return $cv;
	}
	
	public static function saveCv($id=NULL, $id_user, $cv) {
		$sql_args = $cv;
		$sql_args['id_user']= $id_user ;		
		if($id) :	
			$sql_args['id']= $id ;
			$sql = "UPDATE cv_pro SET from_date= :from_date, to_date= :to_date, company= :company, work_status=:work_status, place=:place WHERE id_user = :id_user AND id=:id" ;			
			$res = DB::update($sql,$sql_args);
		else :
			$sql = "INSERT into cv_pro (id_user, from_date, to_date, company, work_status, place) VALUES (:id_user, :from_date, :to_date, :company, :work_status, :place)";
			$res = DB::update($sql,$sql_args);
		endif ;	
		return (new \Util\Result)->state($res);
	}
	
	public static function uploadCv($fileName, $id_user) {
		$sql_args = array( 'fileName' => $fileName,	'id_user' => $id_user);		
		$res = DB::update('UPDATE users SET cv_name = :fileName WHERE id_user = :id_user',$sql_args);
		return $res;
	}
	
	public static function delete($id, $id_user=NULL) {		
		$sql_args = array('id_user' => $id_user, 'id' => $id) ;
		$sql = "delete from cv_pro where  id_user = :id_user and id = :id " ;
		$res = DB::query_muted($sql,$sql_args);
		return (new \Util\Result)->state($res);		
	}
}