<?php

 
 function validate1($m)
 {
 	$x=$_POST['username'];
	$y=$_POST['password'];
 	
 	if(($x=='admin')&&($y=='admin')){
	echo "<script>alert('$m');
 	window.location.href='home.php';
 	</script>";

 }}
 function error_validation($m)
 {
 	$x=$_POST['username'];
	$y=$_POST['password'];
 	
 	if(($x!='admin')||($y=='admin')){
	echo "<script>alert('$m');
 	window.location.href='admin.php';
 	</script>";

 }}
 session_start();
$x=$_POST['username'];
$y=$_POST['password']; 

 if( $x=='admin' && $y=='admin')
 {
 	validate1('You have successfully logged in');
 }
 else
 {
 	error_validation('wrong Creds! Press OK to go back to the login page again');
 }

?>