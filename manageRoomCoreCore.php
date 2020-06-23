<?php
 $room=$_POST["room"];
 setcookie("userRoom",$room,time()+(86400*7));
if($room){
	header("location:manageRoom.php");
}
?>
