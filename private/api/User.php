<?php
namespace Api;

use \Database\DB as DB;
include API_DIR.'Activity.php';

function upperthing($str,$delm=" "){
  	$haa=explode($delm,$str);
	$newstr="";
    foreach ($haa as $var => $val){ $newstr.=ucfirst(MB_strtolower($val)).$delm; }
    return substr($newstr,0,-1);                        
}

class User extends EPluggApi {	
	public static function is_logged_in(){
		return (new \Util\Result)->state(isset($_SESSION['id_user']));
	}
	
	public static function get_members_list(){
		$sql_args = array();
		$res = DB::query(\SqlLib\get_members_list,$sql_args);
		return \Util\success(array('list' => $res));
	}
	
	public static function verify_login($login_email, $login_password){
		$result = new \Util\Result;

		if(self::is_logged_in()->is_success()){ return \Util\error(array('message'=> \Lang\already_connected)); }
		$login_password = \Crypt\hash($login_password);
		$sql_args = array( 'login_email' => $login_email, 'login_password' => $login_password );
		$res = DB::query_one(\SqlLib\user_login, $sql_args);
		$ret =  ($res !== false)? \Util\success(array('id_user'=>$res['id_user'],'user_type'=>$res['user_type'], 'login_email'=>$login_email)) : \Util\error();
		return $ret;
	}
	
	public static function verify_password($id_user, $login_password){
		$login_password = \Crypt\hash($login_password);
		$sql_args = array( 'id_user' => $id_user, 'login_password' => $login_password );
		$res = DB::query_one('SELECT id_user,user_type, login_email FROM users where id_user = :id_user and login_password = :login_password', $sql_args);
		$ret =  ($res !== false)? \Util\success(array('id_user'=>$res['id_user'],'user_type'=>$res['user_type'], 'login_email'=>$res['login_email'])) : \Util\error();
		return $ret;
	}
	
	public static function do_login($user = false){
		if(!\Util\is_false($user)){
			$_SESSION['id_user'] = $user->get('id_user');
			$_SESSION['user_type'] = $user->get('user_type');
			$_SESSION['login_email'] = $user->get('login_email');
			return \Util\success();
		} else {
			return \Util\error();
		}	
	}
	
	public static function step_two_completed($user = false){
		$type =  (\Util\is_false($user))? self::get_current_user()->get('user_type') : $type = $user->get('user_type');
		return (new \Util\Result)->state($type > '0');
	}
	
	public static function get_current_user(){
		return \Util\success(array('id_user'=>$_SESSION['id_user'],'user_type'=>$_SESSION['user_type'],'user_login'=>$_SESSION['login_email']));
	}
	
	public static function logout(){
		if(self::is_logged_in()->is_success()){
			unset($_SESSION['id_user']);
			unset($_SESSION['user_type']);
			unset($_SESSION['login_email']);
			session_unset();
			session_destroy();
			return \Util\success();
		}
		return \Util\error();
	}
	
	public static function is_friend($with_id_user,$id_user=null){
		if(is_null($id_user)) $id_user = self::get_current_user()->get('id_user'); 
		$sql_args = array( 'id_user'=>$id_user, 'id_user2'=>$with_id_user );
		$sql = "Select count(*) as total from relations R where R.id_user1=:id_user AND R.id_user2=:id_user2 and relation_status=1";			
		$res = DB::query_one($sql,$sql_args)['total'];
		$ret = true;
		if($res == 0) $ret = false; 
		return (new \Util\Result)->state($ret);
	}
	
	public static function is_invited($with_id_user,$id_user=null){
		if(is_null($id_user)) $id_user = self::get_current_user()->get('id_user'); 
		$sql_args = array( 'id_user'=>$id_user, 'id_user2'=>$with_id_user );
		$sql = "Select count(*) as total from invitations I where I.id_user_to = :id_user AND I.id_user_from = :id_user2 AND I.invitation_status IN (0,1)" ;
		$res = DB::query_one($sql,$sql_args)['total'];
		$ret = true;
		if($res == 0) $ret = false; 
		return (new \Util\Result)->state($ret);
	}
	
	public static function signup_essentials($firstname,$lastname,$gendre,$job,$company_name, $company_activity,$company_city,$company_country, $login_email,$login_password,$login_password_confirm, $birthday, $birthmonth, $birthyear) {
		if(\Util\multi_is_empty($firstname,$lastname,$gendre,$job,$company_name,$company_activity, $company_city,$company_country,$login_email,$login_password,$login_password_confirm)) return \Util\error(array('message'=>\Lang\general_required));
		if(\Util\strlen($firstname) < 1) return \Util\error(array('message'=> \Lang\firstname_required));
		if(\Util\strlen($lastname) < 1) return \Util\error(array('message'=> \Lang\lastname_required));
		if(\Util\strlen($company_name) < 1)	return \Util\error(array('message'=> \Lang\company_required ));
		if(! preg_match("#^[a-zA-Z]+$#", $company_name)) return \Util\error(array('message'=> \Lang\company_error ));
		if(\Util\strlen($company_activity) < 1)	return \Util\error(array('message'=> \Lang\activities_required ));
		if(\Util\strlen($company_city) < 1)	return \Util\error(array('message'=> \Lang\city_required ));
		if(($gendre !== '1')&&($gendre !== '2')&&($gendre !== '3'))	$gendre = '1';		
		if($login_password !== $login_password_confirm)	return \Util\error(array('message'=> \Lang\confirm_password_error ));
		if(!is_string($login_password) or \Util\strlen($login_password)<6) return \Util\error(array('message'=> \Lang\password_error));
		if(self::email_exists(strtolower($login_email)) != 0) return \Util\error(array('message'=> \Lang\invalide_email));		
		if(!isset(\Core\Config\Vars::$countries[$company_country]))	return \Util\error(array('message'=> \Lang\country_error));
		$country = $company_country;
		$company_activity = str_replace(array(',','/'),'#',$company_activity);
		if(substr($company_activity,0,1)!='#') $company_activity = '#'.$company_activity;

		$birthdate = $birthyear . '-' . $birthmonth . '-' . (($birthday < 10) ? '0' . $birthday : $birthday) ;

		$sql_args = array( 
			'firstname'        => ucfirst($firstname), 
			'lastname'         => strtoupper($lastname), 
			'gendre'           => $gendre, 
			'birthdate'        => $birthdate,
			'job'              => upperthing($job,"#"), 
			'company_name'     => upperthing($company_name), 
			'company_activity' => upperthing($company_activity,'#'), 
			'company_city'     => ucfirst($company_city), 
			'company_country'  => $country, 
			'login_email'      => strtolower($login_email), 
			'login_password'   => \Crypt\hash($login_password)
		);		
		$id_user = DB::insert(\SqlLib\register_user, $sql_args);		 
		if(is_null($id_user)){
			return \Util\error(array('message'=>\Lang\invalide_email));
		} else {
			$activities = explode('#',$company_activity);
			foreach($activities as $activity){
				$activity = trim($activity);
				if(empty($activity)) continue;
				$sql_args = array( 'id_user'=>$id_user, 'activity'=>htmlspecialchars($activity) );
				DB::insert('INSERT INTO user_activity (id_user,activity) VALUES(:id_user,:activity)', $sql_args);
			}
			\Api\Activity::signed_up($id_user);
			return \Util\success(array('id_user'=>$id_user,'user_type'=>0, 'login_email'=>$login_email));
		}
	}
	
	public static function email_exists($login_email) {
		return DB::query_one(\SqlLib\email_exists,array('login_email'=>$login_email))['exist'];
	}

	public static function verify_email($email, $user_id) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE) {
			if ($user_id != $_SESSION['id_user']) {
				if (!self::email_exists(strtolower($login_email))) {
					return  \Util\success(array('id_user'=>$_SESSION['id_user'],'user_type'=>$_SESSION['user_type'], 'login_email'=>$email));
				}
			} else {
				return  \Util\success(array('id_user'=>$_SESSION['id_user'],'user_type'=>$_SESSION['user_type'], 'login_email'=>$email));
			}
		}

		return \Util\error();
	}
	
	public static function get_essentials($id_user = false,$retrieve_user_activities=true){
		if(\Util\is_false($id_user)) $id_user = self::get_current_user()->get('id_user'); 
		$sql_args = array( 'id_user' => $id_user );
		$ret = [];
		$ret['user_info'] = DB::query_one(\SqlLib\user_info_min,$sql_args);
		if(\Util\is_true($retrieve_user_activities)) $ret['user_activities'] = DB::query(\SqlLib\user_activities,$sql_args);
		return \Util\success($ret);
	}
	
	public static function signup_extended($sociaux,$aEmails,$aMobiles,$aDirPhones,$sAddress,$aComPhones,$aFaxes,$aWebsites,$lastname=null,$firstname=null,$job=null,$company_name=null,$company_activity=null,$company_city=null,$company_country=null, $update_news=TRUE) {		
		$id_user = self::get_current_user()->get('id_user') ;
		$sql_args = array( 'id_user'=> $id_user);
		$sql = "select * from users U where U.id_user= :id_user " ; 
		$user_info = DB::query_one($sql,$sql_args);			
		$strsql = ''; 
		$sql_sociaux = trim(trim($sociaux), '|');
		$sql_emails = trim(trim($aEmails), '|');
		$sql_mobiles = trim(trim($aMobiles), '|');
		$sql_dir_phones = trim(trim($aDirPhones), '|');
		$sql_address = $sAddress;
		$sql_com_phones = trim(trim($aComPhones), '|');
		$sql_faxes = trim(trim($aFaxes), '|');
		$sql_websites = trim(trim($aWebsites), '|');				
		$sql_args = array('sociaux' => $sql_sociaux, 'emails' => $sql_emails, 'mobiles' => $sql_mobiles, 'direct_phones' => $sql_dir_phones, 'company_address' => $sql_address, 'company_tel' => $sql_com_phones, 'company_fax' => $sql_faxes, 'company_websites' => $sql_websites, 'id_user' => $id_user);
		$extra='';
		if(!is_null($company_country)){			
			$sql_args['company_country'] = $company_country;
			$extra .= ', company_country=:company_country';
		}
		if(!is_null($company_city)){
			$sql_args['company_city'] = $company_city;
			$extra .= ', company_city=:company_city';
		}
		if(!is_null($lastname)){
			$sql_args['lastname'] = $lastname;
			$extra .= ', lastname=:lastname';
		}		
		if(!is_null($firstname)){
			$sql_args['firstname'] = $firstname;
			$extra .= ', firstname=:firstname';
		}
		if(!is_null($job)){
			$sql_args['job'] = $job;
			$extra .= ', job=:job';
			if($user_info['job']!=$job) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 2, "'.addslashes($job).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;
		}		
		if($user_info['direct_phones']!=$aDirPhones) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 3, "'.addslashes($aDirPhones).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;
		if($user_info['mobiles']!=$aMobiles) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 4, "'.addslashes($aMobiles).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;
		if($user_info['emails']!=$aEmails) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 5, "'.addslashes($aEmails).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;	
		if(!is_null($company_name)){
			$sql_args['company_name'] = $company_name;
			$extra .= ', company_name=:company_name';
			if($user_info['company_name']!=$company_name) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 6, "'.addslashes($company_name).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;
		}
		if(!is_null($company_activity)){
			$sql_args['company_activity'] = $company_activity;
			$extra .= ', company_activity=:company_activity';
			$sql_params = array( 'id_user' => $id_user);	
			$sql = "delete from user_activity where  id_user = :id_user ";		
			DB::query_muted($sql,$sql_params);				
			$activities = explode('#',$company_activity);
			foreach($activities as $activity){
				$activity = trim($activity);
				if(empty($activity)) continue;
				$sql_params = array( 'id_user'=> $id_user, 'activity'=>htmlspecialchars($activity) );
				DB::insert('INSERT INTO user_activity (id_user,activity) VALUES(:id_user,:activity)', $sql_params);
			}
			if($user_info['company_activity']!=$company_activity) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 7, "'.addslashes($company_activity).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;
		}
		if($user_info['company_tel']!=$aComPhones) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 8, "'.addslashes($aComPhones).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;	
		if($user_info['company_fax']!=$aFaxes) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 9, "'.addslashes($aFaxes).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;		
		if($user_info['company_websites']!=$aWebsites) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 10, "'.addslashes($aWebsites).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;		
		if($user_info['company_address']!=$sAddress) : $strsql .= 'insert into activity (id_user, activity, description, activity_time ) values (:id_user, 11, "'.addslashes($sAddress).'", "'.date('Y-m-d H:i:s').'") ; ' ; endif ;			
		$res = DB::update(\SqlLib\register_extended.$extra.' WHERE id_user = :id_user',$sql_args);	
		if($strsql!='' && $update_news) :
			$sql_args = array( 'id_user'=> $id_user);
			DB::insert($strsql, $sql_args);
		endif ;				
		$_SESSION['user_type'] = 1;
		return (new \Util\Result)->state($res);
	}
	
	public static function saveImage($image_path) {
		$sql_args = array( 'image_path' => $image_path,	'id_user' => self::get_current_user()->get('id_user'));		
		$res = DB::update(\SqlLib\save_image.' WHERE id_user = :id_user',$sql_args);
		return $res;
	}
	
	public static function saveLogo($image_path) {
		$sql_args = array( 'image_path' => $image_path,	'id_user' => self::get_current_user()->get('id_user'));		
		$res = DB::update(\SqlLib\save_logo.' WHERE id_user = :id_user',$sql_args);		
		return $res;
	}
	
	public static function delete_relation($uid=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');
		$data = array() ;
		if($uid) :
			$sql_args = array('id_user' => $id_user, 'uid' => $uid);		
			$sql = "delete from relations WHERE (id_user1 = :uid AND id_user2 = :id_user) OR (id_user1 = :id_user AND id_user2 = :uid)";
			DB::query_muted($sql,$sql_args);				
			$data['success'] = true ;	
			$data['message'] = \Lang\delete_contact_success ;	
		else :
			$data['success'] = false ;
			$data['message'] = \Lang\select_contact ;
		endif ;		
		return $data;
	}
	
	public static function setting($login_password) {
		$password = \Crypt\hash($login_password) ;
		$id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array( 'id_user' => $id_user, 'password'=> $password);
		$result = DB::update('UPDATE users SET login_password = :password where id_user = :id_user', $sql_args);

		return \Util\success(array('id_user'=>$id_user));
	}
	
	public static function mutualFriend($uid, $id_user) {
		$sql_args = array( 'id_user' => $id_user, 'uid'=> $uid);
		$result = DB::query('SELECT U.id_user, U.firstname, UPPER(U.lastname) as lastname , U.user_picture, U.job from users U , relations R WHERE  U.id_user = R.id_user2 AND R.id_user1 = :id_user AND U.id_user IN (select R1.id_user2 from relations R1 where R1.id_user1 = :uid AND R1.relation_status=1 group by R1.id_user2) AND R.relation_status=1 ', $sql_args);
		return $result;
	}
	
	public static function set_lang($lang,$id_user=null,$cookie = true){
		if($cookie === true) setcookie('lang', $lang);	
		if(self::is_logged_in()->is_success()){
			if(is_null($id_user)) $id_user = self::get_current_user()->get('id_user');
			if(isset(\Core\Config\Vars::$languages[$lang])){
				$sql_args = array('id_user' => $id_user,'language' => $lang);
				DB::update(\SqlLib\update_language,$sql_args);
			}
		}
	}

	public static function send_mail ($email, $password)
	{
		$to      = $email;
		$subject = \Lang\email_subject;
		$message = \Lang\email_message;
		$headers = \Lang\email_from . "\r\n";

		$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
		! empty($cc) ? $headers .= "Cc: {$cc}"."\r\n" : "";
		! empty($bcc) ? $headers .= "Bcc: {$bcc}"."\r\n" : "";

		$body = "<html xmlns='http://www.w3.org/1999/xhtml'>
			<body bgcolor='#f3f3f3'>
				<table width='100%' bgcolor='#f3f3f3'>
					<tr>
						<td align='center'>
							<table width='700' cellpadding='0' cellspacing='0' bgcolor='#fff' >
    							<tr bgcolor='#09285c'><td width='20'>&nbsp;</td><td  height='46' valign='middle'><img src='http://".$_SERVER['HTTP_HOST']."/images/logo.png' /></td><td width='20'>&nbsp;</td></tr>
    							<tr bgcolor='#FFFFFF'>
									<td width='20'>&nbsp;</td>
    								<td>
										<br /><br />
										<p> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'> Bonjour ,</font></p>
  										<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>Les paramètres d'accès à votre compte sont :</font></p>
										<table>
											<tr >
												<td  bgcolor='#eceff5' height='30'  ><b style='font-family: Arial; font-size:12px; color:#072153'>&nbsp; Nom d'utilisateur : </b></td>
												<td  bgcolor='#f7f8fb'> &nbsp; <font face='Arial, Helvetica, sans-serif' style='font-size:12px;color:#072153'>".$email."</font></td>
											</tr>
                                            <tr>
												<td height='30' bgcolor='#eceff5' style='font-family: Arial; font-size:12px; color:#072153'><b>&nbsp; Mot de passe : </b> </td>
												<td  bgcolor='#f7f8fb'> &nbsp; <font face='Arial, Helvetica, sans-serif' style='font-size:12px;color:#072153'>".$password." </font></td>
											</tr>                
                                        </table>
										<br /><br />
										<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>A bientôt sur www.eplugg.com</font></p>
										<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>L'équipe Eplugg.</font></p></br>
								    </td>
								    <td width='20'>&nbsp;</td>
								</tr>
								<tr>
									<td  bgcolor='#09285c' align='center' colspan='3' valign='middle' height='70'>
										<a href='http://".$_SERVER['HTTP_HOST']."/legal_informations' style='font-family: Arial; font-size:12px; color:#FFF; text-decoration:none'>Mentions légales</a> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#f5ab1b'>|</font>
										<a href='http://".$_SERVER['HTTP_HOST']."/about' style='font-family: Arial; font-size:12px; color:#FFF; text-decoration:none' >A propos</a> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#f5ab1b'>|</font>
										<a href='http://".$_SERVER['HTTP_HOST']."/terms' style='font-family: Arial; font-size:12px; color:#FFF; text-decoration:none '>Conditions d'utilisation</a>
										<p> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#fff'>Corporation © 2014</font></p>
									</td>
								</tr>								
							</table>
						</td>
					</tr>
				</table>
			</body>
		</html>" ;		

		mail($to, $subject, $body, $headers);		
	}

	public static function getPassword($login_email) {		
		$password = self::generatePassword(8) ;		
		$hachPassword = \Crypt\hash($password) ;
		$to = $login_email ;


		self::send_mail ($to, $password);
		$sql_args = array( 'login_email' => $login_email, 'password'=> $hachPassword);
		$result = DB::update('UPDATE users SET login_password = :password where login_email = :login_email', $sql_args);
		return \Util\success(array());
	}	
	
	public static function isSpecial ($pKre , $pArray){
      	for ($ind = 0 ; $ind < count($pArray) ; $ind ++) :
        	if ($pKre == $pArray[$ind]) return (true) ;
      	endfor ;
      	return (false) ;
    }
  
    public static function generatePassword ($pLong, $pArray = array()) { 
      	if (!is_numeric($pLong)) $pLong = 0;
      	if (!is_int($pLong)) $pLong = 0;
      	srand((double)microtime()*1000000);
      	$Pass = "";
      	for ($Ind = 1; $Ind <= $pLong; $Ind ++) :
        	$Nb = rand(49,122);
        	(self::isSpecial ($Nb, $pArray) || in_array($Nb,array(58,59,60,61,62,63,64,91,92,93,94,95,96)))? $Ind -- : $Pass .= chr($Nb);
		endfor ;
    	return ($Pass) ;
   	}
}