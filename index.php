<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <link rel="stylesheet" href="css/style.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
             $(document).ready(function(){
            function scrollToElement(selector) {
                        $('html,body').animate({
                        scrollTop: $(selector).offset().top
                                },2000);    
                                };

                    $(document).on('click', 'a.uruna', function () {
                        scrollToElement($(this).attr('href'));
                        });
                  });
        </script>
       
       
        <style>
          body, html {
    height: 100%;
    margin: 0;
    font: 400 15px/1.8 "Lato", sans-serif;
              font-family: Poppins;
            color: #777;
            }

.bg1,.bg2,.bg3,.bg4,.bg5{
  position: relative;
  
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
            .bg1 {
  background-image: url("silhouette_hero_image.png");
               max-width:100%;
  height: 100%;
                
}
            .bg2 {
  background-image: url("lettersofhope_banner.jpg");
  height: 600px;
                max-width:100%;
                opacity: 0.7;
                 z-index:-1;
            }
            .bg3 {
  background-image: url("sl.jpg");
  height: 100%;
                max-width:100%;
                 filter: grayscale(30%);
               
                z-index:-1;
            }
            .bg4 {
  background-image: url("home.slide_.1.jpg");
  height: 100%;
                max-width:100%;
                opacity: 0.7;
                 z-index:-1;
            }
           
            .bg4 a:hover{
                background: linear-gradient(to right, #d38312, #a83279);
            }
           
             .bg5 {
  background-image: url("wedo-donate-now.jpg");
  height: 100%;
       max-width:100%;      
               opacity: 0.7;
                  z-index:-1;
            }


            .bg1_head1{
                    font-family: Poppins;
                    font-size:70px;
                    color:white;
                    position: absolute;
                    top:140px;
                    left:300px;
               
                
                
                    
            }
            .bg1_head2{
                    font-family: Poppins;
                    font-size:30px;
                    color:white;
                    position: absolute;
                    top:300px;
                    left:380px;
                
            }
            .nav{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background: linear-gradient(to right, #16222a, #3a6073);

                
                }

           .nav li {
 	          display:inline-block;   
               /* margin-left: 30px;*/
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 6px;
            font-family: Poppins;
            font-size:15px;
            text-decoration: none;
            /*margin-left: 120px;*/
                margin-left: 15px;/*margin-left:25..no JOin us*/
                
            }

            li a:hover {
                
                border-bottom: 3px solid white;
            }
           
             .form_box{
                position: absolute;
                margin-top:30px;
                margin-bottom: 30px;
                left:80px;
                height:90%;
                width:440px;
                border:6px solid white;
                border-radius: 10px;
                 background-color: transparent;
                 
               
                
            }
            .form_box2{
                position: absolute;
                margin-top:30px;
                margin-bottom: 30px;
                left:660px;
                height:90%;
                width:440px;
                 border:6px solid white;
                border-radius: 10px;
                 background-color:transparent;
                 
               
                
            }
             .form_heading1{
                
                    position: absolute;
                    text-align: center;
                    left:122px;
                    top:22px;
                    font-family: Poppins;
                    font-size: 30px;
                    color:white;
               font-weight:900;
                    
            }
            .form_box1{
                position: absolute;
                
                margin-top:30px;
                margin-bottom: 30px;
                left:380px;
                bottom:5px;
                height:90%;
                width:440px;
                  border:6px solid white;
                border-radius: 10px;
                background-color: transparent;
                
                
            }
            .form_heading{
                
                    position: absolute;
                    text-align: center;
                    left:122px;
                    top:22px;
                    font-family: Poppins;
                    font-size: 30px;
                    color:white;
               font-weight:900;
                    
            }
            .group{
                position: relative;
                top:120px;
                left:60px;
                margin-top: 45px;
                margin-bottom: 45px;
            }
            input{
                outline:none;
                color:white;
                font-size: 14px;
                padding:8px 45px 8px;
                width:300px;
                border:none;
                border-bottom: 6px solid white;
                background-color: transparent;
                transition:0.6s;
            }
            input:focus{
                
                outline:none;
                border-bottom-color: #f5243c;
            }
            label{
                color:white;
                font-size: 18px;
                font-family: Poppins;
                
                position:absolute;
                top:4px;
                left:5px;
                transition: 0.6s;
                font-weight: normal;
                
            }
            .material-icons{
                position:absolute;
                left:0px;
                color:white;
                transition:0.6s;
            }
            input:focus ~ .material-icons{
                color: #f5243c;
            }
            input:focus ~ label,input:valid ~ label{
                outline:none;
               color:#f5243c;
                font-size: 14px;
                 top:-20px;
                
            }
         
            input[type=text] ~ label,input[type=password] ~ label{
                margin-left: 40px;
            } 
            .for_pass{
                    position: absolute;
                    top:296px;
                    left:250px;
                    font-family: Poppins;
                font-size: 15px;
                font-weight: lighter;
                
                
                
            }
            .for_pass a{
                text-decoration: none;
                color:#3412dd;
                transition: 0.2s;
                color: white;
                
            }
            .for_pass a:link{
                text-decoration: none;
                  color: white;
            }
            
            .for_pass a:hover{
                font-size: 19px;
               
            }
            .for_pass a:visited{
                text-decoration: none;
            }
          .submit button{
                position: absolute;
                top:380px;
                left:40px;
              width: 340px;
              height:40px;
                border: 1px solid white;
              border-radius: 50px;
              font-family: Poppins;
              color:white;
              /*#993DEB*/
            background: linear-gradient(to bottom, #c02425, #f0cb35);
                transition-duration: background  10s;
              outline: none;
              cursor: pointer;
            }
            .submit button:hover{
               background: linear-gradient(to bottom, #f0cb35, #c02425);
            }
            .signup{
                    position: absolute;
                    top:420px;
                left:120px;
                font-family: Poppins;
                font-size: 15px;
                
            }
              .signup a{
                text-decoration: none;
                  transition: 0.2s;
                  
            }
            .signup a:hover{
                
                font-size: 20px;
            }
            @media only screen and (max-device-width: 1024px) {
            .bg1, .bg2, .bg3 {
                background-attachment: scroll;
            }
            }

            
        </style>
    </head>
    <body >
         <div >
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;height:190px;  background: linear-gradient(to right, #be93c5, #7bc6cc); ">
            <img src="emblem-dark.png" style="position:absolute; left:600px;top:5px;">
                <img src="left-logo.png" style="position:absolute; left:70px;top:25px;" >
            </div>
             <p style="font-family:Poppins;position: absolute;left:420px;top:100px;text-align: center;font-size: 20px;color: #060202;"><strong>MINISTRY OF WOMEN AND CHILD DEVELOPMENT<br>GOVERNMENT OF INDIA</strong></p>                          
        </div>
        
        <div class="bg1">
            <ul class="nav" >
                <li><a href="#login" class="uruna">Login</a></li>
                <li><a href="#osc" class="uruna" >About</a></li>
                <li><a href="#cases" class="uruna">Urgent Help</a></li>
                <li><a href="#service" class="uruna">Nirbhaya Dashboard</a></li>
                <li><a href="#howtouse" class="uruna">How to use</a></li>
                 <li><a href="Faqs/index.html">FAQs</a></li>
                 <li><a href="#contactus" class="uruna">Contact Us</a></li>
                 <li><a href="http://www.wcd.nic.in/">Ministry of WCD</a></li>
                <li><a href="#">What's new</a></li>
                <li><a href="http://www.wcd.nic.in/schemes/one-stop-centre-scheme-1">Scheme</a></li>
                 <li><a href="user%20registration/index.html">Join Us</a></li>
            </ul>
            <p class="bg1_head1"> One Stop Center</p>
            <pre class="bg1_head2">A scheme by Ministry of Women and 
            Child development</pre>
        </div>
        <div id="osc" style="font-family: Poppins; color: #777;background-color:white;padding:30px 80px;text-align: justify;">
            <h3  style="text-align:center;font-size: 30px;color: #272424;"><strong>One Stop Center</strong></h3>
  <p >This Scheme of One Stop Centre for Women is implemented since 1st April 2015 with total project cost of Rs. 18.58 is funded under Nirbhaya fund. In the first phase , one OSC was to be established in all states/UT and was approved fro 36 locations out of which only 33 got sanctioned and only 15 became operational till 30th May,2016. The scheme has already been revised for setting up One Stop Centre in 150 additional locations in second phase, in addition to the already proposed 36 centres in first phase. The government has now proposed for establishing 660 centres.</p><p>The main objectives of the scheme is to provide support and assistance to women affected by violence at private or at any public place, irrespective of caste, class, religion, region, sexual orientation or marital status. These centres will provide immediate access to a range of services including medical, legal, psychological and counselling support to the victims. The OSC will support all women including girls below 18 years of age affected by violence ,also for girls below 18 years of age, institutions and authorities established under Juvenile Justice (Care and Protection of Children) Act, 2000 and the Protection of Children from Sexual Offences Act, 2012 will be linked with the OSC. In addition to this, a single uniform number -181 will provide 24-hour emergency response to all women affected by violence, through referral (linking with appropriate authorities such as Police, OSC or hospital).</p>
        </div>
        <div id="login" class="bg2"  >

           <div class="form_box" >
            <div class="form_heading" ><p><strong>Employer Login</strong></p></div>
            <form action="osclogin.php" method="POST">
                 <div class="group">
                        <input type="text" name="ouser" required>
                        <i class="material-icons">account_circle</i>
                     <label><strong>Username</strong></label>
                </div>
                <div class="group" >
                    <input type="Password" style="margin-bottom: 100px" name="opassword" required>
                    <i class="material-icons">lock_outline</i>
                    <label>Password</label>
                </div>
                
                <div class="submit">
                    <button>LOGIN</button>
                </div>
               
           </form>
            </div>
                <div class="form_box2" >
            <div class="form_heading1"><p><strong>Admin Login</strong></p></div>
            <form action="adminlogin.php" method="POST" >
                 <div class="group">
                        <input type="text" name="auser" required>
                        <i class="material-icons">account_circle</i>
                        <label>Username</label>
                </div>
                <div class="group" >
                    <input type="Password" style="margin-bottom: 100px" name="apassword" required>
                    <i class="material-icons">lock_outline</i>
                    <label>Password</label>
                </div>
               
                
                <div class="submit">
                    <button>LOGIN</button>
                </div>
                
           </form>
            </div>

            
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:10px 80px;text-align: justify;font-size:30px; ">
                    <p></p>
            </div>
        </div>

        <div class="bg3">
                <!--<div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
                </div>-->
          
            <div class="form_box1">
            <div class="form_heading"><p><strong>User Login</strong></p></div>
            <form action="victimlogin.php" method="POST">
                 <div class="group">
                        <input type="text" name="vuser" required>
                        <i class="material-icons">account_circle</i>
                        <label>Username</label>
                </div>
                <div class="group" >
                    <input type="Password" style="margin-bottom: 100px" name="vpassword" required>
                    <i class="material-icons">lock_outline</i>
                    <label>Password</label>
                </div>
                <div class="for_pass"><p><a href="forgetpassword.php" target="_self">Forgot password?</a></p></div>
                
                <div class="submit">
                    <button>LOGIN</button>
                </div>
                <div class="signup"><p style="color: white;">Not a member? <a href="victimsignup.php">Sign Up</a> </p></div>
           </form>
         
            
        </div>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:3px 80px;text-align: center;font-size: 40px;">
            <p style="text-decoration: underline;">Urgent Help</p>
            </div>
        </div>
        <div id="cases" class="bg4" >
            <h1 style="position: absolute;left:160px;font-size:40px;color:white; ">Hi User, Click On required Buttons for Urgent Help!</h1>
            <a href="mapo.php" style="position: absolute;top:190px;left:220px;height:50px;width:270px;border:1px solid black;border-radius: 50px;font-size: 20px; text-decoration: none;text-align: center;background-color: white;color:black;">Nearest One stop Center</a>
             <a href="mapp.php" style="position: absolute;top:290px;left:220px;height:50px;width: 270px;border:1px solid black;border-radius: 50px;font-size: 20px;text-decoration: none;text-align: center;background-color: white;color:black;">Nearest Police Station</a>
<!--            <button id="policeButton" type="button" class="buttons">Nearest Police Station</button>-->
             <a href="mapo.php" style="position: absolute;top:390px;left:220px;height:50px;width: 270px;border:1px solid black;border-radius: 50px;font-size: 20px;text-decoration: none;text-align: center;background-color: white;color:black;">Nearest Hospital</a>
            <a href="http://ncw.nic.in/frmhelpline.aspx" style="position: absolute;top:490px;left:220px;height:50px;width: 270px;border:1px solid black;border-radius: 50px;font-size: 20px;text-decoration: none;text-align: center;background-color: white;color:black;">Women Helpline</a>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:3px 80px;text-align:center;font-size: 40px;">
            <p style="text-decoration: underline;">Nirbhaya Dashboard</p>
            </div>
        </div>
        <div id="service" class="bg5" >
                <div class="caption">
                    <span class="border">
                        <br/>   <br/>   <br/>   <br/>
                      <p align ="center" style="color:black; font-family:Poppins; line-height: 1.5; background-color:white;"><strong>
                        <?php

                        $con=mysqli_connect('localhost','root');

                        mysqli_select_db($con,'hackathon');

                        $q= " select * from oscformm ";

                        $result=mysqli_query($con, $q);
                        $num = mysqli_num_rows($result);
                        $q= " select * from oscformm where casesolved='yes' ";

                        $result=mysqli_query($con, $q);
                        $num1 = mysqli_num_rows($result);
                        echo "total number of cases registered &nbsp"; 
                        echo $num;
                        echo "<br/> total number of case solved &nbsp";
                        echo $num1;
                        ?>
                    </strong></p>
                    </span>
                </div>
                </div>
        </div>
       
        <div id="contactus" style="font-family: Poppins; color: #777;background-color:white;padding:10px 80px;text-align: justify;">
            <h3  style="text-align:center;font-size: 30px;color: #272424;"><strong>Contact Us</strong></h3>
            <ol>
                  <li style="color:#272424">Smt.Shipra Roy<br/>
                                            Deputy Secretary<br/>
                            Ministry of Women and Child Development (GoI)<br/>
                            Room No. 632, A Wing, VIth Floor,<br/>
                            Shastri Bhawan, New Delhi<br/>
                            Phone No. 011-23385614<br/>
                            Email: shipra.roy60@nic.in</li><br/>
                  <li style="color:#272424">Sri. Manoj K. Prabhat<br/>
                                            Under Secretary<br/>
                                       Ministry of Women and Child Development (GoI)<br/>
                                      Room No. 313, A Wing, IIIrd Floor,<br/>
                                    Shastri Bhawan, New Delhi<br/>
                                       Phone No. 011-23381970<br/>
                                      Email: mk.prabhat@gov.in</li><br/>
                  <li style="color:#272424">Sri.Paras Sarwaiya<br/>
                                            Section Officer<br/>
                                          Ministry of Women and Child Development (GoI)<br/>
                                       Room No. 314, A Wing, IIIrd Floor,<br/>
                                             Shastri Bhawan, New Delhi<br/>
                                            Phone No. 011-23073119<br/>
                                        Email: paras.sarwaiya@nic.in</li><br/>
                 
            </ol>
        </div>
         
        <div style="position:relative;">
               <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;width:175%;">
            <p style="text-align: center;"><i class=" material-icons" style="font-size: 20px;margin-right: 4px;">copyright</i>Copyright LNBACKBENCHERS  2018 - All Rights Reserved </p>
            </div>
        </div>

 
         
        
        
    </body>
</html>