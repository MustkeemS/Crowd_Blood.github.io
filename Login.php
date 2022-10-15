
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="CSS\Login.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="Backimg">
		<div class="centerdiv">
			<img src="image/kisspng-businessperson-computer-icons-avatar-clip-art-lattice-5b0508dcaca9a5.6802267615270566047072 (1).png" id="profilepic">
			<h2>Admin Login</h2>



			<form method="POST" action="logincheck.php">
				<div>
					<input type="text" name="user" class="inputbox" value="" placeholder="Admin Username" required>
				</div>
				<br><br>
				<div>
					<input type="Password" name="pass" class="inputbox" value="" placeholder="admin Password" required>
				</div>
				<div>
					<button type="submit" name="submit" value="submit" >Login </button>
				</div>
			</form><br>



				</div>

	</div>
	

</body>
</html>