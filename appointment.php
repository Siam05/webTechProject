<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>

<html>
<head>
	<title>Appointment</title>
	<script src="appointmentVal.js"></script>
	<style type="text/css">	   
		td{
			padding: 8px 5px ;
		}
		.error{
			color:red;
		}
		#f1{
		}
		form{
			background-color: lightblue;
			width: 50%;
			padding: 10px 0px 10px 10px;
			border: 5px solid skyblue;
			margin-left: ;
			position:absolute;
			left: 300px;
		}	

	</style>
</head>
<body>
<div>
	<center>
 	<form method="POST" action="" id="f1" onsubmit="return validate()">
	<center><h1>Appointment</h1></center>
 		<table>
 			<div class="input">
	 		<tr>
	 			<td>Doctor Id</td>
	 			<td><input type="text" name="did" id="did" placeholder="Enter doctor id" onkeyup="return valId()"> </td>	
				<td><span class="error" id="didError"></span></td>
	 		</tr>
  					

 			<tr>
 				<td>Date</td></td>
 				<td><input type="date" name="date" id="date" placeholder="Enter date" onkeyup="return valDate()"></td>
 				<td><span class="error" id="dateError"></span></td>
 			</tr>
			
			<tr>
 				<td>Time</td>
 				<td><input type="time" name="time"  id="time" placeholder="Enter time" onkeyup="return valTime()"></td>
				<td><span class="error" id="timeError"></span></td>
 			</tr>


 			<tr>
 				<td>Your name</td>
 				<td><input type="text" name="name"  id="name" placeholder="Enter your name" onkeyup="return valName()"></td>
				<td><span class="error" id="nameError"></span></td>
 			</tr>
			
			<tr>
 				<td>Phone No</td>
 				<td><input type="number" name="phone"  id="phone" placeholder="Enter your phone number" onkeyup="return valPhone()"></td>
				<td><span class="error" id="phoneError"></span></td>
 			</tr>
			

 			<tr>
				<td> </td>
 				<td><input type="submit" name="submit" value="Appoint"></td>	
 			</tr>

 		</table>
		
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a></br></h4>
 		</form>
	</center>
 </div>
</body>
</html>


<?php

	if(isset($_POST['submit'])){
		$id = $_POST['did'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];

		$con = mysqli_connect('localhost', 'root', '', 'project');


		$sql = mysqli_query($con,"insert into appointmet (did, date, time, name, phone) values('$id','$date','$time','$name','$phone')");
		if(($sql)){
			echo "<script> alert('Appointment Successful') </script>";
		}else{
			echo "<script> alert('Something wrong. Try again!') </script>";
		}
	}
	
?>
