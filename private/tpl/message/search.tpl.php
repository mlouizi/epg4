<?php $i=0 ; foreach ($data['contacts'] as $contact) : ?>
<div class="bloc_suggestion <?= ($contact['id_user']==$data['uid'])? 'actif' : '' ?>">
	<div class="im_connais">
    	<a href="/messages?uid=<?= $contact['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($contact['gendre'], $contact['user_picture']) ?>" width="37" height="37" /></a>
   	</div>
    <div class="des_connais"><strong><a href="/messages?uid=<?= $contact['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($contact['firstname'], $contact['lastname']) ?></a></strong><?= $contact['last_message'] ?></div>                        
    <div class="clear5"></div>
</div>
<?php $i++ ; endforeach ?>
<?= ($i==0)?  '<div class="message">'.\Lang\empty_contact.'</div>' : '' ?> 