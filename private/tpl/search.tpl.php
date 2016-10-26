<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>
        <meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />	
        <link rel="stylesheet" type="text/css" href="/css/main.css" >
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">	        
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />	        
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
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
                   	<form action="/login" id="signinform" method="post">
                       	<input type="text" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_email"  placeholder="<?= \Lang\email ?>"   />
						<input type="password" class="<?= (isset($data['login_error']))? 'error' : '' ?>" name="login_password"  autocomplete="off"  placeholder="<?= \Lang\password ?>" />
						<?php /*?><a href="login">Login</a> | <?php */?>
                        <input id="userLang" name="lang" type="hidden" value="<?= \Core\Config\Vars::$user_lang ?>" >
                        <button class="submit_header" type="submit" ></button> | 
                        <div class="cat_search">
                           	<a data-url='' id="lang_link"><span id="cat_label"><?= \Core\Config\Vars::$user_lang ?> </span></a>
                            <a id="btn_cat"><img src="images/arrow.png" alt="" /></a> 
                            <div class="souscat">
                            	<ul>
                                	<?php foreach(\Core\Config\Vars::$languages as $lang=>$tmp){ ?>
                                    <li><a href="/lang?c=<?= $lang ?>" data-lang='<?= $lang ?>'><?= $lang ?></a></li>
                                    <?php } ?>
                              	</ul>
                          	</div>
                       	</div> | 
                        <a id="connex" href="/login/password"><?= \Lang\forgot_password ?></a>                      						
                   	</form>
			   	</div>
<div class="clear10"></div>
            </div>
  		</div>
			<div id="content">
    			<div class="center_content_inner">
                <div align="right" class="plugg_link"><a href="/" style="width:195px; margin:0"><?= \Lang\home_link ?></a></div>
                  <div class="clear10"></div>   
      				<div class="titre_plugg search"><?= \Lang\search_results ?> </div>
            		<div class="result_search"> <?= $data['count'] ?> <?= \Lang\results ?> </div>
        			<div id="content_infinity" class="inf_search">
						<?php $k=0 ; foreach($data['sql'] as $row) : ?> 
                        <div class="item_infinity item_infinity_serach__">
                            <div id="card_eplugg" class="card_bloc" onclick="$('#loginname').html('<?= addslashes($row['firstname'].' '.$row['lastname']) ?>') ; $('#loginMessage').click()">
                                <div class="yellow"><img src="/images/arrow-yelow.png" /></div>
                                <div id="card_user">
                                    <div class="img_profil"><a><img src="<?= \Api\GlobalUtil::user_picture($row['gendre'], $row['user_picture']) ?>" alt="" width="48" height="48" /></a></div>
                                    <div class="descp_card"> 
                                        <div class="name_user"><a> <?= \Api\GlobalUtil::formatterName($row['firstname'], $row['lastname']) ?></a> </div> 
                                        <div class="job_user"><?= \Api\GlobalUtil::str_reduce($row['job'], $maxlenght = 30, $suffix = "...") ?></div> 
                                    </div>
                                    <div class="clear"></div>
                                </div>        
                                <div id="card_company">
                                    <div class="img_profil"> <a><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$row['company_logo']) && $row['company_logo']!='')? $row['company_logo'] : 'logo.png' ?>" width="51" height="51" /></a></div>
                                    <div class="descp_card">
                                        <div class="company_user"><a><?= \Api\GlobalUtil::str_reduce($row['company_name'], $maxlenght = 20, $suffix = "...") ?></a></div>
                                        <div class="tag_company">
                                            <?php 
                                                $activities = explode('#', $row['company_activity'])  ;
                                                $i=0 ; 
                                                $list_act = ''; foreach($activities as $activitie) : $list_act .= ($i<6 && $activitie!='')? '#'.$activitie.' ' : '' ; $i++ ; endforeach ; 
                                                echo trim(\Api\GlobalUtil::str_reduce($list_act, $maxlenght = 20, $suffix = "..."))
                                            ?>
                                        </div>
                                        <div class="lieu_company"><?= \Api\GlobalUtil::str_reduce($row['company_city'], $maxlenght = 20, $suffix = "...").' - '.\Lang\Aux::$countries[$row['company_country']] ?></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>                                       
                        </div>
                        <?php /*?><?= ($k==3)? '<div class="item_infinity clear"></div> ' : '' ?><?php */?>
                        <?php $k++ ; $k=fmod($k,4) ; endforeach ?>                 
                        <a id="next" href="?page=2"></a>           
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
			<script src="/js/jquery.infinitescroll.js"></script>
            <script language="javascript" type="text/javascript">
            $('#content_infinity').infinitescroll(
                {
                    navSelector:"#next:last",
                    nextSelector:"a#next:last",
                    itemSelector:"#content_infinity div.item_infinity",
                    dataType:'html',
                    maxPage:<?= $data['numberOfPages'] ?>,
                    path:function(index) { return "?page=" + index ; } 
                }, 
                function(newElements, data, url){ }
            );
            </script>
			<?php include TPL_DIR.'generic/footer.tpl.php' ?>