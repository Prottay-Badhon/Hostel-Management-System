<?php

 if($_POST["room"]!=""  AND $_POST["seat"]!="" AND $_POST["fee"]!="" AND $_POST["bookSeat"]!="" AND $_POST["vacantSeat"]!="" AND $_POST["bookSeatNo"]!="" AND $_POST["vacantSeatNo"]!=""){
 $room= $_POST["room"];
 
 $seat= $_POST["seat"];
 $fee= $_POST["fee"];
 echo $bookSeat=$_POST["bookSeat"];
echo $vacantSeat=$_POST["vacantSeat"];
echo $bookSeatNo=$_POST["bookSeatNo"];
echo $vacantSeatNo=$_POST["vacantSeatNo"];
$conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem") ;
if($conn){
	$sql="INSERT INTO roominfonew VALUES('$room','$seat','$bookSeat','$vacantSeat','$bookSeatNo','$vacantSeatNo','$fee')";
	$result=mysqli_query($conn,$sql);
	if($result){
		setcookie("CreatedRoom",$room,time()+ (86400*7) );
		header("location:manageRoom.php?success");
		
	}
}
}
else header("location:adminControl.php?vacant");

?>