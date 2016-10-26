<?php

	//****************************//
	//**** CHANGE STATUS PAGE
	//****************************//

	session_start(); // Session on
	if(!empty($_SESSION['login'])){

		require("../../config/config.php"); 
		require("../../config/mysql.php");

		$timer = time() + 10;

		if(!empty($_GET['nb'])){

			$nb_get = $_GET['nb'];

			if($nb_get == '5'){

				$timer_actu = time();

				$req=$bdd->prepare('UPDATE members SET timer=:status, timer=:timer WHERE key_m = :key');
				$req->execute(array('status' => $timer_actu, 'key' => $_SESSION['key'], 'timer' => $timer));
				$req->closeCursor();

				echo '1';

			}
			else {

				$array_valid = array('1', '2', '3', '4');


				if(!in_array($nb_get, $array_valid)) $nb_get = "1";

				// Mysql request - Change status
					$req=$bdd->prepare('UPDATE members SET status=:status, timer=:timer WHERE key_m = :key');
					$req->execute(array('status' => $nb_get, 'key' => $_SESSION['key'], 'timer' => $timer));
					$req->closeCursor();
				//----------------------------

				$_SESSION['status'] = $nb_get; 

				echo '1';
			}

		}else {
			die('Error'); 
		}

	}
	else {
		die('Error'); 
	}

?>