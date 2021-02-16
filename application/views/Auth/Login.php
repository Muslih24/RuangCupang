<!DOCTYPE html>
<html>

<head>
	<title>::Login::</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fontawesome/css/fontawesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fontawesome/css/all.min.css'); ?>">
</head>

<body>

	<div class="loginbox">
		<h1><img src="<?= base_url('assets/login/gambar/fish.png'); ?>" style="width: 40px; height: 40px;"> <br> LOGIN</h1>
		<form action="<?php echo base_url('Auth/Login/ProsesLogin'); ?>" method="post">

			<div class="textbox" style="color: #373737">
				<i class="far fa-user"></i>
				<input type="text" name="username" placeholder="Username">
			</div>

			<div class="textbox" style="color: #373737">
				<i class="fas fa-lock"></i>
				<input type="Password" name="password" placeholder="Password">
			</div>

			<input type="submit" name="submit" value="Login">

	</div>

</body>

</html>