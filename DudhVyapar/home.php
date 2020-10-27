<?php
ob_start();
session_start();
include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Home | Dudh Vyapar</title>

<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="icon" href="image/icon.png">

<style type="text/css">
.welcome center img{
	height: 140px;
	width: 140px;
}
.welcome center p{
	font-size: 32px;
}



.row .col-4 .links center img{
	width: 120px;
	height: 120px;
	}

.row .col-4 .links center p{
	font-size: 30px;
	}

@media screen and (min-width: 80px) and (max-width: 750px) {
	.welcome center p{
	font-size: 20px;
}

	.welcome center img{
	height: 140px;
	width: 140px;
}

	.row .col-4 .links center img{
	width: 80px;
	height: 80px;
	}


.row .col-4 .links center p{
	font-size: 15px;
	}


}





</style>

</head>


<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="margin-bottom: 10%;">
      <a class="navbar-brand" href="index.php"><img src="image/icon.png" height="50" width="50" style="margin-right: 2%"> Dudh Vyapar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addMember.php">Add Member</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Update Rate List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="addMember.php">Bills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>
<!-- nav bar ends -->
<div class="container welcome" style="margin-top: 80px;"> 
<center>
	<img src="image/icon.png">  
	<p>Welcome To Dudh Vyapar</p>
</center>
</div>
<br>
<br>
<div class="row">
		<!-- milk collection -->
		<div class="col-4">
			<a href="milkCollection.php">
			<div class="container links">
				<center>
					<img src="image/milk.png" >
					<p>Milk Collection</p>
				</center>	
			</div>
			</a>
		</div>

		<!-- Sales -->
		<div class="col-4">
			<a href="sales.php">
			<div class="container links">
				<center>
					<img src="image/sales.png" >
					<p>Sales Register</p>
				</center>	
			</div>
			</a>
		</div>

		<!-- Add Memmber -->
		<div class="col-4"> 
			<a href="member.php">
			<div class="container links">
				<center>
					<img src="image/member.png" >
					<p>Add/Update Member</p>
				</center>	
			</div>
			</a>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>