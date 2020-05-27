<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.html");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Availabe Doctors</title>
</head>
<body>
    <center>
		<h1>Availabe Doctors</h1>
		<table>
			<tr>
			    <td><h3>DOCTOR ID</h3></td> <td></td> <td></td> <td></td>
				<td><h3>NAME</h3></td> <td></td> <td></td> <td></td>
				<td><h3>SPECIALITY</h3></td> <td></td> <td></td> <td></td>
				<td><h3>EMAIL</h3></td> <td></td> <td></td> <td></td>
				<td><h3>TIME</h3></td> <td></td> <td></td> <td></td>
			</tr>

<?php
	//include('db.php');
	$con = mysqli_connect("localhost","root","","project");
	$sql = mysqli_query($con, "SELECT * FROM doctor");
	while($row = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td> <td></td> <td></td> <td></td> 
			<td><?php echo $row['name']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['speciality']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['email']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td> <td></td> <td></td> <td></td>
		</tr>
		
	<?php } ?>
	
	</table>
	
	</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
	
	</center>
		
</body>
</html>

