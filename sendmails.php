<!DOCTYPE html>
<html lang="en">
<head>
	<title>Send Mail Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap');
		html,body{
			background: #007bff;
		}
		.container{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-family: 'Nunito', sans-serif;
		}
		.container .mail-form{
			background: white;
			padding: 25px 35px;
			border-radius: 5px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),
						0 6px 20px 0 rgba(0,0,0,0.19);
		}
		.container .mail-form .form-control{
			height: 43px;
			font-size: 15px;
		}
		.container .mail-form .textarea{
			height: 100px;
			resize: none;
		}
		.container .mail-form form .button{
			font-size: 17px!important;

		}
		.container .mail-form h2{
			font-size: 30px;

		}
		.container .mail-form p{
			font-size: 14px;
		}

		</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 mail-form">
				<h2 class="text-center">Send Mail to Agent</h2>
				<p class="text-center">Enter details</p>

				<!-- PHP CODE STARTING -->
				<?PHP

				if(isset($_POST['sbmt'])){
					$recipient = $_POST['email'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];
					$sender = "from: mustkeem772@gmail.com";


					if(empty($recipient) || empty($subject) || empty($message)){
						?>
						<div class="alert alert-danger text-center">
							<?php echo "All input fields are required!"; ?>
						</div>

						<?php
					}else {
						if(mail($recipient, $subject, $message, $sender)){
							?>
							<div class="alert alert-success text-center">
							<?php echo "Mail sent successfully to $recipient" ?>
							</div>
							<?php
						}else{
							?>
							<div class="alert alert-denger text-center">
							<?php echo "Failed to send mail!" ?>
							</div>
							<?php
						}
					}
				}

				?>
				<!-- END OF PHP CODE -->

				<form action="sendmails.php" method="POST" autocomplete="off">
					<div class="form-group">
						<input type="email" value="agentBD432@gmial.com" class="form-control" placeholder="Receipents" name="email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="form-group">
						<textarea  cols="30" name="message" rows="10" class="form-control textarea"  placeholder="Enter Message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control button btn-primary"  value="Send" name="sbmt">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>






