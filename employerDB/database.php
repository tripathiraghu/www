<?php
$server="localhost";
$user="root";
$password="";
$db="android";
$action = $_POST["action"];

$con= mysqli_connect("$server","$user","$password","$db");


if ($con->connect_error) {
	$sql = "CREATE TABLE IF NOT EXIST $table{
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(30) NOT NULL,
		last_name VARCHAR(30) NOT NULL
	}";
	if($con->query($sql) === TRUE){
		echo "sucess";
	}else{
		echo "error";
	}
	$con->close();
	return;
	}
//get all employe records from the databse
	if("GET_ALL" === $action){
		$db_data = array();
		$sql = "SELECT id, first_name, last_name from $table ORDER BY id DESC";
		$result = $con->query($sql);
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$db_data[]=$row;
			}
			//send back the compilation record as a json
			echo json_encode($db_data);
		}else{
			echo "error";
		}
		$con->close();
		return;
	}

	if("ADD_EMP" == $action){
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$sql = "INSERT INTO $table (first_name, last_name) VALUES ('$first_name', '$last_name')";
		$result = $con->query($sql);
		echo "sucess";
		$con->close();
		return;
	}
	//update an Employee
	if("UPDATE_EMP" == $action){
		//app will be posting these values to this server
		$emp_id = $_POST['$emp_id'];
		$first_name = $_POST['$first_name'];
		$last_name = $_POST['$last_name'];
		$sql = "UPDATE $table SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$emp_id'"
		if($con->query($sql) === TRUE){
				echo "sucess";
		}else{
			echo "error";
		}
		$con->close();
		return;
	}

//delete an employee
	if('DELETE_EMP' == $action){
		$emp_id = $_POST['$emp_id'];
		$sql = "DELETE FROM $table WHERE id = $emp_id"; //don't need quoutes since id is an integer.
		if($con->query($sql) === TRUE){
			echo "sucess";
		}else{
			echo "error";
		}
		$con->close();
		return;
	}

?>