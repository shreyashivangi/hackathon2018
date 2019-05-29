<?php
session_start();
$con=mysqli_connect('localhost','root');
$p=$_SESSION['caseid'];
mysqli_select_db($con,'hackathon');
$q="select * from oscformm where caseeid='$p'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
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
        <h2 style="text-align: center;">Hi User, Here is Your Case Status :</h2>
        <a href="vicpage1.php" style="position: absolute;top:218px;right:84px;font-size: 20px;text-decoration: none;"> Back TO Home</a>
        <div style="margin-top:100px;padding-left: 100px;">
        <ul>
            <li>FIR :    <?php if($row['firdone']==0){
                 echo "FIR not registered yet";
               }
               else{
               echo "FIR registered, to see your FIR"; ?><a href="firimg.php"><button type="submit" style="margin-left:210px;height:6%;width:20%;border-radius: 50px;cursor: pointer;">Click here</button></a></li><br /><br /><?php } ?>
            <li>FIR investigation :  <?php if($row['firinvestigation']==0){
    echo "FIR cancelled";
}
  if($row['firinvestigation']==1){
    echo "FIR investigation not started";
}
  if($row['firinvestigation']==2){
    echo "FIR under investigation";
}
  if($row['firinvestigation']==3){
    echo "proceded to magistrate ";
}
?>
</li><br /><br/>
            <li>MAGISTRATE : <?php  if($row['magistrate']==0){
    echo "FIR under re-investigation";
}
  if($row['magistrate']==1){
    echo "Chargesheet under investigation";
}
$t=$row['traildate'];
    if($row['magistrate']==2){
    echo "Chargesheet accepted . trail to be happened</br>";
   echo "$t";
}
}
                ?></li></li><br/><br/>
            <li>Trial Date : </li><br/><br/>
            
        </ul>

         <?php
          $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$name=$_SESSION['caseid'];
$q= " select * from counseller where caseid='$name'";
$result=mysqli_query($con, $q);
while($row = mysqli_fetch_assoc($result)) {
  if($row['helpprovide']==1){
    echo "<h3>Counsellor details are </h3>";
    echo "Name of doctor is:";
   $n=$row['nameofdoc'];
    echo "$n <br/>";
     echo "Phone number of doctor is:";
     $n=$row['phno'];
    echo "$n <br/>";
     echo "Availability of doctor:";
     $n=$row['available'];
    echo "$n <br/>";
     echo "Address of doctor is: ";
     $n=$row['address'];
   echo "$n <br/>";
  }
}
        ?>

        </div>

               <h2 style="text-align: center;">Need Our Counsellor's Help</h2><br/><br/>
        <div style="text-align: center;"><a href="counsellorvicform.php" style="text-align: center;height:6%;width:20%;border:2px solid black ;padding:12px 12px;border-radius: 50px;text-decoration: none;  color:white;
                 background: linear-gradient(to right, #000046, #1cb5e0);">Counsellor Help
            </a>
        </div>
        <div style="position:absolute;top:950px;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;width:175%;">
            <p style="text-align: center;"><i class=" material-icons" style="font-size: 20px;margin-right: 4px;">copyright</i>Copyright LNBACKBENCHERS  2018 - All Rights Reserved </p>
            </div>
        </div>
    </body>
</html>
