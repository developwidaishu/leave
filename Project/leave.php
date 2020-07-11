<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leave application Form</title>
	<link rel="stylesheet" href="leave.css">
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<aside>
		<marquee>
			<h3>Fill in your details carefully</h3>
			<p>This form would directly land up in the HR department.<br>
				So make sure whatever you fill is legitimate and correct.<br>
			Please crosscheck your Employee ID and the Department before submitting the form</p>
			<br>
		</marquee>
	</aside>
	<header>
			<div class="navbar">
  <a href="emphomepage.php">Home</a>
   <a href="#">Notifications</a>
   <!--<a href="leave.php">Apply Leave</a>-->  
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
      <div class="dropdown-content">
      <a href="leave.php">Apply Leave</a>
      <a href="admin.php" onclick="alert('Are You Sure You Want to LOG OUT?')">Logout</a>
      <a href="#">Link 3</a>
    </div>
    </button>
    
  </div>
</header>
	<h2 class="title">Leave Application Form</h2>

	<div class="form">
		<form id="leave" action="#" method="POST">
			<h5 class="intertext">Employee Details</h5>
			<label for="input1" required>Employee ID:</label>
			<input id="1" type="text" name='input1'/><br>
			<label for="input2" required>First Name: </label>
			<input id="1" type="text" name='input2'/><br>
			<label for="input3">Last Name:  </label>
			<input id="1" type="text" name='input3'/><br>
			<label for="input4">Department: </label>
			<input id="1" type="text" name='input4'/><br>
			<label for="input5">Leave type: </label>
			<select class="select" name='input5'>
			<option value="" selected>Select</option>
			<option value="">Paid Leave</option>
			<option value="">Earned Leave</option>
			<option value="">Casual Leave</option>
			<option value="">Medical Leave</option>
			<option value="">Earned Leave</option>
			<option value="" >Maternity Leave</option>
			<option value="">Others</option>
			</select><br>
			<label for="input6" >Others Please Specify:</label>
			<textarea class="textarea"  name='input6'>Example:Vote</textarea>
			<br>
			<h5 class="intertext">Dates of Leave:</h5>
			<br>
			<label for="input7">From:</label>
			<input id="1" type="date" name='input7'/><br>
			<label for="input8">To:</label>
			<input id="1" type="date" name='input8'/>
			<label for="input9">Email Id:</label>
			<input type="email" name='input9'>
			<label for="input10">Contact No:</label>
			<input type="number" name='input10'>
			<label for="input11">Reason For taking Leave</label>
			<textarea class="textarea" name='input11' placeholder="Please Type Your Reason in A formal Manner"></textarea>
			<input type="button" onclick= "alert('The page is under construction!')" value="SUBMIT" name="submit">
		</form>
		
	</div>
		
</body>
</html>