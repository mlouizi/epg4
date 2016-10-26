<?php

	error_reporting(0);
	
	//echo json_encode($_POST) ;
	
	
	session_start();
	include("config_db.php");
	//return ;
	if(isset($_POST['login']) && isset($_POST['password']))
	{
		
		$password=md5(mysql_real_escape_string($_POST['password']));
		$sql=mysql_query("SELECT * FROM users WHERE login_email='".mysql_real_escape_string($_POST['login'])."' AND login_password='$password' LIMIT 1");
		
		if ($sql)
		{
			$row=mysql_fetch_array($sql);
			if($row)
			{
				$_SESSION['id']=$row['id_user'];
				$sql = mysql_query('SELECT count(*) as invitation_count FROM invitations WHERE id_user_to="'.$_SESSION['id'].'" AND invitation_status=0');
				if ($row2 = mysql_fetch_array($sql)) {
					$user_type=(int)$row['user_type'];
					if ($user_type==0)
						echo json_encode(array($json_status=> 0));
					else
						echo json_encode(array($json_status=>(int)$row['user_type'], $json_session=>session_id(), $json_id=>intval($row['id_user']), $json_sex=>intval($row['gendre']), $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'], $json_job=>$row['job'], $json_timestamp=>"".time(), $json_invitation_count=>intval($row2['invitation_count'])));
				}
				else
					echo json_encode(array($json_status=> -2));
			}
			else
				echo json_encode(array( $json_status=> -1));
		}
		else
				echo json_encode(array($json_status=> -2));
	}
	else
				echo json_encode(array($json_status=> -3));
	
	
?>