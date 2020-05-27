<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<center><h1>Welcome Home <?php echo $_SESSION['username']; ?></h1>
	
	<h3><a href="ownprofile.php">My Profile</a></h3>
	<h3><a href="appointment.php">Take Appointment</a></h3>
	<h3><a href="cancelapp.php">Cancel Appointment</a></h3>
	<h3><a href="emergencyapp.php">Emergency Appointment</a></h3>
	<h3><a href="doctor.php">Available Doctors</a></h3>
	<h3><a href="docprofile.php">Search Doctor</a></h3>
	<h3><a href="searchdonor.php">Search Donor</a></h3>
	<h3><a href="bloodrequ.php">Request Blood</a></h3>
	<h3><a href="cancelrequest.php">Cancel Request</a><h3>
	<h3><a href="emhelpline.php">Emergency Helpline</a></h3>
	<h3><a href="medicalhistory.php">Medical History</a></h3>
    <h3><a href="callambulance.php">Call Ambulance</a></h3>
	
	<h4><a href="logout.php">Logout</a></h4>
	</center>

</body>
</html>