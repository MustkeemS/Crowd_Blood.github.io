<!DOCTYPE html>
<html>
<head>
	<title>Requests List</title>
	<?php include 'bootstrap 4 links.php'; ?>
	<style >
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
*{
	

	margin: 0; padding: 0; box-sizing: border-box; font-family: 'Nunito', sans-serif;
	font-family: 'Nunito', sans-serif;
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
.email-style{
	font-size: 14px;
	color: grey;
	display: inline-block;
	background: #f2f2f2;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	line-height: 30px;
	padding: 0 14px;
}
.post-class{
	text-transform: uppercase;
}
.fa{
	font-size: 21px;
	padding: 3px;
}
.fa-trash{ color: #ff0000; }
a{
	text-decoration: none; display: flex; justify-content: center;
	text-align: center;
}
	</style>
</head>
<body>
 	<div class="main-div">
 		<h1>List of Requests</h1>
 		<div class="center-div">

 			


 			<div class="table-responsive">
 				<table>
 					<thead>
 						<tr>
 							<th>ID</th>
 							<th>NAME</th>
 							<th>mobile</th>
 							<th>Blood-g</th>
 							<th>problem</th>
 							<th>h-name</th>
 							<th>h-add</th>
 							<th>age</th>
 							<th>unit</th>
 							<th>gender</th>
 						</tr>
 					</thead>
 					<tbody>
						<?php 
							include "dbconblood.php";

							$select = " select * from request ";

							$query = mysqli_query($con, $select);

							$num = mysqli_num_rows($query);

							while($res = mysqli_fetch_array($query)) {
								?>

								<tr>
 							<td><?php  echo $res['id'];   ?></td>
 							<td><?php  echo $res['name'];   ?></td>
 							<td><?php  echo $res['mobile'];   ?></td>
 							<td><?php  echo $res['bgroup'];   ?></td>
 							<td><?php  echo $res['problem'];   ?></td>
 							<td><?php  echo $res['H_name'];   ?></td>
 							<td class="add"><?php  echo $res['H_add'];   ?></td>
 							<td><?php  echo $res['Age'];   ?></td>
 							<td><?php  echo $res['Units'];   ?></td>
 							<td><?php  echo $res['gender'];   ?></td>
 							<td> <a href="deleteReq.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"> </i></a></td>
 						</tr>
 						<?php
							}


						 ?>
 						
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 <script>
 	$(document).ready(function() {
 		$('[data-toggle="tooltip"]').tooltip();
 	});
 </script>



 </body>
 </html>
