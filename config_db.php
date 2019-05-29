<?php

$username = "root";
$password = "";
$database = "hackathon";
$server = "localhost";
$conn = mysqli_connect($server, $username, $password, $database)
        or
        die(mysqli_errno($conndb));
?>
