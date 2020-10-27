<?php
session_start();
include 'connection.php';





// photo upload


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// photo upload ends here














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