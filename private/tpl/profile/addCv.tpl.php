<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $data['sys_title'] ?></title>
		<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="/js/jquery-ui-1.10.4.custom.js"></script>
        <script language="javascript" type="text/javascript">
		var cv_dates_error = "<?= \Lang\cv_dates_error ?>" ;
		var cv_startDdate_error = "<?= \Lang\cv_startDdate_error ?>" ;
		var cv_endDdate_error = "<?= \Lang\cv_endDdate_error ?>" ;
		var cv_endDdate_error = "<?= \Lang\cv_endDdate_error ?>" ;
		var user_lang = "<?= ($data['user_lang'])? $data['user_lang'] : 'en' ?>" ;
		</script>
		<script type="text/javascript" src="/js/validateCv.js"></script>
        <meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />	
        <link rel="stylesheet" href="/css/jcrop/main.css" type="text/css" />
		<link rel="stylesheet" href="/css/jcrop/demos.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/cupertino/jquery-ui-1.10.4.custom.css">
        <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
	</head>
	<body>
    	<div id="extendedMedia">
			<div class="widget-overlay"></div>
    		<div class="datagrid-loader div_message error" id="cvMsgError"></div>
		</div>
        <div class="jc-demo-box">
          	<div class="titre_plugg"><?= \Lang\add_experience1 ?></div>
            <form method="post" action="/save_cv">
              	<div class="top_form">              		
                    <table width="100%" class="tab_cv">
                        <tr><td><?= \Lang\company_name ?> : <br /><input name='company' value='' id="company"  /></td></tr>
                		<tr><td> <?= \Lang\poste ?> : <br /><input name='work_status' value='' id="work_status"  /></td></tr>
                  		<tr>
                        	<td><?= \Lang\date ?><br />
                            	<table class="date" width="100%">
                    				<tr>
                                    	<td><input name='from_date' value='' style="width:90%" id="from_date" placeholder="<?= \Lang\start ?>" /></td>
                                        <td><input name='to_date' value='' style="width:90%" id="to_date" placeholder="<?= \Lang\end ?>" /></td>
                  					</tr>
                  				</table>
                          	</td>
                  		</tr>
                		<tr><td><?= \Lang\address ?> : <br /><input name='place' value='' id="place"  /></td></tr>
			     	</table> 
              	</div> 
                <div class="clear20"></div>
                <div class="div_btn" align="right"><button type="submit" class="btn btn-large btn-inverse submit"  ><?= \Lang\save ?></button> </div>
            </form>
    	</div>
	</body>
</html>