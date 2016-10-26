<?php $profile = $data['user_info'] ?>
<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $profile['id_user'] ?>'">
	<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
	<div id="card_user">
  		<div class="img_profil">
        	<a href="/user?id=<?= $profile['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture']) ?>" alt="" width="48" height="48" /></a>
        </div>
		<div class="descp_card"> 
        	<div class="name_user"><a href="/user?id=<?= $profile['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($profile['firstname'], $profile['lastname']) ?></a></div> 
            <div class="job_user"><?= \Api\GlobalUtil::str_reduce($profile['job'], $maxlenght = 30, $suffix = "...") ?></div> 
       	</div>
  		<div class="clear"></div>
	</div>        
	<div id="card_company">
   		<div class="img_profil">
        	<a href="/user?id=<?= $profile['id_user'] ?>"><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='')? $profile['company_logo'] : 'logo.png' ?>" width="51" height="51" /></a>
       	</div>
        <div class="descp_card">
        	<div class="company_user"><a href="/user?id=<?= $profile['id_user'] ?>"><?= \Api\GlobalUtil::formatterCompanyName($profile['company_name']) ?></a></div>
            <div class="tag_company">
            	<?php 
               		$activities = explode('#', $profile['company_activity'])  ;
                    $i=0 ; $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                   	echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
				?>
            </div>
       		<div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($profile['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$profile['company_country']] ?></div>
      	</div>
      	<div class="clear"></div>
   	</div>
</div>
<div class="clear20"></div>