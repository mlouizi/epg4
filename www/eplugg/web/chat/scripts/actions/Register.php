<?php

	//****************************//
	//**** REGISTATION PAGE
	//****************************//

	session_start();

	if(!empty($_POST['login_register']) && !empty($_POST['fullname']) && !empty($_POST['password_register']) && !empty($_POST['rstCapcha']) && !empty($_POST['capcha'])){ 

		require("../../config/config.php"); // For login mysql
		require("../../config/mysql.php");

		if(ALLOW_REGISTER == '1'){

			if($_POST['rstCapcha'] == $_POST['capcha']){ 

				function generateKey() { // Function générate key
					$nbChar = '8'; 
					$string = "";
					$chaine = "1234567890"; 
					srand((double)microtime()*1000000);
					for($i=0; $i<$nbChar; $i++) {
						$string .= $chaine[rand()%strlen($chaine)];
					}
					return $string;
				}

				// Var
				$key = generateKey();
				$user = utf8_encode($_POST['login_register']);
				$password = sha1($_POST['password_register']);
				$name = htmlspecialchars($_POST['fullname']);

				// Mysql request - test if user has the same key or username
				$req = $bdd->prepare('SELECT * FROM members WHERE key_m=:key OR username=:user');
				$req->execute(array('key' => $key, 'user' => $user));
				$find = $req->rowCount();
				$req->closeCursor();

				if($find <= 0){

				print_r($key);die;
						// Mysql request - Add user
						$req=$bdd->prepare('INSERT INTO members(username, password, name, key_m, status, timer) VALUES (:username, :password, :name, :key, :status, :timer)');
						$req->execute(array('username' => $user, 'password' => $password, 'name' => $name, 'key' => $key, 'status' => '4', 'timer' => time()));
						$req->closeCursor();

						echo '1';

				}
				else {
					echo 'Username already taken';
				}

			}
			else {
				echo 'Invalid capcha';
			}

		}
		else {
			echo 'You are not allowed to register'; 
		}

	}	
	else {	
		echo 'Fileds are missing';
	}

?>