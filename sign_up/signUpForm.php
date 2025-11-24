<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA &mdash; Sign Up Form</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_192%2Ch_192%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">
    <link rel="apple-touch-icon" href="https://static.wixstatic.com/media/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png/v1/fill/w_180%2Ch_180%2Clg_1%2Cusm_0.66_1.00_0.01/a4fcc4_8ff77e762a714053a8d6d7317c1b28ee%7Emv2.png" type="image/png">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<style>
		/* .input100 {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    border: none;
    width: 100%;
    padding: 0 10px;
	} */

	select.input100 {
		cursor: pointer;
	}
	.select100 {
		width: 100%;
		height: 55px; /* samakan dengan input100 */
		border: none;
		outline: none;
		background: transparent;
		font-size: 16px;
		padding: 0 20px;
		appearance: none; /* hilangkan default arrow browser */
		-webkit-appearance: none;
		-moz-appearance: none;
		line-height: 55px; /* agar teks tepat di tengah */
	}

	/* .wrap-input100 {
    position: relative;
	} */

	/* .wrap-input100::after {
		content: "▼";
		position: absolute;
		right: 20px;
		top: 50%;
		transform: translateY(-50%);
		font-size: 14px;
		color: #888;
		pointer-events: none;
	} */

</style>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data"
					action="SignUp.php">
					<span class="login100-form-title p-b-43">
						<img src="../index_page/img/ITHB_logo.png" style="width: 100px; height: 70px;"><br>
						Sign Up
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					<div class="wrap-input100 validate-input">
						<select class="select100" name="prodi" required>
							<option value="">-- Pilih Prodi --</option>
					
							<?php 
								include '../Database/connection.php';
								$sqlProdi = "SELECT Nama_Prodi FROM prodi ORDER BY Nama_Prodi ASC";
								$resultProdi = mysqli_query($conn, $sqlProdi);
								while ($row = mysqli_fetch_assoc($resultProdi)) : ?>
									<option value="<?= $row['Nama_Prodi']; ?>">
										<?= $row['Nama_Prodi']; ?>
									</option>
							<?php endwhile; ?>
						</select>
						<span class="focus-input100"></span>
						<span class="label-input100" style="top : -1px; ">Prodi</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100"></span>
						<span class="label-input100">Alamat</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					
					<br>
					<span>Have an account?</span><a href="../login_page/login-form.php"> login</a>
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Sign Up">
					</div>

				</form>

				<div class="login100-more" style="background-image: url('../index_page/img/cover_page1.jpg');">
				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>