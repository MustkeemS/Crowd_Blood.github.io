<!DOCTYPE html>
<html>
<head>
	<title>Search in Donors</title>
	<?php include 'bootstrap 4 links.php'; ?>

	<style >
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
		*{
	margin: 0; padding: 0; box-sizing: border-box; font-family: 'Nunito', sans-serif;
		}
		.main-div{
			width: 100%; height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.center-div{
			width: 90%;
			height: 80vh;
			background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
			padding: 20px 0 0 0;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
			border-radius: 10px;
		}
		h1{
			font-size: 28px;
			color: #000;
			text-align: left;
			margin-bottom: 20px;;
		}
		table{
			border-collapse: collapse;
			background-color: white;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,0.03);
			border-radius: 10px;
			margin: auto;
		}
		th,td{
			border: 1px solid #f2f2f2;
			padding: 8px 27px;
			text-align: center;
			color: grey;
		}
		th{
			text-transform: uppercase;
			font-weight: 550;
			justify-content: center;
			align-items: center;
		}
		td{
			font-size: 13px;
		}
		
		.post-class{
			text-transform: uppercase;
		}
		form{
			position: absolute;
			align-items: center;
			justify-content: center;
			margin-left: 7%;
			margin-top: 20px;
		}
		</style>
</head>
<body>

 	<!-- SEARCH   -->
 			<form method="POST">

 			<input name="filter_value" placeholder="Search Here!" name="">

 			<button type="submit" name="filtr-btn">Search</button> <br><br>



 			</FORM>
 			<div class="main-div">
 		
 				<div class="center-div">
					<div class="table-responsive">
 					<table>
	 					<thead>
	 						<tr>
	 							<th>ID</th>
	 							<th>NAME</th>
	 							<th>email</th>
	 							<th>number</th>
	 							<th>bloog-g</th>
	 							<th>address</th>
	 							<th>age</th>
	 							<th>unit</th>
	 							<th>gender</th>
	 						</tr>
	 					</thead>
 					<tbody>

			
		<?php
			include 'dbconblood.php';
			if(isset($_POST['filtr-btn'])){
				$value_filter = $_POST['filter_value'];
				$query = " SELECT * from donation WHERE CONCAT(id,name,  email, blood_group, number, address,age, unit, gender) like '%$value_filter%' ";
				$query_run = mysqli_query($con, $query);

				if (mysqli_num_rows($query_run) > 0) {
					while ($row = mysqli_fetch_array($query_run)) {
						?>
				

						<tr>
							<td><?php echo $row['id'];  ?></td>
							<td><?php echo $row['name'];  ?></td>
							<td><?php echo $row['email'];  ?></td>
							<td><?php echo $row['number'];  ?></td>
							<td><?php echo $row['blood_group'];  ?></td>
							<td><?php echo $row['address'];  ?></td>
							<td><?php echo $row['age'];  ?></td>
							<td><?php echo $row['unit'];  ?></td>
							<td><?php echo $row['gender'];  ?></td>
							
						</tr>

						<?php
					}
				}
				else{
					echo "no record";
				}
			}



		?>

</tbody>
		</table>
	</div>
</div>
</div>


</body>
</html>