<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crowddb";

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
	echo "Uploads";
}else{
	echo "no connection";
}



?>