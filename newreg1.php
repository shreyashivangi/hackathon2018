<?php

        if(!empty($_FILES['image']['tmp_name'])){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));  }
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $faname=$_POST['fathername'];
        $maname=$_POST['Mothername'];
        $ad=$_POST['address'];
        $em=$_POST['email'];
        $pa=$_POST['password'];
        $pa=md5($pa);
        $ph=$_POST['number'];
        $adar=$_POST['aadharnumber'];
        $detail=$_POST['detail'];
        $dob=$_POST['dateofbirth'];
        $trail=$_POST['trail'];
         if(!empty($_POST['chk'])) {
              foreach($_POST['chk'] as $check) {
                    $chk1=$check;
                }
            }
         if(!empty($_POST['firreg'])) {
              foreach($_POST['firreg'] as $check) {
                    $firr=$check;
                }
            }
        if(!empty($_POST['firinv'])) {
              foreach($_POST['firinv'] as $check) {
                    $c=$check;
                }
            }
         
         
         if(!empty($_POST['mag'])) {
              foreach($_POST['mag'] as $check) {
                    $m=$check;
                }
            }
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
          if(!empty($_FILES['image']['tmp_name'])){
         $insert = $db->query("UPDATE oscformm set firstname='$fname', lastname='$lname', faname='$faname',maname='$maname',address='$ad',dob='$dob',phone='$ph',aadhar='$adar',detail='$detail',fir='$imgContent',casesolved='$chk1', firdone='$firr',firinvestigation='$c',magistrate='$m',traildate='$trail' where email='$em'");  }
         else{
             $insert = $db->query("UPDATE oscformm set firstname='$fname', lastname='$lname', faname='$faname',maname='$maname',address='$ad',dob='$dob',phone='$ph',aadhar='$adar',detail='$detail',casesolved='$chk1' firdone='$firr',firinvestigation='$c',magistrate='$m',traildate='$trail' where email='$em'"); 
         }
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
        <a href="oscpage1.php"><h3>Back to home page</h3></a>
        <h2 style="position: relative;left:488px;">CASE MODIFIED</h2>
    </body>
</html>

