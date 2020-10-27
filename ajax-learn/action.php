<?php 
include 'connection.php';
 // var_dump($_POST);


$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];


$sql_tab="insert into  ajax (name, address, phone) values ('$name','$address','$phone')";
mysqli_query($con,$sql_tab);
$sql_tab1="SELECT * FROM ajax ";
$dt=mysqli_query($con,$sql_tab1);
$a=mysqli_num_rows($dt);
$html = "<table><tr><th>Name</th><th>Address</th><th>Phone</th><tr>";
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {


$html.="<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td></tr>";



}

echo $html;





 
?>