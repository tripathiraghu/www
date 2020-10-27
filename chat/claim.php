<?php

//gettting the value post perameter
$room = $_POST['room'];


//checking the characters
if(strlen($room)>20 or strlen($room)<2)
{
	$messsage = "please enter a name between 2 to 20 Character ";
	echo '<script language="javascript">';
	echo 'alert("'.$messsage.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
}
//checking the alphanumeric letter

else if(!ctype_alnum($room))
{
	$messsage = "please chose an alphanumeric name ";
	echo '<script language="javascript">';
	echo 'alert("'.$messsage.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
}

else
{
	//connecting to the database
	include 'db_connect.php';

}


//check if room already exist

$sql = "SELECT * FROM `rooms` WHERE roomname = '$room'";
$result = mysqli_query($conn, $sql);
if($result)
{
	if(mysqli_num_rows($result) > 0)
	{
		$messsage = "please chose an different name. This Room Is Already Booked ";
	echo '<script language="javascript">';
	echo 'alert("'.$messsage.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
	}


	else 
	{
		$sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', CURRENT_TIMESTAMP);";
		if (mysqli_query($conn, $sql))
		{
			$messsage = "your room is Ready And You Can Chat now ";
		echo '<script language="javascript">';
		echo 'alert("'.$messsage.'");';
		echo 'window.location="http://localhost/chat/rooms.php?roomname='.$room.'";';
		echo '</script>';
		}
	}
}
else
{
	echo "Error : ". mysqli_error($conn);
}


?>