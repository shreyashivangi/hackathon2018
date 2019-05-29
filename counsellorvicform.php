<?php
session_start();
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
            form{
                
                text-align: center;
            }
            form input {
                
               position: relative;
                top:10px;
                outline:none;
                width:280px;
                height:40px;
                border:none;
                border-bottom: 4px solid black;
            }
            form input:focus{
                
                outline:none;
                border-bottom-color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div >
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;height:90px;  background: linear-gradient(to right, #be93c5, #7bc6cc); ">
            <img src="emblem-dark.png" style="position:absolute; left:630px;top:5px;">
                <img src="left-logo.png" style="position:absolute; left:70px;top:25px;" >
            </div>
             <p style="font-family:Poppins;position: absolute;left:440px;top:100px;text-align: center;font-size: 20px;color: #060202;"><strong>MINISTRY OF WOMEN AND CHILD DEVELOPMENT<br>GOVERNMENT OF INDIA</strong></p>                          
        </div>
        <h1 style="text-align:center;"><strong>Hi User, Where You Live ?</strong></h1>
        <form method="post" action="counsellorvicform1.php">
            <p style="position: relative;top:10px;font-size: 25px;">CITY :</p>
            <input type="text" name="city"><br/><br/><br/>
            <p style="position:relative;top:10px;font-size: 25px;"> STATE :</p>
            <input type="text" name="state"><br/><br/><br/>
            <button type="submit" style="border: 1px solid black;border-radius: 50px;cursor: pointer;
                   color:white;
                 background: linear-gradient(to right, #000046, #1cb5e0);height:35px;width:140px;">Submit</button>
        </form>
        <div style="position:relative;margin-top: 100px;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Footer!!</p>
            </div>
        </div>
        </div>
    </body>
</html>