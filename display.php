<!DOCTYPE html>
<html>
<head>
	<title>Uploads</title>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	 <style>
	 	*{
	 		font-family: 'Rubik', sans-serif;
	 	}
	 	table{
	 		margin-top: 25px;
	 		margin-left: 18%;
	 		border-collapse: collapse;
	 		
	 	}
	 	th{
	 		border: 1px solid black;
	 		padding-left: 15px;

	 		padding-right: 15px;
	 		padding-top: 10px;
	 		padding-bottom: 10px;
	 		background-color: #82eedd; 
	 		font-size: 18px;
	 		text-align: center;

	 	}
	 	td{
	 		text-align: center;
	 		border: 1px solid black;
	 		padding-right: 10px; 
	 		padding-left: 10px;
	 	}
	 	img{
	 		padding-left: 15px;
	 		padding-right: 15px;
	 		padding-top: 9px;
	 	}
	 	table{
	 		margin-bottom: 150px;
	 	}
	 </style>
</head>
<body>

	<div >
		<div  >
			<div >
				<div >
				<table >
					<thead>
						<tr>
							<th >id</th>
							<th >Name</th>
							<th >Emailid</th>
							<th >Number</th>
							<th >Documents</th>
							<th >Reason</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'dbconCrowd.php';
						$selectquery = " select * from registration ";

						$query = mysqli_query($con,$selectquery);
						// $result = mysqli_fetch_array($query);
						while ($result = mysqli_fetch_array($query)) {
						?>
							
						<tr>
							<td> <?php echo $result['id']; ?> </td>
							<td> <?php echo $result['username']; ?> </td>
							<td> <?php echo $result['email']; ?> </td>
							<td> <?php echo $result['number']; ?> </td>
							<td> <img src="<?php echo $result['pic']; ?>" width="150" height="auto">  </td>
							<td> <?php echo $result['reason']; ?> </td>
						</tr>



						<?php
						}	
						 ?>
					</tbody>








				</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>