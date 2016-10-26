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
      		$("#document_delete_logo").click(function(){
          		$.ajax({
            		type: "POST",
					url:"/delete_logo",
					data: {'delete': true},
					success:function(result) {
					  	var result = jQuery.parseJSON( result );
					  	if (result.success) {
							$("#message").attr('class', 'message').html(result.message) ;
							setTimeout('parent.document.location = "/edit_profile', 1500) ;
							parent.document.location.reload();
					  	} else {
							$("#message").attr('class', 'message error').html(result.message) ; 
					  	}           
					},
				})
			});
		    $("#document_cancel_delete").click(function(){ parent.document.location = "/edit_profile"; });
  		});
    	</script>
  	</head>
    <body>     
    	<div class="jc-demo-box">
          	<div class="titre_plugg"><?= \Lang\delete_logo ?></div>
            <div class="clear10"></div>
            <div style="padding:10px">
              	<div id="message"></div>
              	<p><?= \Lang\msg_delete_logo ?></p>
                <table width="80%" style="margin-left: 50px;">
                  	<tr>
                    	<td colspan="2"> <button type="submit" name="document_cancel_delete" id="document_cancel_delete" class="submit btn btn-large btn-inverse"><?= \Lang\cancel ?></button></td>
                    	<td colspan="2"> <button type="submit" name="document_delete_logo" id="document_delete_logo" class="submit btn btn-large btn-inverse"><?= \Lang\delete ?></button> </td>
                  	</tr>
           		</table>
      		</div>
        </div>
    </body>
</html>