<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Emergency Appointment Entry</title>
</head>
<body>
    <center>
		<h1>Emergency Appointment Entry</h1>
		<table>
			<tr>
			    <td><h3>SERIAL</h3></td> <td></td> <td></td> <td></td>
				<td><h3>DOCTOR ID</h3></td> <td></td> <td></td> <td></td>
				<td><h3>DATE</h3></td> <td></td> <td></td> <td></td>
				<td><h3>TIME</h3></td> <td></td> <td></td> <td></td>
				<td><h3>USERNAME</h3></td> <td></td> <td></td> <td></td>
				<td><h3>PHONE</h3></td> <td></td> <td></td> <td></td>				
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","project");
	$nm = $_SESSION['username'];
	$sql = mysqli_query($con, "SELECT * FROM em_appointment where name = '$nm'");
	while($row = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $row['eid']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['did']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['date']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['name']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['phone']; ?></td> <td></td> <td></td> <td></td>
		</tr>
	<?php } ?>
	
	</table>
	
	</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4>
	
	</center>
		
</body>
</html>