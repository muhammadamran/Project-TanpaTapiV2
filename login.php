<?php
include "include-cms/connection.php";
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
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $app ?> Management System</title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $icon; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $icon; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $icon; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets-cms/vendors/styles/style.css">
</head>

<body class="login-page">
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-dark">Sign In To<br>Management System</h2>
						</div>
						<form action="" method="POST">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<!-- <div class="forgot-password"><a href="forgot-password.html">Forgot Password</a></div> -->
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<button class="btn btn-dark btn-lg btn-block" name="submit">Sign In</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="assets-cms/vendors/scripts/core.js"></script>
	<script src="assets-cms/vendors/scripts/script.min.js"></script>
	<script src="assets-cms/vendors/scripts/process.js"></script>
	<script src="assets-cms/vendors/scripts/layout-settings.js"></script>
</body>

</html>