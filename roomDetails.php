<html>
<head>
<style type="text/css">
#dtbtn:hover{
	cursor:pointer;
	transform:scale(1);
}
#book:hover,input:hover,select:hover{
	cursor:pointer;
}
#book{
	background: #1e54a7;
    padding: 10px;
    color: white;
    font-size: 18px;
    width: 186px;
    border-radius: 7px;
}
input,select{
	padding:7px;
}
select{
	width:100px;
}
#info{
	margin-left:0px;
	margin-top: 0%;
    padding-left: 395px;
    background: #034148;
    color: white;
    height: 41px;
}
#bookinfo{
	margin-top: 0%;
    padding-left: 395px;
    background: #e9f7f7;
    color: #652626;
    height: 41px;
}
#logOutDiv:hover{
	transform:scale(1.2);
	transition:.5s;
}
</style>
</head>
<body>
<?php
  if(isset($_POST["roomNo"])){
	  $room=$_POST["roomNo"];
$conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem");
$sql="SELECT * FROM roominfonew WHERE roomNo=$room";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	$room = $row["roomNo"];
	$TotalSeat = $row["TotalSeat"];
	$bookedSeat = $row["bookedSeat"];
	$availableSeat = $row["availableSeat"];
	$vacantSeatNumber = $row["vacantSeatNumber"];
	
	$fees_per_seat = $row["fees_per_seat"];
}
  }
?>

  


<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div id="logOutDiv" style="height:100px;width:100px;float:right;"><a href="logOut.php" style="text-decoration:none;color:white;font-size:20px;">log out</a></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Book Room</h2>

<div style="height:237%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -85px;">
<ul style="list-style-type:none;">
<a href="dashboard.php" style="color:white;text-decoration:none"><li id="reg">Dash Board</li></a>
<a href="profile.php" style="color:white;text-decoration:none"><li>My profile</li></a>
<a href="" style="color:white;text-decoration:none"><li>change Password</li></a>
<a href="book.php" style="color:white;text-decoration:none"><li>Book hostel</li></a>
<a href="roomDetails.php" style="color:white;text-decoration:none"><li>Room Details</li></a>
<a href="logOut.php" style="color:white;text-decoration:none"><li> Log out</li></a>

</ul>
</div>
<div id="bookDiv" style="margin-left:300px;border:1px solid ">

<table style="margin-left:240px;padding:20px;margin-top:5px;">
<h2 style="margin-left:0%" id="info">Room information</h2>
<form method="POST" action="">
<tr><td style="color:black;font-size:20px;font-weight:bold;">Room No:</td> <td><select name="roomNo" id="roomNo">
<?php
$conn2=mysqli_connect("localhost:3307","root","","hallmanagementsystem");
$sql2="SELECT roomNo FROM roominfonew";
$result2=mysqli_query($conn2,$sql2);
while($row2=mysqli_fetch_assoc($result2)){ ?>
	<option><?php echo $room = $row2["roomNo"];?></option>
	
<?php } ?>

</select></td></tr>
<tr><td style="color:black;font-size:20px;font-weight:bold;"></td> <td><input id="dtbtn"style="background:navy;color:white;padding:7px;width:150px;border-radius:5px;"type="submit" value="Room Details"/></td></tr>
</form>

<tr><td style="color:black;font-size:20px;font-weight:bold;">Total Seat of this room:</td> <td> <?php echo $TotalSeat; ?></td></tr>
<tr><td style="color:black;font-size:20px;font-weight:bold;">BookedSeat:</td> <td><?php echo $bookedSeat; ?></td></tr>
<tr><td style="color:black;font-size:20px;font-weight:bold;">Available Seat:</td> <td><?php echo $availableSeat; ?></td></tr>
<tr><td style="color:black;font-size:20px;font-weight:bold;">Vacant Seat Number:</td> <td><?php echo $vacantSeatNumber; ?></td></tr>
<tr><td style="color:black;font-size:20px;font-weight:bold;">Fees per seat:</td> <td><?php echo $fees_per_seat; ?></td></tr>
</table>

