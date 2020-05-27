<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>

<?php
    $conn = mysqli_connect("localhost","root", "","project");
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user inner join history on user.uid=history.id where username='$username'";
	$result = mysqli_query($conn, $query);
    
?>


<html>
<body>

<center>
	<h1>Here is Your Medical History</h1>
	<form action="medicalhistory.php" action="post">
		
		
	<table border=1>
		<th>Id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Blood Group</th>
		<th>Admitted Date</th>
		<th>Total Bill</th>
		<th>Paid Bill</th>
		<th>Release Date</th>
	
		<?php
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result)){
					?>
	  
	            <tr>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['username']; ?> </td>
					<td> <?php echo $row['age']; ?> </td>
					<td> <?php echo $row['bgrp']; ?> </td>
					<td> <?php echo $row['admitted_date']; ?> </td>
					<td> <?php echo $row['total_bill']; ?> </td>
					<td> <?php echo $row['paid_bill']; ?> </td>
					<td> <?php echo $row['release_date']; ?> </td>
                </tr>
<?php
    }
			}
		
		
		?>
		
	</table>
	
	
	
	
	</form>
	
	</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
	</center>
</body>
</html>