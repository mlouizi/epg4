<?php
	$session=mysql_real_escape_string($_POST['session']);
	session_id($session);
	session_start();
	if(isset($_POST['id']) && isset($_SESSION['id']) && isset($_POST['name']))
	{
		include("../config_db.php");
		$user_id=mysql_real_escape_string($_POST['id']);
		$id=$_SESSION['id'];
		$date=date("Y-m-d H:i:s"); 
		$name=mysql_real_escape_string($_POST['name']);

		$sql=mysql_query("SELECT * FROM invitations WHERE (id_user_to='$user_id' AND id_user_from='$id') OR (id_user_to='$d' AND id_user_from='$user_id')");
		if(!$row=mysql_fetch_array($sql))
		{
			$sql=mysql_query("INSERT INTO invitations (id_user_to,id_user_from,invitation_time) VALUES('$user_id','$id','$date');");
		
			include_once './GCM.php';
			
			$sql=mysql_query("SELECT reg_id,type FROM users_devices WHERE user_id='$user_id'");
			
			$test=false;
			while($row=mysql_fetch_array($sql))
			{
				$test=true;
				$regId=$row['reg_id'];
				if ($row['reg_id']==0)
				{
					$gcm = new GCM();
					$registatoin_ids = array($regId);
					$message = array( $json_id => 2, $json_from_user_id => $id, $json_name => $name, $json_to_user_id=>$user_id);
					$result = $gcm->send_notification($registatoin_ids, $message);
				}
				else
				{
					$message = "New invitation from ".$name;
					include ("ios_push_notification.php");
				}
				
			}
			if ($test==false)
				echo json_encode(array($json_status=>true));
		}
	}
?>