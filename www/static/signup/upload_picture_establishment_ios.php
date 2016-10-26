<?php
include("../config_db.php");
	session_id(@$_POST['session']);
	session_start();

	if(isset($_SESSION['id']) && isset($_FILES['image'])) 
	{
		
		$file=$_FILES['image'];
		$file_name="sssdsd1.jpg";
		$file_path="../../user_up/".$file_name;
		move_uploaded_file($file['tmp_name'], $file_path);
		
		if ($sql=mysql_query("UPDATE users SET company_logo='$file_name' WHERE id_user='".$_SESSION['id']."';"))
		{
			echo json_encode(array( $json_picture => $path_picture.$file_name));
		}
	}
?>