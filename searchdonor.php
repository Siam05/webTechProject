<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Search Donors</title>
</head>
<body>

<center>
	<h1>Search Donors Here</h1></br>
	<form action="" method="post">
	<input type="text" name="search" placeholder="Type Blood Group Here.."/>
	<input type="submit" value="submit"/></br></br>
		
		
	<table>
		<th><h3>DONOR ID</h3></th> <td></td> <td></td> <td></td>
		<th><h3>NAME</h3></th> <td></td> <td></td> <td></td>
		<th><h3>AREA</h3></th> <td></td> <td></td> <td></td>
		<th><h3>BLOOD GROUP</h3></th> <td></td> <td></td> <td></td>
		<th><h3>PHONE NO</h3></th> <td></td> <td></td> <td></td>
	  
			<?php


	$con = mysqli_connect("localhost","root","","project");
	
	
	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i", "" , $searchq);
		
		$query = mysqli_query($con, "SELECT * FROM donor WHERE bg LIKE '%$searchq%'");
		$count = mysqli_num_rows($query);
		
		if($count > 0){
		
			while($row = mysqli_fetch_array($query)){
				?>
				</tr>
				    <td> <?php echo $row['id']; ?> </td> <td></td> <td></td> <td></td>
					<td> <?php echo $row['name']; ?> </td> <td></td> <td></td> <td></td>
					<td> <?php echo $row['area']; ?> </td> <td></td> <td></td> <td></td>
					<td> <?php echo $row['bg']; ?> </td> <td></td> <td></td> <td></td>
					<td> <?php echo $row['phn no']; ?> </td> <td></td> <td></td> <td></td>
				</tr>
				
				<?php
			}
		}
	}
?>
	

		</table>
		</form>
		
		</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
		<center>
</body>
</html>

