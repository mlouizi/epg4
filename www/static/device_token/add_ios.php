<?php
	session_id($_POST['session']);
	session_start();
	if(isset($_POST['regId']) && isset($_SESSION['id']))
	{
		include("../config_db.php");
		$regId=mysql_real_escape_string($_POST['regId']);
		$id=$_SESSION['id'];
		mysql_query("DELETE FROM users_devices WHERE type=1 AND reg_id='$regId';");
		mysql_query("INSERT INTO users_devices (reg_id,type,user_id) VALUEs('$regId',1,'$id');");
	}
?>