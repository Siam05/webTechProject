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


		$sql = mysqli_query($con,"insert into user (username,password,email,phone,blood_group,age,gender) values('$username','$password','$email','$phone','$bgrp','$age','$gender')");
		if(($sql)){
			echo "Registration Successful!";
		}else{
			echo "Registration is not successful!";
		}
	}
	
?>