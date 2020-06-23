<?php
$gmail=$_POST["mail"];
$password=$_POST["pwd"];

 $encrptPassword=sha1(md5($password));
$createdToken=md5(sha1($gmail.$encrptPassword));
$conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem");
$sql="SELECT * FROM registrationnew where password='$encrptPassword'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
	$token=$row["authToken"];
	$userName=$row["fname"]." ".$row["lname"];
}
if($token==$createdToken){
	setcookie("currentUser",$userName,time()+ (86400*7) );
	setcookie("currentUser2",md5($userName."user"),time()+ (86400*7) );
	header("location:dashboard.php");
}
else
	header("location:login.php?wrongInfo");
?>