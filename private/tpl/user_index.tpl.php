<?php include TPL_DIR.'generic/header.tpl.php' ?>
<div id="content">
    <div class="center_content_inner">
      	<div id="left_content"><?php include TPL_DIR.'generic/currentUser.tpl.php' ; include TPL_DIR.'generic/annuaire.tpl.php' ?></div>           
        <div id="body_content">
			<div class="titre_plugg"><?= \Lang\news ?></div>
        	<div class="content_center__" id="content_infinity">
		       	<?php $i=0 ; foreach($data['news'] as $item) : ?> 
                <div class="item_infinity">
					<?php if($i==0 or date('Y-m-d',strtotime($item['activity_time']))!=$last_time) : ?><div class="filter_date"><?= \Util\getDayFormat(date('d-m-Y',strtotime($item['activity_time']))) ?></div><?php endif ?>
                    <?php if($item['activity']==1): 
						$id_user2 = ($item['id_user1']==$item['id_user'])? $item['id_user2'] : $item['id_user1'] ;
						$user2 = \Api\VisitCard::get_full($id_user2, 'user_profile', $data['id_user'])->data["user_profile"] ;
					?> 
                    <div class="content_date_bloc">
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
                                <div class="descp_prince"><strong><a href="/user?id=<?= $item['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></strong> <?= $item['job'] ?></div>
                            </div>
                            <div class="clear10"></div>
                            <div class="personne_second">                             
                                <div class="personne_second_bg"><a class="infobull_div tooltip" data-tooltip="#html-content<?= $user2['id_user'] ?>" href="/user?id=<?= $user2['id_user'] ?>"></a>
                                    <div class="img_second"><a href="/user?id=<?= $user2['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($user2['gendre'], $user2['user_picture']) ?>" alt="" width="41" height="41" /></a></div>
                                    <div class="descp_second"><strong><a href="/user?id=<?= $user2['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($user2['firstname'], $user2['lastname']) ?></a></strong> <?= $user2['job'] ?> </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear10"></div>
                        <div style="display:none;" id="html-content<?= $user2['id_user'] ?>">
                            <div id="card_eplugg" onclick="window.location.href='/user?id=<?= $user2['id_user'] ?>'">
                                <div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                                <div id="card_user">
                                    <div class="img_profil"><a href="/user?id=<?= $user2['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($user2['gendre'], $user2['user_picture']) ?>" alt="" width="48" height="48" /></a></div>
                                    <div class="descp_card"> 
                                        <div class="name_user"><a href="/user?id=<?= $user2['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($user2['firstname'], $user2['lastname']) ?></a></div> 
                                        <div class="job_user"><?= \Api\GlobalUtil::str_reduce($user2['job'], $maxlenght = 30, $suffix = "...") ?></div> 
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
                                        <div class="company_user"><a href="/user?id=<?= $user2['id_user'] ?>"><?= \Api\GlobalUtil::str_reduce($user2['company_name'], $maxlenght = 50, $suffix = "...") ?></a></div>
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
                    <div class="content_date_bloc">
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
                                	<strong><a  href="/user?id=<?= $item['id_user'] ?>" data-tooltip="#html-content<?= $item['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></strong> 
									<?= $item['job'] ?>
                              	</div>
                            </div>
                            <div class="clear10"></div>
                            <div class="infos_modif"><?= \Api\Activity::getActivityDesc($item) ?> </div>
                        </div>
                        <div class="clear10"></div>
                    </div>
                    <?php endif ?>
                    <div style="display:none;" id="html-content<?= $item['id_user'] ?>">
                   		<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $item['id_user'] ?>'">
                        	<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                            <div id="card_user">
                            	<div class="img_profil"><a href="/user?id=<?= $item['id_user'] ?>"> <img src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>" alt="" width="48" height="48" /> </a></div>
                                <div class="descp_card"> 
                                	<div class="name_user"><a href="/user?id=<?= $item['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></div> 
                              		<div class="job_user"><?= \Api\GlobalUtil::str_reduce($item['job'], $maxlenght = 30, $suffix = "...") ?></div> 
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
                                    <div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($item['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$item['company_country']] ?></div>
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
                             <a data-id='<?= $item['id_user'] ?>' onclick="IPlugger(this, 0)" ><?= \Lang\cancel ?></a>
                            <?php else: ?>
                            <a data-id='<?= $item['id_user'] ?>' onclick="Plugger(this, 0)" ><?= \Lang\plugger ?></a>
                            <?php endif ?>                
                            <a href="messages?uid=<?= $item['id_user'] ?>" ><?= \Lang\message ?></a>	
                      	</div>
                        <?php endif ?>
                    </div>
                </div>
                <?php $last_time = date('Y-m-d',strtotime($item['activity_time'])) ; $i++; endforeach ?>                
                <div class="clear10"></div>     
                <a id="next" href="?page=2"></a>                        
        	</div>
      	</div>
      	<div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
        <div class="clear"></div>
	</div>
    <div class="clear25"></div>
</div>
<script src="/js/jquery.infinitescroll.js"></script>
<script language="javascript" type="text/javascript">
$('#content_infinity').infinitescroll(
	{
		navSelector:"#next:last",
		nextSelector:"a#next:last",
		itemSelector:"#content_infinity div.item_infinity",
		dataType:'html',
		maxPage:<?= $data['numberOfPages'] ?>,
		path:function(index) { return "?page=" + index ; } 
	}, 
	function(newElements, data, url){
		$('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});
		intPretty() ;
	}
);
</script>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>