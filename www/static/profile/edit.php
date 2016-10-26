<?php
	session_id(@$_POST['session']);
	session_start();
	if(isset($_SESSION['id']) && isset($_POST['sex']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['job']) && isset($_POST['establishment_name']) && isset($_POST['establishment_activities']) && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['change']) && isset($_POST['emails']) && isset($_POST['mobiles']) && isset($_POST['fixs']) && isset($_POST['establishment_address']) && isset($_POST['establishment_fixs']) && isset($_POST['establishment_faxs']) && isset($_POST['establishment_web_sites']))
	{
		include("../config_db.php");
		$firstname=mysql_real_escape_string($_POST['first_name']);
		$lastname=mysql_real_escape_string($_POST['last_name']);
		$job=mysql_real_escape_string($_POST['job']);
		$establishment=mysql_real_escape_string($_POST['establishment_name']);
		$activities=mysql_real_escape_string($_POST['establishment_activities']);
		$country=mysql_real_escape_string($_POST['country']);
		$city=mysql_real_escape_string($_POST['city']);
		$sex=mysql_real_escape_string($_POST['sex']);
		$password=md5(mysql_real_escape_string($_POST['password']));
		$password2=md5(mysql_real_escape_string($_POST['password2']));
		$change=mysql_real_escape_string($_POST['change']);
		$id_user=mysql_real_escape_string($_SESSION['id']);

		$emails=mysql_real_escape_string($_POST['emails']);
		$mobiles=mysql_real_escape_string($_POST['mobiles']);
		$fixs=mysql_real_escape_string($_POST['fixs']);
		$establishment_address=mysql_real_escape_string($_POST['establishment_address']);
		$establishment_fixs=mysql_real_escape_string($_POST['establishment_fixs']);
		$establishment_faxs=mysql_real_escape_string($_POST['establishment_faxs']);
		$establishment_web_sites=mysql_real_escape_string($_POST['establishment_web_sites']);

		$date=date("Y-m-d H:i:s");
		$time=time();

		$sql=mysql_query("SELECT id_user FROM users WHERE id_user='$id_user' AND login_password='$password' LIMIT 1");
		
		if($row=mysql_fetch_array($sql))
		{
			if ($change=="1")
				$sql=mysql_query("UPDATE users SET
					firstname='$firstname',
					lastname='$lastname',
					job='$job',
					company_name='$establishment',
					company_activity='$activities',
					company_country='$country',
					company_city='$city',
					gendre='$sex',
					emails='$emails', 
					mobiles='$mobiles', 
					direct_phones='$fixs', 
					company_address='$establishment_address', 
					company_tel='$establishment_fixs', 
					company_fax='$establishment_faxs', 
					company_websites='$establishment_web_sites',
					last_activity='$date',
					login_password='$password2',
					last_update='$time'
					WHERE id_user='$id_user';");
			else
				$sql=mysql_query("UPDATE users SET
					firstname='$firstname',
					lastname='$lastname',
					job='$job',
					company_name='$establishment',
					company_activity='$activities',
					company_country='$country',
					company_city='$city',
					gendre='$sex',
					emails='$emails', 
					mobiles='$mobiles', 
					direct_phones='$fixs', 
					company_address='$establishment_address', 
					company_tel='$establishment_fixs', 
					company_fax='$establishment_faxs', 
					company_websites='$establishment_web_sites',
					last_activity='$date',
					last_update='$time'
					WHERE id_user='$id_user';");
			
			if ($sql)
			{
				$sql=mysql_query("DELETE FROM user_activity WHERE id_user='$id_user';");
				explode_em($activities, $id_user);
				echo json_encode(array($json_status => 2));
			}
			else
				echo json_encode(array($json_status => 0));
		}
		else
			echo json_encode(array($json_status=> 1));
	}
	

	function explode_em($data, $id_user)
	{
		$dd=explode("#",$data);
		$res=array();
		foreach($dd as $var => $val)
		{
			if(!empty($val))
			{
				mysql_query("INSERT INTO user_activity (id_user, activity) VALUES('$id_user','$val');");
			}
		}
		return $res;
	}

?>