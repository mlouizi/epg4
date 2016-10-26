<?php $profile = $data['user_profile'] ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Eplugg</title>
    	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/js/image/ajaxupload.js"></script>
		<script src="/js/jcrop/jquery.Jcrop.js"></script>
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
        <link rel="stylesheet" href="/css/jcrop/demos.css" type="text/css" />
		<script type="text/javascript">
		$(document).ready(function(){			
			new AjaxUpload( "#document_cv", {
				action: "/upload_cv",
				name: 'document_cv',
				data: { },
				autoSubmit: true,
				responseType: "json",				
				onComplete: function(file, response){
					if(response.success) {
						$("#message").attr('class', 'datagrid-loader message').html(response.message) ;
						$('#extendedMedia').show('slow');
						$('#message').css('margin-top', '-' + String(parseInt($('#message').height()/2)) + 'px');
						setTimeout('parent.document.location = "/user?id=<?= $data['id_user'] ?>"', 1000) ; 
					} else {
						$("#message").attr('class', 'datagrid-loader message error').html(response.message) ;	
						$('#extendedMedia').show('slow');
						$('#message').css('margin-top', '-' + String(parseInt($('#message').height()/2)) + 'px');
						setTimeout( function(){ 
							$('#extendedMedia').hide('slow', function(){ $('#message').html(''); }); 				
						}, 5000 ) ;
					}
				}
			});	
		});
		</script>
	</head>
    <body>      
       	<div id="extendedMedia">
			<div class="widget-overlay"></div>
    		<div class="datagrid-loader" id="message"><?= (isset($data['message']) && $data['message']!='')? $data['message'] : '' ?></div>
		</div>        
 		<div class="jc-demo-box">
        	<div class="titre_plugg"><?= \Lang\upload_cv ?></div>
            <div class="clear10"></div>
            <div style="padding:10px">
            	<p><?= \Lang\msg_upload_cv ?></p>
                <table width="100%"><tr><td colspan="2"><input type="file" name="document_cv" id="document_cv" class="custom-file-input" /></td></tr></table>
            </div>
        </div>
    </body>
</html>