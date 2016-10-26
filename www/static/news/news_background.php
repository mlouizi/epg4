<?php
	session_id($_POST['session']);
	session_start();
	if(isset($_SESSION['id']) && isset($_POST['timestamp']))
	{
		include("../config_db.php");
		$id_user=$_SESSION['id'];
		$time=intval(mysql_real_escape_string($_POST['timestamp']));
		$sql=mysql_query("SELECT A.activity, A.id_user, A.id_user2, A.activity_time, U.firstname, U.lastname, U.job, U.user_picture, U.gendre FROM activity A, users U
			WHERE
			A.id_user!='$id_user'
			AND
			(
				(A.id_user IN (SELECT R.id_user1 FROM relations R WHERE R.id_user2='$id_user')) 
				OR
				(A.id_user IN (SELECT R.id_user2 FROM relations R WHERE R.id_user1='$id_user'))
			)
			AND
			U.id_user=A.id_user
			AND
			('$time'<A.activity_time)
			ORDER BY A.activity_time DESC");
		$arr=array();
		while($row=mysql_fetch_array($sql))
		{
			$first_name="";
			$last_name="";
			$job="";
			$picture="";
			$gendre="";
			$id_user2=$row['id_user2'];
			if (($row['activity']=='1') && ($id_user2!=$id_user))
			{
				$sql2=mysql_query("SELECT firstname, lastname, job, user_picture, gendre FROM users WHERE id_user='$id_user2' LIMIT 1;");
				if ($row2=mysql_fetch_array($sql2))
				{
					$first_name=$row2['firstname'];
					$last_name=$row2['lastname'];
					$job=$row2['job'];
					$picture=$row2['user_picture'];
					$gendre=$row2['gendre'];
				}
			}
			else if ($id_user2!=$id_user)
				$id_user2=-1;
			
			$arr[]=array('type'=>(int)$row['activity'], $json_id=>(int)$row['id_user'], 'firstname'=>$row['firstname'], 'lastname'=>$row['lastname'], 'job'=>$row['job'], 'picture'=>$path_picture.$row['user_picture'],'sex'=>(int)$row['gendre'],'date'=>$row['activity_time'] , 'other_user_id'=>$id_user2, 'other_user_firstname'=>$first_name, 'other_user_lastname'=>$last_name, 'other_user_job'=>$job, 'other_user_picture'=>$path_picture.$picture, 'other_user_sex'=>(int)$gendre, 'activity_time'=>$row['activity_time']);
		}
		echo json_encode(array($json_timestamp=>"".time(), "users"=>$arr));
	}
?>