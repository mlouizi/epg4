<?php if($data['is_logged_in']) : ?>
<?php include TPL_DIR.'generic/header.tpl.php' ?>
<?php else : ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>	
        <link rel="stylesheet" type="text/css" href="/css/main.css" >
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">	        
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
       	<style>.login{ float:right; text-align:right; font-weight:bold; padding-top:11px; width:48%; color:#f5ab1b; font-family:Tahoma, Geneva, sans-serif; font-size:11px}</style>
		<script language="javascript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.cookie.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jsrender.min.js"></script>
        <script language="javascript" type="text/javascript">
			$(document).ready(function(){					
				$('#content').css('min-height', $(document).height()-120);
				$('.center_content_inner').css('min-height', $(document).height()-125);	
				$('.souscat a').click(function(){				
					_this = $(this) ;
					$('#userLang').val(_this.data('lang')) ;
					$('#lang_link').html(_this.html()) ;
					$('.souscat').animate({height: ['hide', 'swing'],opacity: 'hide'}, 500, 'linear');	
				}) ;
				$('#btn_cat, #lang_link').click(function(){ 
					$('.souscat').animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 500, 'linear');	 
				}) ;									
			}) ;
		</script>
	</head>
	<body>
		<div id="eplugg">
        	<div id="header">
		    	<div class="center_content">
      				<div id="logo"><a href="/"><img src="/images/logo.png" alt="" /></a></div>
                    <div class="login">	
                        <form action="/login" id="signinform" method="POST">
                            <input type="text" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_email"  placeholder="<?= \Lang\email ?>"   /></span>
                            <input type="password" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_password"  autocomplete="off"  placeholder="<?= \Lang\password ?>" />                           
                            <input id="userLang" name="lang" type="hidden" value="<?= \Core\Config\Vars::$user_lang ?>" >
                            <button class="submit_header" type="submit" ></button> | 
                            <div class="cat_search">
                                <a id="lang_link"><span id="cat_label"><?= \Core\Config\Vars::$user_lang ?> </span></a>
                                <a id="btn_cat"><img src="images/arrow.png" /></a> 
                                <div class="souscat">
                                    <ul>
                                        <?php foreach(\Core\Config\Vars::$languages as $lang=>$tmp){ ?>
                                        <li><a href="/lang?c=<?= $lang ?>" data-lang='<?= $lang ?>'><?= $lang ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>							
                        </form>
                    </div>
                    <div class="clear"></div>    
                </div>
            </div>
<?php endif ?>
			<div id="content">
    			<div class="center_content_inner">                  	   
      				<div class="titre_plugg search"><?= \Lang\propos ?></div>
        			
                    
                    
                    
                    
                    
                    <div class="clear"></div>
                </div>
                <div class="clear25"></div>
            </div>
            <?php include TPL_DIR.'generic/footer.tpl.php' ?>