<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cancel Appointment</title>
</head>
<body>
	<center>
	 <h3>Here is your appointment. You can also cancel appointment if you need.</h3>
		<table>
			<tr> 
				<td><h3>SERIAL</h3></td> <td></td> <td></td> <td></td>
				<td><h3>DOCTOR ID</h3></td> <td></td> <td></td> <td></td>
				<td><h3>DATE</h3></td> <td></td> <td></td> <td></td></td>
				<td><h3>TIME</h3></td> <td></td> <td></td> <td></td></td>
				<td><h3>YOUR NAME</h3></td> <td></td> <td></td> <td></td>
				<td><h3>PHONE NO</h3></td> <td></td> <td></td> <td></td>
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","project");
	$nm = $_SESSION['username'];
	$sql = mysqli_query($con, "select * from appointmet where name='$nm'");
	while($row = mysqli_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $row['aid']; ?></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['did']; ?></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['date']; ?></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['time']; ?></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['name']; ?></td> <td></td> <td></td> <td></td>
				<td><?php echo $row['phone']; ?></td> <td></td> <td></td> <td></td>
				<td><a href="cancelapp.php?delete=<?php echo $row['aid'];?>"onclick="return confirm('Are you sure?');">Cancel</a><td>
			</tr>
	<?php } 
	
		$con = mysqli_connect("localhost","root","","project");
		if (isset($_GET['delete'])){
			$id = $_GET['delete'];
			 
			mysqli_query($con, "delete from appointmet where aid = '$id'");
		 }
	?>
	    </table>
	
	</br> 
	<h4><a href="home.php"> Home</a></h4>
	<h4><a href="logout.php"> logout</a></h4>
	
	</center>
	
</body>
</html>