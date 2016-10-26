<?php
	$sex=mysql_real_escape_string(@$_POST['sex']);
	$fname=mysql_real_escape_string(@$_POST['first_name']);
	$lname=mysql_real_escape_string(@$_POST['last_name']);
	$job=mysql_real_escape_string(@$_POST['job']);
	$establishment=mysql_real_escape_string(@$_POST['establishment_name']);
	$activities=mysql_real_escape_string(@$_POST['establishment_activities']);
	$country=mysql_real_escape_string(@$_POST['country']);
	$city=mysql_real_escape_string(@$_POST['city']);
	if($sex==-1){$sex='%%';}

	include("../config_db.php");
	$sql=(mysql_query("SELECT job, firstname, lastname, user_picture, id_user, gendre
		FROM users 
		WHERE company_activity LIKE '%$activities%'
		AND firstname LIKE '%$fname%'
		AND lastname LIKE '%$lname%'
		AND job LIKE '%$job%'
		AND company_name LIKE '%$establishment%'
		AND company_country LIKE '%$country%'
		AND company_city LIKE '%$city%'
		AND gendre LIKE '%$sex%'
		ORDER BY firstname, lastname, job ASC LIMIT 0,20"));
	$arr=array();
	while($row=mysql_fetch_array($sql))
	{
		$arr[]=array($json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'], $json_job=>$row['job'], $json_common_friends=>0);
	}
	
	echo json_encode($arr);
	
?>