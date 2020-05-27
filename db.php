<?php
	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$database = "project";

	function getConnection(){
		$conn = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		return $conn;
		
	}
	
	if(getConnection()){
			echo "Conection Successful!";
		}else{
			echo "Conection is not successful!";
		}

?>