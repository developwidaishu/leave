<?php
include_once "header.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="style.css">
	<!--<script src="app.js"></script>-->
	
</head>
<body>
	
<div class="login-page">
	<div class="form">
	<form id="register-form" action="empconnect.php" method="POST">
		<input id="username1" type="text" name="username" placeholder="Username" required>
		<input id ="password1" type="password" name='password' placeholder="Password" required>
		<input type="email" name='email' placeholder="Mail-id" required>
		<input type="submit" id="submit" value="Create" action='triggerdb.php'>
		<p class="message">Already Registered?<a href="emplogin.php">Login</a></p>
	</form>
	
</div>
</div>
</body>
</html>