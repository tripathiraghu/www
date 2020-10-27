<!DOCTYPE html>
<html>
<head>
	<title>tetsfdhkjg</title>
<style type="text/css">
.button{
font-size: 22px;	
	padding:10px;
	border-radius: 20px;
	border: none;
	color:white;
	background-color: orange;
}
.button:hover{
	font-size: 22px;
	border-radius: 20px;
	border: orange solid 1px; 	
	padding:9px;
	color:orange;
	background-color:white;
}

.container{
	
	width: 50%;
	margin: auto;
	padding: 12px;
	border-radius: 5px;
	border: orange solid 1px;
	display: none;
-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 1s;

}
@-webkit-keyframes example {
  from {margin-left: -100%;}
  to {margin-left: 20%;}
}


.close{
font-size: 22px;	
	padding:10px;
	border-radius: 20px;
	border: none;
	color:white;
	background-color: orange;
}
.close:hover{
	font-size: 22px;
	border-radius: 20px;
	border: orange solid 1px; 	
	padding:9px;
	color:orange;
	background-color:white;

}


</style>



</head>

<body>

<button id="button" class="button" onclick="show()" >Click Me </button>
<div class="container" id="container">
	<center><h1>Testing box</h1></center>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

	<center><button class="close" id="close" onclick="hide()">Close</button></center>

</div>




<script type="text/javascript">
	
function show(){
	document.getElementById("container").style.display = "block"; 
	document.getElementById("container").classList.add('MyClass');
}

function hide(){
	document.getElementById("container").style.display = "none"; 
	document.getElementById("container").classList.remove('MyClass');
}


</script>
</body>
</html>