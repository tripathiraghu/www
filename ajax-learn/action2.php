<?php 
include 'connection.php';
 // var_dump($_POST);


$message_send=$_POST['message_send'];



$sql_tab="INSERT INTO `message` (`sender`, `reciver`, `message`) VALUES ('1','2','$message_send')";
mysqli_query($con,$sql_tab);
// echo "success";
// echo $sql_tab;

// retriving data
$sql_tab = "SELECT * FROM message" ;
$dt = mysqli_query($con, $sql_tab);
$a=mysqli_num_rows($dt);
$html = "<table><tr><th>Name</th><th>Address</th><th>Phone</th><tr>";
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {

if ($row['sender'] == 1) {

$html.=	"<div class=" . "chat" . "><h5>" . $row['message'] . "</h5> </div>";
    
} else {
	$html.="<h1>" . $row['message'] . "</h1>";
          
}

$html.="<tr><td>".$row['sender']."</td><td>".$row['reciver']."</td><td>".$row['message']."</td></tr>";



}

echo $html;



 ?>