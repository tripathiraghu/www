<?php
ob_start();
session_start();
include 'connection.php';
?>
<head>
	<link href="css/bodyStyle.css" rel="stylesheet">  
</head>

<?php

$email=$_COOKIE['email'];

$class=$_POST['class'];
$_SESSION['class']=$class;
$subject=$_POST['subject'];
$_SESSION['subject']=$subject;


if ($email=="") {
	header("location:index.html");
} else {
include 'header.php';
 include 'questionFetch.php';


}
 ?>