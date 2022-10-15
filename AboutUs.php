<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>About Us</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/about.css">
 -->	<style >

	@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*{
	margin: 0;
	padding: 0;
	font-family:  'Poppins', sans-serif;
}
	body{
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #16384c;
	}

	.container{
		position: relative;
		width: 1100px;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 100px;
		flex-wrap: flex;
		padding: 30px; 
	}
	.container .card{
	position: relative;
	max-width: 300px;
	height: 215px;
	border-radius: 7px;
	background: white;
	margin: 30px 10px;
	padding: 20px 15px;
	display: flex;
	flex-direction: column;
	box-shadow: 0 5px 20px rgba(0,0,0,0.5);
	transition: 0.3s ease-in-out;
	}
	.container .card:hover{
		height: 380px;
	}
	.container .card .imgBx{
		position: relative;
		width: 260px;
		height: 260px;
		top: -60px;
		left: 20px;
		z-index: 1;
		box-shadow: 0 5px 20px rgba(0,0,0,0.2);

	}
	.container .card .imgBx img{
		max-width: 100%;
		border-radius: 4px;
		
	}
	.container .card .content{
		position: relative;
		margin-top: -140px;
		padding: 10px 15px;
		text-align: center;
		color: #111;
		visibility: hidden;
		opacity: 0;
		transition: 0.3s ease-in-out;
	}
	.container .card:hover .content
	{
		visibility: visible;
		opacity: 1;
		margin-top: -60px;
		transition-delay: 0.3s;
	}


	</style>

</head>
<body>
	<div class="container">
		<div class="card">
			<div class="imgBx">
				<img src="image/me2.jpg">
			</div>
			<div class="content">
				<h2>Admin #1</h2><br>
				<p>Back-End Designer (Mysql) / Xampp Server<br>
					PHP Connectivity<br>
					Home Pages.
				</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="image/f3.jpg">
			</div>
			<div class="content">
				<h2>Admin #2</h2><br>
				<p>Blood Info, Contact Us, Admin Login & Crowdfunding donation page.
			</p>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="image/chhaya1.jpg">
			</div>
			<div class="content">
				<h2>Admin #3</h2><br>
				<p>Donation Page, Request Page, User_Main page & Admin Page.
			</p>
			</div>
		</div>
	</div>
</body>
</html>