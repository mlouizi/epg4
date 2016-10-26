<?php
session_id($_POST['session']);
session_start();
if(isset($_SESSION['id']) && isset($_POST['id']))
{
	include("../config_db.php");
	$id_user_to_delete = intval($_POST['id']);
	$sql = mysql_query('DELETE FROM invitations  WHERE id_user_to="'.$id_user_to_delete.'" AND id_user_from="'.$_SESSION['id'].'"');
	echo json_encode(array($json_status=>true));
}
?>