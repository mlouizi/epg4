<?php $cv = $data['cv'] ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $data['sys_title'] ?></title>
    	<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>	
        <script language="javascript" type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" type="text/javascript">
		var cv_dates_error = "<?= \Lang\cv_dates_error ?>" ;
		var cv_startDdate_error = "<?= \Lang\cv_startDdate_error ?>" ;
		var cv_endDdate_error = "<?= \Lang\cv_endDdate_error ?>" ;
		var user_lang = "<?= ($data['user_lang'])? $data['user_lang'] : 'en' ?>" ;
		</script>
        <script type="text/javascript" src="/js/validateCv.js"></script>        
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
        <link rel="stylesheet" href="/css/jcrop/demos.css" type="text/css" />	
        <link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">
	</head>
    <body>        
    	<div id="extendedMedia">
			<div class="widget-overlay"></div>
    		<div class="datagrid-loader div_message error" id="cvMsgError"></div>
		</div>          
 		<div class="jc-demo-box">
        	<div class="titre_plugg"><?= \Lang\edit_cv ?></div>
           	<form method="post" action="/save_cv">  
               	<div class="top_form">    
                   	<table width="100%" class="tab_cv">
               			<tr><td><?= \Lang\company_name ?> : </td><td><input name='company' value='<?= $cv['company'] ?>' id="company"  /></td></tr>
               			<tr><td> <?= \Lang\poste ?> : </td><td><input name='work_status' value='<?= $cv['work_status'] ?>' id="work_status"  /></td></tr>
               			<tr>
               				<td><?= \Lang\date ?></td>
               				<td>
                               	<table class="date">
                   					<tr>
                                       	<td><input name='from_date' value='<?= date('d-m-Y', strtotime($cv['from_date'])) ?>' id="from_date" /></td>
                                        <td width="10">&nbsp;</td>
                                        <td><input name='to_date' value='<?= date('d-m-Y', strtotime($cv['to_date'])) ?>' id="to_date" /></td>
                  					</tr>
                  				</table>
                           	</td>
                  		</tr>
              	  		<tr><td><?= \Lang\address ?> : </td><td><input name='place' value='<?= $cv['place'] ?>' id="place"  /></td></tr>
              		</table>
              	</div>
              	<div class="clear20"></div>
                <div class="div_btn" align="right">
                	<input type="hidden" name="id" value="<?= $cv['id'] ?>"  />
                    <button type="submit" class="submit btn btn-large btn-inverse"  ><?= \Lang\save ?></button>
              	</div>
         	</form>
      	</div>
    </body>
</html>