<?php

    error_reporting(0);
	session_id($_POST['session']);
	session_start();

	$sex=mysql_real_escape_string(@$_POST['sex']);
	$fname=mysql_real_escape_string(@$_POST['first_name']);
	$lname=mysql_real_escape_string(@$_POST['last_name']);
	$job=mysql_real_escape_string(@$_POST['job']);
	$establishment=mysql_real_escape_string(@$_POST['establishment_name']);
	$activities=mysql_real_escape_string(@$_POST['establishment_activities']);
	$country=mysql_real_escape_string(@$_POST['country']);
	$city=mysql_real_escape_string(@$_POST['city']);
	if($sex==-1){$sex='%%';}

	if(isset($_SESSION['id']))
	{
		$id_user=$_SESSION['id'];
		include("../config_db.php");
		
		$sql=(mysql_query("SELECT 
				(SELECT count(*) 
					FROM relations R
					WHERE 
						(R.id_user1=U.id_user AND R.id_user2 IN (SELECT R2.id_user2 FROM relations R2 WHERE R2.id_user1='$id_user'))
						OR
						(R.id_user2=U.id_user AND R.id_user1 IN (SELECT R2.id_user1 FROM relations R2 WHERE R2.id_user2='$id_user'))
				) 
			AS common_friends, U.job,U.firstname,U.lastname, U.user_picture,U.id_user,U.gendre
			FROM users U,user_activity A 
			WHERE 
				U.id_user NOT IN (SELECT id_user2 FROM relations WHERE id_user1='$id_user')
			AND
				U.id_user NOT IN (SELECT id_user1 FROM relations WHERE id_user2='$id_user')
			AND A.activity LIKE '%$activities%'
			AND U.firstname LIKE '%$fname%'
			AND U.lastname LIKE '%$lname%'
			AND U.job LIKE '%$job%'
			AND U.company_name LIKE '%$establishment%'
			AND U.company_country LIKE '%$country%'
			AND U.company_city LIKE '%$city%'
			AND U.gendre LIKE '%$sex%'
			AND A.id_user=U.id_user AND U.id_user !='$id_user' GROUP BY U.id_user ORDER BY common_friends DESC LIMIT 0,20"));

			
		$arr=array();
		while($row=mysql_fetch_array($sql))
		{

			$arr[]=array($json_id=>(int)$row['id_user'], $json_sex=>(int)$row['gendre'], $json_firstname=>$row['firstname'], $json_lastname=>$row['lastname'], $json_picture=>$path_picture.$row['user_picture'], $json_job=>$row['job'], $json_common_friends=>$row['common_friends']);
		}

$sql = "SELECT 
                                (SELECT count(*) 
                                        FROM relations R
                                        WHERE 
                                                (R.id_user1=U.id_user AND R.id_user2 IN (SELECT R2.id_user2 FROM relations R2 WHERE R2.id_user1='$id_user'))
                                                OR
                                                (R.id_user2=U.id_user AND R.id_user1 IN (SELECT R2.id_user1 FROM relations R2 WHERE R2.id_user2='$id_user'))
                                ) 
                        AS common_friends, U.job,U.firstname,U.lastname, U.user_picture,U.id_user,U.gendre
                        FROM users U,user_activity A 
                        WHERE 
                                U.id_user NOT IN (SELECT id_user2 FROM relations WHERE id_user1='$id_user')
                        AND
                                U.id_user NOT IN (SELECT id_user1 FROM relations WHERE id_user2='$id_user')
                        AND A.activity LIKE '%$activities%'
                        AND U.firstname LIKE '%$fname%'
                        AND U.lastname LIKE '%$lname%'
                        AND U.job LIKE '%$job%'
                        AND U.company_name LIKE '%$establishment%'
                        AND U.company_country LIKE '%$country%'
                        AND U.company_city LIKE '%$city%'
                        AND U.gendre LIKE '%$sex%'
                        AND A.id_user=U.id_user AND U.id_user !='$id_user' GROUP BY U.id_user ORDER BY common_friends DESC LIMIT 0,20";


$fh = fopen ('d2f.log', 'a'); fputs($fh, print_r(__LINE__.$sql."\n", 1)); fclose($fh);
		echo json_encode($arr);
	}
?>
