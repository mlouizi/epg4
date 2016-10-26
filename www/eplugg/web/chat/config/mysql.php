<?php

	//****************************//
	//**** MYSQL CONNEXION
	//****************************//

		try {
			$bdd = new PDO('mysql:host='.BDD_HOST.';dbname='.BDD_TABLE, BDD_USER, BDD_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}
		catch (PDOException $e){
		   	die('<br/><center><font size="15">Could not connect with database</font></center>'); // Connexion database is not valid
		}



?>