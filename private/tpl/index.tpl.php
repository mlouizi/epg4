<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $data['sys_title'] ?></title>
		<meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="/css/home.css" />
        <link rel="stylesheet" type="text/css" href="/css/mapplic.css" />
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
        <!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="/css/mapplic-ie.css" />
			<script type="text/javascript" src="/js/html5shiv.js"></script>
		<![endif]-->
        <!--[if IE]>
		<link rel="stylesheet" type="text/css" href="/css/ie.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="/css/responsivehome.css">
	</head>
	<body>
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
      <div class="center_content" style="position:relative"> <div class="home_full">
			<form id="msform" method="post" action="/eplugg">
            	<fieldset>
             		<div class="form_home">
                		<div class="card_user-search">
                  			<div class="select_div">
                            	<label  class="custom_gendre">
                                	<select name="gendre" class="type1" id="gendre">
                                        <option value=""></option>
                                        <option value="1"><?= \Lang\mister ?></option>
                                        <option value="2"><?= \Lang\married_woman ?></option>
                                        <option value="3"><?= \Lang\unmarried_woman ?></option>
	                                </select>
                               	</label>
                          	</div>
                            <div class="half_div"><input id="firstname" name="firstname" type="text"  placeholder="<?=  \Lang\firstname ?>" value="<?= (isset($data['arg']["firstname"]))? $data['arg']["firstname"] : '' ?>" /></div>
                            <div class="half_div"><input id="lastname" name="lastname" type="text"  placeholder="<?= \Lang\lastname ?>" value="<?= (isset($data['arg']["lastname"]))? $data['arg']["lastname"] : '' ?>"   /></div>
                            <div class="inputfile"><input id="job" name="job" type="text"  placeholder="<?= \Lang\job ?>" value="<?= (isset($data['arg']["job"]))? $data['arg']["job"] : '' ?>"   /></div>
                            <div style="width:30%; float:left;text-align:left; margin-left: 10px">
                                    <select id="birthday" name="birthday" >
                                        <?php for ($i = 1; $i <= 32; $i++) : ?>
                                            <option value="<?= $i ?>" > <?= $i ?> </option>
                                        <?php endfor ?>
                                    </select>
                            </div>
                            <div style="width:30%; float:left;text-align:left; margin-left: 8px">
                                    <select id="birthmonth" name="birthmonth" >
                                        <?php foreach(\Lang\Months::$months as $key => $val) : ?>
                                            <option value="<?= $key ?>" > <?= $val ?> </option>
                                        <?php endforeach ?>
                                    </select>
                            </div>
                            <div style="width:30%; float:left;text-align:left; margin-left: 10px">
                                    <select id="birthyear" name="birthyear">
                                        <?php for ($i = 1905; $i <= 2015; $i++) : ?>
                                            <option value="<?= $i ?>" > <?= $i ?> </option>
                                        <?php endfor ?>
                                    </select>
                            </div>
                     	</div>
                        <div class="card_company-search">
                        	<div  class="inputfile"><input id="company_name" name="company_name" type="text"  placeholder="<?= \Lang\company_name ?>" value="<?= (isset($data['arg']["company_name"]))? $data['arg']["company_name"] : '' ?>"   /></div>
                            <div style="position:relative"  class="inputfile">
                            	<input id='company_activity' name="company_activity" type="text"  placeholder="<?= \Lang\activities ?>" value="<?= (isset($data['arg']["company_activity"]))? $data['arg']["company_activity"] : '' ?>"    />
                        		<a id="pAddAct" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_activities ?>');" onmouseout="tooltip.hide();"></a>
                            </div>
                            <div class="inputfile2">
                            <div class="half_div">
                                <label  class="custom_country">
                                    <select name="company_country"  id="company_country">
                                        <option value=""><?= \Lang\country ?></option>
                                        <?php $countries = \Lang\Aux::$countries; asort($countries); ?>
                                        <?php  foreach( $countries As $var => $val) : ?>
                                        <option value="<?= $var ?>" <?php if(isset($data['arg']["company_country"]) && $data['arg']["company_country"] == $var) echo 'selected="selected"' ?> > <?= $val ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </label>
                            </div>
                            <div class="half_div">
                                <input id="company_city" name="company_city" type="text"  placeholder="<?= \Lang\city ?>" value="<?= (isset($data['arg']["company_city"]))? $data['arg']["company_city"] : '' ?>" />
                            </div>
                        </div>
                        </div>
                 	</div>
                    <?php if(isset($data['success']) && !$data['success'])  : ?><div class="div_message error"><?= $data['message'] ?></div><div class="clear23"></div><?php endif ?>
                    <input type="hidden" value="1" name="advancedSearch">
                    <div class="bloc_btn_home">
                    <button type="button" class="signup"><?= \Lang\signup ?></button>
                    <button type="submit" class="homeSearch"><?= \Lang\search ?></button>   </div>
           		</fieldset>
                <div style="clear:both"></div>
			</form>


        </div><div style="clear:both"></div></div><div class="slogan">
                <div class="top_slogan"><?= \Lang\slogan1 ?></div>
                <div class="bottom_slogan"><?= \Lang\slogan2 ?></div>
            </div>
        <div style="display:none" id="cnx_config">
        <div class="titre_plugg"><?= \Lang\signup ?></div>
       		<form id="registration" method="post" action="/signup">
                <div class="form_home div_email" style="width:79%">
                    <div class="div_message error" id="registerMsg" style="display:none" ></div>
                    <div class="clear10"></div>
                    <div class="signstep">
                        <div><input id="email" type="text" placeholder="<?= \Lang\email ?>" name="email"></div>
                        <div><input id="password" type="password" placeholder="<?= \Lang\password ?>" name="password"></div>
                        <div><input id="password_again" type="password" placeholder="<?= \Lang\password_confirmation ?>" name="password_again"></div>
                    </div>
                    	<div class="clear10"></div> <div align="right" ><button type="submit" name="submit" class="submitSignup" onclick="if(!ValidateForm()) return false;" ><?= \Lang\save ?></button></div>
                </div>

                <input type="hidden" id="gendre1" name="gendre">
                <input type="hidden" id="firstname1" name="firstname" >
                <input type="hidden" id="lastname1" name="lastname">
                <input type="hidden" id="job1" name="job">
                <input type="hidden" id="company_name1" name="company_name">
                <input type="hidden" id='company_activity1' name="company_activity">
                <input type="hidden" id="company_city1" name="company_city">
                <input type="hidden" id="company_country1" name="company_country" >
                <input type="hidden" id="birthday1" name="birthday" >
                <input type="hidden" id="birthmonth1" name="birthmonth" >
                <input type="hidden" id="birthyear1" name="birthyear" >


            </form>
    	</div>
        <div class="ombre"  ></div>
        <div id="footer">
    		<div class="center_content">
		    	<div id="menu_footer">
			        <ul>
			        	<li><a href="/legal_informations"><?= \Lang\mentions ?></a></li>
					    <li><a href="/about"><?= \Lang\propos ?></a></li>
						<li><a href="/terms"><?= \Lang\conditions ?> </a></li>
				  	</ul>
				</div>
    			<div id="copyright"><img src="images/logo_footer.png" alt=""  /> Corporation &copy; <?= date('Y') ?></div>
			</div>
		</div>
		<div class="map-container"><div id="mapplic"></div></div>
        <!-- Scripts -->
        <script language="javascript" type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.mousewheel.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.caret.js"></script>
        <script language="javascript" type="text/javascript" src="/js/script.js"></script>
        <script language="javascript" type="text/javascript" >
		var invalide_email_error = "<?= \Lang\invalide_email_error ?>" ;
		var password_error = "<?= \Lang\password_error ?>" ;
		var confirm_password_error = "<?= \Lang\confirm_password_error ?>" ;
		</script>
        <script language="javascript" type="text/javascript" src="/js/steps.js"></script>
	</body>
</html>