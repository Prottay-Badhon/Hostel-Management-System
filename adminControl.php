<html>
<head>
<link rel="stylesheet" href="index.css"/>
<style type="text/css">
#btn:hover,#add:hover,#manage:hover{
	cursor:pointer;
}
input{
	padding:12px;
}
table{
	margin-left:100px;
	font-size:18px;
}
#logout:hover{
	cursor:pointer;
	transform:scale(1.2);
	transition:.5s;
}
</style>
</head>
<body>
<?php if(isset($_COOKIE["admin"])){ ?>
<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div style="height:100px;width:100px;float:right" id="logout"><a href="adminLogOut.php" style="text-decoration:none;color:white">Log Out</a></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Control Page</h2>

<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top:-85px;">
<div id="btn" style="margin-left: 39px;
    margin-top: 65px;">Rooms</div>
 <div id="hideDisplay" style="margin-top: -8px;
    margin-left: 2px;
   
    padding: 0px;
    padding-left: -15px;
    margin-right: 2px;display:none">
 <ul  style="list-style-type:none; background: #174c06;">
 <li id="add"><a href="adminControl.php" style="text-decoration:none;color:white">Add Rooms</a></li>
 <li id="manage"><a href="manageRoom.php" style="text-decoration:none;color:white">Manage Rooms</a></li>
 </ul>
</div>
<ul style="list-style-type:none;">
<a href="registration.php" style="color:white;text-decoration:none"><li id="reg">User Registartion</li></a>
<a href="login.php" style="color:white;text-decoration:none"><li>User login</li></a>
</ul>
</div>
<div style="margin-left: 300px;
    background: #fbf8f8;
    box-shadow: 2px 3px #e8e4e4;
    padding: 59px;
    margin-right: 120px;
    padding-left: 112px;">
<form method="POST" action="adminControlCore.php">
<table>
	<tr><td>Create Room:</td> <td><input type="number" placeholder="Enter room no " name="room"/></td></tr>
	<tr><td>Create Seat:</td> <td><input type="number" placeholder="Enter seat " name="seat"/></td></tr>
	<tr><td>Add fee per seat:</td> <td><input type="number" placeholder="Enter fee per seat " name="fee"/></td></tr>
	<tr><td>Enter booked seat:</td> <td><input type="number" placeholder="Enter booked seat " name="bookSeat"/></td></tr>
	<tr><td>Enter vacant Seat:</td> <td><input type="number" placeholder="Enter vacant seat " name="vacantSeat"/></td></tr>
	<tr><td>Booked seat Number:</td> <td><input type="text" placeholder="Enter booked seat no" name="bookSeatNo"/></td></tr>
	<tr><td>Vacant seat Number:</td> <td><input type="text" placeholder="Enter vacant seat number" name="vacantSeatNo"/></td></tr>
	<tr><td></td> <td><input type="submit"  id="create" value="Create" style="background: #409cec;
    border-radius: 7px;
    width: 196px;
    color: white;
    font-size: 18px;" /></td></tr>
</table>
<?php if(isset($_REQUEST["vacant"])){
	echo "<h1 style='color:red;margin-left:140px'>please fill up all field!!</h1>";
} ?>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="adminControl.js"></script>
<?php }
else 
	header("location:adminlogin.php");
	?>
</body>
</html>