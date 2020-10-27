<!DOCTYPE html>
<html>
<head>
	<title>All Users  List</title>
</head>
<body>

<?php
session_start();
include 'connection.php';

echo "<table style="."width:100%".">";
?>

<tr style="background-color: black; color: white; border-radius: 220px;">
<?php 
echo"<th>serial Number</th>";
echo"<th> Date Of Issue</th>";
echo"<th>Agent Name.</th>";
echo"<th>agent Id</th>";
echo"<th>Agent Address</th>";
echo"<th>Login Id</th>";
echo"<th>Aggrement Status</th>";
echo"<th>photo</th>";

echo"<th>Wallet Status</th>";
echo"<th>Delivery </th>";
echo"<th>Tacking</th>";

  echo"</tr>";



$sql_tab = "SELECT * FROM details  ORDER BY sno";
$dt = mysqli_query($con, $sql_tab);
$s = mysqli_num_rows($dt);
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {
$row['serialNo'];
$serial=$row['serialNo'];


$row['date'];
$dateIssue=$row['date'];


 $row['agentName'];
$agentname=$row['agentName'];

 $row['agentId'];
$agentid = $row['agentId'];

$row['address'];
$agentAddress=$row['address'];

 $row['loginId'];
$loginid = $row['loginId'];

$row['aggrement'];
$aggrementstatus = $row['aggrement'];


$photo = $row['photo'];


$row['wallet'];
$walletStatus = $row['wallet'];

$row['deliveryStatus'];
$delivery=$row['deliveryStatus'];

$row['trackingNo'];
$tacking = $row['trackingNo'];


?>

<tr style="background-color:#f4f4f4; color: black;">
<?php

echo"<th>".$serial."</th>";
echo"<th >".$dateIssue."</th>";
echo"<th>".$agentname."</th>";
echo"<th >".$agentid."</th>";
echo"<th>".$agentAddress."</th>";
echo"<th >".$loginid."</th>";
echo"<th>".$aggrementstatus."</th>";
echo"<th ><img src = "."uploads/".$photo." height=50 width=50></th>";

echo"<th>".$walletStatus."</th>";
echo"<th >".$delivery."</th>";
echo"<th>".$tacking."</th>";

  echo"</tr>";



}
echo "</table>";

?>
</body>
</html>