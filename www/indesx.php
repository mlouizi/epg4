<?php
namespace Core;
ob_start();
include('../private/config.php');
include(CORE_DIR.'bootstrap.php');
$request = new Request();
if($request->request_method === "GET"){
	$routes = Config\Vars::$GET_routes;
}else if($request->request_method === "POST"){
	$routes = Config\Vars::$POST_routes;
}else{
	$routes = array();
}
$data = dispatch_api($request->api_path,$routes);
render($data);
echo ob_get_clean();