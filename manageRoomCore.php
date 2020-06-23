<?php 
echo $room=$_POST["roomNo"];
echo $bookSeat=$_POST["bookSeat"];
echo $totalSeat=$_POST["seat"];
echo $vacantSeat=$_POST["vacantSeat"];
echo $bookSeatNo=$_POST["bookSeatNo"];
echo $vacantSeatNo=$_POST["vacantSeatNo"];
echo $fee=$_POST["fee"];

$conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem") ;
if($conn){
	$sql2="UPDATE roominfonew SET TotalSeat='$totalSeat',bookedSeat='$bookSeat',availableSeat='$vacantSeat',bookedSeatNumber='$bookSeatNo',vacantSeatNumber='$vacantSeatNo',fees_per_seat='$fee' WHERE roomNo='$room' ";
	$result=mysqli_query($conn,$sql2);
	if($result){
	
		header("location:manageRoom.php?update");
	}
}
?>