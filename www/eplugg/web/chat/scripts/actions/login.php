<?php

	//****************************//
	//**** LOGIN ACCOUNT PAGE
	//****************************//

	session_start();

	if(!empty($_POST['password']) && !empty($_POST['login'])){

		if(empty($_SESSION['login'])){

			require("../../config/config.php"); // For login mysql
			require("../../config/mysql.php");

			if(ALLOW_LOGIN == 0){
				echo 'The administrator disable authentication';
			}
			else { 

				$login = htmlspecialchars($_POST['login']);
				$password = sha1($_POST['password']);
				

				// Mysql Request test informations login
					$req = $bdd->prepare('SELECT * FROM members WHERE username=:login AND password=:password');
					$req->execute(array('login' => $login, 'password' => $password));
					$Result = $req->rowCount();
				//-----------
				
				if($Result >= 1){ 
				
					while ($data = $req->fetch())
					{
						$_SESSION['login'] = $data['username'];
						$_SESSION['id'] = $data['id']; 
						$_SESSION['key'] = $data['key_m'];
						$_SESSION['name'] = $data['name']; 
						$_SESSION['status'] = $data['status'];
					}

					$newTimer = time() + 10;


					// Set status ONLINE - Mysql request update status
						$req2=$bdd->prepare('UPDATE members SET status=:status, timer=:timer WHERE key_m=:id');
						$req2->execute(array('status' => '1', 'id' => $_SESSION['key'], 'timer' => $newTimer));
						$req2->closeCursor();
					//---------

					$_SESSION['status'] = '1'; 

					echo '1'; 

				}
				else {
					echo 'Bad login';
				}

				$req->closeCursor(); 

			}

		}
		else {
			echo '1';
		}

	}
	else {
		echo 'Fields are missing'; 
	}

?>