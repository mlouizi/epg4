<?php
	session_id(@$_POST['session']);
	session_start();

	if(isset($_SESSION['id']))
	{
		include("../config_db.php");
		$id=$_SESSION['id'];
		$sql=(mysql_query(
			"SELECT DISTINCT(U.id_user),U.gendre,U.firstname,U.lastname,U.job,U.user_picture
			FROM users U
			WHERE U.id_user!='$id' 
				AND U.id_user not in (
						SELECT id_user_to AS id_user 
						FROM invitations WHERE id_user_from='$id')
			ORDER BY U.firstname,U.lastname DESC, FIELD(U.company_country,'Tunisia') DESC"));
		$arr=array();
		while($row=mysql_fetch_array($sql))
		{
			$arr[]=array($json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'], $json_job=>$row['job']);
		}
		
		echo json_encode($arr);
	}
?>