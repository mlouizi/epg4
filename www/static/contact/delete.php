<?php
session_id($_POST['session']);
session_start();
if(isset($_SESSION['id']) && isset($_POST['id']))
{
	try
	{
		include("../config_db.php");
		
		$id_user_to_delete = mysql_real_escape_string($_POST['id']);
		
		$sql = mysql_query('DELETE FROM relations  WHERE (id_user1="'.$id_user_to_delete.'" AND id_user2="'.$_SESSION['id'].'") OR (id_user1="'.$_SESSION['id'].'" AND id_user2="'.$id_user_to_delete.'")');
		echo json_encode(array($json_status=>true));
		
	}
	catch(Exception $e)
	{
		echo json_encode(array($json_status=>false));
	}
}
