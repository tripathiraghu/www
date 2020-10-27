<!DOCTYPE html>
<html>
<head>
	<title>First Program</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">




      <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body  style="background-color:white">

	<!-- heading start -->
	<div class="container" style="border:4px solid #000; margin-top: 10px; border-radius: 15px;">
		
		<h2 style="text-align: center; margin-top: 10px;">Register</h2>



	</div>
<!-- heading end -->





<!-- form start here -->
<div class="container">
	<!-- form details -->
<form method="post" action="enteryconnect.php" name="fr1">

 



  <div class="form-group">
      <label for="inputSerial">Pos Serial No</label>
      <input type="text" name="serial" class="form-control" id="inputserial" placeholder="Pos Serial No">
    </div>
   <div class="form-group">
      <label for="inputDate">Date Of Issue</label>
      <input type="text" name="date" class="form-control" id="inputdate" placeholder="Date Of Issue">
    </div>
     <div class="form-group">
      <label for="inputDate">Agent Name</label>
      <input type="text" name="agentName" class="form-control" id="inputdate" placeholder="Agent name">
    </div>
     <div class="form-group">
      <label for="inputDate">Agent ID</label>
      <input type="text" name="agentId" class="form-control" id="inputdate" placeholder="Agent Id">
    </div>
 
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="inputLogin ID">Login Id</label>
    <input type="text" name="loginId" class="form-control" id="inputLoginId" placeholder="login ID">
  </div>

  <div class="form-group">
    <label for="inputState">agreement</label>
           <select id="inputState" name="agreement" class="form-control">
        <option selected>Yes</option>
        <option selected>no</option>
         </select>
  </div>

  <div class="form-group">
    <label for="inputphotos">photos</label>
    <br>
    <input type="file" name="photos" id="fileToUpload">
  </div>

  <div class="form-group">
      <label for="inputState">Wallet</label>
           <select id="inputState" name="wallet" class="form-control">
        <option selected>Yes</option>
        <option selected>no</option>
         </select>
  </div>

  <div class="form-group">
    <label for="inputState">Delivery Status</label>
           <select id="inputState" name="deliveyStatus" class="form-control">
        <option selected>Not Deliverd </option>
        <option selected>Deliverd</option>
         </select>
  </div>

  <div class="form-group">
    <label for="inputTrackingNumber">Tracking No</label>
    <input type="text" name="TrackingNumber" class="form-control" id="inputTrackingNumber" placeholder="Tracking Number">
  </div>
  
 
   
  
  <button  type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:10px;">Submit</button>


</form> 


 <button onclick="window.location.href = 'status.php';"   type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:20px;" >Check Status</button>

</div>



<!-- form End Here -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>