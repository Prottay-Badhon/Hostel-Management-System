<?php
$vl=$_POST["badhon"];
$conn=mysqli_connect("localhost","root","","hallmanagementsystem");
$sql="INSERT into school VALUES('$vl')";
mysqli_query($conn,$sql);


?>