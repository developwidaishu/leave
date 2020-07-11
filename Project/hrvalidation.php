<?php
function alert($x){
	echo"<script>alert('$x');
	window.location.href='hrlogin.php';
	</script>";
	}
session_start();

$con=mysqli_connect('localhost','root','root','test');
//mysqli_selet_db($con,'test');

$username=$_POST['username'];
$password=$_POST['password'];
//$email=$_POST['email'];
$s="select * from hrreg where username ='$username' && password='$password'";
if(empty($_POST['username'])||empty($_POST['password']))
{
	alert('Field(s) are empty!');
	return false;

}
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	header('location:hrhomepage.php');
}
else{
	alert('Wrong username or password');
	//header('location:emplogin.php');
}
?>