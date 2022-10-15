



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>

	<!-- CSS -->

	<style>
		
		@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

		*{
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
			box-sizing: border-box;
		}
		body{
			overflow: hidden;
		}
		section{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: linear-gradient(to bottom, #f1f4f9, #dff1ff);
		}
		section .color{
			position: absolute;
			filter: blur(150px);
		}
		section .color:nth-child(1)
		{
			top: -350px;
			width: 600px;
			height: 600px;
			background: #ff359b;
		}
		section .color:nth-child(2)
		{
			bottom: -150px;
			left: 100px;
			width: 500px;
			height: 500px;
			background: #fffd87;
		}
		section .color:nth-child(3)
		{
			bottom: 50px
			right: 100px;
			width: 300px;
			height: 300px;
			background: #00d2ff;
		}
		.box{
			position: relative;
		}
		.box .square{
			position: absolute;
			box-shadow: 0 25px 45px rgba(0,0,0,.1);
			border: 1px solid rgba(255,255,255,.5);
			border-right: 1px solid rgba(255,255,255,.2);
			border-bottom: 1px solid rgba(255,255,255,.2);
			background: rgba(255,255,255,.1);
			border-radius: 10px;
			backdrop-filter: blur(5px);
			animation: animate 10s linear infinite;
			animation-delay: calc(-1s * var(--i));
		}
		@keyframes animate
		{
			0%,100%{
				transform: translateY(-40px);
			}
			50%{
				transform: translateY(40px);
			}
		}
		.box .square:nth-child(1)
		{
			top: -50px;
			right: -60px;
			width: 100px;
			height: 100px;
		}
		.box .square:nth-child(2)
		{
			top: 150px;
			left: -100px;
			width: 120px;
			height: 120px;
			z-index: 2;
		}
		.box .square:nth-child(3)
		{
			bottom: 50px;
			right: -60px;
			width: 80px;
			height: 80px;
			z-index: 2;
		}
		.box .square:nth-child(4)
		{
			bottom: -80px;
			left: 100px;
			width: 50px;
			height: 50px;
			
		}
		.box .square:nth-child(5)
		{
			top: -80px;
			left: 140px;
			width: 60px;
			height: 60px;
		}
		.container{
			position: relative;
			width: 400px;
			min-height: 400px;
			background: rgba(255,255,255,.1);
			border-radius: 10px;
			display: flex;
			align-items: center;
			justify-content: center;
			backdrop-filter: blur(5px);
			box-shadow: 0 25px 45px rgba(0,0,0,.1);
			border: 1px solid rgba(255,255,255,.5);
			border-right: 1px solid rgba(255,255,255,.2);
			border-bottom: 1px solid rgba(255,255,255,.2);
		}
		.form{
			position: relative;
			width: 100%;
			height: 100%;
			padding: 40px;
		}
		.form h2{
			position: relative;
			color: white;
			font-size: 24px;
			font-weight: 600;
			letter-spacing: 1px;
			margin-bottom: 40px;
		}
		.form h2::before
		{
			content: '';
			position: absolute;
			left: 0;
			bottom: -10px;
			width: 80px;
			height: 3px;
			background: #fff;
		}
		.form .inputbox{
			width: 100%;
			margin-top: 20px;

		}
		.form .inputbox input{
			width: 100%;
			background: rgba(255,255,255,.2);
			border: none;
			outline: none;
			padding: 10px 20px;
			border-radius: 35px;
			border: 1px solid rgba(255,255,255,.5);
			border-right: 1px solid rgba(255,255,255,.2);
			border-bottom: 1px solid rgba(255,255,255,.2);
			font-size: 16px;
			letter-spacing: 1px;
			color: #fff;
			box-shadow: 0 5px 15px rgba(0,0,0,0.05);
		}
		.form .inputbox input::placeholder
		{
			color: #fff;
		}
		.form .inputbox input[type="submit"]
		{
			background-color: white;
			color: #666;
			cursor: pointer;
			max-width: 100px;
			font-weight: 600;
			margin-bottom: 20px;
		}
		.Forget{
			margin-top: 5px;
			color: white;
		}
		.Forget a{
			color: white;
			font-weight: 600;
		}

	</style>

</head>
<body>

	<?php
session_start();

$con = mysqli_connect('localhost', 'root');
// if($con){
// 	echo "connection successful";
// }else{
// 	echo "no coonection";
// }

$db = mysqli_select_db($con, 'crowddb');

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from admintable where user = '$username' and pass = '$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if ($row == 1) {
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:homeadmin.php');
		}else{
			echo "login failed";
			header('location:adminloginBD.php');
		}
	
}


?>



	<section>
		<div class="color"> </div>
		<div class="color"> </div>
		<div class="color"> </div>
		<div class="box">
			<div class="square" style="--i:0;"></div>
			<div class="square" style="--i:1;"></div>
			<div class="square" style="--i:2;"></div>
			<div class="square" style="--i:3;"></div>
			<div class="square" style="--i:4;"></div>
			<div class="container">
				<div class="form">
					<h2 style="color: black;">Admin Login</h2>
					<form method="POST" action="" >
						<div class="inputbox">
							<input name="user" type="text" placeholder="Admin Name">
						</div>
						
						<div class="inputbox">
							<input name="pass" type="password" placeholder="PassWord">
						</div>
						
						<div class="inputbox">
							<input name="submit" type="submit" value="Login">
						</div>
						
						
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>