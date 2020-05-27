<?php

	$search = $_GET['key'];

	$con = mysqli_connect('localhost', 'root', '', 'project');
	$sql = "select * from ambulance where area like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);


	if($count > 0){

		$data = "<table>
				<tr>
					<td><h3>CAR NO</h3></td> <td></td> <td></td> <td></td>
					<td><h3>AREA</h3></td> <td></td> <td></td> <td></td> 
					<td><h3>PHONE NO</h3></td> <td></td> <td></td> <td></td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['car_no']}</td> <td></td> <td></td> <td></td>
					<td>{$row['area']}</td> <td></td> <td></td> <td></td>
					<td>{$row['phone']}</td> <td></td> <td></td> <td></td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>