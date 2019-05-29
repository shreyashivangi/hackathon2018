<?php
session_start();
$c=$_SESSION['caseid'];
$loc=$_POST['city'];
$state=$_POST['state'];
		$dbHost= 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
          $insert1 = $db->query("INSERT into counseller(caseid,locofvic,state) values('$c','$loc','$state')");          
?>
<html>
    <head>
         <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
            body,html{
                margin:0;
                padding:0;
                font-family: Poppins;
                
            }
            .case_id input{
                      position:absolute;
                top:370px;
                left:540px;
                outline:none;
                font-size: 30px;
                border:2px solid;
                width:200px;
                height:40px;
                text-align: center;
              
               
                
                
                border-radius: 50px;
                
            }
            .case_id button{
                  position:absolute;
               top:370px;
                left:800px;
               
                font-size: 30px;
                border:2px solid;
                width:160px;
                height:40px;
                text-align: center;
            
                 cursor: pointer;
               
                
                
                border-radius: 50px;
                
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
        <p style="text-align: center;font-size:25px;"><strong>Hi User, You will be updated soon about counseller</strong> </p>    
        <a href="osclogout.php" style="float:right;position: absolute;top:220px;right:84px;font-size: 20px;text-decoration: none;" >LOG OUT</a>
        
        
        <div style="position:absolute;bottom: 0;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;width:567%;">
            <p>Footer!!</p>
            </div>
        </div>
       
    </body>
</html>