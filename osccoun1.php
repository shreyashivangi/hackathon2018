<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

</style>
</head>
<body  style="  background: linear-gradient(to right, #20002c, #cbb4d4);">
<div align="center" >
<table bgcolor="white" border="2%" cellspacing="5px" width="1000px">
	<thead>
		<tr>
			<th>Case ID</th>
			<th>Location of victim</th>
			<th>Provide counseller</th>
		</tr>
	</thead>
	<tbody align="center">
	<?php
		session_start();
		$em=$_SESSION['ousername'];
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'hackathon');
		$q1="select * from oscloginn where username='$em'";
		$result = mysqli_query($con, $q1);
		while($row = mysqli_fetch_assoc($result)) {
			$state=$row['state'];
		}
		
		$q="select * from counseller where state='$state' AND helpprovide='0'";
		$result1 = mysqli_query($con, $q);
		while($row = mysqli_fetch_assoc($result1)){
			$_SESSION['caseidofvic']= $row['caseid'];
			?>
				<tr>
					<td><?php echo $row['caseid']; ?></td>
					<td><?php echo $row['locofvic']; ?></td>
					<td><a href="counsellerprov.php"><button>provide help</button></a></td>
				</tr>
		<?php } ?>
		

</tbody>
</table>
</div>
</body>
</html>