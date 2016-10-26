<?php
namespace Core;

class Response{
	private $response = array();
	
	public function set_tpl($tpl_file){}
	
	public function unsetHeadFoot(){}
}

class HtmlResponse extends Response{
    private $response = array('sys_tpl'=>'test', 'sys_title'=>'ePlugg', 'sys_head_foot' => true);
	
    public function __construct($data = array()){
        $this->response = array_merge($this->response,$data);
    }
	
    public function produce($data = array()){
        return array_merge($this->response,$data);
    }
	
    public function set_tpl($tpl_file){
    	$this->response['sys_tpl'] = $tpl_file;
    }
	
    public function unsetHeadFoot(){
    	$this->response['sys_head_foot'] = false;
    }
}

class AjaxResponse extends Response{
    public function __construct($data = array()){
        $this->response = $data;
    }
	
    public function produce($data = array()){
        return json_encode($data);
    }
}


/*




class ApiResponse extends Response{
	public function produce($data = array()){
		return $data;
	}
}*/