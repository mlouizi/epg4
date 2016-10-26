<?php
/*function isValidTimeStamp($timestamp)
{
    return ((string) (int) $timestamp === $timestamp) 
        && ($timestamp <= PHP_INT_MAX)
        && ($timestamp >= ~PHP_INT_MAX);
}*/

if(isset($_POST['session']) && isset($_POST['timestamp']))
{
	session_id(mysql_real_escape_string($_POST['session']));
	session_start();
	$timestamp=mysql_real_escape_string($timestamp);
	include("../config_db.php");
	$id=$_SESSION['id'];
	$sql=(mysql_query("SELECT (SELECT count(id_user2) FROM relations R WHERE id_user1=U.id_user AND id_user2 IN (SELECT id_user2 FROM relations WHERE id_user1='$id' ) ) AS common_friends, U.job,U.firstname,U.lastname,U.gendre, U.user_picture,U.company_name,U.company_country,U.id_user,U.user_type,U.emails,U.mobiles,U.direct_phones,U.company_city,U.company_logo,U.company_address,U.company_tel,U.company_fax,U.company_websites,U.company_activity FROM users U,relations R WHERE last_update > '$timestamp' AND ((R.id_user1='$id' AND U.id_user=R.id_user2) OR (R.id_user2='$id' AND U.id_user=R.id_user1)) GROUP BY id_user ORDER BY U.firstname,U.lastname,common_friends,U.job DESC;"));
	$arr=array();
	while($row=mysql_fetch_array($sql))
	{
		$arr[]=array($json_id=>(int)$row['id_user'],$json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'],$json_job=>$row['job'],$json_emails=>$row['emails'], $json_mobiles=>$row['mobiles'], $json_fixs=>$row['direct_phones'], $json_establishment_name=>$row['company_name'], $json_establishment_country=>$row['company_country'], $json_establishment_city=>$row['company_city'], $json_establishment_address=>$row['company_address'], $json_establishment_fixs=>$row['company_tel'], $json_establishment_faxs=> $row['company_fax'], $json_establishment_web_sites=>$row['company_websites'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
	}

	$sql=mysql_query("SELECT * FROM users WHERE id_user='".$_SESSION['id']." AND last_update > '$timestamp';");
	if($row=mysql_fetch_array($sql))
	{
		$arr[]=array( $json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'],$json_lastname=>$row['lastname'],$json_picture=>$path_picture.$row['user_picture'],$json_job=>$row['job'],$json_emails=>$row['emails'], $json_mobiles=>$row['mobiles'], $json_fixs=>$row['direct_phones'], $json_establishment_name=>$row['company_name'], $json_establishment_country=>$row['company_country'], $json_establishment_city=>$row['company_city'], $json_establishment_address=>$row['company_address'], $json_establishment_fixs=>$row['company_tel'], $json_establishment_faxs=> $row['company_fax'], $json_establishment_web_sites=>$row['company_websites'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']);
	}

	$sql=mysql_query("SELECT count(*) AS c FROM invitations WHERE id_user_to='$id';");
	if($row=mysql_fetch_array($sql))
	{
		echo json_encode(array($json_invitation_count => (int)$row['c'], $json_timestamp => "".time() , "users"=>$arr));
	}
}
?>