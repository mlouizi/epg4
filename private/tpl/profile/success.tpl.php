<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>
    	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>	
       	<script>$(document).ready(function() { setTimeout('parent.document.location = "/user?id=<?= $data['id_user'] ?>"', 1000) ; }); </script>
        <link rel="stylesheet" href="/css/main.css" type="text/css" />
	</head>
    <body>                  
 		<div class="jc-demo-box">
            <div class="clear20"></div>
            <div style="top:48%; position:absolute; width:100%; text-align:center">
           		<div class="message success"><?= \Lang\success_message ?></div>
            </div>
      	</div>
    </body>
</html>