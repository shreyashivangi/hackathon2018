<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$name=$_POST['ouser'];
$pass=$_POST['opassword'];
$pass=md5($pass);
$q= " select * from oscloginn where username='$name' && password='$pass'";

$result=mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['ousername']=$name;
	header('location:oscpage1.php');
}
else{
	?>
	<script type='text/javascript'> alert(wrong username or password entered);</script>;
	<?php
	header('location:index.php');
}

?>
