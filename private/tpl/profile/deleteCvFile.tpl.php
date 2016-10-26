<?php $profile = $data['user_profile'] ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Eplugg</title>
      	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
    	<script type="text/javascript">
    	$(document).ready(function(){
      		$("#document_delete_cv").click(function(){
         	 	$.ajax({
            		type: "POST",
            		url:"/delete_cv_file",
			        data: {'delete': true},
            		success:function(result) {
		              	var result = jQuery.parseJSON( result );
						if (result.success) {
							$("#message").attr('class', 'datagrid-loader message').html(result.message) ;
							$('#extendedMedia').show('slow');
							$('#message').css('margin-top', '-' + String(parseInt($('#message').height()/2)) + 'px');	
							setTimeout('parent.document.location = "/user?id=<?= $profile['id_user'] ?>"', 1000);
					  	} else {
							$("#message").attr('class', 'datagrid-loader message error').html(result.message) ;
							$('#extendedMedia').show('slow');
							$('#message').css('margin-top', '-' + String(parseInt($('#message').height()/2)) + 'px');
							setTimeout( function(){ 
								$('#extendedMedia').hide('slow', function(){ $('#message').html(''); }); 				
							}, 5000 ) ; 
					  	}           
            		},
       	 		})
      		});
			$("#document_cancel_delete").click(function(){ parent.document.location = "/user?id=<?= $profile['id_user'] ?>"; });
  		});
    	</script>
  	</head>
    <body>      
    	<div id="extendedMedia">
			<div class="widget-overlay"></div>
    		<div class="datagrid-loader" id="message"><?= (isset($data['message']) && $data['message']!='')? $data['message'] : '' ?></div>
		</div> 
    	<div class="jc-demo-box">
          	<div class="titre_plugg"><?= \Lang\delete_cv_file ?></div>
            <div class="clear10"></div>
            <div style="padding:10px; text-align:center">
              	<p><?= \Lang\msg_delete_cv_file ?></p>
                <table width="50%" style=" margin:0 auto">
                	<tr>
                    	<td colspan="2"><button type="submit" name="document_cancel_delete" id="document_cancel_delete" class="submit btn btn-large btn-inverse"><?= \Lang\cancel ?></button></td>
                    	<td colspan="2"><button type="submit" name="document_delete_cv" id="document_delete_cv" class="submit btn btn-large btn-inverse"><?= \Lang\delete ?></button></td>
                  	</tr>
                </table>
            </div>
        </div>
    </body>
</html>