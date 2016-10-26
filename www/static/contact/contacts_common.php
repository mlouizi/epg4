<?php
	session_id($_POST['session']);
	session_start();
	if(isset($_SESSION['id']) && isset($_POST['id']))
	{
		include("../config_db.php");
		$id=mysql_real_escape_string($_POST['id']);
		$id_user=$_SESSION['id'];
		$sql=(mysql_query("SELECT 
			(SELECT count(*) 
				FROM relations R
				WHERE 
				(id_user1=U.id_user AND id_user2 IN (SELECT id_user2 FROM relations WHERE id_user1='$id')) 
				OR 
				(id_user1=U.id_user AND id_user2 IN (SELECT id_user1 FROM relations WHERE id_user2='$id')) 
				OR 
				(id_user2=U.id_user AND id_user1 IN (SELECT id_user1 FROM relations WHERE id_user2='$id'))
				OR 
				(id_user2=U.id_user AND id_user1 IN (SELECT id_user2 FROM relations WHERE id_user1='$id'))
			) 
			AS common_friends, 
			U.id_user, U.gendre, U.firstname, U.lastname, U.job, U.user_picture
			FROM users U,relations R 
			WHERE 
			(
				R.id_user1='$id' 
				AND 
				U.id_user=R.id_user2 
				AND U.id_user IN (SELECT id_user2 FROM relations R2 WHERE R2.id_user1='$id_user')
			)
			OR
			(
				R.id_user1='$id' 
				AND 
				U.id_user=R.id_user2
				AND U.id_user IN (SELECT id_user1 FROM relations R2 WHERE R2.id_user2='$id_user')
			)
			OR
			(
				R.id_user2='$id' 
				AND 
				U.id_user=R.id_user1
				AND U.id_user IN (SELECT id_user1 FROM relations R2 WHERE R2.id_user2='$id_user')
			)
			OR
			(
				R.id_user2='$id' 
				AND 
				U.id_user=R.id_user1
				AND U.id_user IN (SELECT id_user2 FROM relations R2 WHERE R2.id_user1='$id_user')
			)
			
			GROUP BY id_user 
			ORDER BY common_friends,U.firstname,U.lastname,common_friends,U.job DESC;"));
		$arr=array();
		while($row=mysql_fetch_array($sql)){
			$arr[]=array($json_id=>(int)$row['id_user'],$json_sex=>(int)$row['gendre'],$json_firstname=>$row['firstname'],$json_lastname=>$row['lastname'],$json_job=>$row['job'],$json_picture=>$path_picture.$row['user_picture'], $json_common_friends=>(int)$row['common_friends']);
		}
		echo json_encode($arr);
	}
?>