<?php
namespace Database;

use \PDO;

class DB{
	static public $dblink = null;
	
	static public function init(){
		if(is_null(self::$dblink)) self::connect();
	}

    static public function connect(){
		$dblink = true;
		$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::ATTR_PERSISTENT => true );
		try{
			self::$dblink = new PDO('mysql:host='.DB_HOST.';charset=utf8;port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASSWD,$options);
		}catch(Exception $e){
			echo 'An error has occured! Please contact webmaster.';
			die();
		}
	}
	
	static public function query($sql,$args){
		$db = self::$dblink;
		$req = $db->prepare($sql);
		
		$req->execute($args);
		$res = ($req !== false)? $req->fetchAll(PDO::FETCH_ASSOC) : false;
		return $res;
	}
	
	static public function query_one($sql,$args){
		$db = self::$dblink;
		$req = $db->prepare($sql);
		$req->execute($args);
		$res = ($req !== false)? $req->fetch(PDO::FETCH_ASSOC) : false;
		return $res;
	}
	
	static public function insert($sql,$args){
		$db = self::$dblink;
		$id = null;
		try {
			$req = $db->prepare($sql);
			$db->beginTransaction();
			$req->execute( $args );
			$id = $db->lastInsertId();
			$db->commit();
		} catch(PDOExecption $e) {
			$db->rollback();
		}
		return $id;
	}
	
	static public function update($sql,$args){
		$db = self::$dblink;
		$res = true;
		try {
			$req = $db->prepare($sql);
			$db->beginTransaction();
			$req->execute( $args );
			$db->commit();
		} catch(PDOExecption $e) {
			$db->rollback();
			$res = false;
		}
		return $res;
	}
	
	static public function query_muted($sql,$args){
		$db = self::$dblink;
		$req = $db->prepare($sql);
		$req->execute($args);
		if($req !== false){
			return true;
		}else{
			return false;
		}
	}
		
	static public function query_raw($sql){
		$db = self::$dblink;
		$req = $db->query($sql);
		if($req !== false){
			$res = $req->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$res = false;
		}
		return $res;
	}
	
	static public function query_one_raw($sql){
		$db = self::$dblink;
		$req = $db->query($sql);
		if($req !== false){
			$res = $req->fetch(PDO::FETCH_ASSOC);
		}else{
			$res = false;
		}
		return $res;
	}
	
	static public function query_raw_muted($sql){
		$db = self::$dblink;
		$req = $db->exec($sql);
		return $req;
	}
	
	static public function escape($str){
        return mysql_real_escape_string($str);
    }		 
}
DB::init();