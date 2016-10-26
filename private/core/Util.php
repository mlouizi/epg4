<?php
namespace Util;

function get_browser_language() {
    $langs = array();
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i',
        $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
        if (count($lang_parse[1])) {
            $langs = array_combine($lang_parse[1], $lang_parse[4]);
            foreach ($langs as $lang => $val) { if ($val === '') $langs[$lang] = 1; }
            arsort($langs, SORT_NUMERIC);
        }
    }
    reset($langs);
    $lang = key($langs);
    if (stristr($lang,"-")) {$tmp = explode("-",$lang); $lang = $tmp[0]; }
    return $lang;
}
function get_cookie_language() { return (isset($_COOKIE['lang']) and is_string($_COOKIE['lang']))? $_COOKIE['lang'] : NULL; }
function success($data = []){ return (new Result)->success($data); }
function post($v){ return param($_POST,$v); }
function param($argv,$v){ return (isset($argv[$v]))? $argv[$v] : false; }
function is_false($arg){return $arg === false;}
function is_true($arg){return $arg === true;}
function redirect($location){ header('Location: '.$location); exit(); }
function get($v){ return param($_GET,$v); }
function error($data = []){ return (new Result)->error($data); }
function post_multi(){
    $ret = [];
    $argv = func_get_args();
    foreach($argv as $arg){ $ret[$arg] = post($arg); }
    return $ret;
}
function multi_is_empty(){
    $argv = func_get_args();
    $res = !(is_array($argv) && (count($argv)>0));
    foreach($argv as $arg){
        if(empty($arg)){
            $res = true;
            break;
        }
    }
    return $res;
}
function strlen($str){ return \strlen($str); }
function diffDateNow($date){
    $d = new \DateTime($date);
    $n = new \DateTime("now");
    $interval = $n->diff($d);
    return $interval;
}
function getDayFormat($day){
	if($day==date('d-m-Y')) :	
		$day = \Lang\today  ;
	elseif($day == date('d-m-Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d') - 1, date('Y'))))  : 			
		$day = \Lang\yesterday  ;
   	endif ;
    return $day;
}
class Result {
    public $data = array('success'=>false);

    public function success($data = []){
        $this->data['success'] = true;
        if(!empty($data)) $this->data = array_merge($this->data,$data); 
        return $this;
    }
	
	public function is_success(){ return $this->data['success'] === true; }
	
	public function state($v){
        ($v === true)? $this->success() : $this->error();
        return $this;
    }
	
	public function error($data = []){
        $this->data['success'] = false;
        if(!empty($data)) $this->data = array_merge($this->data,$data);        
        return $this;
    }
	
	public function get($v){ return (isset($this->data[$v]))? $this->data[$v] : $this; }
	
	public function has_error(){ return $this->data['success'] === false; }
	
	public function merge($r){
        if(is_array($r)){
            $this->data = array_merge($this->data,$r);
        }else if($r instanceof self){
            $this->data = array_merge($this->data,$r->data);
        }
        return $this;
    }
}

/*function multi_is_null(){
    $argv = func_get_args();
    $res = !(is_array($argv) && (count($argv)>0));
    foreach($argv as $arg){
        if(is_null($arg)){
            $res = true;
            break;
        }
    }
    return $res;
}
function multi_is_false(){
    $argv = func_get_args();
    $res = !(is_array($argv) && (count($argv)>0));
    foreach($argv as $arg){
        if($arg === false){
            $res = true;
            break;
        }
    }
    return $res;
}

function multi_strlen(){
    $argv = func_get_args();
    $res = is_array($argv) && (count($argv)>0);
    $length = array_shift($argv);
    foreach($argv as $arg){
        if(strlen($arg)<$length){
            $res = false;
            break;
        }
    }
    return $res;
}


function unsafe($v){
    echo htmlspecialchars($v);
}

function log_error($error){
    if(!is_string($error))
        file_put_contents(DIR . 'log.txt',var_export($error,true)."\n",FILE_APPEND);
    else
        file_put_contents(DIR . 'log.txt',$error."\n",FILE_APPEND);
}




function getIntervalDesc($interval){
    if($interval->y > 0){
        return sprintf(\Lang\years_ago,$interval->y);
    }else if($interval->m > 0){
        return sprintf(\Lang\minutes_ago,$interval->m);
    }else if($interval->d == 1){
        return sprintf(\Lang\days_ago,$interval->d);
    }else if($interval->d > 0){
        return sprintf(\Lang\days_ago,$interval->d);
    }else if($interval->h > 0){
        return sprintf(\Lang\hours_ago,$interval->h);
    }else if($interval->i > 0){
        return sprintf(\Lang\minutes_ago,$interval->i);
    }else if($interval->s > 0){
        return sprintf(\Lang\seconds_ago,$interval->s);
    }
}
function getLastedTime($obj,$field){
    $interval = \Util\diffDateNow($obj[$field]);
    $td = \Util\getIntervalDesc($interval);
    return $td;
}*/