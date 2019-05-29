<?php
        session_start();
?>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            .form_box{
                    position: relative;
                left:300px;
                text-align: center;
                 margin-top:30px;
                margin-bottom: 60px;
                    width:50%;
                    height:110%;
                border: 2px solid;
                border-radius: 10px;
                background-color: white;
            }
            .form_heading{
                    font-family: Poppins;
                    font-size: 30px;
                    position: relative;
                    top:10px;
                    text-decoration: underline;
                    text-align: center;
                    color:#525555;
                
            }
            .group10{
                position: absolute;
                top:130px;
                left:90;
                
                margin-bottom: 45px;
                background-color: transparent;
                
            }
            .group0{
                position: absolute;
                top:240px;
                left:90;
                
                margin-bottom: 45px;
                background-color: transparent;
                
            }
            .group1{
                position: absolute;
                top:350px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group2{
                position: absolute;
                top:450px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group3{
                position: absolute;
                top:540px;
                left:90;
                
                margin-bottom: 45px;
                
            }
           
            .group11 button{
                position: absolute;
                font-family: Poppins;
                 width: 340px;
                height:40px;
                 border: none;
              border-radius: 50px;
                top:625;
                left:130;
                margin-bottom: 45px;
                 background-color:    rgb(155, 72, 199);           /*#993DEB*/
;
                margin-top: 30px;
                 transition: 0.2s;
              outline: none;
              cursor: pointer;
            }
             .submit button:hover{
                background-color: #6629E0;
            }
           
            
            input:not(.group10){
                outline:none;
              
                font-size: 14px;
                padding:8px 45px 8px;
                width:400px;
                border:none;
                border-bottom: 1px solid #5b605e;
                 background-color: transparent;
                
                transition:0.2s;
            }
            input:focus{
                
                outline:none;
                border-bottom-width: 4px;
                border-bottom-color: #5b48e7;
            }
             label{
                color:#717078;
                font-size: 14px;
                font-family: Poppins;
                
                position:absolute;
                top:-16px;
                left:5px;
                transition: 0.2s;
                font-weight: normal;
                
            }
             .material-icons:not(.group10){
                position:absolute;
                 top:0;
                left:0px;
                transition:0.2s;
            }
            input:focus ~ .material-icons:not(.group10){
                color: #5b48e7;
            }
            input:focus ~ label{
                outline:none;
                color:#5b48e7;
                
                
                font-weight: bolder;
                 
                
            }
             input[type=text] ~ label,input[type=password] ~ label, input[type=email] ~ label,input[type=date] ~ label,input[type=number] ~ label{
                margin-left: 40px;
            } 
           
        </style>
    </head>
  
    <body style="  background: linear-gradient(to right, #20002c, #cbb4d4);">
        <div class="form_box">
            <div class="form_heading"><p><strong> Detail of counseller </strong></p></div>
            <form  action="deccoun.php"  method="post" enctype="multipart/form-data">
              <div class="group10">
                        <input type="text" name="caseid" required>
                        <i class="material-icons">account_circle</i>
                        <label>Caseid</label>
                </div>
                <div class="group0">
                        <input type="text" name="docname" required>
                        <i class="material-icons">account_circle</i>
                        <label>Counseller Name</label>
                </div>
                <div class="group1">
                        <input type="text" name="phoneno" required>
                        <i class="material-icons">account_circle</i>
                        <label>Phone number</label>
                </div>
                <div class="group2">
                        <input type="text" name="available" required>
                        <i class="material-icons">account_circle</i>
                        <label>Availability</label>
                </div>
                <div class="group3">
                        <input type="text" name="address" required>
                        <i class="material-icons">account_circle</i>
                        <label>Address of counseller</label>
                </div>
                
                <div class="group11">
                    <button type="">Submit Button</button>
                </div>
                
                
            </form>
        
        
        
        </div>
        
    </body>
</html>