<?php 
$username = "" ;
$email = "";
$errors = array();
	///conect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//if the register button is clicked
if (isset($_POST['register'])){
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);
		// ensure that from field are filled properly
		if (empty($username)){
			array_push($errors, "username is required");
		}
		if (empty($email)){
			array_push($errors, "email is required");
		}	
		if (empty($password_1)){
			array_push($errors, "password is required");
		}
		if ($password_1 != $password_2){
			array_push($errors, "the two password do not match");
		}

	//if there are no error, save user to database
		if (count($errors) == 0){
		$password = md5($password_1); //encrypt password before storeing in database
			$sql = "INSERT INTO users(username, email, password) 
			VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
		}



}
?>