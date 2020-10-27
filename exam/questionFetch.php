 <?php

 $sql_tab="SELECT * FROM `questions` WHERE `classNumber`='$class' AND `classSubject` ='$subject'";
  $result=mysqli_query($con,$sql_tab);
  $datas = array();
  $no=0;
  if (mysqli_num_rows($result)>0)
  {
  while($row= mysqli_fetch_array($result,MYSQLI_ASSOC))
  	{
		$datas[$no] = $row;
		$no++;
	}
 ?>

 <form action="answerCheck.php" method="post">
 <?php
 $i = 1;
  foreach ($datas as $data)
   {
  ?>
  		<div class="container " style="background-color: #fff; border-radius: 10px; border:2px solid #FFC763; margin-bottom: 20px;">
  		<h5 ><?php echo "Q.".$i," ", $data['question'] ?></h5>
  		<input type="hidden" name="question[]" value="<?=$data['question']?>">
  		<div class="row">
  			<div class="col-sm-12 col-md-6">
				<div class="radio">
		  			<label><input type="radio" name="optradio[<?=$i?>][ans]" value="<?=$data['a']?>"><?php echo $data['a'] ?></label>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="radio">
					  <label><input type="radio" name="optradio[<?=$i?>][ans]" value="<?=$data['b']?>" ><?php echo $data['b'] ?></label>
				</div>
			</div>
		</div>
		<div class="row">
  			<div class="col-sm-12 col-md-6">
				<div class="radio">
		  			<label><input type="radio" name="optradio[<?=$i?>][ans]" value="<?=$data['c']?>" ><?php echo $data['c'] ?></label>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="radio">
		  			<label><input type="radio" name="optradio[<?=$i?>][ans]" value="<?=$data['d']?>"><?php echo $data['d'] ?></label>
				</div>
			</div>
		</div>

		<input type="hidden" name="answer[]" value="<?=$data['answer']?>">
		</div>

  <?php
  $i++;
  }
?>
<div class="row">
<button type="submit" class="btn btn-custom" style="margin: auto;"> submit</button>
</div>
</form>

<?php

 }//end of if
	else{
	  echo "echo something goes wrong";
	 }
  
?>

