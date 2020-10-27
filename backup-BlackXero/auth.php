<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$btn = $_POST['submit'];


switch($username  AND $password){

	case ('Administrator' AND '123'):
	header("Location: http://localhost/backup/index.php");
	break;

	case ('mukesh' AND '123'):
	header("Location: http://localhost/backup/index.php");
	break;

	default:
	header("Location: http://localhost/backup/login.php");
}














	/*$name = $_POST['username'];
	$pass = $_POST['password'];
	if($name == $uname && $pass == $savedpass){
	header("Location: http://localhost/backup/index.php");
	}
	elseif($name == $uname && $pass == $savedpass){
		header("Location: http://localhost/backup/index.php");
	}
	else{
		header("Location: http://localhost/backup/login.php");
	}*/
