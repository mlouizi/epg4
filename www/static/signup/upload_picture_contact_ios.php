<?php
	session_id(@$_POST['session']);
	session_start();

	if(isset($_SESSION['id']) && isset($_FILES['image'])) 
	{
		include("../config_db.php");
		$file=$_FILES['image'];
		$file_name=$_POST['session'].'.jpg';
		$file_path="../../user_up/".$file_name;
		move_uploaded_file($file['tmp_name'], $file_path);
		
		if ($sql=mysql_query("UPDATE users SET user_picture='$file_name' WHERE id_user='".$_SESSION['id']."';"))
		{

			echo json_encode(array( $json_picture => $path_picture.$file_name));
		}
	}
?>