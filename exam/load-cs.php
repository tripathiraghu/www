<?php 
include 'connection.php';
	if ($_POST['type'] == "") {
		$sql = "SELECT * FROM class";
	$query = mysqli_query($con,$sql) or die("query unsuccessfull");
	$str = "";

	while ($row = mysqli_fetch_assoc($query)) {
		$str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
	}
	} else if($_POST['type'] == "subjectData"){
		$sql = "SELECT * FROM subject WHERE class = {$_POST['id']}";
		$query = mysqli_query($con,$sql) or die("query unsuccessfull");
		$str = "";

		while ($row = mysqli_fetch_assoc($query)) {
			$str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
		}
	}
	
	
	echo $str;
 ?>