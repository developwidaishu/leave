
<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>TAKE THE L</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<h2 class="cue"><mark>Please Enter The DEFAULT Credentials provided with the application manual</mark></h2>

<div class="login-page">
	<div class="form">
	<form class="login-form" action="administratorlogin.php" method="post">

		<input id="username" type="text" placeholder="Username" name="username">
		<input id="password" type="password" placeholder="password" name="password">
		<input type="submit" value="LOGIN" ><br>
	</form>
</div>
</div>



</body>
<!--<script type="text/javascript">
	function validate(){
		if(username=='admin'&& password=='admin'){
		window.location ="home.php";
		
	}}
	//function validate(){
	//	window.location="weather.php";
	//}
</script>-->
</html>