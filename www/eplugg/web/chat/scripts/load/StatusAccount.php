<?php

	//****************************//
	//**** RELOAD STATUS PAGE
	//****************************//

	session_start();

	if(!empty($_SESSION['login'])){ 

		require("../../config/config.php");
		require("../../config/mysql.php");

		if(!empty($_GET['key'])) $account = $_GET['key'];
			else $account = $_SESSION['key'];

		if(!empty($account)){

			// Request Mysql - View informations
				$req = $bdd->prepare('SELECT status, name FROM members WHERE key_m=:key');
				$req->execute(array('key' => htmlspecialchars($account)));
				while ($data = $req->fetch()) 
				{
					$status = $data['status'];
					$name = $data['name'];
				}
				$req->closeCursor();


			if($_GET['format'] == '1'){ 

				if($status == '1') $status = 'label-online';
				if($status == '3') $status = 'label-occuped';
				if($status == '2') $status = 'label-abs'; 
				if($status == '4') $status = 'label-offline'; 

				echo '
					<div id="infos_account" class="label friend-num-connected '.$status.'">Welcome, '.$name.'</div>
				';
			}
			elseif($_GET['format'] == '2'){ 

				if($status == '1') $status = 'online-small-status'; 
				if($status == '3') $status = 'occuped-status'; 
				if($status == '2') $status = 'abs-status';
				if($status == '4') $status = 'offline-status'; 

				echo 
				'
				<div class="status_message_box '.$status.'"></div>
				<span>'.$name.'</span>
				';

			}

		}
		else {
			die('Error: key lost');
		}

	}
	else {
		die('Error');
	}

?>