<?php include TPL_DIR.'generic/header.tpl.php' ?>
<div id="content">
    <div class="center_content_inner">
      	<div id="left_content"><?php include TPL_DIR.'generic/currentUser.tpl.php' ?></div>           
        <div id="body_content">
			<div class="titre_plugg search"><?= \Lang\search_results ?> </div>
            <div class="result_search">
				<?= $data['count'] ?> <?= ($data['count']==1)? \Lang\result : \Lang\results ?>
               	<div class="right_search">
               		<a href="/search" <?= (!(isset($_GET['directory']) && $_GET['directory']==1))? 'class="selected"' : '' ?>><?= \Lang\community ?> </a> 	
            		<a href="/search?directory=1" <?= (isset($_GET['directory']) && $_GET['directory']==1)? 'class="selected"' : '' ?>><?= \Lang\my_contacts ?> </a>
               	</div>
                <div style="clear:both"></div>
            </div>
        	<div id="content_infinity">
		       	<?php foreach($data['sql'] as $row) : ?> 
                <div class="item_infinity">
					<div class="bloc_user">
                     	<a class="infobull_div tooltip" data-tooltip="#html-content<?= $row['id_user'] ?>" href="/user?id=<?= $row['id_user'] ?>"></a>
                        <div class="im_connais"><a href="/user?id=<?= $row['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" width="37" height="37" /><span></span></a></div>
                        <div class="des_connais">
                        	<strong><a href="/user?id=<?= $row['id_user'] ?>" data-tooltip="#html-content<?= $row['id_user'] ?>" class="tooltip"><?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a></strong> 
							<?= $row['job'] ?> 
                       	</div>
                        <div class="ferme_connais"><a title="<?= $row['common_friends'].' '.(($row['common_friends']==1)? \Lang\mutual_friend : \Lang\mutual_friends) ?>" class="nb_vue_" href="/mutual_friend?uid=<?= $row['id_user'] ?>&iframe=true&width=400" rel="mutual_friend"><span><?= $row['common_friends'] ?></span></a></div>
                        <div class="clear5"></div>
                    </div>   
                    <div style="display:none;" id="html-content<?= $row['id_user'] ?>">
                   		<div id="card_eplugg" onclick="window.location.href='/user?id=<?= $row['id_user'] ?>'">
                        	<div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                            <div id="card_user">
                            	<div class="img_profil"><a href="/user?id=<?= $row['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" alt="" width="48" height="48" /></a></div>
                                <div class="descp_card"> 
                                	<div class="name_user"><a href="/user?id=<?= $row['id_user'] ?>" ><?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a></div> 
                              		<div class="job_user"><?= \Api\GlobalUtil::str_reduce($row['job'], $maxlenght = 30, $suffix = "...") ?></div> 
                                </div>
                                <div class="clear"></div>
                            </div>        
                            <div id="card_company">
                                <div class="img_profil">
                                    <a href="/user?id=<?= $row['id_user'] ?>"><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$row['company_logo']) && $row['company_logo']!='')? $row['company_logo'] : 'logo.png' ?>" width="51" height="51" /></a>
                                </div>
                                <div class="descp_card">
                                    <div class="company_user"><a href="/user?id=<?= $row['id_user'] ?>"><?= \Api\GlobalUtil::formatterCompanyName($row['company_name']) ?></a></div>
                                    <div class="tag_company">
                                        <?php 
                                        $activities = explode('#', $row['company_activity'])  ;
                                        $i=0 ; 
										$list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                                        echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
										?>
                                    </div>
                                    <div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($row['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$row['company_country']] ?></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <?php if($data['id_user']!=$row['id_user']) : ?>
                        <div class="plugg_link info_card">
                        	<?php if(in_array($row['id_user'], $data['repertoire'])) : ?>
                            <a href="/suggest?uid=<?= $row['id_user'] ?>&iframe=true&width=400" rel="suggerer" ><?= \Lang\suggerer ?></a>
                            <?php elseif($row['is_invited']>0) : ?>
                            <a data-id='<?= $row['id_user'] ?>' onclick="VPlugger(this, 0)" ><?= \Lang\validate ?></a>
                            <?php elseif($row['has_invited']>0) : ?>
                             <a data-id='<?= $row['id_user'] ?>' onclick="IPlugger(this, 0)" ><?= \Lang\cancel ?></a>
                            <?php else: ?>
                            <a data-id='<?= $row['id_user'] ?>' onclick="Plugger(this, 0)" ><?= \Lang\plugger ?></a>
                            <?php endif ?>                
                            <a href="messages?uid=<?= $row['id_user'] ?>" ><?= \Lang\message ?></a>                        
            			</div>
                        <?php endif ?>
                   	</div>              
                </div>
                <?php endforeach ?>                 
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