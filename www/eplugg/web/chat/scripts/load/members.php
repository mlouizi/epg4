<?php

	//****************************//
	//**** MEMBER PAGE
	//****************************//

	session_start(); // Session on

	if(empty($_SESSION['login'])){ // CHECK LOGIN EXIST

		echo '
			<div class="login_or_register"></div>

			<div class="btn_registerorlogin">
				<center><input type="button" class="btn btn-big" value="Login or register"/></center>
			</div>
		';

	}
	else {
		// MYSQL
		require("../../config/config.php"); // For login mysql
		require("../../config/mysql.php");

		// Mysql request Member
		$req = $bdd->prepare('SELECT * FROM members ORDER BY status, name');
		$req->execute();
		while ($data = $req->fetch()) 
		{

			// VALUES
			$img = $data['key_m'].'_34x36.jpg';
			$status = 'offline-status-friend';

			// CHECK IMG
			if(!file_exists('../../img/members/upload/'.$img)) $img = 'none.jpg';
			
			// STATUS
			if($data['status'] == '1') $status = 'online-status-friend';
			if($data['status'] == '2') $status = 'abs-status-friend';
			if($data['status'] == '3') $status = 'occuped-status-friend';

			$timer_b = time() - $data['timer'];

			if($timer_b >= 8){ // If 8 sec no reponse = offline
				$status = 'offline-status-friend';

				if($data['status'] != '4'){ // If is not already offline
					// MySQL request - Offline this account
					$req2=$bdd->prepare('UPDATE members SET status=:status WHERE key_m = :key');
					$req2->execute(array('status' => '4', 'key' => $data['key_m']));
					$req2->closeCursor();
				}

			}

			// Mysql request - Change timer last profil account
			$req2=$bdd->prepare('UPDATE members SET timer=:timer WHERE key_m=:key');
			$req2->execute(array('timer' => time(), 'key' => $_SESSION['key']));
			$req2->closeCursor();
			//-------------

			$me = '';
			if($data['key_m'] == $_SESSION['key']) $me = '1';

			$name = $data['name'];
			if($me == 1) $name = '<b>'.$name.'</b>';

			// Script date since is offline
				$act_date = date('Y-m-d H:m:i');
				$act_date = new DateTime($act_date);

				$offline_since = date('Y-m-d H:m:i', $data['timer']);
				$offline_since = new DateTime($offline_since);
				$interval = $offline_since->diff($act_date);
			
				$date = $interval->format('%s seconds');
				if($interval->format('%i') != 0) $date = $interval->format('%i minutes');
				if($interval->format('%h') != 0) $date = $interval->format('%h hours');
				if($interval->format('%d') != 0) $date = $interval->format('%d days');
				if($interval->format('%m') != 0) $date = $interval->format('%m mounths');
				if($interval->format('%y') != 0) $date = $interval->format('%y years');
			//--------

			$req2 = $bdd->prepare('SELECT * FROM not_read WHERE receiver=:for AND sender=:of');
			$req2->execute(array('for' => $_SESSION['key'], 'of' => $data['key_m']));
			$MsgL = $req2->rowCount();
			$req2->closeCursor();

			$change_color_box = '';
			if($MsgL >= 1) $change_color_box = 'style="background:#f6f6f6;"';

			if($data['key_m'] != $_SESSION['key']){ // If my account
					echo 
					'
						<div class="line_friend" '.$change_color_box.' data-box="'.$data['key_m'].'">
							<div class="img_friend">
								<img src="img/members/upload/'.$img.'"/>
							</div>
							<span>'.$name.'</span>
							';
							if($data['status'] == '4') echo '<a class="tooltip tooltip-left-message left-icon-tooltip" data-tooltip="Offline since '.$date.'">';
							echo '
							<div class="icon_status_friend status-friend '.$status.'"></div>
							';
							if($data['status'] == '4') echo '</a>';

							if($MsgL >= 1) echo '<div class="icon_status_friend status-friend new-message" data-contact="'.$data['key_m'].'" data="on"></div>';

							echo '
						</div>
					'; // Show line member 
			}

		}
		$req->closecursor();
	}



?>
