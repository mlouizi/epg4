<?php

if(isset($_POST['session']) && isset($_POST['id']))
{
	include("../config_db.php");
	session_id($_POST['session']);
	session_start();
	$id_user_to = intval($_POST['id']);
	$sql = mysql_query('SELECT exists(SELECT 1 FROM invitations WHERE id_user_to="'.$_SESSION['id'].'" and id_user_from="'.$id_user_to.'" limit 1) as exist');
	$e = mysql_fetch_array($sql);
	if($e['exist'] != 1)
	{
		echo json_encode(array($json_status=>false));
	}
	else
	{
		$sql = mysql_query('DELETE FROM invitations WHERE id_user_to="'.$_SESSION['id'].'" AND id_user_from="'.$id_user_to.'"');
		echo json_encode(array($json_status=>true));
	}
}
?>