<?php	
	session_start();
	if(!isset($_SESSION['username'])){  
		header("location: login.html");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Call Ambulance</title>
</head>
<body>
	<center>
	<h1 id="xyz">Search Your Location Here</h1>

	<form >
		<input type="text" id="term" name="term" onkeyup="xyz()">
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function xyz(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "xyx.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
	
		</br>
	    
		<h3><a href="home.php">Home</a> </h3>
		<h4><a href="logout.php"> logout</a</br></h4> 
	</center>
</body>
</html>