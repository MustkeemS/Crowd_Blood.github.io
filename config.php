<?php 
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'SIGNUP');


	/*LINK TO DATABASE*/
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	/*CHECK CONNECTION*/
	if ($link === false) {
		die("ERROR: Could not connect. " . mysql_connect_error());
	}


 ?>