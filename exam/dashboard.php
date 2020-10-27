<?php
ob_start();
session_start();
$email=$_COOKIE['email'];
include 'connection.php';
if ($email=="") {
	header("location:index.html");
} else {
include 'header.php';
?>
<!-- html start -->
<head>
	<link href="css/bodyStyle.css" rel="stylesheet">
	<title>Home | Exam Star</title>
	  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script
>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function loadData(type, catagory_id){
			$.ajax({
				url:"load-cs.php",
				type:"POST",
				data: {type : type, id:catagory_id},
				success: function(data){
					if (type == "subjectData") {
					$("#subject").html(data);	
					}else{
					$("#class").append(data);	
					}
					
				}
			});
		}

			loadData();

			$("#class").on("change",function(){
				var className = $("#class").val();

				if (className != "") {
				loadData("subjectData", className );
			}else{
				$("#subject").html("");
			}
			})
	});
</script>

</head>
<body>
	<div class="row">
		<p class="home_heading">Test Yourself</p>
	</div>
	
		<div class="row">
			
			<div class="col-md-6 col-sm-12 right_home">
						<!-- select Class -->
				<div class="container">
					<form method="post" action="examTest.php" name="fr1">
				<select class="form-control form-control-lg" id="class" name="class" required>
  					<option value="">Select Class</option>
				</select>


	<!-- select Subject -->
				<select class="form-control form-control-lg" id="subject" name="subject" required>
  					<option value="">Select Subject</option>
				</select>
			
				
			     <button  class="btn btn-custom btn-lg" type="submit">Start Test</button>
				
				</form>
			</div>
			</div>


			<div class="col-md-6 col-sm-12 left_home">

			</div>
		
		</div>
	



</body>





<!-- php final end -->
<?php 
}
?>