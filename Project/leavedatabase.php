<?php

function alert($x){
	echo"<script>alert('$x');
	</script>";
	}
function submitted($y){
	echo"<script>alert('$y');
	window.location.href='home.php';
	</script>";
}

session_start();
$con =mysqli_connect('localhost','root','root','test');
$empid=$_POST['input1'];
$fname=$_POST['input2'];
$lname=$_POST['input3'];
$dept=$_POST['input4'];
$leavetype=$_POST['input5'];
$others=$_POST['input6'];
$from=$_POST['input7'];
$to=$_POST['input8'];
$email=$_POST['input9'];
$contact=$_POST['input10'];
$reason=$_POST['input11'];

$s="select * from leave_application where Employee ID ='$empid'";
if(empty($_POST['input1'])||empty($_POST['input4']))
{
	alert('Field(s) are empty!');
	return false;
	}
$result=mysqli_query($con,$s);
#$y=mysqli_result($result);
$num=mysqli_num_rows(mysqli_result $result);


if($num==1)
{
	alert("You Have Applied For a Leave Previously");
}
else
{
	$sub="insert into leave_application(Employee ID,First Name,Last Name,Department,Type of Leave,Others,From,To,Email,Contact Number,Reason) values('$empid','$fname','$lname','$dept','$leavetype','$others','$from','$to','$email','$contact','$reason')";
	mysqli_query($con,$sub);
	//submitted('Leave Applied Successfully');

}

?>

