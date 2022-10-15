<?php

	session_start();
	


?>


<!DOCTYPE html>
<html>
<head>
	<title>User Home</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
		*{
			/*padding: 0;
			margin: 0;*/
			font-family: 'Nunito', sans-serif;
		}
		.DV{
			margin-top: 15px;
			margin-left: 25px;
			height: 60px;
			display: flex;
			justify-content: space-between;
			background-image: linear-gradient(to left, #fff 85%, #c3f5ff 90%   );
			border-radius: 10px; 
		}

		h2{
			color: #ff5e8e;
			/*text-transform: uppercase;*/
			display: inline-block;
			font-size: 2.0em;
			text-decoration:none;
			font-weight: 700;
			margin-top : 10px;
			margin-left: 30px;
		}
		.logout{
			display: inline-block;
			color: #0169b2;
			font-weight: 600;
			font-size: 1.1em;
			margin-left: 10px;
			display: inline-block;
			padding-top: 5px;
			text-decoration: none;
			margin-top :10px;
			margin-right: 20px;
			
		}
		.DV2{
			margin-top: 25px;
			display: flex;
			justify-content: space-around;
		}
		.a{
			text-decoration: none;
			padding: 10px;
			color: white;
			background-color: #ff5e8e;
			box-sizing: border-box;
			border-radius: 5px;
			font-size: 20px;
			font-weight: 500;
			margin-bottom: 15px;

		}
		.a:hover{
			border: none;
  			background: #ff7a59;
  			color: #fff;
  			
  			border-radius: 5px;
  			position: relative;
  			box-sizing: border-box;
  			transition: all 500ms ease; 
		}
		p{
			color: #0169b2;
			font-size: 1.2rem;
			font-weight: 600;
		}
	</style>

</head>
<body>

<div class="DV">
	<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
	<img src="image/image001.png"> <p>"A single pint can save three lives, a single gesture can create a million smiles"</p>
	<img src="image/logo.gif">
	<a class="logout" href="logoutUserBD.php">LOGOUT</a>
</div>
	<div class="DV2">
		<a class="a" target="_blank"  href="donationform.php">
		CLICK FOR DONATION
		</a>

		<a class="a" arget="_blank" href="requestform.php">
		CLICK FOR SEND REQUEST
		</a>
	</div>


	<!--image slider -->
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div  class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a target="_blank" href="https://www.redcross.org/about-us/news-and-events/news/2021/answers-to-common-questions-about-covid-19-vaccines-and-blood-platelet-plasma-donation-eligibility.html">
  	<img title="Click to Read More" src="image/IMG1.png" style="width:100%" height="500px">
  </a>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a target="_blank" href="https://www.who.int/news-room/events/detail/2021/06/14/default-calendar/world-blood-donor-day-2021">
  	<img title="World Donor Day 14 June" src="image/IMG2.png" style="width:100%" height="500px">
  </a>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a target="_blank" href="https://www.indushealthplus.com/blood-donation-facts-benefits.html">
  	<img title="Click to Read More" src="image/IMG3.jpg" style="width:100%" height="500px">
  </a>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>






</body>
</html>