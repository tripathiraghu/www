<?php
ob_start();
session_start();
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];



$sql_tab="SELECT * FROM user WHERE email='$email' AND password='$password'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];
$email=$row['email'];
$mobile=$row['Mobile'];

}
header ("location: home.php");
}

else
{
$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'index.php';

</script>
";

}


?>