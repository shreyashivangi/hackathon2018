<?php
session_start();
     $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
        $em=$_POST['username'];
        $state=$_POST['state'];
        $pass=$_POST['password'];
        $pass=md5($pass);
        $adminname=$_SESSION['ausername'];
        $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$q= " select * from oscadminlogin where username='$adminname'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
$adminid=$row['adminid']; }
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
         $insert1 = $db->query("INSERT into oscloginn (username,password,state,adminid)  values('$em','$pass','$state','$adminid')");
?>

<html>
    <head>
          <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
             body, html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
              font-family: Poppins;
            
            }
            form p{
                position: relative;
                left:438;
                top:30px;
                color: black;
            }
            form input{
                 position: relative;
                left:438;
                top:auto;
                width:270px;
                height:40px;
            }
            form button{
                 position: relative;
                left:438;
                top:auto;
                border: none;
                border-radius: 50px;
                width:150px;
                height:40px;
                cursor: pointer;
                   color:white;
                 background: linear-gradient(to right, #000046, #1cb5e0);
            }
           
        </style>
    </head>
    <body>
          <div >
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;height:90px;  background: linear-gradient(to right, #be93c5, #7bc6cc); ">
            <img src="emblem-dark.png" style="position:absolute; left:630px;top:5px;">
                <img src="left-logo.png" style="position:absolute; left:70px;top:25px;" >
            </div>
             <p style="font-family:Poppins;position: absolute;left:420px;top:100px;text-align: center;font-size: 20px;color: #060202;"><strong>MINISTRY OF WOMEN AND CHILD DEVELOPMENT<br>GOVERNMENT OF INDIA</strong></p>                          
        </div>
        <a href="adminpage1.php"><h3>Back to home page</h3></a>
        <h2 style="position: relative;left:488px;">Emloyer has been registered</h2>
    </body>
</html>
