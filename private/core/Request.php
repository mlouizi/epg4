<?php
namespace Core;

class Request{
    public $api_path = "";
    public $api_params = "";
    public $request_method = "";
    public function __construct(){
        $url = ltrim(getenv('REQUEST_URI'),'/');
        $api_path = explode('?',$url,2);
        $this->api_path = $api_path[0];
        if(count($api_path)>1){ $this->api_params = $api_path[1]; }
        $this->request_method = $_SERVER['REQUEST_METHOD'];
    }
}