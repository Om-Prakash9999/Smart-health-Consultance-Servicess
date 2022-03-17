<?php 

$a=$_POST['email'];
$b=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$dbname="smart_health_consultant";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="select * from signup where email='$a' && password='$b'";
$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)) {
		$row=mysqli_fetch_assoc($result);
	 	header('location:index.html');
	}
	else
		echo "<script>alert('Invalid id or password');</script>";
echo "<script>window.location.assign('index.html')</script>";	      
 ?>