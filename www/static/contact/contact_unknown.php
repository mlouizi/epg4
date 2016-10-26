<?php
session_id($_POST['session']);
session_start();
if(isset($_SESSION['id']) && isset($_POST['id']))
{
	include("../config_db.php");
	$id_user = $_SESSION['id'];	
	$id_contact = mysql_real_escape_string($_POST['id']);	
	
	$sql=mysql_query("SELECT id_user2 FROM relations WHERE (id_user2='$id_user' AND id_user1='$id_contact') OR (id_user2='$id_contact' AND id_user1='$id_user') LIMIT 1;");
	if ($row=mysql_fetch_array($sql))
	{
		$sql=mysql_query("SELECT 
			(SELECT count(*) 
				FROM relations R 
				WHERE 
					(id_user1=U.id_user AND id_user2 IN (SELECT id_user2 FROM relations WHERE id_user1='$id_user')) 
					OR 
					(id_user2=U.id_user AND id_user1 IN (SELECT id_user1 FROM relations WHERE id_user2='$id_user'))
			) 
			AS common_friends, U.job,U.firstname,U.lastname, U.user_picture,U.company_name,U.company_country,U.id_user,U.user_type,U.emails,U.mobiles,U.direct_phones,U.company_city,U.company_logo,U.company_address,U.company_tel,U.company_fax,U.company_websites,U.company_activity 
				FROM users U 
				WHERE U.id_user='".$id_contact."';");
		if($row=mysql_fetch_array($sql))
		{
			$arr[]=array( $json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'], $json_job=>$row['job'], $json_emails=>$row['emails'], $json_mobiles=>$row['mobiles'], $json_fixs=>$row['direct_phones'], $json_establishment_name=>$row['company_name'], $json_establishment_country=>$row['company_country'], $json_establishment_city=>$row['company_city'], $json_establishment_address=>$row['company_address'], $json_establishment_fixs=>$row['company_tel'], $json_establishment_faxs=> $row['company_fax'], $json_establishment_web_sites=>$row['company_websites'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
		}
		echo json_encode(array("result"=>4, "users"=>$arr));
	}
	else
	{
		$sql=mysql_query("SELECT id_user_from, id_user_to FROM invitations WHERE invitation_status=0 AND ((id_user_from='$id_user' AND id_user_to='$id_contact') OR (id_user_from='$id_contact' AND id_user_to='$id_user')) LIMIT 1;");
		if ($row=mysql_fetch_array($sql))
		{
			
			$sql=mysql_query("SELECT (SELECT count(id_user2) FROM relations R WHERE id_user1=U.id_user AND id_user2 IN (SELECT id_user2 from relations WHERE id_user1='$id_contact' ) ) AS common_friends, U.job,U.firstname,U.lastname, U.user_picture,U.company_name,U.company_country,U.id_user,U.user_type,U.company_city,U.company_logo,U.company_activity FROM users U where U.id_user='".$id_contact."' LIMIT 1;");
			if($row2=mysql_fetch_array($sql))
			{
				$arr[]=array( $json_id=>(int)$id_contact, $json_sex=>(int)$row2['gendre'], $json_firstname=>$row2['firstname'], $json_lastname=>$row2['lastname'], $json_picture=>$path_picture.$row2['user_picture'], $json_job=>$row2['job'], $json_establishment_name=>$row2['company_name'], $json_establishment_country=>$row['company_country'], $json_establishment_city=>$row2['company_city'], $json_establishment_activities=>$row2['company_activity'], $json_establishment_picture=>$path_picture.$row2['company_logo'], $json_common_friends=>(int)$row2['common_friends']);
			}

			if ($row['id_user_from']==$id_contact)
			{
				echo json_encode(array("result"=>3, "users"=>$arr));
			}
			else if ($row['id_user_from']==$id_user)
			{
				echo json_encode(array("result"=>2, "users"=>$arr));
			}
		}
		else 
		{
			$sql=mysql_query("SELECT (SELECT count(id_user2) FROM relations R WHERE id_user1=U.id_user AND id_user2 IN (SELECT id_user2 from relations WHERE id_user1='$id_contact' ) ) AS common_friends, U.gendre, U.firstname,U.lastname,U.job, U.user_picture,U.company_name,U.company_country,U.id_user,U.user_type,U.company_city,U.company_logo,U.company_activity FROM users U where U.id_user='".$id_contact."' LIMIT 1;");
			if($row=mysql_fetch_array($sql))
			{
				$arr[]=array( $json_id=>(int)$id_contact, $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_job=>$row['job'], $json_picture=>$path_picture.$row['user_picture'], $json_establishment_name=>$row['company_name'], $json_establishment_country=>$row['company_country'], $json_establishment_city=>$row['company_city'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
			}

			echo json_encode(array("result"=>1, "users"=>$arr));
		}
	}
}
?>