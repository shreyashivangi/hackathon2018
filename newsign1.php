

<?php
session_start();
$u=$_SESSION["ousername"];
        if(!empty($_FILES['image']['tmp_name'])){
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); }
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'hackathon';
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $faname=$_POST['fathername'];
        $maname=$_POST['Mothername'];
        $age=$_POST['age'];
        $em=$_POST['email'];
        $pa=$_POST['password'];
        $pa=md5($pa);
        $ph=$_POST['number'];
           $city=$_POST['city'];
              $state=$_POST['state'];
                 $toc=$_POST['toc'];
        $adar=$_POST['aadharnumber'];
        $detail=$_POST['detail'];
        $dob=$_POST['dateofbirth'];
       $trail=$_POST['trail'];
        $gender=$_POST['gender'];
$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'hackathon');

$q="select * from oscloginn where username='$u'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
  $osccenter=$row['city'];
$employerid=$row['employerid'];
$adminid=$row['adminid'];
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
        
       
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        if(!empty($_FILES['image']['tmp_name'])){
        $insert = $db->query("INSERT into oscformm (firstname,lastname,faname,maname,dob,email,password,phone,aadhar,detail,firdone,firinvestigation,magistrate,traildate,fir,employerid,adminid,city,state,gender,age,typeofcase,osccenter) values('$fname','$lname','$faname','$maname','$dob','$em','$pa','$ph','$adar','$detail','$firr','$c','$m','$trail','$imgContent','$employerid','$adminid','$city','$state','$gender','$age','$toc','$osccenter')");
         
         else{
         $insert = $db->query("INSERT into oscformm (firstname,lastname,faname,maname,dob,email,password,phone,aadhar,detail,firdone,firinvestigation,magistrate,traildate,employerid,adminid,city,state,gender,age,typeofcase,osccenter) values ('$fname','$lname','$faname','$maname','$dob','$em','$pa','$ph','$adar','$detail','$firr','$c','$m','$trail','$employerid','$adminid','$city','$state','$gender','$age','$toc','$osccenter')"); 
       
         }


$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'hackathon');
$q="select * from oscformm where email='$em'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
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
        <h2 style="position: relative;left:488px;">Case id of victim is : <?php echo $row['caseeid']; } ?></h2>
    </body>
</html>
