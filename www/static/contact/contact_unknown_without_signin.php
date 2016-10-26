<?php
if(isset($_POST['id']))
{
	include("../config_db.php");
	$id_contact = mysql_real_escape_string($_POST['id']);	
	
	$sql=mysql_query("SELECT gendre, firstname, lastname, job, user_picture, company_name, company_country, id_user, user_type, company_city, company_logo, company_activity 
		FROM users 
		WHERE id_user='$id_contact' LIMIT 1;");
	
	if($row=mysql_fetch_array($sql))
	{
		echo json_encode(array( $json_id=>(int)$id_contact, $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_job=>$row['job'], $json_picture=>$path_picture.$row['user_picture'], $json_establishment_name=>$row['company_name'], $json_establishment_city=>$row['company_city'], $json_establishment_country=>$row['company_country'], $json_establishment_activities=>$row['company_activity'], $json_establishment_picture=>$path_picture.$row['company_logo'], $json_common_friends=>(int)$row['common_friends']));
	}
}
?>