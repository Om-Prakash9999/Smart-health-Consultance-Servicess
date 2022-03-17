<?php

$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["email"];
$d = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_health_consultant";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "INSERT INTO `signup`(`fname`, `lname`, `email`, `password`, `user`) VALUES ('$a','$b','$c','$d','client')";

if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Account created Succesfully');
	window.location.assign('index.html')</script>";
	# code...
}
else{
		echo " Account not created";
}
mysqli_close($conn);
?>