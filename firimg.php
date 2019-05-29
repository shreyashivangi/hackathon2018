<?php
session_start();
$con=mysqli_connect('localhost','root');
$p=$_SESSION['caseid'];
mysqli_select_db($con,'hackathon');
$q="select * from oscformm where caseeid='$p'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
	  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['fir'] ).'" height="1000" width="1000"/>';
}
?>