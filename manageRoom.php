<html>
<head>
<style type="text/css">
#add{
	margin-top:20px;
	
}
#add:hover{
	cursor:pointer;
}
input{
	padding:12px;
	width:
}
#logout:hover{
	cursor:pointer;
	transform:scale(1.2);
	transition:.5s;
}
</style>
</head>
<body>

<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div style="height:100px;width:100px;float:right" id="logout"><a href="adminLogOut.php" style="text-decoration:none;color:white">Log Out</a></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Manage Room</h2>

<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -85px;">
<div id="add"style="margin-left:50px;"><a href="adminControl.php" style="text-decoration:none;color:white">Add a room</a></div>

</div>




<div 	style="background: #fbfbfb;
    
    padding: 41px;
    padding-top: 34px;
    margin-left: 300px;
    margin-right: 150px;
    box-shadow: 1px 4px #f5f1f1;">
<?php if(isset($_REQUEST["success"])){
	echo "<h2 style='color:green;margin-left:140px'>Room successfully created.You can manage now!!</h2>";
} ?>	
<form method="POST" action="manageRoomCoreCore.php">
<table style="margin:auto">
<tr><td style="font-size:18px">Select Room:</td> <td>
<select style="padding-left: 36px;
    width: 102px;padding:10px" name="room">
<?php $conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem") ;
  $sql="Select roomNo from roominfonew";
 $result = mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){ ?>
	 <option style="margin-left: 0px; */
    padding-left: 36px;
    /* text-align: center; */
    padding-right: 0px;
    width: 102px;"><?php echo $findRoom=$row["roomNo"];?></option>
    
	     
<?php } ?>
 
</select>

</td>
<td><input type ="submit" value="see details" style="margin-left:-95px;background: #058aff;
    color: white;"/></td>
</tr>
</form>
<div>
<?php
$room=$_COOKIE["userRoom"];
$conn2=mysqli_connect("localhost:3307","root","","hallmanagementsystem") ;
if($conn2){
	$sql3="SELECT * FROM roominfonew WHERE roomNo='$room' ";
	$result3=mysqli_query($conn2,$sql3);
	
}
while($row=mysqli_fetch_assoc($result3)){
		$roomNo = $row["roomNo"];
	   $TotalSeat = $row["TotalSeat"];
		$bookedSeat = $row["bookedSeat"];
		$availableSeat = $row["availableSeat"];
		$fees_per_seat = $row["fees_per_seat"];
		$bookedSeatNumber = $row["bookedSeatNumber"];
		$vacantSeatNumber = $row["vacantSeatNumber"];
		
	}
?>
</div>
<form method="POST" action="manageRoomCore.php">
<tr><td style="font-size:18px">Room No:</td> <td><input style="" type="number" name="roomNo" placeholder="Enter room number" value="<?php echo $roomNo; ?>"/></td></tr>
<tr><td style="font-size:18px">Create Total seat:</td> <td><input style="" type="number" name="seat" placeholder="Enter number of seat" value="<?php echo $TotalSeat; ?>"/></td></tr>

<tr><td style="font-size:18px">Booked seat:</td> <td><input style="" type="number" name="bookSeat" placeholder="Enter booked seat" value="<?php echo $bookedSeat;?>"/></td></tr>
<tr><td style="font-size:18px">Available seat:</td> <td><input style="" type="number" name="vacantSeat" placeholder="Enter available seat" value="<?php echo $availableSeat; ?>"/></td></tr>
<tr><td style="font-size:18px">Book seat No:</td> <td><input style="" type="text" name="bookSeatNo" placeholder="Enter booked seat identity" value="<?php echo $bookedSeatNumber; ?>"/></td></tr>
<tr><td style="font-size:18px">Vacant seat No:</td> <td><input style="" type="text" name="vacantSeatNo" placeholder="Enter vacant seat identity"value="<?php echo $vacantSeatNumber; ?>"/></td></tr>
<tr><td style="font-size:18px">Add fee per seat:</td> <td><input style="" type="number" name="fee" placeholder="Enter fees per seat" value="<?php echo $fees_per_seat; ?>"/></td></tr>
<tr><td style="font-size:18px"></td> <td><input style="
background: #058aff;;width:196px;color:white;border-radius:4px" type="submit" id="submitBtn" value="Update"/></td></tr>
</table>
</form>
<?php if(isset($_REQUEST["update"])){
	echo "<h2 style='color:green;margin-left:250px'>Room information Updated !</h2>";
} ?>
</div>
</body>
</html>

