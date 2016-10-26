<?php
session_id($_POST['session']);
session_start();
if( isset($_SESSION['id']) && isset($_POST['regId']) )
{
	include("../config_db.php");
	$id = $_SESSION['id'];
	$regId = mysql_real_escape_string($_POST['regId']);
	
	$sql = mysql_query("DELETE FROM users_devices WHERE type=1 AND reg_id='$regId' AND user_id='$id'");
	echo json_encode(array($json_status=>true));
}
?>
