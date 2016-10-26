<?php
	session_start();
	if(isset($_POST['sex']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['job']) && isset($_POST['establishment_name']) && isset($_POST['establishment_activities']) && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['login']) && isset($_POST['password']))
	{
		include("../config_db.php");
		//$regId=mysql_real_escape_string($_POST['regId']);
		
		$login=mysql_real_escape_string($_POST['login']);
		
		$sql=mysql_query("SELECT * FROM users WHERE login_email='$login' LIMIT 1");
		if(!$row=mysql_fetch_array($sql))
		{
			$firstname=mysql_real_escape_string($_POST['first_name']);
			$lastname=mysql_real_escape_string($_POST['last_name']);
			$job=mysql_real_escape_string($_POST['job']);
			$establishment=mysql_real_escape_string($_POST['establishment_name']);
			$activities=mysql_real_escape_string($_POST['establishment_activities']);
			$country=mysql_real_escape_string($_POST['country']);
			$city=mysql_real_escape_string($_POST['city']);
			$password=md5(mysql_real_escape_string($_POST['password']));
			$sex=mysql_real_escape_string($_POST['sex']);

			$date=date("Y-m-d H:i:s"); 
			$time=time();
			
			$sql=mysql_query("INSERT INTO  users (firstname,lastname,gendre,job,login_email,login_password,user_picture,company_name,company_activity,company_country,company_city, user_type,registration_date,last_login,last_activity,last_update)  
				VALUES('$firstname', '$lastname','$sex', '$job', '$login', '$password','avatar.png','$establishment','$activities','$country','$city', '$user_type_without_mail_confirmation', '$date','$date','$date','$time');");
			if ($sql)
			{
				$sql=mysql_query("SELECT id_user FROM users WHERE login_email='$login';");
				if($row=mysql_fetch_array($sql))
				{
					$id_user=$row['id_user'];
					$_SESSION['id']=$id_user;
					explode_em($activities, $id_user);
					//mysql_query("INSERT INTO users_devices (reg_id, user_id) VALUES('$regId','$id_user');");
					mysql_query("INSERT INTO activity (id_user, activity, activity_time) VALUES('$id_user',0, '$time');");
				   	echo json_encode(array($json_session => session_id(), $json_status => intval($row['id_user'])));
				}
				else
					echo json_encode(array($json_status => -1));
			}
			else
				echo json_encode(array($json_status => -1));
		}
		else
			echo json_encode(array($json_status=> 0));
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