 /*function getNotifications() {
        		$.ajax({
        			type: 'GET',
        			url: '/get_count_messages',
        			success: function(result) { $('#mssg span').html(result).toggle(result > 0); }
        		});
        		setTimeout(getNotifications, 10000);
        	}*/
			function Plugger(url){
				$.ajax({
					type: "GET",
					url: url,
					/*data: "uid=" + $(_this).data('id') ,*/
					dataType : 'json',
					success: function(data){
						$("#alertmsg").html(data.message) ;
						$.prettyPhoto.open("#get_message");
						setTimeout("parent.document.location.reload()",3000) ;

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
							$(_this).attr('href', '/suggest?uid=' + $(_this).data('id') + '&iframe=true&width=400').attr('rel', 'suggerer').html(sugger_message);
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
							$(_this).attr('onClick', 'Plugger(this, 0)').html(plugger_message);
						}
					}
				});
			}
			
			function intPretty(){
				$("a[rel^='edit_image'],a[rel^='delete_image'], a[rel^='add_event'], a[rel^='edit_logo'], a[rel^='delete_logo'], a[rel^='suggerer'], a[rel^='add_cv'], a[rel^='edit_cv'], a[rel^='upload_cv'], a[rel^='delete_cv'], a[rel^='setting'], a[rel^='mutual_friend'], a[rel^='delete_cv_file']").prettyPhoto({
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
				/*getNotifications(); */
                if($('#calendar .days .day').length >0) {
                    setHeight($('#calendar .days .day'));
                }
                $( "body" ).on( "click", "a.plugger-link", function(event) {
                    var url = this.href;
                    Plugger(url);
                    return false;
                });
                $("body").on('click', '.ignore-user', function(event) {
                    event.preventDefault();
                    var element = this;
                    var link = $(element).attr('href');
                    $.ajax({
                        type: "GET",
                        url: link,
                        success: function(data){
                            if(data.success) {
                                if($(element).hasClass("show-next")) {
                                    $($(element).attr('data-id')).hide('slow', function(){ $(this.remove())}) ;
                                    $(this).parents('.list_suggestions').append($('#others_suggestions li:first').html()) ;
                                    $('#others_suggestions li:first').remove() ;
                                }
                                else {
                                    $($(element).parents(".bloc_user")).hide('slow', function(){ $(this.remove())}) ;

                                }

                            }

                        }
                    });
                })
                $("body").on('click', '.ajax-calendar', function(event) {
                    event.preventDefault();
                    var element = this;
                    var link = $(element).attr('href');
                    $.ajax({
                        type: "GET",
                        url: link,
                        success: function(data){
                            $('#calendar-wrap').html($(data).find('#calendar-wrap').html());
                            setHeight($('#calendar .days .day'));
                            intPretty();
                        }
                    });
                })

				$('.tooltip').darkTooltip({animation:'flipIn', gravity:'east', theme:'light'});	
				$('#jautocomplete').jautocomplete({
                    urlAjax: $(this).data('url'),
					dataSource: 'server',
					server: function(inputVal){ return {url: $('#jautocomplete').data('url'), dataType: 'json', type: 'POST', data:{ topSearchInput: inputVal }};},
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
						url: $(this).data('url'),
						data: "keys=" + $('#msg_ct_serach').val(),
						success: function(data){ $('#msg_ct_list').html(data) }
					});
				}) ;
				$('#dir_ct_serach').keyup(function(){
					var url = $(this).data('url');
					$.ajax({ type: "GET", url: url, data: "keys=" + $('#dir_ct_serach').val(), success: function(data){ $('#dir_ct_list').html(data) } });
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
				/** prview image **/
				$("#uploadPostImg").change(function(){
					readURL(this);
				});
				/** comment **/
				$('body').on('keypress', '.comment_form', function(e) {
					if(e.which == 13) {
						if ( $.trim( $(this).val() ) == '' )
							alert('Commentaire est vide');
						else {
							var url = $(this).data('url');
							var idpost = $(this).data('postid');
							$.ajax({
								type: "GET",
								url: url,
								data: "content=" + $('#comment_form_' + idpost).val() + "&postid=" + idpost,
								success: function (data) {
									$('#commentire_post_' + idpost).html(data)
								}
							});
						}
					}
				});

				$('body').on('click', '.delete_comment', function(e) {

					var url = $(this).data('url');
					var idpost= $(this).data('postid');
					var idcomment = $(this).data('commentid');
					$.ajax({ type: "GET", url: url, data: "postid="+idpost+"&commentid="+idcomment, success: function(data){ $('#commentire_post_'+idpost).html(data) } });


				});


				$('body').on('click', '.like_post_boutton', function(e) {

						var url = $(this).data('url');
						var idpost= $(this).data('postid');
						$.ajax({ type: "GET", url: url, data: "postid="+idpost, success: function(data){ $('#like_post_'+idpost).html(data) } });


				});


			}) ;			
			/***************placeholder******************/
			/*$('input[placeholder]').each(function(){
    			var input = $(this);
                if($(input).val() == "") {
   				    $(input).val(input.attr('placeholder'));
                }
				$(input).focus(function(){
        			if (input.val() == input.attr('placeholder')) { input.val(''); }
    			});
				$(input).blur(function(){
				   if (input.val() == '' || input.val() == input.attr('placeholder')) {
					   input.val(input.attr('placeholder'));
				   }
				});
			});*/
 /**********Image Preview*********************/
 function readURL(input) {

	 if (input.files && input.files[0]) {
		 var reader = new FileReader();

		 reader.onload = function (e) {
			 var img = '<img width="50px" height="50px" src="' + e.target.result + '" />';
			 $('.imagePreview').html(img);
		 }

		 reader.readAsDataURL(input.files[0]);
	 }
 }
 function setHeight(col) {
     var $col = $(col);

     var $maxHeight = 0;
     $col.each(function () {
         var $thisHeight = $(this).outerHeight();
         if ($thisHeight > $maxHeight) {
             $maxHeight = $thisHeight;
         }
     });
     $col.height($maxHeight);
 }

