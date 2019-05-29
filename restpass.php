<?php
session_start();
if(isset($_GET["email"]) && isset($_GET["token"])){
$con=mysqli_connect('localhost','root');
$_SESSION['email']=$_GET["email"];
mysqli_select_db($con,'hackathon');
          $email=$_GET["email"];
          $token=$_GET["token"];

          $q= " select * from oscuserlogindetail where email='$email' && randomotp='$token'";

$result=mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num==1){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
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
		<form action="restpass1.php" method="post">
		<div>
			<p align="center"><label><strong>Reset your password</strong></label></p>
			<p align="center"><strong>PASSWORD:
			<input type="password" name="password">
			<br/></strong></p>
			<br/>
		<p align="center"><strong>CONFIRM PASSWORD:
			<input type="password" name="conpassword">
			<br/>
			<br/></strong></p>
			<br/>
			<p align="center"><button type="submit">Submit</button></p>
		</div>
	</form>

	</body>
	</html>
<?php
}
else{
	echo "Please check your email";
}
}
else
{
	header("location:index.php");
}
?>