<?php
require_once "../config.php";
require_once "../db_operations.php";

$conn = Db_Connection();
$stmt = "";

$cl_id = $cl_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$cl_id = trim($_POST["cl_id"]);
	$password = trim($_POST["cl_password"]);
	$cl_password = md5($password);

	Get_Client($conn, $cl_id, $cl_password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Client Login</title>
	<link href="../static/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../static/login.css">
	<script src="../static/jquery-3.6.0.min.js"></script>
	<script src="../static/loginClient.js"></script>
</head>

<body>

	<!----------------------- Main Container -------------------------->

	<div class="container d-flex justify-content-center align-items-center min-vh-100">

		<!----------------------- Login Container -------------------------->

		<div class="row border rounded-5 p-3 bg-white shadow box-area">

			<!--------------------------- Left Box ----------------------------->

			<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
				style="background: rgba(255, 255, 0, 0.5);">
				<div class="featured-image mb-3">
					<img src="../static/Images/LoginImages/LoginImg1.png" class="img-fluid" style="width: 250px;">
				</div>
				<p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be
					Verified</p>
				<p class="text-black text-wrap text-center"
					style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
					this platform.</p>
			</div>

			<!-------------------- ------ Right Box ---------------------------->

			<div class="col-md-6 right-box">
				<div class="row align-items-center">
					<div class="header-text mb-4">
						<h2>Login as Client</h2>
					</div>
					<form action="./ClientLogin.php" method="POST">
						<div class="input-group mb-3">
							<input type="text" class="form-control form-control-lg bg-light fs-6"
								placeholder="Client id ex:- CL202302323" name="cl_id" id="txtmail">
						</div>
						<small id="smlcname">You can't Empty this Field</small>
						<div class="input-group mb-1">
							<input type="password" class="form-control form-control-lg bg-light fs-6"
								placeholder="Password" name="cl_password" id="txtpassword">
						</div>
						<small id="smlcpassword">You can't Empty this Field</small>
						<div class="input-group mb-5 d-flex justify-content-between">

							<div class="forgot">
								<small><a href="#">Forgot Password?</a></small>
							</div>
						</div>
						<div class="input-group mb-3">
							<button class="btn btn-lg btn-warning w-100 fs-6" name="btnloginclient">Login</button>
						</div>
					</form>

					<div class="row">
						<p>Don't have account? <a href="./ClientSignUp.php">Sign Up</a></p>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>

</html>