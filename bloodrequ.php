<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Request</title>
	<script src="bloodrequVal.js"></script>
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
	<h2>Request For Blood Here</h2>
	<form action="" method="post" id="f1" onsubmit="return validate()">
		<table>
			<div class="input">
			<tr>
				<td>Your Name:</td>
				<td><input type="text" name="name" id="name" placeholder="Enter your name" onkeyup="return valName()"></td>
				<td><span class="error" id="nameError"></span></td>
			</tr>
			
			<tr>
				<td>Blood Group:</td>
				<td><input type="text" name="bg" id="bg" placeholder="Enter blood group" onkeyup="return valBg()"></td>
				<td><span class="error" id="bgError"></span></td>
			</tr>
			
			<tr>
				<td>Amount:</td>
				<td><input type="text" name="bag" id="bag" placeholder="Enter amount" onkeyup="return valBag()"></td>
				<td><span class="error" id="bagError"></span></td>
			</tr>
			
			<tr>
				<td>Date:</td>
				<td><input type="text" name="date" id="date" placeholder="Enter date" onkeyup="return valDate()"></td>
				<td><span class="error" id="dateError"></span></td>
			</tr>
			
			<tr>
				<td>Time:</td>
				<td><input type="text" name="time" id="time" placeholder="Enter time" onkeyup="return valTime()"></td>
				<td><span class="error" id="timeError"></span></td>
			</tr></br>	
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		
		</br>
		<a href="bloodtoken.php"> See Your Entry</a>
	
		</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4>
		
	</form>
		
		
	</center>
	</div>
</body>
</html>

<?php

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$bg = $_POST['bg'];
		$bag = $_POST['bag'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		

		$con = mysqli_connect('localhost', 'root', '', 'project');


		$sql = mysqli_query($con,"insert into bloodrequest (name,bg,bag,date,time) values('$name','$bg','$bag','$date','$time')");
		if(($sql)){
			echo "<script> alert('Request Successful') </script>";
		}else{
			echo "<script> alert('Something wrong. Try again!') </script>";
		}
	}
	
?>



