<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.html");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Emergency Helpline</title>
</head>
<body>
    <center>
		<h1>Emergency Helpline</h1></br>
		<h3>Here are the phone numbers. Call if you have any query.</h3></br>
		<h4>Call: <a href="#"> +8801754532987</a></h4>
		<h4>Call: <a href="#"> +8801894532894</a></h4>
		<h4>Call: <a href="#"> +8801934598323</a></h4>
		
		</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
	
	</center>
		
</body>
</html>