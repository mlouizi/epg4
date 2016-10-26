<?php
namespace Api;
class Access extends EPluggApi {
	public static function check($route){
		$access = ACCESS_PRIVATE;
		if(isset($route[2])){ $access = $route[2]; }
		switch($access){
			case ACCESS_PRIVATE:
				if(\Api\User::is_logged_in()->is_success()){
					return \Util\success();
				}else{
					return \Util\error();
				}
				break;
			case ACCESS_PUBLIC:
				return \Util\success();
				break;
			default:
				return \Util\error();
		}
	}
}