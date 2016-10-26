<?php
session_id($_POST['session']);
session_start();
if( isset($_SESSION['id']) && isset($_POST['id']) && isset($_POST['name']))
{
	include("../config_db.php");
	$id=$_SESSION['id'];
	$name=mysql_real_escape_string($_POST['name']);
	$id_user_to = intval(mysql_real_escape_string($_POST['id']));
	$date=date("Y-m-d H:i:s"); 
	$sql = mysql_query("SELECT exists(SELECT id_invitations FROM invitations WHERE id_user_to='".$_SESSION['id']."' and id_user_from='".$id_user_to."' LIMIT 1) AS exist;");
	$e = mysql_fetch_array($sql);
	if($e['exist'] != 1)
		echo json_encode(array($json_status=>1));
	else
	{
		$sql = mysql_query("DELETE FROM invitations WHERE id_user_to='$id' AND id_user_from='$id_user_to';");
		$sql = mysql_query("INSERT INTO relations VALUES('$id','$id_user_to','$date','0');");
		
		include_once './GCM.php';
		$sql=mysql_query("SELECT reg_id, type FROM users_devices WHERE user_id='$id_user_to'");
		
		echo json_encode(array($json_status=>2));
		
		while($row=mysql_fetch_array($sql))
		{
			$regId=$row['reg_id'];
			if ($row['reg_id']==0)
			{
				$gcm = new GCM();
				
	    		$registatoin_ids = array($regId);
				$message = array( $json_id=>3, $json_from_user_id=>$id, $json_name=>$name, $json_to_user_id=>$id_user_to);
				$result = $gcm->send_notification($registatoin_ids, $message);
			}
			else
			{
				$message = $name." accepted your invitation";
				include ("ios_push_notification.php");
    		}
		}
	}
}
?>