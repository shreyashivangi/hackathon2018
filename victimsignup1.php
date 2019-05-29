<?php

    $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$em=$_POST['email'];
$q= " select * from oscuserlogindetail where email='$em'"; 

$result=mysqli_query($con, $q);
$num = mysqli_num_rows($result);
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
        <a href="index.php"><h3>Back to home page</h3></a>
        <h2 style="position: relative;left:488px;"><?php 
        if($num==1){
     echo 'email id already registered';
}
else{
    $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $pass=$_POST['password'];
     $pass=md5($pass);
      $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
         $insert1 = $db->query("INSERT into oscuserlogindetail (firstname,lastname,email,password)  values('$fname','$lname','$em','$pass')");

         echo "Email Id registered";
}

?></h2>
    </body>
</html>
