<html>
<head>
<link rel="stylesheet" href="dashboard.css"/>
</head>
<body>
<?php if(isset($_COOKIE["currentUser"])) { ?>
<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div id="logOutDiv" style="height:100px;width:100px;float:right;"><a href="logOut.php" style="text-decoration:none;color:white;font-size:20px;">log out</a></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Dash Board</h2>

<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -85px;">
<ul style="list-style-type:none;">
<a href="dashboard.php" style="color:white;text-decoration:none"><li id="reg">Dash Board</li></a>
<a href="profile.php" style="color:white;text-decoration:none"><li>My profile</li></a>
<a href="" style="color:white;text-decoration:none"><li>change Password</li></a>
<a href="book.php" style="color:white;text-decoration:none"><li>Book hostel</li></a>
<a href="roomDetails.php" style="color:white;text-decoration:none"><li>Room Details</li></a>
<a href="logOut.php" style="color:white;text-decoration:none"><li>Log out</li></a>

</ul>
</div>
<div id="profileDiv" style="background: #8a008a;
    height: 85px;
    width: 156px;
    padding: 29px;
    margin-left: 355px;font-family:arial;border-radius:5px">
<h1 style="color:white;text-align:center;">My profile</h1>
<div id="smlDiv" style="background: #f5fcff;
    margin-left: -27px;
    padding: 5px;
    margin-right: -28px;
    text-align: center;
    margin-top: -9px;
    height: 37%;"><a href="profile.php" style="text-decoration:none;color:green">See Details > </a></div>
</div>
<div id="RoomDiv" style="background: #184c04;;
    height: 85px;
    width: 156px;
    padding: 29px;
    margin-left: 605px;
	margin-top:-141px;font-family:arial;border-radius:5px">
<h1 style="color:white;text-align:center;">My Room</h1>
<a href="myRoom.php" style="text-decoration:none;color:purple"><div id="smlDiv2" style="background: #f5fcff;
    margin-left: -27px;
    padding: 5px;
    margin-right: -28px;
    text-align: center;
    margin-top: -9px;
    height: 37%;">See All ></div></a>
</div>
<?php }
else 
	header("location:login.php");

 ?>
</body>
</html>