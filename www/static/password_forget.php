<?php
	if(isset($_POST['login']))
	{
		include("config_db.php");
		$login=mysql_real_escape_string($_POST['login']);
		
		$sql=mysql_query("SELECT id_user FROM users WHERE login_email='$login' limit 1;");
		if($row=mysql_fetch_array($sql))
		{
			// envoi du mail
			echo json_encode(array($json_status=>2));
		}
		else
			echo json_encode(array($json_status=>1));
	}
?>