<?php
session_start();
$caseid=$_POST['case_id'];
$_SESSION["case_id"]=$caseid;
$con=mysqli_connect('localhost','root');
$u=$_SESSION["ousername"];
mysqli_select_db($con,'hackathon');
$q= " select * from oscloginn where username='$u'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
$employerid=$row['employerid'];
$adminid=$row['adminid'];
}
$q= " select * from oscformm where caseeid='$caseid'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
	if($row['employerid']==$employerid)
{
	header("location:oscvicmodify.php"); }
else if($row['adminid']==$adminid)
{
	header("location:oscvicmodify.php");
}
else
{
	header("location:oscpage1.php");
}
}
?>