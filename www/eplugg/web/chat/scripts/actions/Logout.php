<?php

	//****************************//
	//**** LOGOUT PAGE
	//****************************//

	session_start();

	if(!empty($_SESSION['login'])){ 
		session_destroy(); 
		header('Location: '.$_SERVER['HTTP_REFERER']); 
	}
	else {
		die('Error'); 
	}

?>