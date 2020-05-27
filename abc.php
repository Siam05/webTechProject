<?php

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'project');
	$sql = "select * from doctor where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);


	if($count > 0){

		$data = "<table>
				<tr>
					<td><h3>ID</h3></td> <td></td> <td></td> <td></td> <td></td>
					<td><h3>NAME</h3></td> <td></td> <td></td> <td></td> <td></td>
					<td><h3>SPECIALITY</h3></td> <td></td> <td></td> <td></td> <td></td>
					<td><h3>EMAIL</h3></td> <td></td> <td></td> <td></td> <td></td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['id']}</td> <td></td> <td></td> <td></td> <td></td>
					<td>{$row['name']}</td> <td></td> <td></td> <td></td> <td></td>
					<td>{$row['speciality']}</td> <td></td> <td></td> <td></td> <td></td>
					<td>{$row['email']}</td> <td></td> <td></td> <td></td> <td></td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>