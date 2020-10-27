<?php
session_start();
include 'connectionOnline.php';

$serialno=$_POST['serialno'];
$agentName=$_POST['agentName'];
$agentId=$_POST['agentId'];



$sql_tab="SELECT * FROM details WHERE serialno='$serialno' || agentName='$agentName' || agentId='$agentId' ";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

echo "Pos Serial No - ";

echo $row['serialNo'];
echo "<br>";

echo "Date Of Issue - ";
echo $row['date'];
echo "<br>";

echo "Agent Name - ";
echo $row['agentName'];
echo "<br>";

echo "Agent Id - ";
echo $row['agentId'];
echo "<br>";

echo "Address - ";
echo $row['address'];
echo "<br>";

echo "Login Id - ";
echo $row['loginId'];
echo "<br>";

echo "Agreement - ";
echo $row['aggrement'];
echo "<br>";

echo "photo - ";
echo $row['photo'];
echo "<br>";

echo "Wallet - ";
echo $row['wallet'];
echo "<br>";

echo "Delivery Status - ";
echo $row['deliveryStatus'];
echo "<br>";

echo "Tracking No - ";
echo $row['trackingNo'];
echo "<br>";



}
// header ("location: user.php");
// $_SESSION['email']=$em;

// setcookie("testing", $_SESSION['email'], time() +60*60*365 );
// $_SESSION['email']=$_COOKIE['testing'];
// $_SESSION ['first_name'] = $fn ;
// setcookie("f_name", $_SESSION['first_name'], time() +60*60*365 );
// $_SESSION ['first_name'] = $_COOKIE['f_name'];

}

else
{
	$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'login.php';

</script>
";

}


?>