 <?php

 $sql_tab="SELECT * FROM `questions` WHERE `classNumber`='$class' AND `classSubject` ='$subject'";
  $dt=mysqli_query($con,$sql_tab);
  $a=mysqli_num_rows($dt);
  if ($a>0)
  {
  while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
  {
  $question=$row['question'];
  $a=$row['a'];
  $b=$row['b'];
  $c=$row['c'];
  $d=$row['d'];
  $answer=$row['answer'];
?>
<p><?php echo $question ?></p>
<div class="radio">
  <label><input type="radio" name="optradio" checked><?php echo $a ?></label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" checked><?php echo $b ?></label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" checked><?php echo $c ?></label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" checked><?php echo $d ?></label>
</div>
<?php
}
}else{
  echo "echo something goes wrong";
  }
 ?> 	