<?php
if($_POST["fname"]!="" AND $_POST["bal"]!="" AND $_POST["lname"]!="" AND $_POST["number"]!="" AND $_POST["mail"]!="" ){
$fname=$_POST["fname"];
 $gender=$_POST["bal"];
$lname=$_POST["lname"];
$phone=$_POST["number"];
$email=$_POST["mail"];
$password=sha1(md5($_POST["pwd"]));
$token=md5(sha1($email.$password));

$conn=mysqli_connect("localhost:3307","root","","hallmanagementsystem");

$sql="INSERT INTO registrationnew(fname,lname,contactNumber,gmail,password,gender,authToken) VALUES('$fname','$lname','$phone','$email','$password','$gender','$token')";

 $result=mysqli_query($conn,$sql);
 header("location:registration.php?successReg");
}
else 
	header("location:registration.php?failReg");



?>