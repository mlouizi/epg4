<?php
namespace Controller;
include API_DIR.'Header.php';
include API_DIR . 'Search.php';

class User extends Controller {
	public function get_members_list(){		
		$data = \Api\User::get_members_list()->data;
		$locations = array() ;
		$abs = array( 
			0 => '0.31', 1 => '0.1905', 2 => '0.25', 3 => '0.263', 4 => '0.42', 5 => '0.404', 6 => '0.466', 7 => '0.1905', 8 => '0.48', 9 => '0.31',
			10 => '0.31', 11 => '0.31', 12 => '0.31', 13 => '0.31', 14 => '0.31', 15 => '0.31', 16 => '0.31', 17 => '0.31', 18 => '0.31', 19 => '0.31'
		) ;		
		$ord = array( 
			0 => '0.385', 1 => '0.448', 2 => '0.385', 3 => '0.455', 4 => '0.35', 5 => '0.4265', 6 => '0.4185', 7 => '0.33', 8 => '0.35', 9 => '0.305',
			10 => '0.305', 11 => '0.305', 12 => '0.305', 13 => '0.305', 14 => '0.305', 15 => '0.305', 16 => '0.305', 17 => '0.305', 18 => '0.305', 19 => '0.305'
		) ;	
		if($data['success']) :
			$j =0 ;foreach($data['list'] as $member) :
				$location = array() ;
				$location['id'] = $member['id_user']   ;
				$location['title'] = $member['firstname'].' '.$member['lastname'] ;
				$list_activity = '' ;
				$activities = explode('#', $member['company_activity']) ;
				$i=0 ; foreach($activities as $activitie) : $list_activity .= ($i<3 && $activitie!='')? '#'.$activitie.' ': '' ; $i++ ; endforeach ;
				$location['description'] = '<div id="card_eplugg"> 
					<div class="yellow"><img src="/images/arrow-yelow-big.png" /></div>
        			<div id="card_user">
						<div class="img_profil"><a href=""><img src="'.\Api\GlobalUtil::user_picture($member['gendre'], $member['user_picture']).'" alt="" width="48" height="48" /></a></div>
          				<div class="descp_card"> 
							<strong><a href="">'.\Api\GlobalUtil::formatterName($member['firstname'], $member['lastname']).'</a></strong> 
							<em>'.\Api\GlobalUtil::str_reduce($member['job'], $maxlenght = 30, $suffix = "...").'</em>
						</div>
          				<div class="clear"></div>
        			</div>
        			<div id="card_company">
						<div class="img_profil"><a ><img src="/uploads/logo/'.((file_exists('uploads/logo/'.$member['company_logo']) && $member['company_logo']!='')? $member['company_logo'] : 'logo.png').'" alt="" width="48" height="48" /></a></div>
						<div class="descp_card"> 
							<strong><a >'.\Api\GlobalUtil::formatterCompanyName($member['company_name']).'</a></strong> 
							<em>'.\Api\GlobalUtil::str_reduce($list_activity, $maxlenght = 50, $suffix = "...").'</em>
							<ul><li>'.$member['company_city'].', '.$member['company_country'].'</li></ul>
						</div>
						<div class="clear"></div>
			  		</div>
        		</div>'  ;
				$location['x'] = $abs[$j] ;
				$location['y'] = $ord[$j] ;		
				$location['zoom'] = 0 ;				
				$locations[] = $location ;				
			$j++ ; endforeach ; 
		endif ;		
		$data = array("mapwidth" => "800", "mapheight" => "600", "levels" => array(array( "id" => "members", "title" => "Members", "map" => "/images/photo.jpg", "show" => "true", "locations"	=> $locations)));		
		return $this->out($data); 
	}
	
	public function signup_essentials_submit(){
		
		if(\Api\User::is_logged_in()->is_success()) return \Util\redirect('/signup_step2');		
		$arr = \Util\post_multi('firstname','lastname','gendre','job', 'company_name','company_activity','company_city', 'company_country','email','password', 'password_again', 'birthday', 'birthmonth', 'birthyear');		  
		extract($arr);
		$result = \Api\User::signup_essentials ($firstname,$lastname,$gendre,$job,$company_name, $company_activity,$company_city,$company_country, $email,$password,$password_again, $birthday, $birthmonth, $birthyear);			
		if($result->is_success()) :
			$title = "Site eplugg.com";
			$to = $email ;
			$headers = 'From:  <support@eplugg.com>'."\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
			$body = "<html xmlns='http://www.w3.org/1999/xhtml'>
				<body bgcolor='#e8e8e8'>
					<table width='100%'>
						<tr>
							<td align='center'>
								<table width='700' cellpadding='0' cellspacing='0'>
									<tr bgcolor='#09285c'><td width='20'>&nbsp;</td><td  height='46' valign='middle'><img src='http://".$_SERVER['HTTP_HOST']."/images/logo.png' /></td><td width='20'>&nbsp;</td></tr>
									<tr bgcolor='#FFFFFF'>
										<td width='20'>&nbsp;</td>
										<td>
											<br /><br />
											<p> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'> Bonjour ,</font></p>
											<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>Bienvenue à la communauté ePlugg. Les paramètres d'accès à votre compte sont :</font></p>
											<ul>
												<li><b style='font-family: Arial; font-size:12px'>Nom d'utilisateur : </b> ".$email." </li>
												<li style='font-family: Arial; font-size:12px'><b>Mot de passe : </b> ".$password."</li>		
											</ul>
											<br /><br />
											<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>A bientôt sur www.eplugg.com</font></p>
											<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>L'équipe Eplugg.</font></p>
										</td>
										<td width='20'>&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</body>
			</html>" ;
			mail($to, $title, $body, $headers) ;		
			\Api\User::do_login($result);			
			return \Util\redirect('/signup_step2');
		endif ;		
		$data = $result->data ;
		$data['arg'] = $arr ;
		return $this->out($data,'index',true);
	}
	
	public function signup_extended_show($data = []){
		$user = \Api\User::get_current_user();
		$r = \Api\Header::get_top();
		$r->merge(\Api\VisitCard::get_full($user->get('id_user'), 'user_profile'));
		$data = $r->data;
		if($data['user_profile']['user_type']!=0) return \Util\redirect('/edit_profile');
		return $this->out($data,'profile/signup',true);
	}
	
	public function signup_extended_submit(){
		$arr = \Util\post_multi('perPhone', 'perMobile', 'perEmail', 'perSociaux', 'cmpnPhone', 'cmpnFax', 'cmpnSite', 'cmpnSite', 'cmpnAddress');
		extract($arr);
		$result = \Api\User::signup_extended($perSociaux,$perEmail,$perMobile,$perPhone,$cmpnAddress,$cmpnPhone,$cmpnFax,$cmpnSite,NULL,NULL,NULL,NULL,NULL,NULL,NULL,false);
		if($result->is_success()) return \Util\redirect('/');
		return $this->out($data,'profile/signup',true);
	}
	
	public function search(){
		$id_user = \Api\User::get_current_user()->get('id_user');
		$data= [] ;
		if(\Util\post('topSearchInput') && \Util\post('topSearchInput')!='') : 
			$searchValues = array(
				'gendre' => \Util\post('gendre'),
				'firstname' => \Util\post('firstname'),
				'lastname' => \Util\post('lastname'),
				'job' => \Util\post('job'),
				'company_name' => \Util\post('company_name'),
				'activity' => \Util\post('activity'),
				'country' => \Util\post('country'),
				'company_city' => \Util\post('company_city'),
				'search' => \Util\post('topSearchInput'),
				'topSearch' => 1,
				'advancedSearch' => \Util\post('advancedSearch')
			);
			$res = \Api\Search::search_contacts($searchValues, 0, $id_user, 7);
			foreach($res as $item) :
				$item['user_picture'] = \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']);
				$data[] = $item;
			endforeach ;
		endif ;	
		return $this->out($data);
	}

	public function getUnreadMessagesCount() {
		$m = \Api\Message::headerMessages()->get('messages'); 
		echo (int)(\Api\Message::count_unread($m));
	}	
}