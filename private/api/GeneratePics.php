<?php
namespace Api;
include './sfThumbnail.php';

class GeneratePics {

	public function generatePics() {
		foreach (array( 'users/men' => 'users/original/men', 'users/women' => 'users/original/women',  'logo' => 'logo/original' ) as $f => $of) {

            $finalDir = __DIR__ . '/../../www/uploads/' . $f . '/';

			foreach (glob(__DIR__ . '/../../www/uploads/' . $of . '/*') as $p) {

                $dir = '';

                $dir = ($f == 'logo') ? 'logo' : 'users';

                $destDir = __DIR__ . '/../../www/uploads/' . $dir . '/temp/';

                $originalFileName = basename($p);
                $fileName = self::generateFileName($originalFileName);
                $file = $destDir.$fileName;
            
                if (copy($p, $file)) {
                    if (! empty($file)) {
                        $dimension = getimagesize($file);

                        if ($dimension[0] > 500 || $dimension[1] > 500) {

                            $thumb = imagecreatetruecolor(500, 500);
                            $source = imagecreatefromjpeg($file);


                            imagecopyresampled($thumb, $source, 0, 0, 0, 0, 500, 500, $dimension[0], $dimension[1]);

                            imagejpeg($thumb, $file, 100);

                            copy($file, $finalDir.$originalFileName);


                        }
                    }
                    echo ($dimension[0] < 200 || $dimension[1] < 200)? "fileTooShort" : $fileName;
                } else {
                    echo "none";
                }
			}
		}
	}

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
        var_dump($fileName);


        $thumbnail = new \Api\sfThumbnail($width, $height);
        $thumbnail->loadFile($path.$fileName);
        $thumbnail->save($path.$fileName);
    }
    
    public static function formatterName($firstname, $lastname) {
        $string = self::str_reduce(ucfirst(ucfirst(strtolower($firstname)).' '.strtoupper($lastname)),20,'...')  ;
        return $string;
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

}

$gp = new GeneratePics();

$gp->generatePics(); 