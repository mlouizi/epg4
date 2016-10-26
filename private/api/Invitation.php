<?php
namespace Api;

use \Database\DB as DB;

class Invitation extends EPluggApi {	
	public static function headerInvitations($id_user=NULL){
		if(!$id_user) $id_user = \Api\User::get_current_user()->get('id_user');
		$sql_args = array('id_user'=>$id_user);
		$sql = "select U.id_user, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job, I.invitation_status from users U, invitations I where U.id_user=I.id_user_from AND I.id_user_to=:id_user AND I.invitation_status IN (0,1) group by U.id_user order by I.invitation_time DESC" ;
		$res = DB::query($sql,$sql_args);
		return \Util\success(array('invitations'=>$res));
	} 
	
	public static function count_unread($invitations){
		$count_unread = 0;
		foreach($invitations as $item) : if(isset($item['invitation_status']) && ($item['invitation_status'] == 0)) $count_unread += 1; endforeach ;
		return $count_unread;
	}
	
	public static function getInvitations() {
		$id_user = \Api\User::get_current_user()->get('id_user');		
		$sql_args = array('id_user' => $id_user);			
		$sql = "
			SELECT 
				(SELECT count(DISTINCT(R.id_user1)) from relations R, relations R1 WHERE R.id_user1 = R1.id_user1 AND R.id_user2=:id_user AND R1.id_user2= U.id_user AND R.relation_status=1 AND R1.relation_status=1 ) AS common_friends, 
				U.id_user, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.user_picture, U.job, U.company_logo, U.company_name, U.company_activity, U.company_city, U.company_country 
			FROM invitations I, users U
			WHERE I.id_user_to = :id_user 
			AND I.invitation_status IN (0,1)
			and U.id_user=I.id_user_from
		";
		$invitations = DB::query($sql,$sql_args);		
		$sql_args = array('id_user' => $id_user);			
		$sql = "update invitations set `invitation_status`=1 WHERE id_user_to = :id_user AND invitation_status=0";
		$res = DB::update($sql,$sql_args);
		return $invitations;
	}	
	
	public static function plugger($uid=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');
		$data = array() ;
		if($uid) :
			$sql_args = array('uid' => $uid);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname FROM users U WHERE U.id_user = :uid ";
			$user_info = DB::query_one($sql,$sql_args);	
			$sql_args = array('uid' => $id_user);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.company_logo, U.company_name, U.job, U.company_activity FROM users U WHERE U.id_user = :uid ";
			$profil_info = DB::query_one($sql,$sql_args);	
			
			$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
			$sql = "SELECT * FROM invitations I WHERE (I.id_user_to = :uid AND I.id_user_from = :id_user) OR (I.id_user_to = :id_user AND I.id_user_from = :uid)";
			$invitation = DB::query_one($sql,$sql_args);
			if($invitation) :	
				$sql_args = array('id_user' => $id_user, 'uid' => $uid, 'id_invitations' => $invitation['id_invitations']);				
				$sql = "update invitations set `id_user_to` = :uid, `id_user_from` = :id_user,  `invitation_status`=0, `invitation_time`='".date('Y-m-d H:i:s')."' where id_invitations = :id_invitations";
				$res = DB::update($sql,$sql_args);
				$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
				$sql = "SELECT * FROM suggestions S WHERE (S.id_user_to = :uid AND S.id_user_suggested = :id_user) OR (S.id_user_to = :id_user AND S.id_user_suggested = :uid)  ";
				$suggestion = DB::query_one($sql,$sql_args);
				if($suggestion) :				
					$sql_args = array('id_suggestion' => $suggestion['id_suggestion']);				
					$sql = "update suggestions set `suggestion_status`=1 where id_suggestion = :id_suggestion";
					$res = DB::update($sql,$sql_args);
				endif ;			
				$data['success'] = true ;	
				$data['message'] = \Lang\invitation_send_success ;			
			else :
				if($user_info) :
					$sql_args = array('id_user' => $id_user, 'uid' => $uid);				
					$sql = "Insert into invitations (`id_user_to`, `id_user_from`, `invitation_time`, `invitation_status`) VALUES(:uid, :id_user, '".date('Y-m-d H:i:s')."', 0)";
					$res = DB::insert($sql,$sql_args);
					$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
					$sql = "SELECT * FROM suggestions S WHERE (S.id_user_to = :uid AND S.id_user_suggested = :id_user) OR (S.id_user_to = :id_user AND S.id_user_suggested = :uid)  ";
					$suggestion = DB::query_one($sql,$sql_args);
					if($suggestion) :				
						$sql_args = array('id_suggestion' => $suggestion['id_suggestion']);				
						$sql = "update suggestions set `suggestion_status`=1 where id_suggestion = :id_suggestion";
						$res = DB::update($sql,$sql_args);
					endif ;
					$data['success'] = true ;
					$data['message'] = \Lang\invitation_send_success ;		
				else :
					$data['success'] =false ;
					$data['message'] = \Lang\contact_error ;		
				endif ;
			endif ;	
		else :
			$data['success'] = false ;
			$data['message'] = \Lang\select_contact ;
		endif ;		
		if($data['success']) : 
			$title = "Nouvelle notification du site eplugg.com";
			$to = $profil_info['login_email'];
			$headers = 'From:  <support@eplugg.com>'."\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
			$activities = explode('#', $profil_info['company_activity'])  ;
            $i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ;
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
											<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>Une nouvelle invitation envoyée par :</font></p>
											
											<table cellpadding='0' cellspacing='0' width='220' align='center'>
	    										<tr>
													<td bgcolor='#f7f8fb'>    
		     											<table width='100%' cellpadding='0' cellspacing='0'>
     														<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right'><img src='http://".$_SERVER['HTTP_HOST']."/images/arrow-yelow-big.png' width='23'></td></tr>
     														<tr>
															 	<td width='7'>&nbsp;</td>
															 	<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST'].\Api\GlobalUtil::user_picture($profil_info['gendre'], $profil_info['user_picture'])."' width='48'></a> </td>
     															<td valign='top'>
																	<strong>
																		<a href='' style='text-decoration:none;color:#143575 '>
																			<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::formatterName($profil_info['firstname'], $profil_info['lastname'])."</font>
																		</a>
																	</strong> <br />
                        											<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($profil_info['job'], $maxlenght = 30, $suffix = "...")."</font></em>
           			  											</td>
     														</tr>
     														<tr><td colspan='4'>&nbsp; </td></tr>
     													</table>
													</td>
        										</tr>
        										<tr>
													<td bgcolor='#e9ebf2'>	
        												<table width='100%' cellpadding='0' cellspacing='0'>
        													<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right' width='80'>&nbsp;</td></tr>
        													<tr>
																<td width='7'>&nbsp;</td>
																<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST']."/uploads/logo/".((file_exists('uploads/logo/'.$profil_info['company_logo']) && $profil_info['company_logo']!='')? $profil_info['company_logo'] : 'logo.png')."' width='48'></a> </td>
     															<td valign='top'>
																	<strong>
																		<a href='' style='text-decoration:none;color:#143575 '>
																			<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::str_reduce($profil_info['company_name'], $maxlenght = 50, $suffix = "...")."</font>
																		</a>
																	</strong> <br />
                        											<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")."</font></em>
																</td>
															</tr>		     
     														<tr><td colspan='4'>&nbsp; </td></tr>
														</table>
													</td>
												</tr>
											</table>
											
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
		endif ;
		return $data;
	}
	
	public static function vplugger($uid=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');
		$data = array() ;
		if($uid) :
			$sql_args = array('uid' => $uid);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname FROM users U WHERE U.id_user = :uid ";
			$user_info = DB::query_one($sql,$sql_args);	
			$sql_args = array('uid' => $id_user);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.company_logo, U.company_name, U.job, U.company_activity FROM users U WHERE U.id_user = :uid ";
			$profil_info = DB::query_one($sql,$sql_args);
			
			$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
			$sql = "SELECT * FROM invitations I WHERE (I.id_user_to = :uid AND I.id_user_from = :id_user) OR (I.id_user_to = :id_user AND I.id_user_from = :uid)  ";
			$invitation = DB::query_one($sql,$sql_args);
			if($invitation) :				
				$sql_args = array('id_invitations' => $invitation['id_invitations']);				
				$sql = "update invitations set `invitation_status`=2 where id_invitations = :id_invitations";
				$res = DB::update($sql,$sql_args);
				$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
				$sql = "SELECT * FROM suggestions S WHERE (S.id_user_to = :uid AND S.id_user_suggested = :id_user) OR (S.id_user_to = :id_user AND S.id_user_suggested = :uid)  ";
				$suggestion = DB::query_one($sql,$sql_args);
				if($suggestion) :				
					$sql_args = array('id_suggestion' => $suggestion['id_suggestion']);				
					$sql = "update suggestions set `suggestion_status`=2 where id_suggestion = :id_suggestion";
					$res = DB::update($sql,$sql_args);
				endif ;
				$sql_args = array('id_user' => $id_user, 'uid' => $uid);		
				$sql = "SELECT * FROM relations R WHERE (R.id_user1 = :uid AND R.id_user2 = :id_user) OR (R.id_user1 = :id_user AND R.id_user2 = :uid) ";
				$relation = DB::query_one($sql,$sql_args);	
				if(!$relation) :
					$sql_args = array('id_user' => $id_user, 'uid' => $uid);				
					$sql = "Insert into relations (`id_user1`, `id_user2`, `friendship_time`, `relation_status`) VALUES(:uid, :id_user, '".date('Y-m-d H:i:s')."', 1)";
					$res = DB::insert($sql,$sql_args);	
					
					$sql = "Insert into relations (`id_user1`, `id_user2`, `friendship_time`, `relation_status`) VALUES(:id_user, :uid, '".date('Y-m-d H:i:s')."', 1)";
					$res = DB::insert($sql,$sql_args);	
					
					$sql_args = array('id_user' => $id_user, 'uid' => $uid);
					$strsql = 'insert into activity (id_user, activity, id_user2, activity_time ) values (:id_user, 1, :uid, "'.date('Y-m-d H:i:s').'")' ;
					DB::insert($strsql,$sql_args);	
				endif ;
				$data['success'] = true ;	
				$data['message'] = \Lang\invitation_accept_success  ;
				$title = "Nouvelle notification du site eplugg.com";
				$to = $profil_info['login_email'];
				$headers = 'From:  <support@eplugg.com>'."\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
				$activities = explode('#', $profil_info['company_activity'])  ;
            	$i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ;
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
												<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>Votre invitation a été acceptée par :</font></p>
												
												<table cellpadding='0' cellspacing='0' width='220' align='center'>
													<tr>
														<td bgcolor='#f7f8fb'>    
															<table width='100%' cellpadding='0' cellspacing='0'>
																<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right'><img src='http://".$_SERVER['HTTP_HOST']."/images/arrow-yelow-big.png' width='23'></td></tr>
																<tr>
																	<td width='7'>&nbsp;</td>
																	<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST'].\Api\GlobalUtil::user_picture($profil_info['gendre'], $profil_info['user_picture'])."' width='48'></a> </td>
																	<td valign='top'>
																		<strong>
																			<a href='' style='text-decoration:none;color:#143575 '>
																				<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::formatterName($profil_info['firstname'], $profil_info['lastname'])."</font>
																			</a>
																		</strong> <br />
																		<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($profil_info['job'], $maxlenght = 30, $suffix = "...")."</font></em>
																	</td>
																</tr>
																<tr><td colspan='4'>&nbsp; </td></tr>
															</table>
														</td>
													</tr>
													<tr>
														<td bgcolor='#e9ebf2'>	
															<table width='100%' cellpadding='0' cellspacing='0'>
																<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right' width='80'>&nbsp;</td></tr>
																<tr>
																	<td width='7'>&nbsp;</td>
																	<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST']."/uploads/logo/".((file_exists('uploads/logo/'.$profil_info['company_logo']) && $profil_info['company_logo']!='')? $profil_info['company_logo'] : 'logo.png')."' width='48'></a> </td>
																	<td valign='top'>
																		<strong>
																			<a href='' style='text-decoration:none;color:#143575 '>
																				<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::str_reduce($profil_info['company_name'], $maxlenght = 50, $suffix = "...")."</font>
																			</a>
																		</strong> <br />
																		<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")."</font></em>
																	</td>
																</tr>		     
																<tr><td colspan='4'>&nbsp; </td></tr>
															</table>
														</td>
													</tr>
												</table>
												
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
			else :
				$data['success'] = false ;
				$data['message'] = \Lang\invitation_error ;		
			endif ;	
		else :
			$data['success'] = false ;
			$data['message'] = \Lang\select_contact ;
		endif ;		
		return $data;
	}
	
	public static function iplugger($uid=NULL) {
		$id_user = \Api\User::get_current_user()->get('id_user');
		$data = array() ;
		if($uid) :
			$sql_args = array('uid' => $uid);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname FROM users U WHERE U.id_user = :uid ";
			$user_info = DB::query_one($sql,$sql_args);	
			$sql_args = array('uid' => $id_user);			
			$sql = "SELECT U.id_user, U.login_email, U.user_picture, U.gendre, U.firstname, UPPER(U.lastname) as lastname, U.company_logo, U.company_name, U.job, U.company_activity FROM users U WHERE U.id_user = :uid ";
			$profil_info = DB::query_one($sql,$sql_args);
			
			$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
			$sql = "SELECT * FROM invitations I WHERE (I.id_user_to = :uid AND I.id_user_from = :id_user) OR (I.id_user_to = :id_user AND I.id_user_from = :uid)  ";
			$invitation = DB::query_one($sql,$sql_args);
			if($invitation) :				
				$sql_args = array('id_invitations' => $invitation['id_invitations']);				
				$sql = "update invitations set `invitation_status`=3 where id_invitations = :id_invitations";
				$res = DB::update($sql,$sql_args);
				$sql_args = array('id_user' => $id_user, 'uid' => $uid);			
				$sql = "SELECT * FROM suggestions S WHERE (S.id_user_to = :uid AND S.id_user_suggested = :id_user) OR (S.id_user_to = :id_user AND S.id_user_suggested = :uid)  ";
				$suggestion = DB::query_one($sql,$sql_args);
				if($suggestion) :				
					$sql_args = array('id_suggestion' => $suggestion['id_suggestion']);				
					$sql = "update suggestions set `suggestion_status`=3 where id_suggestion = :id_suggestion";
					$res = DB::update($sql,$sql_args);
				endif ;				
				$data['success'] = true ;	
				$data['message'] = \Lang\invitation_cancel_success  ;				
				$title = "Nouvelle notification du site eplugg.com";
				$to = $profil_info['login_email'];
				$headers = 'From:  <support@eplugg.com>'."\r\n";
				$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
				$activities = explode('#', $profil_info['company_activity'])  ;
	            $i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ;	
				$body = "<html xmlns='http://www.w3.org/1999/xhtml'>
					<body bgcolor='#e8e8e8'>
						<table width='100%'>
							<tr>
								<td align='center'>
									<table width='700' cellpadding='0' cellspacing='0'>
										<tr bgcolor='#09285c'><td width='7'>&nbsp;</td><td  height='46' valign='middle'><img src='http://".$_SERVER['HTTP_HOST']."/images/logo.png' /></td><td width='20'>&nbsp;</td></tr>
										<tr bgcolor='#FFFFFF'>
											<td width='20'>&nbsp;</td>
											<td>
												<br /><br />
												<p> <font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'> Bonjour ,</font></p>
												<p><font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#888888'>Votre invitation a été ignorée par :</font></p>
												
												<table cellpadding='0' cellspacing='0' width='220' align='center'>
													<tr>
														<td bgcolor='#f7f8fb'>    
															<table width='100%' cellpadding='0' cellspacing='0'>
																<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right'><img src='http://".$_SERVER['HTTP_HOST']."/images/arrow-yelow-big.png' width='23'></td></tr>
																<tr>
																	<td width='20'>&nbsp;</td>
																	<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST'].\Api\GlobalUtil::user_picture($profil_info['gendre'], $profil_info['user_picture'])."' width='48'></a> </td>
																	<td valign='top'>
																		<strong>
																			<a href='' style='text-decoration:none;color:#143575 '>
																				<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::formatterName($profil_info['firstname'], $profil_info['lastname'])."</font>
																			</a>
																		</strong> <br />
																		<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($profil_info['job'], $maxlenght = 30, $suffix = "...")."</font></em>
																	</td>
																</tr>
																<tr><td colspan='4'>&nbsp; </td></tr>
															</table>
														</td>
													</tr>
													<tr>
														<td bgcolor='#e9ebf2'>	
															<table width='100%' cellpadding='0' cellspacing='0'>
																<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td rowspan='2' valign='top' align='right' width='80'>&nbsp;</td></tr>
																<tr>
																	<td width='7'>&nbsp;</td>
																	<td width='58'><a><img src='http://".$_SERVER['HTTP_HOST']."/uploads/logo/".((file_exists('uploads/logo/'.$profil_info['company_logo']) && $profil_info['company_logo']!='')? $profil_info['company_logo'] : 'logo.png')."' width='48'></a> </td>
																	<td valign='top'>
																		<strong>
																			<a href='' style='text-decoration:none;color:#143575 '>
																				<font face='Arial, Helvetica, sans-serif' style='font-size:12px; color:#143575'>".\Api\GlobalUtil::str_reduce($profil_info['company_name'], $maxlenght = 50, $suffix = "...")."</font>
																			</a>
																		</strong> <br />
																		<em><font face='Arial, Helvetica, sans-serif' style='font-size:11px; color:#888888'>".\Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")."</font></em>
																	</td>
																</tr>		     
																<tr><td colspan='4'>&nbsp; </td></tr>
															</table>
														</td>
													</tr>
												</table>
												
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
			else :
				$data['success'] = false ;
				$data['message'] = \Lang\invitation_error ;		
			endif ;	
		else :
			$data['success'] = false ;
			$data['message'] = \Lang\select_contact ;
		endif ;		
		return $data;
	}
}