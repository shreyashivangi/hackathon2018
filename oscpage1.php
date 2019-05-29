<?php
    session_start();
    if($_SESSION["ousername"]!=true){
        header("location:index.php");
    }
?>
<html>
    <head>
         <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
        <style>
             body, html {
            height: 100%;
            margin: 0;
                 width: 100%;
                 padding:0;
                           
                background-position: center;
                 font-family: Poppins;

            }
            .new_registr button{
                
                position: relative;
               display: block;
                top:70px;
                left:480px;
                outline:none;
                background-color: white;
                font-size: 30px;
                border:2px solid;
                width:270px;
                height:50px;
                margin-bottom: 50px;
                text-align: center;
              
                
                border-radius: 50px;
            }                                                  
/*
            .new_registr a{
                 font-family: Poppins;
                text-decoration: none;
                  color:black;
                
            }                                   
           
*/
/*             background: linear-gradient(to right, #d38312, #a83279);*/
            
            .new_registr a:hover{
                
                 background: linear-gradient(to right, #d38312, #a83279);
                color:white;
            }
            .new_registr button:hover{
                
                background: linear-gradient(to right, #d38312, #a83279);
                color:white;
            }
            
            .already_registr button{
                
                  position: relative;
                top:100px;
                left:480px;
                font-size: 30px;
                border:2px solid;
                width:260px;
                 outline:none;
                height:40px;
                text-align: center;
                
                margin-bottom: 50px;
                background-color: white;
                
                cursor: pointer;
                border-radius: 50px;
                
            }
            
            .already_registr button:hover{
                
                 background: linear-gradient(to right, #d38312, #a83279);
                color:white;
                 
            } 
            .modify_registr button{
                display:block;
                
                  position: relative;
                top:120px;
                left:480px;
                font-size: 30px;
                border:2px solid;
                width:260px;
                background-color: white;
                margin-bottom: 50px;
                height:40px;
                text-align: center;
                 cursor: pointer;
              
                border-radius: 50px;
            }
            
            .modify_registr button:hover{
                
                 background: linear-gradient(to right, #d38312, #a83279);
                color:white;
                 
            } 
            
            .counsellerhelp button{
                display:block;
                
                  position: relative;
                top:140px;
                left:480px;
                font-size: 30px;
                border:2px solid;
                width:280px;
                background-color: white;
                margin-bottom: 30px;
                height:80px;
                text-align: center;
                 cursor: pointer;
                text-decoration: none;
              
                border-radius: 50px;
            }
            .counsellerhelp button:hover{
                
                 background: linear-gradient(to right, #d38312, #a83279);
                color:white;
                 
            } 
            
            #a{
                display: none;
            }
            #b{
                display:none;
            }
          
          
           
             .phone_no input{
                  position:absolute;
                top:543px;
                left:770px;
                outline:none;
                font-size: 30px;
                border:2px solid;
                width:200px;
                height:40px;
                text-align: center;
               
               
                
                
                border-radius: 50px;
                
            }
             .phone_no button{
                  position: absolute;
               top:543px;
                left:990px;
               
                font-size: 30px;
                border:2px solid;
                width:160px;
                height:40px;
                text-align: center;
               
                 cursor: pointer;
               
                
                
                border-radius: 50px;
                
            }
            .case_id input{
                      position:absolute;
                top:670px;
                left:770px;
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
                top:670px;
                left:990px;
               
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
    <body style=" background: linear-gradient(to right, #be93c5, #7bc6cc); ">  
        <div >
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;height:90px;  background: linear-gradient(to right, #be93c5, #7bc6cc); ">
            <img src="emblem-dark.png" style="position:absolute; left:630px;top:5px;">
                <img src="left-logo.png" style="position:absolute; left:70px;top:25px;" >
            </div>
             <p style="font-family:Poppins;position: absolute;left:420px;top:100px;text-align: center;font-size: 20px;color: #060202;"><strong>MINISTRY OF WOMEN AND CHILD DEVELOPMENT<br>GOVERNMENT OF INDIA</strong></p>                          
        </div>
        <hr style="border:2px solid black;">
        <h1 style="font-family: Poppins;text-align: center; font-size: 50px;color:black;">Hi ,  What you Wana Do?</h1>
        
<!--        <img src="left-logo.png" style="position:absolute;right:50px;top:20px; width: 150px;">-->
        <a href="osclogout.php" style="display: block; text-align: right;position: absolute;top:220px;right:40px;font-size: 20px;text-decoration: none;">Logout</a>
        <div class="new_registr">
            
            
            <a href="newreg.php" align ="right" style="text-decoration: none;"><button>New Registration</button></a>
            
        </div>
        <div class="already_registr">
            <button type="button" onclick="display()">Already Register</button>
        </div>
        <div class="modify_registr">
            <button type="button" onclick="display_caseid()">Modify Register</button>
        </div>
          <div class="counsellerhelp">
          <a href ="osccoun1.php" style="text-decoration: none;"><button type="button"> Need help of counseller</button></a>
        </div>
       
        <div  class="phone_no">
            <form id="a"  method="post" action="oscvicsignup.php">
                 <h3  style=" position:absolute;
               top:480px;
                left:810px;">Phone Number :</h3>
            <input type="text" name="phone_number" pattern="([6-9][0-9]{9})$">
            <button type="submit">Submit</button>
            </form>
        </div>
        <div class="case_id">
            <form id="b"  method="post" action="oscadmin.php">
                 <h3  style="position: absolute;
                top:610px;
                left:820px;">Case ID:</h3>
            <input type="text" name="case_id">
            <button type="submit">Submit</button>
            </form>
        </div>
        
         <script>
function display() {
    var x = document.getElementById("a");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
             function display_caseid() {
    var y = document.getElementById("b");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>
    </body>
</html>