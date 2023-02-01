<?php
include "include/connection.php";
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = md5(md5($_POST['password']));
	$log_type = "login";
	$date_log = date('Y-m-d H:i:m');

	$query = $db->query("SELECT * FROM tb_users WHERE username='$user' AND password='$pass'");
	if (mysqli_num_rows($query) == 1) {
		session_start();
		$_SESSION['username'] = $user;
		header("Location: ./index-cms.php?SignInsuccess=true");
	} else {
		header("Location: ./login.php?Danger");
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login - <?= $Rapps['app_name'] ?> | General Management</title>
	<link rel="icon" type="image/png" sizes="32x32" href="assets-cms/apps/icon/logo.png">
	<link rel="stylesheet" href="assets-cms/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets-cms/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets-cms/libs/css/style.css">
	<link rel="stylesheet" href="assets-cms/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<!-- behind css -->
	<link rel="stylesheet" href="assets-cms/libs/css/behind.css">
	<!-- Loading -->
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			font-family: Poppins, Open Sans, Helvetica, Arial, sans-serif;
		}

		/*loading*/
		.preloader {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background-color: #fff;
		}

		.preloader .loading {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			font: 14px arial;
		}

		/* Alert */
		/* Success */
		.alert-success {
			padding: 20px;
			background-color: #003369;
			color: white;
		}

		/* Info */
		.alert-info {
			padding: 20px;
			background-color: #0099da;
			color: white;
		}

		/* Warning */
		.alert-warning {
			padding: 20px;
			background-color: #ff9800;
			color: white;
		}

		/* Danger */
		.alert-danger {
			padding: 20px;
			background-color: #f44336;
			color: white;
		}

		/* End Danger */
		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		.closebtn:hover {
			color: black;
		}

		/* End Alert */
	</style>
</head>

<body style="background:url('https://www.pngmart.com/files/13/Vector-Pattern-PNG-Image-Background.png') no-repeat fixed center center;background-size: 100%">
	<div class="preloader">
		<div class="loading">
			<img src="<?= $loader ?>" width="150">
			<br>
			<div class="loading-divider"></div>
			<font class="text-loading-wait">Please wait ...</font>
		</div>
	</div>
	<div class="splash-container">
		<div class="card ">
			<div class="card-header text-center"><a href="index.php"><img class="logo-img" src="<?= $icon; ?>" alt="logo" width="100px"></a>
				<hr>
				<span class="splash-description" style="padding-bottom: 0px;">Please enter your user information.</span>
			</div>
			<!-- alert -->
			<div style="padding: 10px;">
				<?php if (isset($_GET['Success'])) { ?>
					<!-- Success -->
					<div class="alert-success">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<strong>Success!</strong> Indicates a dangerous or potentially negative action.
					</div>
					<!-- End Success -->
				<?php } ?>
				<?php if (isset($_GET['Info'])) { ?>
					<!-- Info -->
					<div class="alert-info">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<strong>Info!</strong> Indicates a dangerous or potentially negative action.
					</div>
					<!-- End Info -->
				<?php } ?>
				<?php if (isset($_GET['Warning'])) { ?>
					<!-- Warning -->
					<div class="alert-warning">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<strong>Information!</strong> Please Sign In with username and password.
					</div>
					<!-- End Warning -->
				<?php } ?>
				<?php if (isset($_GET['Danger'])) { ?>
					<!-- Danger -->
					<div class="alert-danger">
						<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
						<strong>Failed!</strong> Your account username or password is incorrect, please try again.
					</div>
					<!-- End Danger -->
				<?php } ?>
			</div>
			<!-- end alert -->
			<div class="card-body">
				<form action=" " method="post">
					<div class="form-group">
						<input class="form-control form-control-lg" name="username" type="text" autofocus placeholder="Username" autocomplete="off">
					</div>
					<div class="form-group">
						<input class="form-control form-control-lg" name="password" type="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="checkbox checkbox-css">
							<input type="checkbox" id="ckb1" onclick="myFunction()" />
							<label for="ckb1">Show password</label>
						</div>
					</div>
					<div class="form-group">
						<div class="checkbox checkbox-css">
							<input type="checkbox" id="ckb2" checked />
							<label for="ckb2">Remember me</label>
						</div>
					</div>
					<button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
				</form>
			</div>
			<div class="card-footer bg-white p-0  ">
				<p align="center">
					<br>
					<small> <?= $app; ?>
						<br>
						<?= $company; ?>
					</small>
				</p>
				<br>
			</div>
		</div>
	</div>
	<script src="assets-cms/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets-cms/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".preloader").fadeOut();
		})
	</script>
	<!-- Show Password -->
	<script type="text/javascript">
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
</body>

</html>