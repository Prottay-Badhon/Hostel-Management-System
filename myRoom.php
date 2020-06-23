<html>
<head>
<style type="text/css">
th,td{
   
   text-align:center;
}
table{
	margin-left:4px;
	
	border:collapse;
	padding:3px;
	margin-left:0px;
	font-size:14px;
}
#dnload:hover{
	transform:scale(1.2);
	cursor:pointer;
}
#logOutDiv:hover{
	transform:scale(1.2);
	transition:.5s;
}
</style>
</head>
<body>
<html>
<head>
<link rel="stylesheet" href="index.css"/>
</head>
<body>

<div style="height:70px;width:100%;background:navy;color:white">
<h2 style="text-align:center;">Hostel Management System</h2>
<div id="logOutDiv" style="height:100px;width:100px;float:right;"><a href="logOut.php" style="text-decoration:none;color:white;font-size:20px;">log out</a></div>
</div>
<h2 style="font-size:30px;font-family:arial;border-bottom:1px solid black;margin-left:21%;">Your Booked Room</h2>

<div style="height:100%;width:20%;background:green;float:left;color:white;font-size:20px;margin-top: -85px;">
<ul style="list-style-type:none;">


</ul>
</div>

<div >
<table border id="target" style="border-collapse:collapse;padding:20px">
<tr> <th>Room No</th> <th>Booked seat</th> <th>seat Number</th> <th>food Status</th> <th>stay From</th> <th>Duration Date</th> <th>Your Number</th> <th>Your Address</th><th>Your email</th><th>Your City</th> <th>Your Token</th></tr>

<?php 
  if(isset($_COOKIE["currentUser2"])){
	  $conn = mysqli_connect("localhost:3307","root","","hallmanagementsystem");
	  $token = $_COOKIE["currentUser2"];
	  $sql2 ="SELECT * FROM roomdetailsnew WHERE tokenNum = '$token' ";
	 $result2 = mysqli_query($conn,$sql2);
	
	 while($row=mysqli_fetch_assoc($result2)){ ?>
		
		<tr>
		<td><?php echo $row["roomNo"];?></td>
		<td><?php echo $row["bookedSeat"];?></td>
		<td> <?php echo $row["bookedSeatNumber"];?></td>
		<td> <?php echo $row["foodStatus"];?></td>
		<td><?php echo $row["stayFrom"];?></td>
		<td><?php echo $row["leaveDate"];?></td>
		<td><?php echo $row["contact"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["bookerEmail"];?></td>
		
		
		<td><?php echo $row["city"];?></td>
		<td> <?php echo $row["tokenNum"];?></td>
		</tr>
	<?php } ?>
	<?php } ?>
</table>
</div>

<button id="dnload" onclick="Export()" style="background:navy;padding:5px;border-radius:5px;
color:white;margin-top:10px;margin-left:10px">Download PDF</button>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.62/pdfmake.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="myRoom.js"></script>
</body>
</html>