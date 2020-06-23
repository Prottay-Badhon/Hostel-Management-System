<html>
<head>
<link rel="stylesheet" href="index.css"/>
</head>
<body>
<?php if(isset($_COOKIE["admin"])){
 header("location:adminControl.php");
}
?>
<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div style="height:100px;width:100px;"></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">User Login</h2>
<div id="userLogin" style="height:40%;width:30%;margin:auto;margin-left: 45%;padding: 5px;margin-top: 10%;">
<form method="POST" action="adminloginCore.php">
<table>
<tr><td style="padding:5px">User Name</td></tr>
<tr><td><input type="text" placeholder="Enter user name" name="username" style="padding:5px;width:155%;height:50px"/></td></tr>
<tr><td style="padding:5px">Password</td></tr>
<tr><td><input type="password" placeholder="Enter Password" name="pwd" style="padding:5px;width:155%;height:50px"/></td></tr>
<tr><td style=""><input id="logButton"type="submit" value="Login" style="padding:5px;width:155%;background:#6666e2;height:50px;border-radius:8px;border:white;font-size:18px;font-weight:bold"/></td></tr>
</table>
</form>
<?php
if(isset($_REQUEST["wrongInfo"])){
	echo "<h3 style='color:red;margin-left:60px'>Wrong information</h3>";
}


?>
</div>
<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -453px;">
<ul style="list-style-type:none;">
<a href="registration.php" style="color:white;text-decoration:none"><li id="reg">User Registartion</li></a>
<a href="login.php" style="color:white;text-decoration:none"><li>User login</li></a>
<a href="adminlogin.php" style="color:white;text-decoration:none"><li>Admin login</li></a>

</ul>
</div>
</body>
</html>