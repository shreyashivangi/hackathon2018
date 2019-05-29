<?php
session_start();
?>
<html>
    <head>
        <title>User Registration</title>
         <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
           
   function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            
            input.setCustomValidity('');
        }
    }
            function visibility() {
       
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type="password";
    }
       
}
</script>
        
        <style>
            body,html{
                margin:0;
                padding:0;
            }
            body{
                background-image: url(formbg1.jpg) ;
            }
            .regstr_box{
                position: relative;
                left:380px;
                top:30px;
                height:95%;
                width:40%;
                
                border:none;
                border-radius: 10px;
                margin-top: 20px;
                margin-bottom: 20px;
                background-color: white;
                
            }
            .form_heading{
                
                    position: absolute;
                    text-align: center;
                    left:125px;
                    top:28px;
                    font-family: Poppins;
                    font-size: 30px;
                    color:#525555;
               font-weight:900;
                    
            }
           
            .group5{
                position: absolute;
                top:200px;
                left:60px;
                margin-top: 45px;
                margin-bottom: 45px;
            }
            .group1{
                position: absolute;
                top:100px;
                left:60px;
                margin-top: 45px;
                margin-bottom: 45px;
            }
             .group2{
                position: absolute;
                top:300px;
                left:60px;
                margin-top: 45px;
                margin-bottom: 45px;
            }
             .group3{
                position: absolute;
                top:420px;
                left:60px;
                margin-top: 45px;
                margin-bottom: 45px;
            }
            input{
                outline:none;
                              
                font-size: 14px;
                padding:8px 45px 8px;
                width:300px;
                border:none;
                border-bottom: 2px solid #5b605e;
                
                transition:0.6s;
            }
            input:focus{
                
                outline:none;
                border-bottom-color: #5b48e7;
            }
            label{
                color:#717078;
                font-size: 14px;
                font-family: Poppins;
                
                position:absolute;
                top:-16px;
                left:5px;
                transition: 0.6s;
                font-weight: normal;
                
            }
             .material-icons{
                position:absolute;
                 top:0px;
                left:0px;
                transition:0.6s;
            }
            input:focus ~ .material-icons{
                color: #5b48e7;
            }
              input:focus ~ label{
                outline:none;
                color:#5b48e7;
           
                
            }
         
            input[type=text] ~ label,input[type=password] ~ label,input[type=email] ~ label{
                margin-left: 40px;
            } 
            .register_button button{
                
                position: absolute;
                font-family: Poppins;
                 width: 240px;
                height:40px;
                 border: none;
              border-radius: 50px;
                top:520;
                left:120;
                margin-bottom: 45px;
                  background: linear-gradient(to right,rgba(0, 0, 0, 0.97),rgb(168, 168, 168));
                 transition-duration: background  2s;/*#993DEB*/
;
                margin-top: 30px;
                 
              outline: none;
              cursor: pointer;
            
            }
            .register_button button:hover{
                background:  linear-gradient(to left,rgba(0, 0, 0, 0.97),rgb(168, 168, 168));
            }
           
        </style>
    </head>
    <body>
    	<a href="osclogout.php" ><button align="right">LOGOUT</button></a>
        <div class="regstr_box">
             <div class="form_heading"><p><strong>Employer Registration</strong></p></div>
            <form action="adminpage11.php" method="POST">
               
               
                <div class="group1">
                        <input type="text" name="username"  required>
                        <i class="material-icons">account_circle</i>
                        <label>Username</label><!--Email Validation and Label movement -->
                </div>
                         <div class="group5">
                        <input type="text" name="state" required>
                        <i class="material-icons">account_circle</i>
                        <label>State</label>
                </div>
                  <div class="group2" id="hhh">
                        <input id="password" type="password" name="password" required>
                        <i class="material-icons">lock_outline</i>
                        <label>Password</label>
                    <i id="save" class="material-icons" style="position: absolute;left:240px;cursor: pointer;" onclick="visibility()">visibility</i>
                </div>
                  <div class="group3">
                        <input id="confirm password" type="password" name="confirm password" oninput="check(this)" required >
                        <i class="material-icons">lock_outline</i>
                        <label>Confirm Password</label>
                </div>
                <div class="Register_button">
                    <button type="submit" name="submit">Register</button>
                </div>
            </form>
        </div>
    </body>
</html>
