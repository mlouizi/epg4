<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>
    	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>	
        <script language="javascript" type="text/javascript">
		var current_password_error = "<?= \Lang\current_password_error ?>" ;
		var password_error = "<?= \Lang\password_error ?>" ;
		var confirm_password_error 	= "<?= \Lang\confirm_password_error ?>" ; 
		var has_error = "<?= ((isset($data['message']) && $data['message']!=''))? 1 : 0 ?>" ; 
		</script>
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
        <link rel="stylesheet" href="/css/jcrop/demos.css" type="text/css" />
	</head>
    <body>    
    	<div id="extendedMedia">
			<div class="widget-overlay"></div>
    		<div class="datagrid-loader div_message error" id="registerMsg"><?= (isset($data['message']) && $data['message']!='')? $data['message'] : '' ?></div>
		</div>
              
 		<div class="jc-demo-box">
        	<div class="titre_plugg"><?= \Lang\settings ?></div>
           	<form method="post">  
                <div class="top_form">
                	<table width="100%" class="tab_cv">
                		<tr><td height="35"><?= \Lang\current_email ?> : </td><td><?= $data['user_info']['login_email'] ?></td></tr>
                        <tr><td height="35"><?= \Lang\current_password ?> : </td><td><input type="password" name='current_password' <?= (isset($data['success']) && !$data['success'])? 'class="error"' : '' ?> id="current_password"  /></td></tr>
                		<tr><td height="35"><?= \Lang\new_password ?> : </td><td><input type="password" name='password' id="password"  /></td></tr>
                 		<tr><td height="35"><?= \Lang\password_again ?> : </td><td><input type="password" name='password_again' id="password_again"  /></td></tr>
              		</table></div> 	<div class="div_btn"><button type="submit" name="submit" value="1" class="submitSetting btn btn-large btn-inverse" ><?= \Lang\save ?></button>             
              		
                </div>
          		
          	</form>
      	</div>        
        <script type="text/javascript" src="/js/setting.js"></script>	
    </body>
</html>