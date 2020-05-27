<?php

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$bgrp = $_POST['bgrp'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];

		$con = mysqli_connect('localhost', 'root', '', 'project');


		$sql = mysqli_query($con,"insert into user (username,password,email,phone,bgrp,age,gender) values('$username','$password','$email','$phone','$bgrp','$age','$gender')");
		if(($sql)){
			echo "<script> alert('Registration Successful!') </script>";
		}else{
			echo "<script> alert('Something wrong. Try again!') </script>";
		}
	}
	
?>

<html>
<head>
	<title>Registration Page</title>
	<script src="regValidation.js"></script>
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
	<form action="" method="post" id="f1" onsubmit="return validate()">
	<h2>Registration Page</h2>
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" id="username" placeholder="Enter your username" onkeyup="return valUsername()"></td>
				<td><span class="error" id="UnameError"></span></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" id="pass" placeholder="Enter your password" onkeyup="return valPass()"></td>
				<td><span class="error" id="passError"></span></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" id="email" placeholder="Enter your email" onkeyup="return valEmail()"></td>
				<td><span class="error" id="emailError"></span></td>
			</tr>
			<tr>
			    <td>Phone No :</td>
	            <td><input type="number" name="phone" id="phone" placeholder="Enter your phone number" onkeyup="return valPhone()"></td>
			    <td><span class="error" id="phoneError"></span></td>
			</tr>
			<tr>
				<td>Blood Group :</td>
				<td>
					<select name="bgrp" >
						<option value="A+" > A+  </option>
						<option value="A-"> A- </option>
						<option value="AB+"> AB+ </option>
						<option value="AB-"> A- </option>
						<option value="O+"> O+ </option>
						<option value="O-"> O- </option>
						<option value="B+"> B+ </option>
						<option value="B-"> B- </option>
					</select>
				</td><td></td>
 			</tr>
			<tr>
				<td>Age</td>
				<td><input type="number" name="age" id="age" placeholder="Enter your age" onkeyup="return valAge()"></td>
				<td><span class="error" id="ageError"></span></td>
			</tr>
			<tr>
 				<td>Gender</td>
				<td>
					<select name="gender" >
						<option value="male" >Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
				</td><td></td>
 			</tr>	
			<tr> 
			    <td></td>
				<td><input type="submit" name="submit" value="Submit"><td>
				<td><a href="login.php"> Login</a></td> 
			</tr>
			
		</table>
	</form>
	</center>
</div>
</body>
</html>