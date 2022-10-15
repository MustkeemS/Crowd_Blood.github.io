<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;700&display=swap');
		*{

			font-family: 'Nunito', sans-serif;
			margin: 0px;
			padding: 0px;
		}
		body{
			background-color: 
		}
		.nav{
			margin-top: 
			border-radius: 5px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			width: 100%;
			height: 65px;
			display: flex;
			justify-content: space-between;
			background-color: white;
			display: flex;
			
		}
		p{
			font-size: 24px;
			color: #800080;
			font-weight: 200;
			text-transform: uppercase;
			padding-top: 17px; 
			 font-weight: 550;
		}
		a{
			margin-right: 15px;
			margin-top: 17px;
			text-decoration: none;
			font-size: 1.2rem;

			color: #0169b2;
		}
		.leftview{
			position: absolute;
			height: 88vh;
			margin-top: 5px;
			margin-left: 7px;
			width: 250px;
			background-color: white;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}
		img{
			height: 40px;
			width: 40px;
			border-radius: 50%;
			margin-left: 20px;
			margin-top: 10px;
		}
		.butns{
			padding-top: 49px;
			padding-left: 25px;
		}
		.bbl1{
			height: 250px;
			width: 250px;
			border-radius: 25px;
			background-color: white;
		}
		.bbl2{
			padding-top: 20px;
			padding-left: 10px; 
			color: white;
			font-weight: 550;
			height: 150px;
			font-size: 24px;
			width: 200px;
			border-radius: 25px;
			background-color: #ff5e8e;
		}
		.bbl3{
			height: 150px;
			padding-top: 20px;
			padding-left: 10px;
			font-weight: 550;
			color: white;
			width: 200px;
			font-size: 24px;
			border-radius: 25px;
			background-color: #ff5e8e;
		}
		.bbl4{
			height: 150px;
			padding-top: 20px;
			padding-left: 10px;
			color: white;
			font-weight: 550;
			width: 200px;
			font-size: 24px;
			border-radius: 25px;
			background-color: #ff5e8e;
		}
		header{
			margin-top: 125px;
			margin-right: 34px;
			display: flex;
			justify-content: space-around;
		}
		.nm{
			font-size: 50px;
		}
		h3{
			font-size: 2.3rem;
			
		}
	</style>
</head>
<body>
	<div class="nav">
		<img src="image/admnlogo.png">
		<p>
		
		Welcome <?php echo $_SESSION['user']; ?>
		</p>
		<a href="logoutbd.php">Logout</a>
	</div>
	<div class="leftview">
		<div class="butns">
			<a href="donors.php" target="_blank">Donors List</a>     <i class="fa fa-list" >     </i><br><br><br>
			<a href="Requests.php" target="_blank">Requests List</a>     <i class="fa fa-list"></i>    <br><br><br>
			<a href="Searchrequest.php" target="_blank">Search in Requests</a>  <i class="fa fa-search"></i>    <br><br><br>
			<a href="Searchdonor.php" target="_blank">Search in Donors</a><i class="fa fa-search"></i><br><br><br>

			<a href="usersdisplay.php" target="_blank">All Users's Info</a><i class="fa fa-users"></i><br><br><br>

			<a href="sendmails.php" target="_blank">Contact to Agents</a><i class="fa fa-user"></i>
		</div>
	</div>
	<header>
			<div class="bbl1"></div>
			<div class="bbl2">More Than <br> <h3> 100 </h3>  User Registared</div>
			<div class="bbl3">Today's Requests <br> <p class="nm">24</p> </div>
			<div class="bbl4">Today's Donors <br> <p class="nm">30</p> </div>
	</header>
</div>

</body>
</html>