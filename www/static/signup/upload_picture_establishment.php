<?php
	session_id(@$_POST['session']);
	session_start();

	if(isset($_SESSION['id']) && isset($_REQUEST['image'])) 
	{
		include("../config_db.php");
		$base=$_REQUEST['image'];
	 	$binary=base64_decode($base);
		header('Content-Type: bitmap; charset=utf-8');
		$file_name="sssdsd1.jpg";
		$file_path="../../user_up/".$file_name;
		$file = fopen($file_path, 'wb');
		fwrite($file, $binary);
		
		if ($sql=mysql_query("UPDATE users SET company_logo='$file_name' WHERE id_user='".$_SESSION['id']."';"))
		{

			echo json_encode(array( $json_picture => $path_picture.$file_name));
		}
		close($file);
	}
?>