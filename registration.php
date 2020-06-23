<html>
<head>
<link rel="stylesheet" href="index.css"/>
<style type="text/css">
#registerBTN:hover{
	cursor:pointer;
}
</style>
</head>
<body>
<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Student registration</h2>
<div id="userLogin" style="height:40%;width:30%;margin:auto;margin-left: 45%;padding: 5px;margin-top: 10%;">
<div id="registerDiv" style="height:600px;;
    margin-top: -117px;
    width: 1048px;
    margin-left: -330px;
    border: 1px solid black;
    background: #fdf9f9;">
<h3 style="background:navy;color:white;margin-top:-2px;height:37px">Fill up all field</h3>
<form method="POST" action="registrationCore.php">
<table style="margin-top:-34px;padding:25px;margin-left:285px">
<tr><td style="padding:5px">First name</td></tr>
<tr><td style="border-radius:10px;"><input type="text" placeholder="Enter first name" name="fname" style="padding:5px;width:185%;height:50px;"/></td></tr>
<tr><td style="padding:5px">Last Name</td></tr>
<tr><td><input type="text" placeholder="Enter last name" name="lname" style="padding:5px;width:185%;height:50px"/></td></tr>
<tr><td style="padding:5px">Contact number</td></tr>
<tr><td><input type="text" placeholder="Enter contact number" name="number" style="padding:5px;width:185%;height:50px"/></td></tr>
<tr><td style="padding:5px">Gmail</td></tr>
<tr><td><input type="email" placeholder="Enter gmail" name="mail" style="padding:5px;width:185%;height:50px"/></td></tr>
<tr><td style="padding:5px">Enter password</td></tr>
<tr><td><input type="password" placeholder="Enter password" name="pwd" style="padding:5px;width:185%;height:50px"/></td></tr>

<tr><td>Select gender</td><td><select  name="bal" style="padding:5px;width:195%;height:50px">
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		<option value="Others">Others</option>
		</select></td></tr>
<tr><td style=""><input id="registerBTN" type="submit" value="Register" style="padding:5px;width:185%;background:#6666e2;height:50px;border-radius:8px;border:white;color:white;font-size:18px"/></td></tr>

</table>

</form>
<?php

if(isset($_REQUEST["successReg"])){
	echo "<h2 style='color:green;margin-left:352px'>Successfully Registered</h2>";
}
if(isset($_REQUEST["failReg"])){
	echo "<h2 style='color:red;margin-left:352px'>please fill up all the field</h2>";
}

?>
</div>
</div>
<div style="height:130%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -453px;">
<ul style="list-style-type:none;">
<a href="registration.php" style="color:white;text-decoration:none"><li id="reg">User Registartion</li></a>
<a href="login.php" style="color:white;text-decoration:none"><li>User login</li></a>
<a href="adminlogin.php" style="color:white;text-decoration:none"><li>Admin login</li></a>

</ul>
</div>
</body>
</html>