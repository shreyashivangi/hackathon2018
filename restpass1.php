<?php
session_start();
$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
 $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        $p=$_POST['password'];
        $p=md5($p);
        $e=$_SESSION['email'];
 $insert = $db->query("UPDATE oscuserlogindetail set password='$p' where email='$e' ");
 header("location:index.php");
?>