<?php
ob_start();
session_start();
include 'connection.php';
?>
<head>
	<link href="css/answerStyle.css" rel="stylesheet">  
</head>

<?php

$email=$_COOKIE['email'];

$class=$_SESSION['class'];
$subject=$_SESSION['subject'];



if ($email=="") {
	header("location:index.html");
} else {
include 'header.php';
 
$a = $_POST['optradio'];
$b = $_POST['question'];
$c = $_POST['answer'];
$i=0;
$j=1;
	?>
	<div class="row">
		<div class="container">

	<?php
foreach ($a as $value) {

	echo "<h5> Q." ,$j," " , $b[$i],"</h5>";
	if(in_array($value['ans'],$_POST['answer'])){

		echo '<p>Your Answer - <span class="ansTrue">', $c[$i] ,"</span></p>";
		echo '<p>Correct Answer - <span class="correctAns">', $c[$i] ,"</span></p>";
		echo"<hr>";
		$i++;

	}else{
		echo '<p>Your Answer - <span class="ansFalse">', $value['ans'] ,"</span></p>";
		echo '<p>Correct Answer - <span class="correctAns">', $c[$i] ,"</span></p>";
		echo"<hr>";
	}
	$j++;
}
echo '<h5>Total Correct Answer - <span class="totalCorrect"> ', $i,'</h5>';
?>

	</div>
</div>
<?php
}
 ?>