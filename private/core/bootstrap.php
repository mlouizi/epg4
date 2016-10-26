<?php
namespace Core;
error_reporting(E_ALL);

include(CORE_DIR.'Controller.php');
include(CORE_DIR.'EpluggApi.php');
include(CORE_DIR.'Request.php');
include(CORE_DIR.'Response.php');
include(CORE_DIR.'sqlLib.php');
include(CORE_DIR.'Util.php');
include(LIB_DIR.'db.php');
include(LIB_DIR.'session.php');
include(API_DIR.'User.php');
include(API_DIR.'Access.php');

$_SESSION['country']='TN';
if(!isset($_SESSION['country'])){
	$_SESSION['country'] = file_get_contents("http://api.hostip.info/country.php?ip={$_SERVER['REMOTE_ADDR']}");
}
$user_lang=null;
$user_lang = \Util\get_cookie_language();
if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
if(!is_null($user_lang) && isset(Config\Vars::$languages[$user_lang])) Config\Vars::$user_lang = $user_lang;
include(LANG_DIR.Config\Vars::$user_lang.'.php');

function dispatch_api($route,$routes = null, $internal_call = false){
  	if(is_null($routes)){ $routes = Config\Vars::$GET_routes; }
    if(!isset($routes[$route])){ return error404(); }
    $r = $routes[$route];
    if(\Api\Access::check($r)->is_success()){
     	$controller = $routes[$route];
        include(CONTROLLER_DIR . $controller[0] . '.php');
        $t = "\\Controller\\{$controller[0]}";
        $output_force = false;
        if(isset($controller[3])){ $output_force = $controller[3]; }
        $c = new $t($output_force);
        return $c->$controller[1]();
  	}else{
    	return error404();
  	}
}

function render($data){
    if( isset($data['sys_no_render']) || !isset($data['sys_tpl']) ){
        echo $data;
    }else{
        if(isset($data['sys_head_foot']) && $data['sys_head_foot']===true){
            include(TPL_DIR.'generic'.S.'header.tpl.php');
            include(TPL_DIR.$data['sys_tpl'].'.tpl.php');
            include(TPL_DIR.'generic'.S.'footer.tpl.php');
        }
        else{
            include(TPL_DIR.$data['sys_tpl'].'.tpl.php');
        }
    }
}

function error404(){
     \Util\redirect('/') ;
}

function access_denied(){
   \Util\redirect('/') ;
}

/*function handleError($errno, $errstr,$error_file,$error_line) {
    file_put_contents(DIR . 'log.txt',"{$errno} {$errstr} - {$error_file}:{$error_line}"."\n",FILE_APPEND);
    die();
}

function api($api_path,$routes = null){
    return dispatch_api($api_path,$routes,true);
}*/

namespace Crypt;

function hash($arg){
  	$ret = is_string($arg)?(md5($arg)):(false);
    return $ret;
}