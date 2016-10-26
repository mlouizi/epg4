<?php 
	$profile = $data['user_profile'];
	$profile_phones = array_filter(explode('|',$profile['direct_phones']));
	$profile_mobiles = array_filter(explode('|',$profile['mobiles']));	
	$profile_emails = array_filter(explode('|',$profile['emails']));
	$profile_sociaux = array_filter(explode('|',$profile['sociaux']));
	$profile_c_dir_phones = array_filter(explode('|',$profile['company_tel']));
	$profile_c_fax = array_filter(explode('|',$profile['company_fax']));
	$profile_c_websites = array_filter(explode('|',$profile['company_websites']));
	include TPL_DIR.'generic/header.tpl.php' 
?>
<link rel="stylesheet" type="text/css" href="/css/steps.css">
<div id="content">
  	<div class="center_content_inner">
    	<div id="etape_page">
      		<form id="msform" method="post">
        		<ul id="progressbar">
          			<li class="active" id="step1"><?= \Lang\step1 ?><span><?= \Lang\info_pluggeur ?></span></li>
          			<li id="step2"><?= \Lang\step2 ?><span><?= \Lang\Infos_establissement ?></span></li>
          		</ul>
        		<fieldset id="fieldsetStep1">
          			<div class="profil">
            			<div id="card_eplugg">
              				<div class="btn_step">
                				<button type="button" disabled="disabled" id="previousStep"><img src="images/prev.png"  /><?= \Lang\back ?></button>
                				<button onclick="getCompany()" type="button" id='nextStep'> <?= \Lang\next ?> <img src="images/continue.png"  /></button>
              				</div>
              				<div class="cache"></div>
              				<div class="cache2"></div>
              				<div class="yellow"><img src="/images/arrow-yelow-big.png" /></div>
              				<div id="card_user">
                				<div class="img_profil"> 
                                	<a href="/edit_image?iframe=true&width=800&height=560" rel="edit_image"> 
                                    	<img src="images/png_edit.png" class="edit_img"> 
                                        <img src="<?= \Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture']) ?>" alt="" id="profile_image" /> 
                                   	</a> 
                               	</div>
                				<div class="descp_card"> 
                                	<strong><a><?= $profile['firstname'].' '.$profile['lastname'] ?></a></strong> 
                                 	<em><?= $profile['job'] ?> </em>
                  					<ul>
                                        <li class="tel1" style="position:relative">
                                          	<input type="text" value="<?= implode(',',$profile_phones) ?>" name="perPhone" id="perPhone" placeholder="<?= \Lang\personel_phone ?>" />
                                          	<a id="pAddSep" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide()"></a>
                                      	</li>
                                        <li class="mobile" style="position:relative">
                                          	<input type="text" value="<?= implode(',',$profile_mobiles) ?>" name="perMobile" id="perMobile" placeholder="<?= \Lang\personel_mobile ?>" />
                                          	<a id="pAddMobile" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide();"></a> 
                                        </li>
                                        <li class="mail1" style="position:relative">
                                          	<input type="text" value="<?= implode(',',$profile_emails) ?>" name="perEmail" id="perEmail" placeholder="<?= \Lang\personel_emails ?>" />
                                          	<a id="pAddEmail" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_email ?>');" onmouseout="tooltip.hide();"></a> </li>
                                        <li class="sociaux" style="position:relative">
                                          	<input type="text" value="<?= implode(',',$profile_sociaux) ?>" name="perSociaux" id="perSociaux" placeholder="<?= \Lang\personel_sociaux ?>" />
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
                                        <img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='')? $profile['company_logo'] : 'logo.png' ?>" /> 
                                   	</a> 
                              	</div>
				                <div class="descp_card"> 
                                	<strong><a><?= $profile['company_name'] ?></a></strong>
                  					<div class="tag"><?= \Api\GlobalUtil::str_reduce($profile['company_activity'], $maxlenght = 30, $suffix = "...") ?></div>
                  					<ul>
                                        <li class="tel2" style="position:relative">
                                            <input type="text" value="<?= implode(',',$profile_c_dir_phones) ?>" name="cmpnPhone" id="cmpnPhone" placeholder="<?= \Lang\company_phone ?>" />
                                            <a id="cAddPhone" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_mobile ?>');" onmouseout="tooltip.hide();"></a> 
                                        </li>
                                        <li class="fax" style="position:relative">
                                            <input type="text" value="<?= implode(',',$profile_c_fax) ?>" name="cmpnFax" id="cmpnFax" placeholder="<?= \Lang\company_fax ?>" />
                                            <a id="cAddFax" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_fax ?>');" onmouseout="tooltip.hide();"></a> 
                                        </li>
                                        <li class="site" style="position:relative">
                                        	<input type="text" value="<?= implode(',',$profile_c_websites) ?>" name="cmpnSite" id="cmpnSite" placeholder="<?= \Lang\company_site ?>" />
                                            <a id="cAddSite" class="addSep hotspot" onmouseover="tooltip.show('<?= \Lang\add_site ?>');" onmouseout="tooltip.hide();"></a> 
                                        </li>
                                        <li class="lieu">
                                            <table width="100%">
                                                <tr>
                                                    <td width="60%"><input type="text" value="<?= $profile['company_address'] ?>" name="cmpnAddress" id="cmpnAddress"  placeholder="<?= \Lang\address ?>"/></td>
                                                    <td><?= $profile['company_city'].', '.\Lang\Aux::$countries[$profile['company_country']]?></td>
                                                </tr>
                                            </table>
                                        <li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear25"></div>
                </fieldset>
                <fieldset id='fieldsetStep2'>
                    <div class="profil">
                        <div id="card_eplugg">
                            <div class="yellow"><img src="/images/arrow-yelow-big.png" /></div>
                            <div id="card_user">
                                <div class="img_profil"> <a><img src="<?= \Api\GlobalUtil::user_picture($profile['gendre'], $profile['user_picture']) ?>" /></a> </div>
                                <div class="descp_card"> 
                                    <strong><a><?= $profile['firstname'].' '.$profile['lastname'] ?></a></strong> 
                                    <em><?= $profile['job'] ?></em>
                                    <ul>
                                        <li class="tel1" id="cfmPerPhone"><?= implode(',',$profile_phones) ?></li>
                                        <li class="mobile" id="cfmPerMobile"><?= implode(',',$profile_mobiles) ?></li>
                                        <li class="mail1" id="cfmPerEmail"><?= implode(',',$profile_emails) ?></li>
                                        <li class="sociaux" id="cfmPerSociaux"><?= implode(',',$profile_sociaux) ?></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div id="card_company">
                                <div class="img_profil"><a><img src="/uploads/logo/<?= (file_exists('uploads/logo/'.$profile['company_logo']) && $profile['company_logo']!='')? $profile['company_logo'] : 'logo.png' ?>" /></a></div>
                                <div class="descp_card"> 
                                    <strong><a><?= $profile['company_name'] ?></a></strong>
                                    <?= \Api\GlobalUtil::str_reduce($profile['company_activity'], $maxlenght = 30, $suffix = "..."); ?>
                                    <ul>
                                        <li class="tel2" id="cfmCmpnPhone"><?= implode(',',$profile_c_dir_phones) ?></li>
                                        <li class="fax" id="cfmCmpnFax"><?= implode(',',$profile_c_fax) ?></li>
                                        <li class="site" id="cfmCmpnSite"><?= implode(',',$profile_c_websites) ?></li>
                                        <li class="lieu"><span id="cfmCmpnAddress" ><?= $profile['company_address'] ?></span> <?= $profile['company_city'].', '.\Lang\Aux::$countries[$profile['company_country']] ?></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear25"></div>
                    <button type="submit" name="submit" ><img src="images/valide_.png" /> <?= \Lang\save ?></button>
                    <button type="button" onclick='getPrevious2()' ><img src="images/arrow_btn.png" /> <?= \Lang\back ?> </button>
                </fieldset>
            </form>
        </div>
  	</div>
  	<div class="clear25"></div>
</div>
<script src="/js/step.js" type="text/javascript"></script>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>