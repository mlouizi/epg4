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
        	<div class="titre_plugg">Connexion</div>
         	<div class="login_inner">
         		<?php if(isset($data['login_error'])) : ?><div class="message error"><strong><?= \Lang\login_error ?></strong></div><?php endif ?>
                <form action="/login" id="signinform" method="POST">
                    <input type="text" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_email"  placeholder="<?= \Lang\email ?>"   />
                    <input type="password" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_password"  autocomplete="off"  placeholder="<?= \Lang\password ?>" />
                    <input id="userLang" name="lang" type="hidden" value="<?= \Core\Config\Vars::$user_lang ?>" />
                    <div>
                    	<span class="login_span"><a  class="connex"  href="/"><?= \Lang\register ?></a><br />
                        <a  class="connex"  href="/login/password"><?= \Lang\forgot_password ?></a></span>
                    	<span class="button_span"><button type="submit" ><?= \Lang\connexion ?></button>  </span>
                        <div class="clear"></div>
                   	</div>
                </form>
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
	</body>
</html>