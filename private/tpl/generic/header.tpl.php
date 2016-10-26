<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $data['sys_title'] ?></title>	
        <link rel="stylesheet" type="text/css" href="/css/main.css" >
        <link rel="stylesheet" type="text/css" href="/css/sizzle.css" >
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">
        <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />  
        <link rel="stylesheet" type="text/css" href="/css/darktooltip.css">
        <link rel="stylesheet" type="text/css" href="/css/jautocomplete.css" />        
        <link rel="stylesheet" type="text/css" href="/css/popModal.css">	
        <link rel="stylesheet" type="text/css" href="/css/responsive.css">
        <!--[if IE]><link rel="stylesheet" type="text/css" href="/css/ie.css" /><![endif]-->
			
		<script language="javascript" type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.easing.min.js"></script>      
        <script language="javascript" type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.cookie.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.darktooltip.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jsrender.min.js"></script>	
		<script language="javascript" type="text/javascript" src="/js/jautocomplete.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/jquery.caret.js"></script>
        <script language="javascript" type="text/javascript" src="/js/popModal.js"></script>	
        <script language="javascript" type="text/javascript">
        	<?php /*?>function getNotifications() {
        		$.ajax({
        			type: 'GET',
        			url: '/get_count_messages',
        			success: function(result) { $('#mssg span').html(result).toggle(result > 0); }
        		});
        		setTimeout(getNotifications, 10000);
        	}<?php */?>
			function Plugger(_this, status){				
				$.ajax({
					type: "POST",
					url: "/plugger",
					data: "uid=" + $(_this).data('id') ,
					dataType : 'json',
					success: function(data){
						$("#alertmsg").html(data.message) ;
						$.prettyPhoto.open("#get_message");
						if(status==1) {
							setTimeout("parent.document.location.reload()",3000) ; 
						} else {
							setTimeout("$.prettyPhoto.close();",3000) ;
							$(_this).attr('onClick', 'IPlugger(this, 0)').html("<?= \Lang\cancel ?>");
						} 
					}
				});	
			}			
			function VPlugger(_this, status){				
				$.ajax({
					type: "POST",
					url: "/vplugger",
					data: "uid=" + $(_this).data('id') ,
					dataType : 'json',
					success: function(data){
						$("#alertmsg").html(data.message) ;
						$.prettyPhoto.open("#get_message");
						if(status==1) {
							setTimeout("parent.document.location.reload()",3000) ; 
						} else {							
							setTimeout("$.prettyPhoto.close();",3000) ;
							$(_this).attr('href', '/suggest?uid=' + $(_this).data('id') + '&iframe=true&width=400').attr('rel', 'suggerer').html("<?= \Lang\suggerer ?>");
						}
					}
				});
			}			
			function IPlugger(_this, status){				
				$.ajax({
					type: "POST",
					url: "/iplugger",
					data: "uid=" + $(_this).data('id') ,
					dataType : 'json',
					success: function(data){
						$("#alertmsg").html(data.message) ;
						$.prettyPhoto.open("#get_message");
						if(status==1) {
							setTimeout("parent.document.location.reload()",3000) ; 
						} else {
							setTimeout("$.prettyPhoto.close();",3000) ;
							$(_this).attr('onClick', 'Plugger(this, 0)').html("<?= \Lang\plugger ?>");
						}
					}
				});
			}
			
			function intPretty(){
				$("a[rel^='edit_image'],a[rel^='delete_image'], a[rel^='edit_logo'], a[rel^='delete_logo'], a[rel^='suggerer'], a[rel^='add_cv'], a[rel^='edit_cv'], a[rel^='upload_cv'], a[rel^='delete_cv'], a[rel^='setting'], a[rel^='mutual_friend'], a[rel^='delete_cv_file']").prettyPhoto({
					social_tools: '',
					horizontal_padding: 15,
					modal: true,
					iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no" id="iframe_eplugg"></iframe>',
					markup: '<div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<div class="pp_top"> <div class="pp_left"></div> <div class="pp_middle"></div> <div class="pp_right"></div> </div> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content" id="pp_content_eplugg"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a class="pp_close" id="pp_close" href="#">Close</a> \
										<div id="pp_full_res"></div>  \
									</div> \
								</div>  \
							</div> \
							</div> \
						</div> \
						<div class="pp_bottom"> <div class="pp_left"></div> <div class="pp_middle"></div> <div class="pp_right"></div> </div> \
					</div> \
					<div class="pp_overlay"></div>',
				});	
			}			
		
			$(document).ready(function(){
				<?php /*?>getNotifications();<?php */?>
				$('.plugger').click(function(){	_this = this ; Plugger(_this,1) ; }) ;	
				$('.Vplugger').click(function(){ _this = this ; VPlugger(_this,1) ; }) ;
				$('.Iplugger').click(function(){ _this = this ; IPlugger(_this,1) ; }) ;
				$('.delete_contact').click(function(){	
					_this = $(this) ;					
					$.ajax({
						type: "POST",
						url: "/delete_contact",
						data: "uid=" + _this.attr('data-id') ,
						dataType : 'json',
						success: function(data){
							$("#alertmsg").html(data.message) ;
							$.prettyPhoto.open("#get_message");
							setTimeout("parent.document.location.reload()",5000) ;								
						}
					});
				}) ;				
				$('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});	
				$('#jautocomplete').jautocomplete({
					dataSource: 'server',
					server: function(inputVal){	return {url: '/user_search', dataType: 'json', type: 'POST', data:{ topSearchInput: inputVal }};},
					templatePath: '#jautocompleteTemplate'
				});
				$('#content').css('min-height', $(document).height()-120);
				$('.center_content_inner').css('min-height', $(document).height()-125);
				$("#adv_search").click(function(){ 
					if($('#status_adv_search').val()==0) {
						$('#adv_search_conf').animate({left : 0}, 800, 'linear', function() { $('#status_adv_search').val(1)	; }); 
					} else {
						$('#adv_search_conf').animate({left: -419}, 800, 'linear', function() { $('#status_adv_search').val(0) ; });
					}	
				});	
				$("#hide_adv_search").click(function(){ $('#adv_search_conf').animate({left: -419}, 800, 'linear', function() { $('#status_adv_search').val(0) ; }); });
				if($('#getDirSearch').length>0) $("#getDirSearch").click(function(){ $('#directory_serach').animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 500, 'linear'); });
				intPretty() ;
				$('#msg_ct_serach').keyup(function(){
					$.ajax({ 
						type: "POST", 
						url: "/msg_search", 
						data: "keys=" + $('#msg_ct_serach').val() <?= (isset($data['friend_info']['id_user']))? '+ "&uid='.$data['friend_info']['id_user'].'"' : '' ?>, 
						success: function(data){ $('#msg_ct_list').html(data) }
					});
				}) ;
				$('#dir_ct_serach').keyup(function(){
					$.ajax({ type: "GET", url: "/ct_search", data: "keys=" + $('#dir_ct_serach').val(), success: function(data){ $('#dir_ct_list').html(data) } });
				}) ;
				$('#topSearchInput').focus(function(){ $('#adv_search_conf').animate({left: -419}, 800, 'linear', function() { $('#status_adv_search').val(0) ; }); })				
				$('body').click(function(e){
					var hide_menu = true ;
					$($(e.target).parents()).each(function(){
						if($(this).attr('id')=='adv_search_conf'){ hide_menu = false ; }	
					}) ;
					if($(e.target).attr('id')!='adv_search_conf' && $(e.target).attr('id')!='adv_search' && hide_menu){ 
						$('#adv_search_conf').animate({left: -419}, 800, 'linear', function() { $('#status_adv_search').val(0) ; });	 
					}
				}) ;				
				$('#mssg').click(function(){
					$('#mssg').popModal({html : $('#contentMessage'), placement : 'bottomRight', showCloseBut : false, onDocumentClickClose : true});
				});				
				$('#invite').click(function(){
					$('#invite').popModal({html : $('#contentInvitations'), placement : 'bottomRight', showCloseBut : false, onDocumentClickClose : true});
				});							
			}) ;			
			/***************placeholder******************/
			$('input[placeholder]').each(function(){  
    			var input = $(this);        
   				$(input).val(input.attr('placeholder'));
				$(input).focus(function(){
        			if (input.val() == input.attr('placeholder')) { input.val(''); }
    			});        
				$(input).blur(function(){
				   if (input.val() == '' || input.val() == input.attr('placeholder')) {
					   input.val(input.attr('placeholder'));
				   }
				});
			});
		</script>
        <script src="/js/menuphone/vendor/modernizr.custom.71422.js"></script>
    </head>
	<body>
    	<nav class="pushy pushy-left">

   			<div class="profil_bloc">
    			<div class="img_prince"><a href="/user?id=<?= $data['user_info']['id_user'] ?>"><img src="<?= \Api\GlobalUtil::user_picture($data['user_info']['gendre'], $data['user_info']['user_picture']) ?>" alt="" width="35" height="33" /></a></div>
                <div class="descp_prince"> 
             		<strong><a href="/user?id=<?= $data['user_info']['id_user'] ?>"><?= \Api\GlobalUtil::formatterName($data['user_info']['firstname'], $data['user_info']['lastname']) ?></a></strong>
					<?= \Api\GlobalUtil::str_reduce($data['user_info']['job'], $maxlenght = 30, $suffix = "...") ?>
              	</div>
         	</div>
          	<ul>
                <li><a href="/"><img src="/images/news.png" /> Actualité</a></li>
                <li><a href="/directory"><img src="/images/directory.png" /> Répertoire</a></li>
                <li><a href="/contacts_messages"><img src="/images/msg_menu.png" /> Message</a></li>
                <li><a href="/invitations"><img src="/images/invitation2.png" /> Invitation</a></li>
               <!-- <li><a href="#"><img src="/images/search_menu.png" /> Recherche</a></li>-->
                <li><a href="/logout"><img src="/images/logout2.png" /> Déconnexion</a></li>
            </ul> 
        </nav>

   	</div> 
    	<div class="site-overlay"></div>
		<div id="eplugg">
        <div class="menu-btn"></div> 
        	<div id="get_message" style="display:none"><div class="titre_plugg"><?= \Lang\notification ?></div><div class="msg_glob"><div class="alertmsg" id="alertmsg"></div></div></div>
            <div id="adv_search_conf" class="search_">
            <div class="inner_search"><div id="specsearch"><a class="link_ad" id="adv_search"><?= \Lang\adv_search ?></a></div>
        		<div class="form_search"><form method="POST" id="advancedSearchForm" action="/search">
                	<div class="search_inner">
                    	<div class="card_user-search">
                        <div class="select_div">
                            	<label class="custom_gendre"><select class="type1" name="gendre">
                                	<option value=""></option>
                                    <option value="1"><?= \Lang\mister ?></option>
                                  	<option value="2"><?= \Lang\married_woman ?></option>
                                    <option value="3"><?= \Lang\unmarried_woman ?></option>
                                </select> </label>
                          	</div>
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
            	</form></div></div>
        	</div>
			<div id="header">
		    	<div class="center_content">
      				<div id="logo"><a href="/"><img src="/images/logo.png" alt="" /></a></div>
      				<div id="search" style="width: 450px;">  
                    	<div id="jautocomplete" style="width: 450px;" class="jautocomplete layout-3">
                            <div class="box ja-actions" data-type="actions">
                            	<form method="POST" id="topSearchFORM" action="/search">
	                                <input type="text" placeholder="<?= \Lang\search_top_label ?>" class="ja-tb" name="topSearchInput" data-type="tb" id="topSearchInput" />
                                    <input type="hidden" value="1" name="topSearch">
                                    <button class="btn_searchTop"></button>
                               </form>
                            </div>
                            <script id="jautocompleteTemplate" type="text/x-jsrender">		
                                <div class="jautocomplete-box">                                    
                                    <div classs="box">
                                        {{for data}}										
                                        <a href="/user?id={{>id_user}}" title="" data-type="item">
                                            <div class="item">
                                                <div class="box">
                                                    <div class="img"><p><img src="{{>user_picture}}" alt="" title="" /></p></div>
                                                    <div class="data">	
                                                        <div class="box">
                                                            <p class="title">{{>firstname}} {{>lastname}}</p>
                           									<p class="desc">{{>job}}</p>
                                                        </div>                                                        											
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        {{/for}}
                                    </div>
                                    <div class="box"><p class="footer"><a onclick="$('#topSearchFORM').submit();"><?= \Lang\more_results ?></a></p></div>
                                </div>
                            </script>
                        </div>
        			</div>
        			<div class="cat_search" style="margin: 17px 0 0 10px; float: right;">
                           	<a data-url='' id="lang_link" style="color: #ffffff;"><span id="cat_label"><?= \Core\Config\Vars::$user_lang ?> </span></a>
                            <a id="btn_cat" style="  display: inline-block;width: 20px;cursor: pointer;text-align: right"><img src="images/arrow.png" alt="" /></a> 
                            <div class="souscat">
                            	<ul>
                                	<?php foreach(\Core\Config\Vars::$languages as $lang=>$tmp){ ?>
                                    <li><a href="/lang?c=<?= $lang ?>" data-lang='<?= $lang ?>'><?= $lang ?></a></li>
                                    <?php } ?>
                              	</ul>
                          	</div>
                       	</div>
      				<div id="menu_profile"> 
                    	<a href="/user?id=<?php echo $data['user_info']['id_user'] ?>">
                        	<img src="<?= \Api\GlobalUtil::user_picture($data['user_info']['gendre'], $data['user_info']['user_picture']) ?>" alt="" width="35" height="33" /> 
                            <span><img src="/images/puce_profile.png" alt="" /></span>
                       	</a>
      					<div class="submenu">
                            <ul>
                                <li><a href="/setting?iframe=true&width=500&height=280" rel="setting" ><img src="/images/tools.png" /> <?= \Lang\settings ?></a></li>
                                <li><a href="/logout"><img src="/images/logout.png" /> <?= \Lang\logout ?></a></li>
                            </ul>
                        </div> 
                    </div>
                    
                    <div id="icone_header">
                        <ul>
                            <li>
                            	<a id="mssg" title="Message"><span><?= ($data['count_unread']>0)? $data['count_unread'] : '' ?></span></a>
                            	<div style="display:none">
                                	<div id="contentMessage" >
                                    <div style="overflow-y:auto; max-height:400px;">

										<?php foreach($data['headerMessages'] as $item) : ?>
	                                        <div class="bloc_user">
	                                        	<a href="/messages?uid=<?= $item['id_user'] ?>" data-tooltip="#html-content5" class="infobull_div" style="cursor: pointer;"></a>
	                                            <div class="im_connais"><img width="37" height="37" alt="" src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>" /></div>
	                                            <div class="des_connais">
	                                            	<strong><a><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></strong> 
	                                               	<?= \Api\GlobalUtil::str_reduce(strip_tags($item['message'])) ?>
	                                            </div>
	                                            <div class="clear5"></div>
	                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                        <div class="popModal_footer"><a href="/messages"><?= \Lang\see_all ?></a></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="/directory" id="rep" title="Répertoire"><span></span></a></li>
                            <li>
                            	<a id="invite" title="Invitations" ><span><?= ($data['total_invitations']>0)?  $data['total_invitations'] : ''  ?></span></a>
                                <div style="display:none;">
                                	<div id="contentInvitations" style="width:298px;">
                                    <div style="overflow-y:auto; max-height:400px;">
                                		<?php foreach($data['headerInvitations'] as $item) : ?>                                       
                                        <div class="bloc_user"> <a href="/user?id=<?= $item['id_user'] ?>" data-tooltip="#html-content5" class="infobull_div" style="cursor: pointer;"></a>
                                            <div class="im_connais"><img width="37" height="37" alt="" src="<?= \Api\GlobalUtil::user_picture($item['gendre'], $item['user_picture']) ?>"></div>
                                            <div class="des_connais"><strong><a><?= \Api\GlobalUtil::formatterName($item['firstname'], $item['lastname']) ?></a></strong> <?= \Api\GlobalUtil::str_reduce($item['job']) ?></div>
                                            <div class="clear5"></div>
                                        </div>
                                        <?php endforeach ?>
                                        </div>
                                        <div class="popModal_footer"><a href="/invitations"><?= \Lang\see_all ?></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>  

                    <div class="clear"></div>    
                </div>
            </div>
      		<script src="/js/menuphone/pushy.min.js"></script>

      		<script type="text/javascript">
      $(document).ready(function(){         
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