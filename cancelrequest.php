<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cancel Request</title>
</head>
<body>
    <center>
		<h1>Cancel Your Request</h1>
		<table>
			<tr>
			    <td><h3>ID</h3></td> <td></td> <td></td> <td></td>
				<td><h3>NAME</h3></td> <td></td> <td></td> <td></td>
				<td><h3>BLOOD GROUP</h3></td> <td></td> <td></td> <td></td>
				<td><h3>BAG</h3></td> <td></td> <td></td> <td></td>
				<td><h3>DATE</h3></td> <td></td> <td></td> <td></td>
				<td><h3>TIME</h3></td> <td></td> <td></td> <td></td>
                <td><h3>ACTION</h3></td> <td></td> <td></td> <td></td>				
			</tr>

<?php
	$con = mysqli_connect("localhost","root","","project");
	$nm = $_SESSION['username'];
	$sql = mysqli_query($con, "SELECT * FROM bloodrequest where name = '$nm'");
	while($row = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['name']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['bg']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['bag']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['date']; ?></td> <td></td> <td></td> <td></td>
			<td><?php echo $row['time']; ?></td> <td></td> <td></td> <td></td>
			<td><a href="cancelrequest.php?delete=<?php echo $row['id'];?>"onclick="return confirm('Are you sure?');">Delete</a><td>
		</tr>
	<?php } 
	
		$con = mysqli_connect("localhost","root","","project");
		if (isset($_GET['delete'])){
			$id = $_GET['delete'];
			 
			mysqli_query($con, "delete from bloodrequest where id = '$id'");
		 }
	?>
	</table>
	
	</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4>
	
	</center>
		
</body>
</html>