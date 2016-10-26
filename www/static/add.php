<?php
	include_once './GCM.php';
	$gcm = new GCM();
	$regId="APA91bG9v2zEVeAjYN_XT_OEZIK1iRrUdcyL-uBjs8AxzOta7FiFd4nbkX7GyG3KMmTF2EXdPOosPax8q_HSGJ0jsMLMa6Lus8nllr6F1Kwx0a-eQec2slHxKADQxo0wIdkBBBr-oV8r47Lxk1AqUAwcjzysP1fXTg";
	$registatoin_ids = array($regId);
	$message = array( $json_id => "2", $json_from_user_id => 32, $json_name => "moii", $json_to_user_id=>2);
				$result = $gcm->send_notification($registatoin_ids, $message);
?>