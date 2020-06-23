<html>
<head>
<style type="text/css">
#btn:hover{
	cursor:pointer;
}
#manage:hover{
	cursor:pointer;
}
#add:hover{
	cursor:pointer;
}
</style>
</head>
<body>
<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div style="height:100px;width:100px;">Account</div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Control page</h2>

<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -85px;">
<ul style="list-style-type:none;">
<a href="registration.php" style="color:white;text-decoration:none"><li id="reg">User Registartion</li></a>
<a href="login.php" style="color:white;text-decoration:none"><li>User login</li></a>
<li><div id="btn" style="">Rooms 
</div></li>


<li>
<div id="hideDisplay" style="display:none;">
<div style="background: #0b5f19;padding:4px;margin-left:-40px">
<div id="add"style="margin-left:50px;">Add a room</div>
<div id="manage"style="margin-left:50px">Manage a room</div>
</div>
</div>
</li>

<a href="adminlogin.php" style="color:white;text-decoration:none"><li>Admin login</li></a>

</ul>
</div>
<div 	style="background:gray;">
<table>
<tr><td>Create Room:</td> <td><input type="text" name="room" placeholder="Enter room number"/></td></tr>
<tr><td>Create seat:</td> <td><input type="number" name="seat" placeholder="Enter number of seat"/></td></tr>
<tr><td>Add fee per seat:</td> <td><input type="number" name="fee" placeholder="Enter fees per seat"/></td></tr>
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="adminControl.js"></script>
</body>
</html>