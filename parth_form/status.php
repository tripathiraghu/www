<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body style="background-color:white">
<div class="container" style="border:4px solid #73f1ff; margin-top: 10px; border-radius: 15px;">
		
		   

      <H3 style="color:#000; text-align: center; padding: 12px; ">Details</H3>
    
<!-- form Starts Here -->

    <form method="post" action="check.php" >
        <div class="form-row">
    <div class="form-group col-md-12" style="margin-top: 15px;">
      <label for="inputEmail4">Enter Serial Number</label>
      <input type="text" name="serialno" class="form-control" id="inputserial" placeholder="serial Number">
    </div>
    <div class="form-group col-md-12" style="margin-top: 15px;">
      <label for="inputEmail4">Enter agent Name</label>
      <input type="text" name="agentName" class="form-control" id="inputserial" placeholder="agent Name">
    </div>
    <div class="form-group col-md-12" style="margin-top: 15px;">
      <label for="inputEmail4">Enter Agent Id</label>
      <input type="text" name="agentId" class="form-control" id="inputserial" placeholder="Agent Id">
    </div>
    

<button  type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:10px;">SignIn</button>
</div>
 </form>

 <!-- form ends here -->
<button  onclick="window.location.href = 'index.php';" type="submit" class="btn " style="width:100%; background-color:#73f1ff; margin-top:20px;" >Not a memeber? Register</button>
 
</div>
</div>
    





 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script type="text/javascript" src="loader.js"></script>
 
</body>
</html>