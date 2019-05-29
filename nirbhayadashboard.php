<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$q="select * from oscformm ";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$address=$row['address'];
$phone=$row['phone'];
$dob=$row['dob'];
$email=$row['email'];
$detail=$row['detail'];
$casesolved=$row['casesolved'];
 $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
         $insert1 = $db->query("INSERT into nirbhayadashboard (firstname,lastname,address,dob,email,phone,detail,casesolved)  values('$firstname','$lastname','$address','$phone','$dob','$email','$detail','$casesolved')");

}

?>