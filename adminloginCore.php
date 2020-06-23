<?php 
$name=$_POST["username"];
$password=$_POST["pwd"];
echo $token =sha1(md5($name.$password));
$conn = mysqli_connect("localhost:3307","root","","hallmanagementsystem");
if($conn){
	$sql = "SELECT * FROM adminnew WHERE authtoken='$token' ";
	
	$result = mysqli_query($conn,$sql);
	if($row=mysqli_fetch_assoc($result)){
		setcookie("admin",$password,time()+(86400*7));
		header("location:adminControl.php");
	}
	else 
		header("location:adminlogin.php?wrongInfo");
}



?>
