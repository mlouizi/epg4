<?php
namespace Controller;

class Controller {
	protected $response = array();
	
	public function __construct($output_force=false,$internal_call=false){
		switch($output_force){
			case HTML_OUTPUT_ONLY:
				$this->response = new \Core\HtmlResponse(); break;
			case AJAX_OUTPUT_ONLY:
				$this->response = new \Core\AjaxResponse(); break;
			default:
				if(!AJAX_REQUEST){
					$this->response = new \Core\HtmlResponse();
				}else{
					$this->response = new \Core\AjaxResponse();
				}
				break;
		}
	}
		
	public function out($data,$tpl_file = null,$noHeadFoot=null){
		if(!is_null($noHeadFoot)) $this->noHeadFoot();
		if(!is_null($tpl_file)) $this->response->set_tpl($tpl_file);
		return $this->response->produce($data);
	}
	
	public function noHeadFoot(){
		$this->response->unsetHeadFoot();
	}
}