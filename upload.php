<?php 

include 'dbconCrowd.php';

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$email = $_POST['Emailid'];
	$number = $_POST['Number'];
	$file = $_FILES['photo'];
	$reason = $_POST['reason'];

	// print_r($file);
	$filename = $file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];

	if ($fileerror == 0) {
		$destfile = 'upload/'.$filename;
		// echo "$destfile";
		move_uploaded_file($filepath, $destfile);

		$insertquery = " insert into registration(username, email, number, pic, reason) values ('$username','$email','$number','$destfile','$reason')";

		$query = mysqli_query($con, $insertquery);

		if ($query) {
			echo "Inserted";
			
		}else {
			echo "NOT";
			
		}
		header('location:purpose.html');


	}




}else{
	echo "No button has been clicked";
}



 ?>