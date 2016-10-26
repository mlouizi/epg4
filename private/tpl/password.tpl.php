<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $data['sys_title'] ?></title>		
		<meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">		
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
        <!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="/css/mapplic-ie.css">
			<script type="text/javascript" src="/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
    	<div id="header" style="overflow:auto"><div class="center_content"><div id="logo"><a href="/"><img src="/images/logo.png" alt="" /></a></div></div></div>
       	<div class="login-sys">
        	<div class="titre_plugg"><?= \Lang\forgot_password ?></div>
         	<div class="login_inner">
         		<?php if(isset($data['password_error'])) : ?><div class="message error"><strong><?= \Lang\error_password ?></strong></div><?php endif ?>
                <?php if(isset($_GET['success'])) : ?><div class="message"><strong><?= \Lang\message_password ?></strong></div>
                <div align="right"><a id="connex" href="/login"><?= \Lang\connexion ?></a> </div>
				<?php else : ?>
				<form id="passwordForm" method="POST">
                    <input type="text" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_email" id="login_email"  placeholder="<?= \Lang\email ?>" />                  
                  	<div>
                    	<span class="login_span"><a class="connex" href="/login"><?= \Lang\connexion ?></a><br />
                       </span>
                    	<span class="button_span"><button type="submit" class="submit" ><?= \Lang\send ?></button>  </span><div class="clear"></div>
                   	</div>
                </form>
				<?php endif ?>                
          	</div>
        </div>         
        <div id="footer">
    		<div class="center_content">
		    	<div id="menu_footer">
			        <ul>
			        	<li><a href="/legal_informations"><?= \Lang\mentions ?></a></li>
					    <li><a href="/about"><?= \Lang\propos ?></a></li>
						<li><a href="/terms"><?= \Lang\conditions ?> </a></li>
				  	</ul>
				</div>
    			<div id="copyright"><img src="/images/logo_footer.png" alt=""  /> Corporation &copy; <?= date('Y') ?></div>
			</div>
		</div>    
        <script language="javascript" type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/password.js"></script>    
	</body>
</html>