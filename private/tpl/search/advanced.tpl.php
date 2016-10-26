<?php include TPL_DIR.'generic/header.tpl.php' ?>
<div id="content">
    <div class="center_content_inner">
      	<div id="left_content"><?php include TPL_DIR.'generic/currentUser.tpl.php' ?></div>           
        <div id="body_content">
			<div class="titre_plugg search"><?= \Lang\adv_search ?> </div>            
        	<div >
            	<form method="POST" id="advancedSearchForm" action="/search">
                	<div class="search_advanced">
                    	 <div class="select_div">
                            	<label class="custom_gendre"><select class="type1" name="gendre">
                                	<option value=""></option>
                                    <option value="1"><?= \Lang\mister ?></option>
                                  	<option value="2"><?= \Lang\married_woman ?></option>
                                    <option value="3"><?= \Lang\unmarried_woman ?></option>
                                </select> </label>
                          	</div>
                             <div class="clear15"></div>
                            <div class="card_user-search">
                       
                       		<div class="half_div"><input type="text" placeholder="<?= \Lang\firstname ?>" name="firstname" /></div>
                            <div class="half_div"><input type="text" placeholder="<?= \Lang\lastname ?>" name="lastname" /></div>
                            <input  type="text" placeholder="<?= \Lang\job ?>" name="job" />
                      	</div>
                        <div class="card_company-search">
                        	<div><input  type="text" placeholder="<?= \Lang\company_name ?>" name="company_name"  /></div>
                            <div><input  type="text" placeholder="<?= \Lang\activities ?>" name="activity"  /></div>
                            <div class="half_div"><input type="text" placeholder="<?= \Lang\city ?>" name="company_city"  /></div>
                            <div class="half_div">
                            	<label  class="custom_country">
                                	<select name="country" >
                                        <option value=""><?= \Lang\country ;?></option>
                                        <?php $countries = \Lang\Aux::$countries; asort($countries); ?>
                                        <?php foreach($countries As $var => $val) : ?>
                                        <option value="<?= $var ?>" > <?= $val ?> </option>                                            
                                        <?php endforeach ?>
                              		</select>
                               	</label>
                            </div>
                       	</div>
                	</div>
                    <div class="clear15"></div>
                    <div align="center">
                    	<?php /*?><a id="hide_adv_search" >Annuler</a><?php */?>
                        <input type="hidden" value="0" id="status_adv_search" >
                        <input type="hidden" value="1" name="advancedSearch">
                        <button type="reset"><?= \Lang\reset ?></button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit"><?= \Lang\search ?></button>
                  	</div>
            	</form> 
                <div class="clear25"></div>
        	</div>             
      	</div>
      	<div id="right_content"><?php include TPL_DIR.'generic/suggestion.tpl.php' ?></div>
        <div class="clear"></div>
	</div>
    <div class="clear25"></div>
</div>
<?php include TPL_DIR.'generic/footer.tpl.php' ?>