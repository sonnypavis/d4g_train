<?php

function fetchDB() {
  
	$servername = 'mysql-designedforgreen.alwaysdata.net';
	$db_name = 'designedforgreen_db'; 
	$username = '289006';
	$password = 'D4G_dtgh';
  
	try {
		$database = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
	} catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
		
	return $database->query("SELECT * FROM `mytable`") ;
}

?>