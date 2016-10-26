<?php
if(isset($_POST['session']))
{
	session_id(mysql_real_escape_string($_POST['session']));
	session_start();
	include("../config_db.php");
	$id=$_SESSION['id'];

	$sql=mysql_query("SELECT count(*) AS c FROM invitations WHERE id_user_to='$id';");
	if($row=mysql_fetch_array($sql))
		echo json_encode(array($json_invitation_count => (int)$row['c']));
}
?>