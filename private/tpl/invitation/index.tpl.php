<?php include TPL_DIR.'generic/header.tpl.php' ?>
<div id="content">
  	<div class="center_content_inner">
      	<div id="left_content">
        	<?php include TPL_DIR.'generic/currentUser.tpl.php' ?>
            <?php include TPL_DIR.'generic/annuaire.tpl.php' ?>
      	</div>
     	<div id="body_content">
        	<div class="titre_plugg search"><?= \Lang\invitations ?></div>           	
            <?php $k=0 ; foreach($data['invitations'] as $invitation) : ?> 
            <div class="bloc_user">
            	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $invitation['id_user'] ?>" href="/user?id=<?= $invitation['id_user'] ?>"></a>
                <div class="im_connais"><a href="/user?id=<?= $invitation['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($invitation['gendre'], $invitation['user_picture']) ?>" width="37" height="37" alt="" /><span></span></a></div>
                <div class="des_connais">
                	<strong><a href="/user?id=<?= $invitation['id_user'] ?>" data-tooltip="#html-content<?= $invitation['id_user'] ?>" class="tooltip"><?= \Api\GlobalUtil::formatterName($invitation['firstname'], $invitation['lastname']) ?></a></strong> 
					<?= $invitation['job'] ?> 
                </div>
                <div class="ferme_connais">
                	<a title="<?= $invitation['common_friends'].' '.(($invitation['common_friends']==1)? \Lang\mutual_friend : \Lang\mutual_friends) ?>" class="nb_vue_" <?= ($invitation['common_friends']>0)? 'href="/mutual_friend?uid='.$invitation['id_user'].'&iframe=true&width=400" rel="mutual_friend"' : '' ?> ><span><?= $invitation['common_friends'] ?></span></a>
              	</div>
                <div class="clear5"></div>
            </div>  
            <div style="display:none;" id="html-content<?= $invitation['id_user'] ?>">
          		<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $invitation['id_user'] ?>'">
         			<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                 	<div id="card_user">
                 		<div class="img_profil"><a href="/user?id=<?= $invitation['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($invitation['gendre'], $invitation['user_picture']) ?>" alt="" width="48" height="48" /></a></div>
                      	<div class="descp_card"> 
                            <div class="name_user"><a href="/user?id=<?= $invitation['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($invitation['firstname'], $invitation['lastname']) ?></a></div> 
                            <div class="job_user"><?= \Api\GlobalUtil::str_reduce($invitation['job'], $maxlenght = 30, $suffix = "...") ?></div> 
                        </div>
                        <div class="clear"></div>
                    </div>        
                    <div id="card_company">
                     	<div class="img_profil">
                      		<a href="/user?id=<?= $invitation['id_user'] ?>">
                            	<img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$invitation['company_logo']) && $invitation['company_logo']!='')? $invitation['company_logo'] : 'logo.png' ?>" width="51" height="51" />
                           	</a>
                      	</div>
                        <div class="descp_card">
             				<div class="company_user"><a href="/user?id=<?= $invitation['id_user'] ?>"><?= \Api\GlobalUtil::formatterCompanyName($invitation['company_name']) ?></a> </div>
                      		<div class="tag_company">
                           		<?php 
                                   	$activities = explode('#', $invitation['company_activity'])  ;
                                    $i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                             		echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
								?>
                       		</div>
                  			<div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($invitation['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$invitation['company_country']] ?></div>
              			</div>
                    	<div class="clear"></div>
               		</div>
                </div>
                <div class="plugg_link info_card">
               		<a data-id='<?= $invitation['id_user'] ?>' onclick="VPlugger(this, 1)" ><?= \Lang\validate ?></a> 
                 	<a href="messages?uid=<?= $invitation['id_user'] ?>" ><?= \Lang\message ?></a>
              	</div>
           	</div>           
			<?php $k++ ; endforeach ?>
            <?php if($k==0) : ?><div class="message"><?= \Lang\empty_invitation ?></div><?php endif ?>
        </div>
      	<div id="right_content">
		    <?php include TPL_DIR.'generic/suggestion.tpl.php' ?>
      	</div>
    </div>
  	<div class="clear25"></div>
</div>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>