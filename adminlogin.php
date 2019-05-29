<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$name=$_POST['auser'];
$pass=$_POST['apassword'];

$q= " select * from oscadminlogin where username='$name' && password='$pass'";

$result=mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num==1){
	$_SESSION['ausername']=$name;
	header('location:view_case_status.php');
}
else{
	?>
	<script type='text/javascript'> alert(wrong username or password entered);</script>;
	<?php
	header('location:index.php');
}

?>
