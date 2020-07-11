<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>HR Registration Page</title>
	<link rel="stylesheet" href="style.css">
	<!--<script src="app.js"></script>-->
	
</head>
<body>
	<section>
		<header>
			<div class="navbar">
  <!--<a href="home.php">Home</a>-->
  <a href="hrlogin.php">HR Login</a>
   <a href="emplogin.php">EMP Login</a>
    <a href="admin.php" onclick="alert('Are You Sure You Want to LOG OUT?')">Logout</a>

</div>
<form action="https://www.google.com/search" target="_blank" method="GET">
<input type="Data" placeholder="Google Search" name="q">
	<input type="submit" value="Go" name="submit">
</form>

			
		</header>
	</section>
<div class="login-page">
	<div class="form">
	<form id="register-form" action="hrconnect.php" method="POST">
		<input id="username1" type="text" name="username" placeholder="Username" required>
		<input id ="password1" type="password" name='password' placeholder="Password" required>
		<input type="email" name='email' placeholder="Mail-id" required>
		<input type="submit" id="submit" value="Create" action='triggerdb.php'>
		<p class="message">Already Registered?<a href="hrlogin.php">HR Login</a></p>
	</form>
	
</div>
</div>
</body>
</html>