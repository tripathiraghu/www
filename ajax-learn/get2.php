<?php
include 'connection.php';
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