<?php
	include 'dbconblood.php';
	$id = $_GET['id'];
	$deletequery = " DELETE FROM donation where id=$id";

	$quary = mysqli_query($con,$deletequery);


	header('location:donors.php');



?>