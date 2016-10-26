<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>	
        <link type="text/css" rel="stylesheet" href="/css/main.css" >
		<script language="javascript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>     
        <script language="javascript" type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
        <?php if($data['success']) : ?><script language="javascript">setTimeout("parent.document.location.reload()",3000) ;</script><?php endif ?>
        <script language="javascript" type="text/javascript">
			$(document).ready(function(){
				if($('#config_sugget').height()<300){
					_height = $('#config_sugget').height() + 50 
					parent.document.getElementById('iframe_eplugg').setAttribute('height', _height) ;
					parent.document.getElementById('pp_content_eplugg').setAttribute('style', 'width:400px;height:' + _height +'px;') ; 
				}
			}) ;
		</script>
	</head>
	<body>
    	<div class="titre_plugg"><?= \Lang\suggerer ?></div>  
		<div id="config_sugget" style="max-height:300px; overflow:auto">
			<?php if($data['success']) : ?>
            <div class="clear10"></div>
            <div style="padding:10px"><div id="message" class="message"><?= \Lang\suggestion_send_success ?></div></div>
			<?php elseif(isset($data['contacts']) && count($data['contacts'])): ?>
            <form method="post" > 
                <div class="top_form">
                    <?php foreach($data['contacts'] as $contact) : ?> 
                    <div class="bloc_connais">
                        <div style="float:left; padding:15px" ><input type="checkbox" name="lSuggests[]" value="<?= $contact['id_user'] ?>" /></div>
                        <div class="im_connais"><a><img src="<?= \Api\GlobalUtil::user_picture($contact['gendre'], $contact['user_picture']) ?>" width="37" height="37" alt="" /></a></div>
                        <div class="des_connais"><strong><a><?= ucfirst($contact['lastname']).' '.$contact['firstname'] ?></a></strong><?= $contact['job'] ?></div>
                        <div class="clear5"></div>
                    </div>
                <?php endforeach ?>
                </div>
                <div class="clear20"></div>
                <div class="div_btn" align="right"><button type="submit" ><?= \Lang\suggerer ?></button></div>
            </form>
            <?php else : ?>
            <div class="clear10"></div>
            <div style="padding:10px"><div id="message" class="message"><?= \Lang\no_suggestion ?></div></div>
            <?php endif ?>
        </div>
   	</body>
</html>