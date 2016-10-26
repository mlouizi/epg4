<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>	
        <link type="text/css" rel="stylesheet" href="/css/main.css" >
		<script language="javascript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>     
        <script language="javascript" type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>        
	</head>
	<body>
    	<div class="titre_plugg"><?= \Lang\mutual_friend ?></div>
   		<?php $i=0; foreach($data['mutualFriends'] as $row) : ?> 
        <div class="bloc_connais">
            <div class="im_connais"><a href='/user?id=<?= $row['id_user'] ?>" data-tooltip="#html-content<?= $row['id_user'] ?>'><img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" width="37" height="37" alt="" /></a></div>
          	<div class="des_connais"><strong><a href="/user?id=<?= $row['id_user'] ?>" data-tooltip="#html-content<?= $row['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a></strong><?= $row['job'] ?> </div>
          	<div class="clear5"></div>
        </div>
        <?php $i++ ; endforeach ?>
        <?= ($i==0)? '<div class="message">'.\Lang\empty_contact.'</div>' : '' ?>
       </div>
       <div class="clear20"></div>
   	</body>
</html>