
<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>HR LOGIN</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<section>
		<header>
			<div class="navbar">
  <a href="home.php">Home</a>
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
	<!--<form class="register-form">
		<input id="username1" type="text" placeholder="Username">
		<input id ="password1" type="password" placeholder="mail-id">
		<input type="text" placeholder="Password">
		<button>Create</button>
		<p class="message">Already Registered?<a href="#">Login</a></p>
	</form>-->
	<form class="login-form" action="#" method="post">
		<input id="username" type="text" placeholder="Username" name="username">
		<input id="password" type="password" placeholder="password" name="password">
		<input id="submit" type="submit" value="LOGIN" name="submit" /><br>
		<p class="message">Not registered yet?<input id="register-button" type="button" value="Register Now" onclick="validate1()"></p>
	</form>
</div>
</div>



</body>
<script type="text/javascript">
	function validate1(){
		window.location ="hrregister.php";
		
	}
	//function validate(){
	//	window.location="home.php";
	//}
</script>
</html>