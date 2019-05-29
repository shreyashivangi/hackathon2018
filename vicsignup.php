
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
                    height:374%;
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
            .group0{
                position: absolute;
                top:130px;
                left:90;
                
                margin-bottom: 45px;
                background-color: transparent;
                
            }
            .group1{
                position: absolute;
                top:240px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group2{
                position: absolute;
                top:350px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group3{
                position: absolute;
                top:450px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group4{
                position: absolute;
                top:550px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group5{
                position: absolute;
                top:650px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group6{
                position: absolute;
                top:750px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group7{
                position: absolute;
                top:850px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group8{
                position: absolute;
                top:950px;
                left:90;
                
                margin-bottom: 45px;
                
            }
            .group9{
                position: absolute;
                font-family: Poppins;
                
                top:1120;
                left:60;
                margin-bottom: 45px;
            }
            .group13{
                position: absolute;
                font-family: Poppins;
                
                top:1520;
                left:60;
                margin-bottom: 45px;
            }
            .group10{
                position: absolute;
                font-family: Poppins;
                
                top:1750;
                left:90;
                
            }
            .group11 button{
                position: absolute;
                font-family: Poppins;
                 width: 340px;
                height:40px;
                 border: none;
              border-radius: 50px;
                top:2050;
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
            .group12{
                position: absolute;
                top:1050px;
                left:90;
                
                margin-bottom: 45px;
                
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
            <div class="form_heading"><p><strong> User Registration</strong></p></div>
            <form  action="newreg1.php"  method="post" enctype="multipart/form-data">
                <div class="group0">
                        <input type="text" name="firstname" required>
                        <i class="material-icons">account_circle</i>
                        <label>First Name</label>
                </div>
                <div class="group1">
                        <input type="text" name="lastname" required>
                        <i class="material-icons">account_circle</i>
                        <label>Last Name</label>
                </div>
                <div class="group2">
                        <input type="text" name="fathername" required>
                        <i class="material-icons">account_circle</i>
                        <label>Father's Name</label>
                </div>
                <div class="group3">
                        <input type="text" name="Mothername" required>
                        <i class="material-icons">account_circle</i>
                        <label>Mother's Name</label>
                </div>
                <div class="group4">
                        <input type="text" name="address" required >
                        <i class="material-icons">location_on</i>
                        <label>Address</label>
                </div>
                <div class="group5">
                        <input type="text" pattern="([6-9][0-9]{9})$" required name="number" >
                        <i class="material-icons">phone_android</i>
                        <label>Number (xxxxxxxxxx)</label><!-- Limit the phone number-->
                </div>
                 <div class="group6">
                        <input style="font-family: Poppins;color:#717078" type="date" name="dateofbirth" required>
                        <i class="material-icons">person_outline</i>
                        <label>Date of birth</label><!-- Limit the date  -->
                </div>
                 <div class="group7">
                        <input type="text" name="aadharnumber" pattern="^\d{4}\d{4}\d{4}$" required>
                        <i class="material-icons">verified_user</i>
                        <label>AADHAR Number</label><!-- Limit the aadhar number-->
                </div>
                 <div class="group8">
                        <input type="email"  name="email" required  pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                        <i class="material-icons">email</i>
                        <label>Email</label><!--correctness of email...when start with email -->
                </div>
                  <div class="group12">
                        <input type="password" name="password" required >
                        <i class="material-icons">lock_outline</i>
                        <label>Password</label>
                </div>
                <div class ="group9">
                    <p><strong>Detail of Incident:</strong></p>
                    <textarea rows="16" cols="70" name="detail" style="font-family: Poppins;border: 2px solid">
                    
                    </textarea>
                </div>
                <div class ="group13">
                    <p><strong>Court status:</strong></p>
                    <textarea rows="6" cols="70" name="court" style="font-family: Poppins;border: 2px solid">
                    
                    </textarea>
                </div> 

                <div class="group10">
                    <p style="margin-bottom: 40px; text-decoration: underline;"><strong>Attach Documents :</strong></p>
                    <ul>
                        <li><p style="text-decoration: underline;">FIR :</p><input style="border-bottom:none;margin-bottom: 30px;font-family: Poppins" type="file" accept="" name="image"></li>
                     
                        
                    </ul>
                    
                </div>
                <div class="group11">
                    <button type="">Submit Button</button>
                </div>
                
                
            </form>
        
        
        
        </div>
        
    </body>
</html>