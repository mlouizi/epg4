<?php
	session_id($_POST['session']);
	session_start();
	if(isset($_SESSION['id']))
	{
		include("../config_db.php");
		$id=$_SESSION['id'];
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
			AS common_friends, U.job,U.firstname,U.lastname,U.gendre, U.user_picture,U.company_name,U.company_country,U.id_user,U.user_type,U.emails,U.mobiles,U.direct_phones,U.company_city,U.company_logo,U.company_address,U.company_tel,U.company_fax,U.company_websites,U.company_activity 
			FROM users U, relations R 
			WHERE (R.id_user1='$id' AND U.id_user=R.id_user2) OR (R.id_user2='$id' AND U.id_user=R.id_user1) 
			GROUP BY id_user ORDER BY U.firstname,U.lastname,common_friends,U.job DESC;"));
		$arr=array();
		while($row=mysql_fetch_array($sql))
		{
			$arr[]=array($json_id=>(int)$row['id_user'],$json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'],$json_job=>$row['job'],$json_emails=>$row['emails'], $json_mobiles=>$row['mobiles'], $json_fixs=>$row['direct_phones'], $json_establishment_name=>$row['company_name'], $json_establishment_city=>$row['company_city'], $json_establishment_country=>$row['company_country'], $json_establishment_address=>$row['company_address'], $json_establishment_fixs=>$row['company_tel'], $json_establishment_faxs=> $row['company_fax'], $json_establishment_web_sites=>$row['company_websites'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
		}

		$sql=mysql_query("SELECT * FROM users WHERE id_user='".$_SESSION['id']."'");
		if($row=mysql_fetch_array($sql))
		{
			$arr[]=array( $json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'],$json_lastname=>$row['lastname'],$json_picture=>$path_picture.$row['user_picture'],$json_job=>$row['job'],$json_emails=>$row['emails'], $json_mobiles=>$row['mobiles'], $json_fixs=>$row['direct_phones'], $json_establishment_name=>$row['company_name'], $json_establishment_city=>$row['company_city'], $json_establishment_country=>$row['company_country'], $json_establishment_address=>$row['company_address'], $json_establishment_fixs=>$row['company_tel'], $json_establishment_faxs=> $row['company_fax'], $json_establishment_web_sites=>$row['company_websites'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
		}

		echo json_encode($arr);
	}
?>