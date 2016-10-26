<?php 	
	$profile = $data['user_profile'];
	include TPL_DIR.'generic/header.tpl.php' 
?>
<div id="content">
  	<div class="center_content_inner">
    	<div id="body_content" class="profil">
      		<form action="save_profile" method="post" >
        		<div id="card_eplugg" class="edit_profil">
          			<div class="yellow"><img src="images/arrow-yelow-big.png" /></div>
          			<div id="card_user">
            			<div class="img_profil"> 
                        	<a href="/edit_image?iframe=true&width=800&height=560" rel="edit_image" > 
                            	<img src="images/png_edit.png" class="edit_img" > <img src="<?= \Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture']) ?>" id="profile_image" /> 
                          	</a>
              				<?php /*if (file_exists($_SERVER['DOCUMENT_ROOT'].\Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture'])) && $profile['user_picture']!='avatar.png' && $profile['user_picture']!='') : ?>
              				<a href="/delete_image?iframe=true&width=400&height=190" rel="delete_image" > <img src="images/delete_ico.png" class="edit_img" style="margin-left: 35px;"> </a>
              				<?php endif*/ ?>
            			</div>
            			<div class="descp_card"> 
                        	<strong>
              					<div class="half_div"> <input type="text" placeholder="<?= \Lang\firstname ?>" value="<?= $profile['firstname'] ?>" name="perFirstname" id="perFirstname" data-max='30' /> </div>
              					<div class="half_div"> <input type="text" placeholder="<?= \Lang\lastname ?>" value="<?= $profile['lastname'] ?>" name="perLastname" id="perLastname" data-max='30'  /> </div>
              				</strong> 
                            <em> <input type="text" value="<?= $profile['job'] ?>" placeholder='<?= \Lang\job ?>' name="perJob" id="perJob" /> </em>
              				<ul>
                				<li class="tel1" style="position:relative">
                  					<input type="text" value="<?= $profile['direct_phones'] ?>" name="perPhone" id="perPhone" placeholder='<?= \Lang\personel_phone ?>' />
                                    <a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide();"></a>
                               	</li>
                                <li class="mobile" style="position:relative">
                                	<input type="text" value="<?= $profile['mobiles'] ?>" name="perMobile" id="perMobile"  placeholder="<?= \Lang\personel_mobile ?>"/>
                                    <a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide();"></a>
                               	</li>
                                <li class="mail1" style="position:relative">
                                	<input type="text" value="<?= $profile['emails'] ?>" name="perEmail" id="perEmail"  placeholder="<?= \Lang\personel_emails ?>"/>
                                    <a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_email ?>');" onmouseout="tooltip.hide();"></a>
                               	</li>
                                <li class="sociaux" style="position:relative">
                                	<input type="text" value="<?= $profile['sociaux'] ?>" name="perSociaux" id="perSociaux" placeholder="<?= \Lang\personel_sociaux ?>" />
                                    <a id="pAddSociaux" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_sociaux ?>');" onmouseout="tooltip.hide();"></a>
                               	</li>
              				</ul>
            			</div>
            			<div class="clear"></div>
          			</div>
          			<div id="card_company">
            			<div class="img_profil"> 
                        	<a href="/edit_logo?iframe=true&width=800&height=560" rel="edit_logo">
                            	<img src="images/png_edit.png" class="edit_img"> 
                                <img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='')? $profile['company_logo'] : 'logo.png' ?>" id="profile_logo" /> 
                           	</a> 
                            <?php /*if (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='logo.png' && $profile['company_logo']!='') : ?>
              				<a href="/delete_logo?iframe=true&width=400&height=190" rel="delete_logo" > <img src="images/delete_ico.png" class="edit_img" style="margin-left: 35px;"> </a>
              				<?php endif*/ ?>
            			</div>
            			<div class="descp_card"> 
                        	<strong><input type="text" value="<?= $profile['company_name'] ?>" placeholder="<?= \Lang\company_name ?>" name="cmpnName" id="cmpnName" /> </strong> 
                            <em style="position:relative">
              					<input type="text" value="<?= $profile['company_activity'] ?>" placeholder="<?= \Lang\activities ?>" name="cmpnActivity" id="cmpnActivity" />
              					<a id="pAddAct" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_activities ?>');" onmouseout="tooltip.hide();"></a> 
                           	</em>
              				<ul>
                				<li class="tel2" style="position:relative">
                  					<input type="text" value="<?= $profile['company_tel'] ?>" name="cmpnPhone" id="cmpnPhone"  placeholder="<?= \Lang\company_phone ?>"  />
                  					<a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide();"></a>
                              	</li>
                                <li class="fax" style="position:relative">
                                    <input type="text" value="<?= $profile['company_fax'] ?>" name="cmpnFax" id="cmpnFax"   placeholder="<?= \Lang\company_fax ?>"/>
                                    <a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_fax ?>');" onmouseout="tooltip.hide();"></a>
                                </li>
                                <li class="site" style="position:relative">
                                    <input type="text" value="<?= $profile['company_websites'] ?>" name="cmpnSite" id="cmpnSite"  placeholder="<?= \Lang\company_site ?>" />
                                    <a id="pAddSite" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_site ?>');" onmouseout="tooltip.hide();"></a>
                                </li>
                				<li class="lieu">
                  					<div class="adress_div"><input type="text" value="<?= $profile['company_address'] ?>" name="cmpnAddress" id="cmpnAddress"  placeholder="<?= \Lang\address ?>"/></div>
                  					<div class="div_city"><input id="company_city"   name="company_city" type="text"  placeholder='<?= \Lang\city ?>' value="<?= $profile['company_city'] ?>" /></div>
                  					<div class="country_div">
                                        <label  class="custom_country">
                                            <select name="company_country" id="company_country">
                                                <option value=""><?= \Lang\country ?></option>
                                                <?php $countries = \Lang\Aux::$countries; asort($countries); ?>
                                                <?php foreach($countries As $var => $val) : ?>
                                                <option value="<?= $var ?>" <?= ($profile['company_country'] == $var)? 'selected="selected"' : '' ?> ><?= $val ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </label>
                  					</div>
                				</li>
              				</ul>
            			</div>
            			<div class="clear"></div>
          			</div>
        		</div>
        		<div class="partage_profil">
          			<ul>
            			<li> <button type="submit" class="submit" /> <img src="images/valide_.png" width="20" /> <?= \Lang\save ?> </button> </li>
          			</ul>
        		</div>
      		</form>
      		<div class="clear30"></div>
    	</div>
    	<div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
  	</div>
  	<div class="clear25"></div>
</div>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>
<script src="/js/validate.js" type="text/javascript"></script>