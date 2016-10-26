<?php
	session_id(@$_POST['session']);
	session_start();

	if(isset($_SESSION['id']) && isset($_POST['emails']) && isset($_POST['mobiles']) && isset($_POST['fixs']) && isset($_POST['establishment_address']) && isset($_POST['establishment_fixs']) && isset($_POST['establishment_faxs']) && isset($_POST['establishment_web_sites']))
	{
		include("../config_db.php");
		$id_user=$_SESSION['id'];
		$email=mysql_real_escape_string($_POST['emails']);
		$gsm=mysql_real_escape_string($_POST['mobiles']);
		$tel=mysql_real_escape_string($_POST['fixs']);
		$establishment_address=mysql_real_escape_string($_POST['establishment_address']);
		$establishment_tel=mysql_real_escape_string($_POST['establishment_fixs']);
		$establishment_fax=mysql_real_escape_string($_POST['establishment_faxs']);
		$establishment_website=mysql_real_escape_string($_POST['establishment_web_sites']);
		$date=date("Y-m-d H:i:s"); 
		if ($sql=mysql_query("UPDATE users SET 
			emails='$email', 
			mobiles='$gsm', 
			direct_phones='$tel', 
			company_address='$establishment_address', 
			company_tel='$establishment_tel', 
			company_fax='$establishment_fax', 
			company_websites='$establishment_website', 
			last_login='$date', 
			last_activity='$date',
			user_type='$user_type_with_step2' 
			WHERE id_user='$id_user';"))
		{

			echo json_encode(array( $json_status => true));
		}
		
	}
?>