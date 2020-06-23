<?php 
  $room = $_POST["roomNo"];
  $bookedSeat = $_POST["newBookedSt"];
  $bookedSeatNo = $_POST["upSeatNo"];
  $foodStatus = $_POST["food"];
  $staydate = $_POST["stayDate"];
  
  $dudate = $_POST["DuDate"];
  $contactNumber = $_POST["contact"];
  $gurdian = $_POST["gurdian"];
  $gurdianRelation = $_POST["gurdianRelation"];
  $gurdianNumber = $_POST["gurdianNumber"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $email = $_POST["email"];
 
 echo $token =$_COOKIE["currentUser2"];
  
$conn = mysqli_connect("localhost:3307","root","","hallmanagementsystem");
if($conn){
	echo "connected";
}
$sql = "INSERT INTO roomdetailsnew(roomNo,bookedSeat,bookedSeatNumber,foodStatus,stayFrom,leaveDate,bookerEmail,contact,gurdianContact,gurdianRelation,address,city,tokenNum) 
VALUES('$room','$bookedSeat','$bookedSeatNo','$foodStatus','$staydate','$dudate','$email','$contactNumber','$gurdianNumber','$gurdianRelation','$address','$city','$token')";
 $result=mysqli_query($conn,$sql);
 if($result){
	echo "good";
	 
	
 } 
$sql2="SELECT * FROM roominfonew WHERE roomNo=$room";
$result2=mysqli_query($conn,$sql2);
 while($row=mysqli_fetch_assoc($result2)){
	$room = $row["roomNo"];
	$totalSeat = $row["TotalSeat"];
	$prebookedSeat = $row["bookedSeat"];
	 $availableSeat = $row["availableSeat"];
	 $bookedSeatNumber = $row["bookedSeatNumber"];
	 $vacantSeatNumber = $row["vacantSeatNumber"];
	
 }
	echo $newSeat = $prebookedSeat+$bookedSeat;
	echo $newAvailableSeat = $availableSeat-$bookedSeat;
	echo $newbookedSeatNo = $bookedSeatNumber."".$bookedSeatNo;
	

$str = $vacantSeatNumber;
$sub_string = $bookedSeatNo;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $newVacantSeat = substr($str, strlen($sub_string));
}
echo $newVacantSeat;
$sql3="UPDATE roominfonew SET bookedSeat='$newSeat',availableSeat='$newAvailableSeat',bookedSeatNumber='$newbookedSeatNo',vacantSeatNumber='$newVacantSeat' WHERE roomNo='$room' ";
		$result3=mysqli_query($conn,$sql3);
		if($result3){
			header("location:book.php");
		}
?>