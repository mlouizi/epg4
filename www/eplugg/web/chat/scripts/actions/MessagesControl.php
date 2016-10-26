<?php

	//****************************//
	//**** SEND MESSAGE PAGE
	//****************************//

	session_start(); 

	if(empty($_SESSION['login'])){
		die('Error');
	}
	else {

		require("../../config/config.php"); 
		require("../../config/mysql.php");

		if(!empty($_POST['message'])){

		$me = $_SESSION['key'];
		$to = $_POST['key_to']; 

			$message = htmlspecialchars($_POST['message']); 

			if($to != $_SESSION['key']){

				// Mysql request insert message
					$req=$bdd->prepare('INSERT INTO messages(members, message, sender) VALUES (:members, :message, :sender)');
					$req->execute(array('members' => $me.'#'.$to, 'message' => $message, 'sender' => $me));
					$req->closeCursor();
				//-----------------------------

				// Mysql request for message not read (message icon)
					$req=$bdd->prepare('INSERT INTO not_read(sender, receiver) VALUES (:sender, :receiver)');
					$req->execute(array('sender' => $me, 'receiver' => $to));
					$req->closeCursor();
				//-----------------------------
			}
		}

	}

?>