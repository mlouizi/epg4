<?php include TPL_DIR.'generic/header.tpl.php' ?>
<link rel="stylesheet" href="/css/default.min.css" type="text/css" media="all" />
<div id="content">
    <div class="center_content_inner">  
    	<div class="messagesLeft" > 
        <div class="titre_plugg search"><?= \Lang\messages ?></div>  
        	<?php if($data['friend_info']) : ?> 	
       	 	<div class="list_contacts"> 
				<div class="search"><input type="text" id="msg_ct_serach" placeholder="<?= \Lang\search2 ?>"></div>
				<div class="clear20"></div>
                <div id="msg_ct_list">                	
                	<?php foreach ($data['contacts'] as $contact) : ?>
                	<div class="bloc_suggestion <?= ($contact['id_user']==$data['friend_info']['id_user'])? 'actif' : '' ?>">
                        <div class="im_connais">
                        	<a href="/messages?uid=<?php echo $contact['id_user'] ?>">
                        		<img src="<?= \Api\GlobalUtil::user_picture($contact['gendre'], $contact['user_picture']) ?>" width="37" height="37" />
                         	</a>
                     	</div>
                        <div class="des_connais">
                            <strong><a href="/messages?uid=<?php echo $contact['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($contact['firstname'], $contact['lastname']) ?></a></strong>
                            <div class="time"><?= \Api\GlobalUtil::formatterDateTime($contact['last_message']) ?></div>
                        </div>                        
                        <div class="clear5"></div>
                    </div>
                    <?php endforeach ?>
            	</div>	
            </div>			
           	<?php endif ?>
      	</div>
        <div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
        <div class="clear"></div>
    </div>
    <div class="clear25"></div>
</div>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>
<script src="/js/message.js" type="text/javascript"></script>