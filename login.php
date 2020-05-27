<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
	<script src=""></script>
	<style type="text/css">	   
		td{
			padding: 8px 5px ;
		}
		form{
			background-color: lightblue;
			width: 30%;
			padding: 10px 0px 10px 10px;
			border: 5px solid skyblue;
			margin-left: ;
			position:absolute;
			left: 440px;
		}	
	</style>
</head>
<body>
	<center>
	<div>
	<form action="" method="post">
	<h2>Login Page</h2>
		<table>
			<div class="input">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</div>
	</center>

</body>
</html>


<?php
	
	session_start();


	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$con=mysqli_connect("localhost","root", "","project");
	    $query=mysqli_query($con,"select * from user where username='$username' and password='$password'");
	
	if($query){
		if(mysqli_num_rows($query)>0){
		$_SESSION['username']=$username;
		header("location: home.php");
		}else{
			echo "<script> alert('Invalid username or password!')</script>";
		}
	}

	}	

?>