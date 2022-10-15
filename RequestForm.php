


<!DOCTYPE html>
<html>
<head>
	<title>Request Form</title>
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
		*{
			font-family: 'Nunito', sans-serif;
			margin: 0;
			padding: 0;
		}
		.header{
			height: 60px;
			margin-left: 25px;
			margin-top: 15px;
			display: flex;
			justify-content: space-between;
			background-image: linear-gradient(to left, #fff 85%, #c3f5ff 90%  );
			border-radius: 10px; 
		}
		h2{
			color: #ff5e8e;
			/*text-transform: uppercase;*/
			display: inline-block;
			font-size: 2.0em;
			text-decoration:none;
			font-weight: 700;
			margin-top : 8px;
			margin-left: 40px;
		}
		form{
			margin-top: 20px;
			margin-left: 30%;


		}
		p{
			font-size: 22px;
			letter-spacing: 1px;
		}
		label{
			font-size: 22px;
			letter-spacing: 1px;
		}
		input{
			width: 45%;
			background: rgba(255,255,255,.2);
			border: none;
			outline: none;
			padding: 10px 20px;
			border-radius: 15px;
			border: 1px solid #ff5e8e;
			border-right: 1px solid violet;
			border-bottom: 1px solid lightblue;
			font-size: 16px;
			letter-spacing: 1px;
			
			margin-left: 20px;
			/*box-shadow: 5px 5px 9px rgba(0,0,0,0.05);*/
		}
		.sbmt{
			border: none;
  			background: #ff7a59;
  			color: #fff;
  			font-size: 22px;
  			padding-right: 15px ;
  			padding-left: 15px ;
  			border-radius: 5px;
  			box-shadow: 5px 5px 1px rgba(0,0,0,0.05);
  			margin-left: 15px;
		}
		.sbmt:hover{
			color: #ff7a59;
			background-color: white;
			transition: 500ms;
		}
		.space{
			height: 80px;
		}
		.m,.fm{
			width: 30px;
		}
		.submit{
			border: none;
  			background: #ff7a59;
  			color: #fff;
  			font-size: 22px;
  			padding-right: 5px ;
  			padding-left: 5px ;
  			border-radius: 5px;
  			box-shadow: 5px 5px 1px rgba(0,0,0,0.05);
  			margin-left: 5px;
		}
		.submit:hover{
			color: #ff7a59;
			background-color: white;
			transition: 500ms;
		}

	</style>
</head>
<body>

	<div class="header">
		<h2>Request Form</h2>
	<img src="image/image001.png"> <p><u>"A single pint can save three lives, a single gesture can create a million smiles"</u></p>
	<img src="image/logo.gif">
	</div>
	<form method="POST">
		<label>Name (Patiant)</label><br>
		<input required type="text" name="name" placeholder="Enter Patiant Name"><br><br>
		
		<label>Mobile Number</label><br>
		<input required type="text" name="number" placeholder="Enter Mobile No."><br><br>
		<label>Blood Type/Group</label><br>
		<input required type="text" name="B-type" placeholder="Enter Blood Type Ex- A Negative"><br><br>

		<label>Problem</label><br>
		<input required type="text" name="prb" placeholder="Problem"><br><br>

		<label>Hospital Name</label><br>
		<input required type="text" name="H-name" placeholder="Enter Hospital Name"><br><br>
		<label>Address (Hospital)</label><br>
		<input required type="text" name="adrs"placeholder="Enter Adress"><br><br>
		<label>Age</label><br>
		<input required type="text" name="age"placeholder="Enter Age"><br><br>
		
		<label>Units</label><br>
		<input required type="text" name="unit" placeholder="Enter Units"><br><br>

		<p>Select Gender</p><br>
		<input required class="m" type="radio" value="Male" name="Gender">Male<br>
		<input required class="fm" type="radio" value="Female" name="Gender">Female
		
		
<br><br>
		<button class="submit" name="press">Submit</button>
		
	</form>
	<div class="space"></div>

</body>
</html>


<?php 
	include 'dbconBlood.php';

	if(isset($_POST['press'])){

		$name = $_POST['name'];
		$number = $_POST['number'];
		$btype = $_POST['B-type'];
		$problem = $_POST['prb'];
		$hname = $_POST['H-name'];
		$hadd = $_POST['adrs'];
		$age = $_POST['age'];
		$unit = $_POST['unit'];
		$gender = $_POST['Gender'];

		$insertquery = " INSERT INTO request (name, mobile, bgroup, problem, H_name, H_add, Age, Units, gender) VALUES ('$name','$number','$btype','$problem','$hname','$hadd','$age','$unit','$gender') ";

		$res = mysqli_query($con, $insertquery);
		if ($res) {
			?>
			<script >
				alert("Request has been uploaded");
			</script>
			<?php
		}else{
			?>
			<script >
				alert("DENIED");
			</script>
			<?php
		}
		
	}
	





 ?>