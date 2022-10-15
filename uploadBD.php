<!-- PHP CODE -->

<?php
	include 'dbconblood.php';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['number'];
		$Blood = $_POST['B-group'];
		$add = $_POST['location'];
		$age = $_POST['age'];
		$Units = $_POST['unit'];
		$gender = $_POST['Gender'];

		$insertquery = " insert into donation (name, email, number, blood group, address, age, unit, gender) values ('$name','$email','$mobile','$Blood','$add','$age','$Units','$gender')";
		$res = mysqli_query($con,$insertquery);
		if ($res) {
			?>
			<script >
				alert("data inserted properly")
			</script>
			<?php
		}else{
			?>
			<script >
				alert("data not inserted properly");
			</script>
			<?php
		}
		header('location:donation.php');
	}
?>