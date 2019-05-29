<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$name=$_POST['vuser'];
$pass=$_POST['vpassword'];


$q= " select * from oscUserLoginDetail where email='$name' && password='$pass'";

$result=mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['vusername']=$name;
	header('location:vicpage1.php');
}
else{
	header('location:index.php');
}

?>