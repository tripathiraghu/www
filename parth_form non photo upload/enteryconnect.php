<?php
session_start();
include 'connectionOnline.php';






$serial=$_POST['serial'];
$date=$_POST['date'];
$agentName=$_POST['agentName'];
$agentId=$_POST['agentId'];
$Address=$_POST['Address'];
$loginId=$_POST['loginId'];
$agreement=$_POST['agreement'];
$photos=$_POST['photos'];
$wallet=$_POST['wallet'];
$deliveyStatus=$_POST['deliveyStatus'];
$TrackingNumber=$_POST['TrackingNumber'];



$sql_tab="INSERT INTO `details` (`sno`, `serialNo`, `date`, `agentName`, `agentId`, `address`, `loginId`, `aggrement`, `photo`, `wallet`, `deliveryStatus`, `trackingNo`) VALUES (NULL, '$serial', '$date', '$agentName', '$agentId', '$Address', '$loginId', '$agreement', '$photos', '$wallet', '$deliveyStatus', '$TrackingNumber')";
mysqli_query($con,$sql_tab);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }
  else{
  	
  	header ("location: confirm.php");
  }
 


?>