<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet"  href="home.css">
</head>
<body>
	<section>
		<header>
			<div class="navbar">
  <a href="hrlogin.php">HR Login</a>
   <a href="emplogin.php">EMP Login</a>
   <!--<a href="leave.php">Apply Leave</a>-->
    <a href="admin.php" onclick="alert('Are You Sure You Want to LOG OUT?')">Logout</a>
  <!--<div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
      <div class="dropdown-content">
      <a href="leave.php">Apply Leave</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
    </button>
    
  </div>-->
</div>
<form action="https://www.google.com/search" target="_blank" method="GET">
<input type="Data" placeholder="Google Search" name="q">
	<input type="submit" value="Go" name="submit">
</form>
		</header>

		<form action="">
			<select>
				<option value="" selected>Select</option>
			<option value="Temperature">Temperature</option>
			<option value="Humidity">Humidity</option>
			<option value="Windflow" >Windflow</option>
			</select>
			<br>
			<input type="Submit" name="okay" onclick="">
		</form>
	</section>
</body>
<footer>
	&copy;AishEnterprises
</footer>