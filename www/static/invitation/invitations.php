<?php
	session_id($_POST['session']);
	session_start();
	if(isset($_SESSION['id']) && isset($_POST['limit_begin']) && isset($_POST['limit_end']))
	{
		include("../config_db.php");
		$id_user=$_SESSION['id'];
		$limit_begin=intval(mysql_real_escape_string($_POST['limit_begin']));
		$limit_end=intval(mysql_real_escape_string($_POST['limit_end']));
		$sql=mysql_query("SELECT 
			(SELECT count(*) 
				FROM relations R 
				WHERE 
					(id_user1=U.id_user AND id_user2 IN (SELECT id_user2 FROM relations WHERE id_user1='$id_user')) 
					OR 
					(id_user2=U.id_user AND id_user1 IN (SELECT id_user1 FROM relations WHERE id_user2='$id_user'))
			) 
			AS common_friends, U.id_user, U.gendre, U.firstname, U.lastname, U.job, U.user_picture, I.id_user_from, I.id_invitations 
			FROM users U, invitations I 
			WHERE U.id_user=I.id_user_from 
				AND I.id_user_to='$id_user'
				GROUP BY U.id_user
				ORDER BY I.id_invitations DESC
				LIMIT $limit_begin, $limit_end;");
		$arr=array();
		while($row=mysql_fetch_array($sql))
		{
			$arr[]=array( $json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_job=>$row['job'], $json_picture=>$path_picture.$row['user_picture'], $json_common_friends=>(int)$row['common_friends']);
		}
		echo json_encode($arr);
	}
?>