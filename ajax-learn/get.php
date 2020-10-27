<?php
include 'connection.php';
$sql_tab = "SELECT * FROM ajax" ;
$dt = mysqli_query($con, $sql_tab);
$a=mysqli_num_rows($dt);
$html = "<table><tr><th>Name</th><th>Address</th><th>Phone</th><tr>";
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {


$html.="<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td></tr>";



}

echo $html;


?>