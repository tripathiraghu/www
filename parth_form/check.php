<?php
session_start();
include 'connection.php';

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


<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 align="center" style="margin-bottom: 40px">User Info</h1>

<div class="container" style="border: 5px solid black ;">
	<div class="row" style="margin: 20px">
		<div class="col-lg-6">
		<h3>Pos Serial No -  
		<?php 
		echo $serial;
		 ?>
		  </h3>
		 <h3>Date Of Issue -  
		<?php 
		echo $dateIssue;
		 ?>
		  </h3>


 <h3>Agent Name -   
		<?php 
		echo $agentname;
		 ?>
		  </h3>




		   <h3>Address -   
		<?php 
		echo $agentid;
		 ?>
		  </h3>




		   <h3>Login Id  -  
		<?php 
		echo $loginid;
		 ?>
		  </h3>




		   <h3>Agreement -  
		<?php 
		echo $aggrementstatus;
		 ?>
		  </h3>




		   <h3>Wallet -   
		<?php 
		echo $walletStatus;
		 ?>
		  </h3>




		   <h3>Delivery Status -  
		<?php 
		echo $delivery;
		 ?>
		  </h3>



		   <h3>Tracking No -  
		<?php 
		echo $tacking ;
		 ?>
		  </h3>






		</div>
		
	



<div class="col-lg-6">
	<?php 

	echo "<img src = "."uploads/".$photo." height=200 width=200>";
	 ?>
</div>

	
</div>

<button onclick="window.location.href = 'status.php';"
style="width:100%; background-color:#73f1ff; margin-top:20px; margin-bottom: 20px" 

>Check Another</button>

</div>

</body>
</html>