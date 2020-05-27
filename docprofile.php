<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.php");
	}	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Doctors Profile</title>
</head>
<body>
	<center>
	<h1 id="abc">Search Doctors Here</h1>

	<form >
		<input type="text" id="term" name="term" onkeyup="abc()">
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "abc.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
		
		</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
	</center>
</body>
</html>