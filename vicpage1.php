<?php
    session_start();
    if($_SESSION["vusername"]!=true){
        header("location:index.php");
    }
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
        <p style="text-align: center;font-size:25px;"><strong>Hi User , Please Enter Your Caseid Here</strong> </p>    
        <a href="osclogout.php" style="float:right;position: absolute;top:220px;right:84px;font-size: 20px;text-decoration: none;" >LOG OUT</a>
        
        
             <div class="case_id">
            <form id="b" target="_self" method="post" action="">
                 <h3  style="text-align: center;position: absolute;top:300px;left:600px;">Case ID:</h3>
            <input type="text" name="caseid" required>
            <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <div style="position:absolute;bottom: 0;">
              <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;width:175%;">
           
            <p style="text-align: center;"><i class=" material-icons" style="font-size: 20px;margin-right: 4px;">copyright</i>Copyright LNBACKBENCHERS  2018 - All Rights Reserved </p>
            </div>        </div>
       
    </body>
</html>
<?php
if(isset($_POST["submit"])){
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackathon');
$name=$_POST['caseid'];


$q= " select * from oscformm where caseeid='$name'";

$result=mysqli_query($con, $q);

$num = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)) {
$e=$row['email']; }
$_SESSION['caseid']=$name;
$em=$_SESSION["vusername"];
if($num==1){
    if($e==$em){
    header('location:vicpage2.php');}
    else{
         echo '<script type="text/javascript">alert("Case id did not match")</script>';
    }
}
else{
   echo '<script type="text/javascript">alert("Case id does not exist")</script>';
}
}

?>