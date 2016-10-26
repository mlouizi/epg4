<?php 	
	$profile = $data['user_profile'];
	$profile_phones = array_filter(explode('|',$profile['direct_phones']));
	$profile_mobiles = array_filter(explode('|',$profile['mobiles']));	
	$profile_emails = array_filter(explode('|',$profile['emails']));
	$profile_sociaux = array_filter(explode('|',$profile['sociaux']));
	$profile_c_dir_phones = array_filter(explode('|',$profile['company_tel']));
	$profile_c_fax = array_filter(explode('|',$profile['company_fax']));
	$profile_c_websites = array_filter(explode('|',$profile['company_websites']));
	include TPL_DIR.'generic/header.tpl.php' ;
?>
<div id="content">
  	<div class="center_content_inner">
    	<div id="body_content" class="profil">
      		<div id="card_eplugg">
        		<div class="yellow"><img src="images/arrow-yelow-big.png" /></div>
        		<div id="card_user">
          			<div class="img_profil"><a><img src="<?= \Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture']) ?>" /></a></div>
          			<div class="descp_card"> 
                    	<strong><a><?= ucfirst($profile['firstname']).' '.strtoupper($profile['lastname']) ?></a></strong> 
                        <em><?= $profile['job'] ?></em>
                        <ul>
                            <li class="tel1"><?= ($data['is_friend'] || $data['is_self'])? implode(' | ',$profile_phones) : \Lang\private_info.' <img src="images/private.png" />' ?></li>
                            <li class="mobile"><?= ($data['is_friend'] || $data['is_self'])? implode(' | ',$profile_mobiles) : \Lang\private_info.' <img src="images/private.png" />' ?></li>
                            <li class="mail1">
                                <?php if($data['is_friend'] || $data['is_self']) : $count = count($profile_emails) ; $i=1 ; foreach($profile_emails as $item) : ?> 
                                <a href="mailto:<?= $item ?>" target="_blank"> <?= $item ?> </a> <?= ($count!=$i)? '|' : '' ?>
                                <?php $i++ ; endforeach ; else : echo \Lang\private_info.' <img src="images/private.png" />' ; endif ?>
                            </li>
                            <li class="sociaux">
                                <?php if($data['is_friend'] || $data['is_self']) : $count = count($profile_sociaux) ; $i=1 ; foreach($profile_sociaux as $item) : ?>
                                <a href="<?= ((substr($item,0,7)!='http://' && substr($item,0,8)!='https://')? 'http://' : '').$item ?>" target="_blank"><?= $item ?> </a> <?= ($count!=$i)? '|' : '' ?>
                                <?php $i++ ; endforeach ; else : echo \Lang\private_info.' <img src="images/private.png" />' ; endif  ?>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="card_company">
                    <div class="img_profil"><a><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='')? $profile['company_logo'] : 'logo.png' ?>" /></a></div>
                    <div class="descp_card"> 
                        <strong><a> <?= $profile['company_name'] ?> </a></strong> 
                        <div class="tag"><?php $activities = explode('#', $profile['company_activity']) ; foreach($activities as $activitie) : echo ($activitie!='')? '#'.$activitie.' ': '' ; endforeach ?></div>
                        <ul>
                            <li class="tel2"> <?= ($data['is_friend'] || $data['is_self'])? implode(' | ',$profile_c_dir_phones) : \Lang\private_info.' <img src="images/private.png" />' ?> </li>
                            <li class="fax"> <?= ($data['is_friend'] || $data['is_self'])? implode(' | ',$profile_c_fax) : \Lang\private_info.' <img src="images/private.png" />' ?> </li>
                            <li class="site">
                                <?php if($data['is_friend'] || $data['is_self']) : $count = count($profile_c_websites) ; $i=1 ; foreach($profile_c_websites as $item) : ?>
                                <a href="<?= ((substr($item,0,7)!='http://' && substr($item,0,8)!='https://')? 'http://' : '').$item ?>" target="_blank"> <?= $item ?> </a> <?= ($count!=$i)? '|' : '' ?>
                                <?php $i++ ; endforeach ; else : echo \Lang\private_info.' <img src="images/private.png" />' ; endif  ?>
                            </li>
                            <li class="lieu"><?= ($data['is_friend'] || $data['is_self'])? (($profile['company_address']!='')? $profile['company_address'].' - ' : '' ).$profile['company_city'].', '.\Lang\Aux::$countries[$profile['company_country']] : \Lang\private_info.' <img src="images/private.png" />' ?></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <?php if($data['is_self']) : ?> 
            <div class="social_bar">  
                <a onclick="javascript:window.open(this.href, '', 'width=530,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://www.facebook.com/sharer.php?u=<?= 'http://'.$_SERVER['HTTP_HOST'].'/profile?id='. $profile['id_user'] ?>" class="link_facebook hotspot" onmouseover="tooltip.show('<?= \Lang\share_on_facebook ?>');" onmouseout="tooltip.hide();" title="<?= \Lang\facebook ?>"></a>
                <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://twitter.com/home?status=Consultez ma carte visite sur Eplugg : <?= 'http://'.$_SERVER['HTTP_HOST'].'/profile?id='. $profile['id_user'] ?>" class="link_twitter hotspot" onmouseover="tooltip.show('<?= \Lang\share_on_twitter ?>');" onmouseout="tooltip.hide();"></a>
                <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="https://plus.google.com/share?url=<?= 'http://'.$_SERVER['HTTP_HOST'].'/profile?id='. $profile['id_user'] ?>" class="link_google hotspot" onmouseover="tooltip.show('<?= \Lang\share_on_google ?>');" onmouseout="tooltip.hide();"></a>
                <a onclick="javascript:window.open(this.href, '', 'width=500,height=500,menubar=no,location=no,resizable=true,scrollbars=yes,status=yes');return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=<?= 'http://'.$_SERVER['HTTP_HOST'].'/profile?id='. $profile['id_user'] ?>&title=Consultez ma carte visite sur Eplugg : <?= ucfirst($profile['firstname']).' '.strtoupper($profile['lastname']) ?>&summary=<?= $profile['job'] ?>" class="link_linkedin hotspot" onmouseover="tooltip.show('<?= \Lang\share_on_linkedin ?>');" onmouseout="tooltip.hide();"></a>
            </div>  
            <?php  endif ?>
            <div class="partage_profil">
                <ul>
                    <?php if($data['is_self']) : ?>
                    <li id="first"><a href="/edit_profile" title="<?= \Lang\edit ?>" class="btn_edit"><?= \Lang\edit ?></a></li>              
                    <?php elseif($data['is_friend']) : ?>
                    <li id="first"><a href="/suggest?uid=<?= $profile['id_user'] ?>&iframe=true&width=400" rel="suggerer" title="<?= \Lang\suggerer ?>" class="btn_share"><?= \Lang\suggerer ?></a></li>
                    <li><a href="/messages?uid=<?= $profile['id_user'] ?>" title="<?= \Lang\send_message ?>" class="btn_msg"><?= \Lang\send_message ?></a></li>
                    <li><a data-id='<?= $profile['id_user'] ?>' class="delete_contact" title="<?= \Lang\delete ?>"><?= \Lang\delete ?></a></li>
                    <?php elseif($data['is_invited']) : ?>
                    <li id="first"><a data-id='<?= $profile['id_user'] ?>' class="Vplugger" title="<?= \Lang\validate_invitation ?>"><?= \Lang\validate_invitation ?></a></li>
                    <li><a data-id='<?= $profile['id_user'] ?>' class="Iplugger" title="<?= \Lang\cancel_invitation ?>"><?= \Lang\cancel_invitation ?></a></li>
                    <li><a href="/messages?uid=<?= $profile['id_user'] ?>" title="<?= \Lang\send_message ?>" class="btn_msg"><?= \Lang\send_message ?></a></li>
                    <?php elseif($data['has_invited']) : ?>
                    <li  id="first"><a data-id='<?= $profile['id_user'] ?>' title="<?= \Lang\cancel_invitation ?>" class="Iplugger"><?= \Lang\cancel_invitation ?></a></li>
                    <li><a href="/messages?uid=<?= $profile['id_user'] ?>" title="<?= \Lang\send_message ?>" class="btn_msg"><?= \Lang\send_message ?></a></li>
                    <?php else : ?>
                    <li id="first"><a data-id='<?= $profile['id_user'] ?>' title="<?= \Lang\plugger ?>" class="plugger"><?= \Lang\plugger ?></a></li>
                    <li><a href="/messages?uid=<?= $profile['id_user'] ?>"  title="<?= \Lang\send_message ?>" class="btn_msg"><?= \Lang\send_message ?></a></li>
                    <?php  endif ?>
                </ul>
      		</div>
      		<div class="clear30"></div>
      		<div class="titre_plugg">
				<?= \Lang\career ?>
                <?php if($data['is_self']) : ?>
                <a href="/add_cv?iframe=true&width=500&height=350" rel="add_cv" class="link_exp" title="<?= \Lang\add_experience ?>" > <?= \Lang\add_experience ?> </a> 
                <a href="/upload_cv?iframe=true&width=500&height=150" rel="upload_cv"  class="link_cv" title="<?= (file_exists('uploads/cv/'.$profile['cv_name']) && $profile['cv_name']!='')? \Lang\edit_cv : \Lang\import_cv ?>">
                    <?= (file_exists('uploads/cv/'.$profile['cv_name']) && $profile['cv_name']!='')? \Lang\edit_cv : \Lang\import_cv ?>
                </a>  &nbsp;&nbsp;
                <?php if (file_exists('uploads/cv/'.$profile['cv_name']) && $profile['cv_name']!='') : ?>
                <a href="/delete_cv_file?iframe=true&width=400&height=130" id="delete_cv_file" rel="delete_cv_file"  class="link_delete_cv" title="<?= \Lang\delete_cv ?>"> <?= \Lang\delete_cv ?> </a> &nbsp;&nbsp;
                <?php endif; ?>
                <?php endif ?>
            </div>
      		<div class="cv_profil">
        		<?php if($data['is_friend'] || $data['is_self']) : ?>
        		<?php if(file_exists('uploads/cv/'.$profile['cv_name']) && $profile['cv_name']!='') : ?>
        		<div class="btn_download"><a href="/uploads/cv/<?= $profile['cv_name'] ?>" target="_blank"><img src="images/pdf.png" /> <?= \Lang\download_cv ?> </a></div>
        		<?php endif ?>
        		<?php $i=0 ; foreach($data['cvs'] as $item) : ?>
        		<div class="mon_cv" style="position:relative" id="config_cv<?= $item['id'] ?>">
          			<div class="date_mon_cv">
            			<?= constant('\\Lang\\'.date('M', strtotime($item['from_date']))).' '.date('Y', strtotime($item['from_date'])).' - '.(!($item['to_date']) && $i==0)? 'Aujourd’hui' : (constant('\\Lang\\'.date('M', strtotime($item['to_date']))).' '.date('Y', strtotime($item['to_date']))) ?>
          			</div>
          			<h3><?= $item['company'] ?></h3>
          			<div class="lieu_mon_cv"><?= $item['place'] ?></div>
          			<div class="poste_mon_cv"> <?= $item['work_status'] ?> </div>
          			<?php if($data['is_self']) : ?>
          			<div class="action_cv"> 
                    	<a href="#delete_cv<?= $item['id'] ?>" rel="delete_cv" class="delete_cv" title="<?= \Lang\delete ?>"> <?= \Lang\delete ?></a>
            			<div id="delete_cv<?= $item['id'] ?>" style="display:none;">
              				<div class="titre_plugg"> <?= \Lang\confirmation ?> </div>
              				<div class="top_form"> <div> <?= \Lang\delete_alert ?> </div> </div>
              				<div class="clear10"></div>
              				<div class="plugg_link" align="center"> 
                            	<a onclick="$.prettyPhoto.close();" > <?= \Lang\cancel ?> </a> 
                                <a href="/delete_cv?id=<?= $item['id'] ?>"> <?= \Lang\confirmation1 ?> </a>
                          	</div>
              				<div class="clear"></div>
            			</div>
            			<a href="/edit_cv?id=<?= $item['id'] ?>&iframe=true&width=500&height=350" rel="edit_cv" class="edit_cv" title="<?= \Lang\edit ?>"> <?= \Lang\edit ?> </a> 
                  	</div>
          			<?php endif ?>
        		</div>
        		<?php $i++ ; endforeach ?>
        		<?php else : echo \Lang\private_info ; endif ?>
      		</div>
      		<div class="clear20"></div>
      		<div class="titre_plugg"><?= \Lang\news ?></div>
      		<div class="content_center__" id="content_infinity">
        		<?php if($data['is_self'] or $data['is_friend']) : ?>
        		<?php $i=0 ; foreach($data['news'] as $item) : ?>
        		<div class="item_infinity">
          			<?php if($i==0 or date('Y-m-d',strtotime($item['activity_time']))!=$last_time) : ?><div class="filter_date"> <?= \Util\getDayFormat(date('d-m-Y',strtotime($item['activity_time']))) ?> </div><?php endif ?>
          			<?php 
						if($item['activity']==1): 
							$id_user2 = ($item['id_user1']==$item['id_user'])? $item['id_user2'] : $item['id_user1'] ;
							$user2 = \Api\VisitCard::get_full($id_user2, 'user_profile',$data['id_user'])->data["user_profile"] ;
					?>
          			<div class="content_date_bloc" style="width:85%">
            			<div class="bloc_date_">
              				<div class="branche"><span><?= date('H:i',strtotime($item['activity_time'])) ?></span></div>
              				<div class="personne_prince"> 
                            	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $item['id_user'] ?>" href="/user?id=<?= $item['id_user'] ?>"></a>
                				<div class="img_prince"> 
                                	<a href="/user?id=<?= $item['id_user'] ?>"> 
                                    	<img src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>" alt="" width="60" height="60" />
                  						<?php if($item['gold']==1) : ?><span class="gold"><img src="images/gold.png"></span><?php endif ?>
                  					</a> 
                              	</div>
                				<div class="descp_prince"><strong><a href="/user?id=<?= $item['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></strong> <?= $item['job'] ?> </div>
              				</div>
              				<div class="clear10"></div>
              				<div class="personne_second">
                				<div class="personne_second_bg">
                                	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $user2['id_user'] ?>" href="/user?id=<?= $user2['id_user'] ?>"></a>
                  					<div class="img_second"> <a href="/user?id=<?= $user2['id_user'] ?>"> <img src="<?= \Api\GlobalUtil::user_picture($user2['gendre'], $user2['user_picture']) ?>" alt="" width="41" height="41" /> </a> </div>
                  					<div class="descp_second"><strong><a href="/user?id=<?= $user2['id_user'] ?>"> <?= \Api\GlobalUtil::formatterName($user2['firstname'], $user2['lastname']) ?> </a></strong> <?= $user2['job'] ?> </div>
                				</div>
              				</div>
            			</div>
            			<div class="clear10"></div>
            			<div style="display:none;" id="html-content<?= $user2['id_user'] ?>">
              				<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $user2['id_user'] ?>'">
                				<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                				<div id="card_user">
                  					<div class="img_profil"> <a href="/user?id=<?= $user2['id_user'] ?>"> <img src="<?= \Api\GlobalUtil::user_picture($user2['gendre'], $user2['user_picture']) ?>" alt="" width="48" height="48" /> </a> </div>
                  					<div class="descp_card">
                    					<div class="name_user"> <a href="/user?id=<?= $user2['id_user'] ?>" > <?= \Api\GlobalUtil::formatterName($user2['firstname'], $user2['lastname']) ?> </a> </div>
                    					<div class="job_user"> <?= \Api\GlobalUtil::str_reduce($user2['job'], $maxlenght = 30, $suffix = "...") ?> </div>
                  					</div>
                  					<div class="clear"></div>
                				</div>
                				<div id="card_company">
                  					<div class="img_profil"> 
                                    	<a href="/user?id=<?= $user2['id_user'] ?>"> 
                                        	<img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$user2['company_logo']) && $user2['company_logo']!='')? $user2['company_logo'] : 'logo.png' ?>" width="51" height="51" /> 
                                       	</a> 
                                  	</div>
                  					<div class="descp_card">
                    					<div class="company_user"><a href="/user?id=<?= $user2['id_user'] ?>"> <?= \Api\GlobalUtil::str_reduce($user2['company_name'], $maxlenght = 50, $suffix = "...") ?> </a></div>
                    					<div class="tag_company">
                      						<?php 
                                            $activities = explode('#', $user2['company_activity'])  ;
                                            $i=0 ; 
                                            $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                                            echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
                                            ?>
                    					</div>
                    					<div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($user2['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$user2['company_country']] ?></div>
                  					</div>
                  					<div class="clear"></div>
                				</div>
              				</div>
              				<?php if($data['id_user']!=$user2['id_user']) : ?>
              				<div class="plugg_link info_card">
                				<?php if(in_array($user2['id_user'], $data['repertoire'])) : ?>
                				<a href="/suggest?uid=<?= $user2['id_user'] ?>&iframe=true&width=400" rel="suggerer" ><?= \Lang\suggerer ?></a>
                				<?php elseif($user2['is_invited']>0) : ?>
                				<a data-id='<?= $user2['id_user'] ?>' onclick="VPlugger(this, 0)" ><?= \Lang\validate ?></a>
                				<?php elseif($user2['has_invited']>0) : ?>
                				<a data-id='<?= $user2['id_user'] ?>' onclick="IPlugger(this, 0)" ><?= \Lang\cancel ?></a>
                				<?php else: ?>
                				<a data-id='<?= $user2['id_user'] ?>' onclick="Plugger(this, 0)" ><?= \Lang\plugger ?></a>
								<?php endif ?>
                				<a href="messages?uid=<?= $user2['id_user'] ?>" ><?= \Lang\message ?></a> 
                          	</div>
              				<?php endif ?>
            			</div>
          			</div>
          			<?php else : ?>
          			<div class="content_date_bloc"  style="width:85%">
            			<div class="bloc_date_">
              				<div class="branche"><span><?= date('H:i',strtotime($item['activity_time'])) ?></span></div>
              				<div class="personne_prince"> 
                            	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $item['id_user'] ?>" href="/user?id=<?= $item['id_user'] ?>"></a>
                				<div class="img_prince"> 
                                	<a  href="/user?id=<?= $item['id_user'] ?>" > 
                                    	<img src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>" alt="" width="60" height="60" />
                  						<?php if($item['gold']==1) : ?><span class="gold"><img src="images/gold.png"></span><?php endif ?>
                  					</a> 
                              	</div>
                				<div class="descp_prince"> 
                                	<strong><a  href="/user?id=<?= $item['id_user'] ?>" data-tooltip="#html-content<?= $item['id_user'] ?>"> <?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?> </a></strong> 
									<?= $item['job'] ?> 
                               	</div>
              				</div>
              				<div class="clear10"></div>
              				<div class="infos_modif"> <?= \Api\Activity::getActivityDesc($item) ?> </div>
            			</div>
            			<div class="clear10"></div>
          			</div>
          			<?php endif ?>
          			<div style="display:none;" id="html-content<?= $item['id_user'] ?>">
            			<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $item['id_user'] ?>'">
              				<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
              				<div id="card_user">
                				<div class="img_profil"> <a href="/user?id=<?= $item['id_user'] ?>"> <img src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>" alt="" width="48" height="48" /> </a> </div>
                				<div class="descp_card">
                  					<div class="name_user"><a href="/user?id=<?= $item['id_user'] ?>" > <?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?>  </a></div>
                  					<div class="job_user"> <?= \Api\GlobalUtil::str_reduce($item['job'], $maxlenght = 30, $suffix = "...") ?></div>
                				</div>
                				<div class="clear"></div>
              				</div>
              				<div id="card_company">
                                <div class="img_profil"> 
                                    <a href="/user?id=<?= $item['id_user'] ?>"><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$item['company_logo']) && $item['company_logo']!='')? $item['company_logo'] : 'logo.png' ?>" width="51" height="51" /></a> 
                                </div>
                				<div class="descp_card">
                  					<div class="company_user"><a href="/user?id=<?= $item['id_user'] ?>"><?= \Api\GlobalUtil::str_reduce($item['company_name'], $maxlenght = 50, $suffix = "...") ?></a></div>
                  					<div class="tag_company">
                    					<?php 
                                        $activities = explode('#', $item['company_activity'])  ;
                                        $i=0 ; 
										$list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                                        echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
										?>
                  					</div>
                  					<div class="lieu_company"> <?= \Api\GlobalUtil::str_reduce($item['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$item['company_country']] ?> </div>
                				</div>
                				<div class="clear"></div>
              				</div>
            			</div>
            			<?php if($data['id_user']!=$item['id_user']) : ?>
            			<div class="plugg_link info_card">
              				<?php if(in_array($item['id_user'], $data['repertoire'])) : ?>
              				<a href="/suggest?uid=<?= $item['id_user'] ?>&iframe=true&width=400" rel="suggerer" ><?= \Lang\suggerer ?></a>
              				<?php elseif($item['is_invited']>0) : ?>
              				<a data-id='<?= $item['id_user'] ?>' onclick="VPlugger(this, 0)" ><?= \Lang\validate ?></a>
              				<?php elseif($item['has_invited']>0) : ?>
              				<a data-id='<?= $item['id_user'] ?>' onclick="IPlugger(this, 0)" ><?= \Lang\cancel ?> </a>
              				<?php else: ?> 
                            <a data-id='<?= $item['id_user'] ?>' onclick="Plugger(this, 0)" > <?= \Lang\plugger ?></a>
              				<?php endif ?>
              				<a href="messages?uid=<?= $item['id_user'] ?>" ><?= \Lang\message ?></a> 
                      	</div>
            			<?php endif ?>
          			</div>
        		</div>
        		<?php $last_time = date('Y-m-d',strtotime($item['activity_time'])) ; $i++; endforeach ?>
        		<div class="clear10"></div>
        		<a id="next" href="?id=<?= $data['id'] ?>&page=2"></a>
        		<?php else:  echo \Lang\private_info ; endif ?>
      		</div>
      		<div class="clear20"></div>
    	</div>
    	<div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
    	<div class="clear"></div>
  	</div>
  	<div class="clear25"></div>
</div>
<?php if($data['is_self'] or $data['is_friend']) : ?>
<script src="/js/jquery.infinitescroll.js"></script> 
<script language="javascript" type="text/javascript">
$('#content_infinity').infinitescroll(
	{
		navSelector:"#next:last",
		nextSelector:"a#next:last",
		itemSelector:"#content_infinity div.item_infinity",
		dataType:'html',
		maxPage:<?= $data['numberOfPages'] ?>,
		path:function(index) { return "?id=<?= $data['id'] ?>&page=" + index ; } 
	}, 
	function(newElements, data, url){
		$('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});
		intPretty() ;
	}
);
</script>
<?php endif ?>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>