<?php

	//****************************//
	//**** RELOAD MESSAGE
	//****************************//

	session_start();

	// MYSQL
	require("../../config/config.php"); 
	require("../../config/mysql.php");
	require("../../config/smiley.php");

	// DEFINITION VAR
	$me = $_SESSION['key'];
	$to = $_GET['to'];
	$last = '';
	$nb_msg = 0;
	$date_last = '';


	// SHOW DIV

	if($to == $me){
		echo '<br/><center><font class="noNewMessages">You can not send messages to you even</font></center>';
	}
	else {

		// MAKE REQUEST - Select message
		$req = $bdd->prepare('SELECT * FROM messages WHERE members LIKE :key OR members LIKE :keyto ORDER BY date');
		$req->execute(array('key' => $me.'#'.$to, 'keyto' => $to.'#'.$me));
		while ($data = $req->fetch()) 
		{

			$img = $data['id'].'_34x36.jpg';
			if(!file_exists('../../img/members/upload/'.$img)) $img = 'none.jpg';

			// Mysql Request - Show informations
			$req2 = $bdd->prepare('SELECT name FROM members WHERE key_m=:key');
			$req2->execute(array('key' => $to));
			while ($data2 = $req2->fetch()) 
			{
				$name_to = $data2['name']; 
			}


			$message_brut = $data['message']; 

			$message_modify = strtr($message_brut, $emoticone_array);

			$members = explode('#', $data['members']); 
			$sender = $members[0]; 

			// if it's me
			if($sender == $me){
				if($last == $me){ 
					echo '<div class="another_msg to_another">'.$message_modify.'</div>';
				} 
				else { // Sinon

					$img = $me.'_34x36.jpg';
					if(!file_exists('../../img/members/upload/'.$me.'_34x36.jpg')) $img = 'none.jpg';

					echo '<div class="msg_text_2"><a class="tooltip tooltip-left-message" data-tooltip="Me"><img class="profil_photo" src="img/members/upload/'.$img.'"/></a><div class="content_msg"><div class="first_msg">'.$message_modify.'</div></div></div>';
				}
				$last = $me; 
			}
			else { 

				if($last == $to){ 
					echo '<div class="another_msg from_another">'.$message_modify.'</div>';
				}
				else { 

					$img = $to.'_34x36.jpg';
					if(!file_exists('../../img/members/upload/'.$to.'_34x36.jpg')) $img = 'none.jpg';				

					echo '<div class="msg_text_1"><a class="tooltip tooltip-right-message" data-tooltip="'.$name_to.'"><img class="profil_photo" src="img/members/upload/'.$img.'"/></a><div class="content_msg"><div class="first_msg">'.$message_modify.'</div></div></div>';
				}
				$last = $to;
			}
			$nb_msg++;

			$date_last = $data['date'];

		}

		if(!empty($date_last)) echo '<font class="last_msgbox">Last message '.$date_last.'</font>';

		if($nb_msg <= 0){
			echo '<br/><center><font class="noNewMessages">No new messages</font></center>';
		}

	}


?>