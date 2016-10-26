<?php $i=0 ; foreach($data['sql'] as $row) : ?>
<div class="bloc_user">
	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $row['id_user'] ?>" href="/user?id=<?= $row['id_user'] ?>"></a>
   	<div class="im_connais">
   		<a href="/user?id=<?php echo $row['id_user'] ?>">
       		<img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" width="37" height="37" alt="" />
           	<span></span>
      	</a>
   	</div>
  	<div class="des_connais"><strong><a href="/user?id=<?php echo $row['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a></strong><?= htmlspecialchars($row['job']) ?></div>
    <?php if(intval($row['common_friends'])>0) : ?><div class="ferme_connais"><div class="nb_vue_"><span><?php echo $row['common_friends'] ?></span></div></div><?php endif ?>
    <div class="clear5"></div>
    <div style="display:none;" id="html-content<?= $row['id_user'] ?>">
   		<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $row['id_user'] ?>'">
        	<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
            <div id="card_user">
               	<div class="img_profil">
               		<a href="/user?id=<?= $row['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" alt="" width="48" height="48" /></a>
               	</div>
               	<div class="descp_card"> 
               		<div class="name_user"><a href="/user?id=<?= $row['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a></div> 
                   	<div class="job_user"><?= \Api\GlobalUtil::str_reduce($row['job'], $maxlenght = 30, $suffix = "...") ?></div> 
               	</div>
           		<div class="clear"></div>
            </div>        
           	<div id="card_company">
            	<div class="img_profil">
              		<a href="/user?id=<?= $row['id_user'] ?>"><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$row['company_logo']) && $row['company_logo']!='')? $row['company_logo'] : 'logo.png' ?>" width="51" height="51" /> </a>
               	</div>
               	<div class="descp_card">
               		<div class="company_user"><a href="/user?id=<?= $row['id_user'] ?>"><?= \Api\GlobalUtil::formatterCompanyName($row['company_name']) ?></a></div>
                  	<div class="tag_company">
                       	<?php 
                          	$activities = explode('#', $row['company_activity'])  ;
                       		$i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                           	echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
						?>
                  	</div>
                   	<div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($row['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$row['company_country']] ?></div>
               	</div>
          		<div class="clear"></div>
           	</div>
   		</div>
       	<div class="plugg_link info_card">
        	<a href="/suggest?uid=<?= $row['id_user'] ?>&iframe=true&width=400" rel="suggerer" ><?= \Lang\suggerer ?></a>
            <a href="messages?uid=<?= $row['id_user'] ?>" ><?= \Lang\message ?></a>
       	</div>
    </div>
</div>
<?php $i++ ; endforeach ?>
<?php if($i==0) : ?><div class="message"><?= \Lang\empty_contact ?></div><?php endif ?>