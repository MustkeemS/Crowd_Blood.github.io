<?php
	include 'dbconblood.php';
	$id = $_GET['id'];
	$deletequery = " DELETE FROM request where id=$id";

	$quary = mysqli_query($con,$deletequery);


	header('location:bloodrequests.php');



?>