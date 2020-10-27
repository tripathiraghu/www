<?php 

$servername = "http://tripathiraghu.epizy.com/";
$username = "root";
$password = "";
$database = "chatroom";


// cretaing database conection

$conn = mysqli_connect($servername, $username, $password, $database);

//checking Connection

if(!$conn)
{
	die("faield to connect".mysqli_connect_error());
}

?>