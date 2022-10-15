<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Website</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/x-icon" href="image/b1.jpg">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
		*{
			margin: 0;
			font-family: 'Nunito', sans-serif;
			padding: 0;
			box-sizing: border-box;
		}
		section{
			position: relative;
			width: 100%;
			min-height: 100vh;
			padding: 55px;
			display: flex;
			justify-content: flex-start;
			align-items: center;
		}
		header{
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			padding: 20px 55px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			z-index: 1000;
		}
		header .logo{
			position: relative;
			color: #ff5e8e;
			display: inline-block;
			font-size: 2.5em;
			text-decoration:none;
			font-weight: 800;
			opacity: 0;
			animation: slide_left 0.2s linear forwards;
			animation-delay: 0.1s;
		}
		@keyframes slide_left
		{
			0%{
				transform: translateX(-100px);
				opacity: 0;
			}
			100%{
				transform: translateX(0px);
				opacity: 1;
			}
		}

		header ul{
			position: relative;
			display: flex;

		}
		header ul li{
			list-style: none;
		}
		header ul li a{
			display: inline-block;
			color: #0169b2;
			font-weight: 600;
			font-size: 1.1em;
			margin-left: 10px;
			display: inline-block;
			padding: 8px 18px;
			text-decoration: none;
			user-select: none;

			opacity: 0;
			animation: slide_top 0.3s linear forwards;
			animation-delay: calc(0.1s * var(--i));

		}
		@keyframes slide_top
		{
			0%{
				transform: translateY(100px);
				opacity: 0;
			}

			100%{
				transform: translateY(0px);
				opacity: 1;
			}
		}

		header ul li a.active,
		header ul li a:hover
		{
			background: #0169b2;
			color: white;
			border-radius: 30px;
		}
		.content{
			position: relative;
			
		}
		.content .textbox{
			position: relative;
			max-width: 550px;

		}
		.content .textbox h2{
			color: #0169b2;
			font-size: 2.8em;
			margin-bottom: 30px;
			line-height: 1.2em;
			font-weight: 700;
			opacity: 0;
			animation: slide_right 0.4s linear forwards;
			animation-delay: 0.5s;
		}
		@keyframes slide_right
		{
			0%{
				transform: translateX(100px);
				opacity: 0;
			}
			100%{
				transform: translateX(0px);
				opacity: 1;
			}
		}

		
		.content .textbox p{
			font-size: 1.2em;
			color: #333;
			opacity: 0;
			animation: slide_left 0.4s linear forwards;
			animation-delay: .75s;
		}
		.content .textbox a{
			display: inline-block;
			margin-top: 20px;
			padding: 15px 30px;
			background: #ff5e8e;
			color: white;
			font-size: 1.2em;
			border-radius: 48px;
			letter-spacing: 1px;
			text-decoration: none;

			opacity: 0;
			animation: slide_top 0.4s linear forwards;
			animation-delay: 1.25s;
		}
		.sci{
			position: absolute;
			bottom: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.sci li{
			list-style: none;
		}
		.sci li a{
			position: relative;
			display: inline-block;
			margin-right: 15px;
			width: 50px;
			height: 50px;
			background: #0169b2;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			transition: 0.2s ease-in-out;

			opacity: 0;
			animation: slide_right 0.2s linear forwards;
			animation-delay: calc(0.1s * var(--i));

		}
		.sci li a img{
			filter: invert(1);
			transform: scale(0.5);
		}
		.sci li a:hover{
			background: #ff5e8e;
			transform: translateY(-10px);
		}
		.pic1{
			position: absolute;
			bottom: 40px;
			right: 190px;
			/*max-width: 700px;*/
			height: 590px;
			height: 490px;
			opacity: 0;
			animation: fade_in .72s linear forwards;
			animation-delay: 1.5s;
		}
		@keyframes fade_in
		{
			0%{
				opacity: 0;
			}
			100%{
				opacity: 1;
			}
		}

		@media (max-width: 991px)
		{
			section{
				padding: 150px 20px;
			}
			header{
				padding: 20px;
			}
			.nav{
				display: none;
			}
			.toggle{
				position: fixed;
				top: 20px;
				right: 20px;
				width: 40px;
				height: 40px;
				background: #0169b2 url

			}
		}




	</style>
</head>
<body>
	<section>
		<img class="pic1" src="image/pic2.png" >
		<header>
			<a href="#" class="logo">Blood Bank</a>
			<div class="toggle"></div>
			<ul class="nav">
				<li><a href="#" style="--i:1;" class="active">Home</a></li>
				<li><a href="AboutUs.php" target="_blank" style="--i:2;">About Us</a></li>
				<li><a href="ContactBD.php" style="--i:3;">Contact Us</a></li>
				<li><a target="_blank" href="blood info.php" style="--i:4;">Blood Info.</a></li>
				<li><a target="_blank" href="creative login.php" style="--i:5;">Login / Signup</a></li>
			</ul>
		</header>
		<div class="content">
			<div class="textbox">
			<h2>Welcome to Blood Bank</h2>
			<p>WHO NEEDS BLOOD The need of blood is great. On any given day,
               an average of 34,000 units of blood are needed to save precious human lives from accident and burns, heart surgery,
              organ transplants patients receiving treatment for leukemia, cancer 
              other diseases.<br>
              Blood…it
             	runs in our veins and plays a vital role in the body 
                mechanism. But have you ever spared a thought for those who are
                fighting with some disease and need blood urgently. Act now and
              donate your blood without any worry. It won't cost you a thing but could bring back the smile on someone's
               face.</p>
               <a href="adminloginBD.php" target="_blank">Admin Login</a>
               </div>
		</div>
		<ul class="sci">
			<li><a style="--i:12;" href="#"><img src="image/facebook.png"></a></li>
			<li><a style="--i:13;" href="#"><img src="image/twitter.png"></a></li>
			<li><a style="--i:14;" href="#"><img src="image/Instagram.png"></a></li>
		</ul>


	</section>

</body>
</html>