<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
	
<form id="ajaxform">
	<label>Name</label>
	<input type="text" name="name" id="name">

	<label>address</label>
	<input type="text" name="address" id="address">

	<label>phone</label>
	<input type="text" name="phone" id="phone">

	<input type="button" class="btn btn-default" id="ajax" value="submit"> 
</form>

<div>
	<p id="div1"></p>
</div>

<div class="result_data"></div>
</body>
</html>

<script type="text/javascript">
	
	$(document).ready(function(){
	// geting data on the first load
			$.ajax({
				    url: 'get.php',
				    type: "GET",
				    success: function (result) {
				      	console.log(result,'sdfsdfs');
				      	$('.result_data').html(result);
				      	




				    }
				});

		console.log('load');
		$('#ajax').on('click',function(){
			console.log('onclick');
			$.ajax({
				    url: 'action.php',
				    type: "POST",
				    data: $('#ajaxform').serialize(),
				    success: function (result) {
				      	console.log(result,'sdfsdfs');
				      	$('.result_data').html(result);
				      	




				    }
				});
		})
	})
</script>