<?php
function alert($x){
	echo"<script>alert('$x');
	window.location.href='empregister.php';
	</script>";
	}
	function registered($x){
	echo"<script>alert('$x');
	window.location.href='emplogin.php';
	</script>";
	}
session_start();
$con=mysqli_connect('localhost','root','root','test');
//mysqli_selet_db($con,'test');

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$s="select * from registration where username ='$username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	alert("Username already taken");
}
else{
	$reg= "insert into registration(username,password,email) values('$username','$password','$email')";
	mysqli_query($con,$reg);
	registered("Registration Successful");
	
}

//database connection
//$conn=new mysqli('localhost','root','root','test');
//if($conn->connect_error){
//	die('Connection Failed :'.$conn->connect_error);
//}else{
//	$stmt= $conn->prepare("insert into registration(username,password,email) values(?,?,?)");
//	$stmt->bind_param("sss",$username,$password,$email);
//	$stmt->execute();
//	echo "registration done Successfully";
//	$stmt->close();
//	$conn->close();
//}
?>
<!--<a href="index.php">Go Back to the Login Page!</a>-->