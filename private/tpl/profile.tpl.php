<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>	
        
        <meta property="og:title" content="Consultez ma carte visite sur Eplugg : <?= $data['user_profile']['firstname'].' '.$data['user_profile']['lastname'] ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST'] ?>/profile?id=<?= $data['user_profile']['id_user'] ?>" />
		<?php /*?><meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] ?>/uploads/users/<?= (file_exists('uploads/users/'.$data['user_profile']['user_picture']) && $data['user_profile']['user_picture']!='')? $data['user_profile']['user_picture'] : 'avatar.png' ?>" /><?php */?>
        
        <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] ?>/images/logo_face.jpg" />
		<meta property="og:site_name" content="http://<?= $_SERVER['HTTP_HOST'] ?>"/>
		<meta property="og:description" content="<?= $data['user_profile']['job'] ?>"/>
        
        <link rel="stylesheet" type="text/css" href="/css/main.css" >
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">	        
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />
       	<link rel="stylesheet" type="text/css" href="/css/responsive.css" >
		
        <script language="javascript" type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>           
        <script language="javascript" type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
        <script language="javascript" type="text/javascript" src="/js/profile.js"></script>
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
			<div id="content">
    			<div class="center_content_inner">
                	<div align="right" class="plugg_link"><a href="/" style="width:195px; margin:0"><?= \Lang\home_link ?></a></div>
                    <div class="clear10"></div>   
                    <div class="titre_plugg search"><?= $data['user_profile']['firstname'].' '.$data['user_profile']['lastname'] ?> </div>
                    <div class="clear20"></div>
                    <div align="center">
                        <div class="profil" align="left">
                            <div id="card_eplugg" onclick="$('#loginname').html('<?= $data['user_profile']['firstname'].' '.$data['user_profile']['lastname'] ?>') ; $('#loginMessage').click()" style=" cursor:pointer">
                                <div class="yellow"><img src="images/arrow-yelow-big.png"></div>
                                <div id="card_user">
                                    <div class="img_profil"><a><img src="<?= \Api\GlobalUtil::user_picture($data['user_profile']['gendre'], $data['user_profile']['user_picture']) ?>"></a></div>
                                    <div class="descp_card"> 
                                        <strong><a><?= \Api\GlobalUtil::formatterName($data['user_profile']['firstname'], $data['user_profile']['lastname']) ?></a></strong> 
                                        <em><?= \Api\GlobalUtil::str_reduce($data['user_profile']['job'], $maxlenght = 30, $suffix = "...") ?></em>
                                        <ul>
                                            <li class="tel1"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="mobile"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="mail1"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="sociaux"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div id="card_company">
                                    <div class="img_profil">
                                        <a><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$data['user_profile']['company_logo']) && $data['user_profile']['company_logo']!='')? $data['user_profile']['company_logo'] : 'logo.png' ?>"></a>
                                    </div>
                                    <div class="descp_card"> 
                                        <strong><a> <?= \Api\GlobalUtil::str_reduce($data['user_profile']['company_name'], $maxlenght = 200, $suffix = "...") ?> </a></strong> 
                                        <div class="tag">
                                            <?php 
                                                $activities = explode('#', $data['user_profile']['company_activity'])  ;
                                                $i=0 ; 
                                                $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                                                echo trim(\Api\GlobalUtil::str_reduce($list_act, $maxlenght = 20, $suffix = "..."))
                                            ?>
                                        </div>
                                        <ul>
                                            <li class="tel2"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="fax"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="site"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                            <li class="lieu"><?= \Lang\private_info.' <img src="images/private.png" />' ?></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear20"></div>
                        </div>
                    </div>                      
                    <div class="clear"></div>
                </div>
                <div class="clear25"></div>
            </div>
            <a rel="message" href="#loginContent" id="loginMessage" ></a>
            <div style="display:none" id="loginContent">
            <div class="titre_plugg"><?= \Lang\notification ?></div>
            	<div class="top_form" align="center"><strong><?= \Lang\notification1 ?><span id="loginname"></span><?= \Lang\notification2 ?></strong>
                <br /><br />
                <div class="plugg_link info_card" align="center"><a href="/"><?= \Lang\signup ?></a> &nbsp;&nbsp;<a href="/login"><?= \Lang\connexion ?></a></div></div>            
            </div>  
			<?php include TPL_DIR.'generic/footer.tpl.php' ?>