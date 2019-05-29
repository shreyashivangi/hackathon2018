<?php
session_start();
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
$caseid=$_POST['caseid'];
$docname=$_POST['docname'];
$phoneno=$_POST['phoneno'];
$available=$_POST['available'];
$address=$_POST['address'];
$insert = $db->query("UPDATE counseller set nameofdoc='$docname', phno='$phoneno',available='$available' ,address='$address',helpprovide='1' where caseid='$caseid'");  
header('location:osccoun1.php');
?>
