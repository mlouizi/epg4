<?php

	//****************************//
	//**** READ MESSAGE PAGE
	//****************************//

	session_start(); 

	require("../../config/config.php"); 
	require("../../config/mysql.php");

	if(!empty($_SESSION['login'])){ 

		if(!empty($_GET['sender'])){

			$me = $_SESSION['key']; 
			$to = htmlspecialchars($_GET['sender']); 

			// Mysql request - Delete icon new message 
				$req=$bdd->prepare('DELETE FROM not_read WHERE sender=:sender AND receiver=:receiver');
				$req->execute(array('sender' => $to, 'receiver' => $me));
				$req->closeCursor();
			//----------------------------

		}	
		else {
			die('Error');
		}

	}
	else {
		die('Error'); 
	}

?>