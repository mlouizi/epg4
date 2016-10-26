<?php
namespace Api;
include API_DIR.'sfThumbnail.php';
class GlobalUtil extends EPluggApi {
	public static function generateFileName($file) {
		$fileName = explode(".",$file );
    	$originalFileName = implode("." , array( self::slugify($fileName[0]) , $fileName[1] ) );
    	return date("YmdGis")."__".$originalFileName;
	}
	
	public static function slugify($text) {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = self::wd_remove_accents($text);
        $text = trim($text, '-');
        $text = strtolower($text);
        $text = preg_replace('~[^-\w\p{Arabic}]+~u', '', $text);
        if ( empty($text)) return 'n-a';
        return $text;
    }
	
	public static function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);        
        $str = preg_replace('#\&([A-za-z])(?:acute|cedil|circ|grave|ring|tilde|uml)\;#', '\1', $str);
        $str = preg_replace('#\&([A-za-z]{2})(?:lig)\;#', '\1', $str); 
        $str = preg_replace('#\&[^;]+\;#', '', $str);         
        return $str;
    }
	
	public static function imageResize($fileName, $path, $width, $height) {
        $thumbnail = new \Api\sfThumbnail($width, $height);
        $thumbnail->loadFile($path.$fileName);
        $thumbnail->save($path.$fileName);
    }
	
	public static function formatterName($firstname, $lastname) {
        $string = self::str_reduce(ucfirst(strtolower($firstname)).' '.strtoupper($lastname),15,'...')  ;
        return $string;
    }
	
	public static function formatterCompanyName($company_name) {
        return self::str_reduce(ucfirst(strtolower($company_name)),15,'...')  ;
    }
	
	public static function str_reduce($string, $maxlenght = 20, $suffix = "...") {
        if (strlen($string) > $maxlenght) :
            $string = substr($string, 0, $maxlenght);
            $string .= " ".$suffix;
        endif ;
        return $string;
    }
	
	public static function formatterDateTime($datetime) {
		$day = date('Y-m-d', strtotime($datetime));
		$time = date('H:i', strtotime($datetime));
		if($datetime=='0000-00-00 00:00:00') :
			return '' ;
		elseif($day==date('Y-m-d')) :
			return $day = \Lang\today . ' ' . \Lang\at . ' ' . $time;
		elseif($day == date('Y-m-d', mktime(date('H'), date('i'), date('s'), date('m'), date('d') - 1, date('Y'))))  : 			
			return $day = \Lang\yesterday . ' ' . \Lang\at . ' ' . $time;
		else :
			$user_lang=null;
			$user_lang = \Util\get_cookie_language();
			if(is_null($user_lang)) $user_lang = \Util\get_browser_language();
			if($user_lang=='en') :
				return date('Y-m-d H:i', strtotime($datetime)) ;
			else :
				return date('d-m-Y H:i', strtotime($datetime)) ;
			endif ;
		endif ;
	}
	
	public static function user_picture($gendre, $user_picture) {
		if(in_array($gendre, array(2,3))) :
    		return "/uploads/users/women/".((file_exists('uploads/users/women/'.$user_picture) && $user_picture!='')? $user_picture : 'avatar.png') ; 
		else :
			return "/uploads/users/men/".((file_exists('uploads/users/men/'.$user_picture) && $user_picture!='')? $user_picture : 'avatar.png') ; 
		endif ;
	}
}