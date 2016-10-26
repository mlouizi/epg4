<script language="javascript" type="text/javascript">
function getSuggestion(_this) {
	$('#suggestion' + $(_this).attr('data-id')).hide('slow', function(){ $(this.remove())}) ;
	$('#list_suggestions').append($('#others_suggestions li:first').html()) ;
	$('#others_suggestions li:first').remove() ;
}
</script>
<div id='list_suggestions'>
	<div class="titre_plugg"><?= \Lang\suggestion ?></div>
	<?php $i=0 ; foreach($data["suggestions"]  as $suggestion) : ?> 
     <?php if($i==5): echo '</div><ul id="others_suggestions" style="display:none">' ; endif ; ?>
    <?php if($i>4): echo "<li>" ; endif ; ?>
    <div class="bloc_suggestion" id="suggestion<?= $suggestion['id_user'] ?>" >
     <a class="infobull_div tooltip" data-tooltip="#html-content<?= $suggestion['id_user'] ?>" href="/user?id=<?= $suggestion['id_user'] ?>"></a>
        <div class="im_connais">
            <a class="tooltip" data-tooltip="#html-content<?= $suggestion['id_user'] ?>" href="/user?id=<?= $suggestion['id_user'] ?>">
            	<img src="<?= \Api\GlobalUtil::user_picture($suggestion['gendre'], $suggestion['user_picture']) ?>" width="37" height="37" alt="" />
            </a> 
        </div>
        <div class="des_connais">
            <strong> <a class="tooltip" data-tooltip="#html-content<?= $suggestion['id_user'] ?>" href="/user?id=<?= $suggestion['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($suggestion['firstname'], $suggestion['lastname']) ?></a></strong>
            <?php echo $suggestion['job'] ?>
        </div>
        <div class="ferme_connais">
            <div class="fermer_connais"><a data-id='<?php echo $suggestion['id_user'] ?>' onclick="getSuggestion(this)" >X</a></div>
            <a title="<?= $suggestion['common_friends'].' '.(($suggestion['common_friends']==1)? \Lang\mutual_friend : \Lang\mutual_friends) ?>" class="nb_vue_" href="/mutual_friend?uid=<?= $suggestion['id_user'] ?>&iframe=true&width=400" rel="mutual_friend"><span><?= $suggestion['common_friends'] ?></span></a>
        </div>
        <div class="clear5"></div>
        <div style="display:none;" id="html-content<?= $suggestion['id_user'] ?>" >
            <div id="card_eplugg" onclick="window.location.href='/user?id=<?= $suggestion['id_user'] ?>'">
                <div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                <div id="card_user">
                    <div class="img_profil"><a href="/user?id=<?= $suggestion['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($suggestion['gendre'], $suggestion['user_picture']) ?>" alt="" width="48" height="48" /></a></div>
                    <div class="descp_card"> 
                        <div class="name_user"> <a href="/user?id=<?= $suggestion['id_user'] ?>"> <?= \Api\GlobalUtil::formatterName($suggestion['firstname'], $suggestion['lastname']) ?> </a> </div> 
                        <div class="job_user"><?= \Api\GlobalUtil::str_reduce($suggestion['job'], $maxlenght = 30, $suffix = "...") ?></div> 
                    </div>
                    <div class="clear"></div>
                </div>        
                <div id="card_company">
                    <div class="img_profil">
                        <a href="/user?id=<?= $suggestion['id_user'] ?>">
                            <img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$suggestion['company_logo']) && $suggestion['company_logo']!='')? $suggestion['company_logo'] : 'logo.png' ?>" width="51" height="51" />
                        </a>
                    </div>
                    <div class="descp_card">
                        <div class="company_user"><a href="/user?id=<?= $suggestion['id_user'] ?>"><?= \Api\GlobalUtil::formatterCompanyName($suggestion['company_name']) ?></a></div>
                        <div class="tag_company">
                            <?php 
                            $activities = explode('#', $suggestion['company_activity'])  ;
                            $j=0 ; 
                            $list_act = ''; foreach($activities as $activitie) : $list_act .= ($j<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $j++ ; endforeach ; 
                            echo \Api\GlobalUtil::str_reduce($list_act, $maxlenght = 50, $suffix = "...")
                            ?>
                        </div>
                        <div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($suggestion['company_city'], $maxlenght = 50, $suffix = "...").' - '.\Lang\Aux::$countries[$suggestion['company_country']] ?></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="plugg_link info_card">
            	<?php if(in_array($suggestion['id_user'], $data['repertoire'])) : ?>
                <a href="/suggest?uid=<?= $suggestion['id_user'] ?>&iframe=true&width=400" rel="suggerer" ><?= \Lang\suggerer ?></a>
            	<?php elseif($suggestion['is_invited']>0) : ?>
                <a data-id='<?= $suggestion['id_user'] ?>' onclick="VPlugger(this, 0)" ><?= \Lang\validate ?></a>
                <?php elseif($suggestion['has_invited']>0) : ?>
                 <a data-id='<?= $suggestion['id_user'] ?>' onclick="IPlugger(this, 0)" ><?= \Lang\cancel ?></a>
                <?php else: ?>
                <a data-id='<?= $suggestion['id_user'] ?>' onclick="Plugger(this, 0)" ><?= \Lang\plugger ?></a>
                <?php endif ?>                
                <a href="messages?uid=<?= $suggestion['id_user'] ?>" ><?= \Lang\message ?></a>
            </div>
        </div>


    </div>
    <?php if($i>4): echo "</li>" ; endif ; ?>
    <?php $i++ ; endforeach ?>


</ul>

<div class="right_search" style="  margin-top: 20px; margin-left: 45px; float: left;">
    <a href="/search" class="selected"><?= \Lang\all_suggestions ?> </a>
</div>