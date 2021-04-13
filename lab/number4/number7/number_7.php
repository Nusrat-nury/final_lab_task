<?php 
$min = 11;
$max = 20;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $min = $_REQUEST['min'];
    $max = $_REQUEST['max'];
}
?>

<form action="" method="post">
  <label for="fname">min</label><br>
  <input type="number" id="fname" name="min" value=11><br>
  <label for="lname">max</label><br>
  <input type="number" id="lname" name="max" value=20><br><br>
  <input type="submit" value="Submit">
</form> 

<?php 
echo rand($min, $max);
?>