<?php

	//****************************//
	//**** CREATE BOX CHAT PAGE
	//****************************//

	session_start();

	if(!empty($_GET['id'])):

		$me = $_SESSION['key'];
		$to = $_GET['id']; 

		require("../../config/config.php"); 
		require("../../config/mysql.php");
		require("../../config/smiley.php"); 

		// Mysql request for search informations profil recipient
			$req = $bdd->prepare('SELECT * FROM members WHERE key_m = :key');
			$req->execute(array('key' => $to));
			while ($data = $req->fetch()) 
			{
				$name_profil = $data['name']; 
				$status_profil = $data['status']; 
			}
			$req->closeCursor();
		// ------




?>

<div class="message_box" id="<?php echo $_GET['id']; ?>">
	<script type="text/javascript">

		$(document).ready(function() {
			$('#<?php echo $to; ?><?php echo $me; ?>').scrollTop($('#<?php echo $to; ?><?php echo $me; ?>').height()); // Scrolltop Message box
			reloadMembers<?php echo $to; ?><?php echo $me; ?>(); 
			reloadStatusPl<?php echo $to; ?><?php echo $me; ?>(<?php echo $to; ?>);
		});

		function reloadMembers<?php echo $to; ?><?php echo $me; ?>(){ 

			var id_box = <?php echo $_GET['id']; ?>;
			if($('#' + id_box).height() != 23){ 
				reloadmsg("<?php echo $me; ?>", '<?php echo $to; ?>', '<?php echo $to; ?>#<?php echo $me; ?>');
			}
			var name = <?php echo $to; ?><?php echo $me; ?>; 
			setTimeout('reloadMembers' + name + '()',2000); // Set every '2' secondes - Reload message

		}
		function reloadStatusPl<?php echo $to; ?><?php echo $me; ?>(key){
			$.get('scripts/load/StatusAccount.php?format=2&key=' + key, function(data) { 
				$('#reloadReceiver_' + <?php echo $_GET['id']; ?>).html(data); 

			});
			setTimeout('reloadStatusPl' + <?php echo $to; ?><?php echo $me; ?> + '(' + key + ')', 2000); // Reload data every 2 sec
		}
	</script>
	<div class="top_message_box" data-box="<?php echo $_GET['id']; ?>"> <!-- Message box -->
		<div class="reloadReceiverStatus" id="reloadReceiver_<?php echo $_GET['id']; ?>">
			<?php
				$status = 'offline-status';

				if($status_profil == "1") $status = 'online-small-status'; 
				elseif($status_profil == "2") $status = 'abs-status'; 
				elseif($status_profil == "3") $status = 'occuped-status'; 
			?>
			<div class="status_message_box <?php echo $status; ?>"></div> 
			<span><?php echo $name_profil; ?></span>
		</div>
		<div class="icon_message_box"> <!-- Icon box -->
			<div data="<?php echo $_GET['id']; ?>" class="icon_message_box_modal resize_box icon_risize"></div>
			<div data="<?php echo $_GET['id']; ?>" class="icon_message_box_modal icon_close"></div>
		</div>
	</div>
	<div class="reload_box" id="box_msg_<?php echo $_GET['id']; ?>"> 
		<div class="msg_content_all" id="<?php echo $to; ?><?php echo $me; ?>"> <!-- Reception messages here -->

		</div>
		<div id="write_msg_<?php echo $_GET['id']; ?>" class="write_msg"> <!-- Written box -->
			<form class="form_add_msg" data="<?php echo $_GET['id']; ?>" dataTo="<?php echo $to; ?><?php echo $me; ?>" action="scripts/actions/MessagesControl.php" method="post">
				<input tpye="hidden" style="display:none;" value="<?php echo $to; ?>" name="key_to"/> 
				<input id="text_<?php echo $_GET['id']; ?>" name="message" placeholder="Your message ..." type="text"/> 
				<input style="left:-999em; position:absolute; top:-999em;" type="submit"/>
			</form>
			<div class="smiley_bottom_box" data="<?php echo $_GET['id']; ?>">

				<div class="box_list_smiley" data-box="<?php echo $_GET['id']; ?>" id="smileybox<?php echo $_GET['id']; ?>" style="display:none"> <!-- Box emoticone -->
					<?php

						foreach ($emoticone_array as $key => $value) {
							echo $value;
						}

					?>
				</div>

				<div class="btn_open_box_smiley">

				</div>

			</div>
		</div>
	</div>
</div>

<?php endif; ?>