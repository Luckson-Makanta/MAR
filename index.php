<?php 
include('connect.php');





      

//echo print_r($names[0]);
 ?>
<!doctype html>
<html lang="en">
  
<?php include('header.html');      ?>


<?php

$sql = 'SELECT id, firstName, lastName, message FROM reasons';

$results =  mysqli_query($connect, $sql);
$array_values = mysqli_fetch_all($results, MYSQLI_ASSOC);
// print_r($array_values);

?>

<div class="container">
  <p>Requests (<?php echo count($array_values); ?>)</p>
  <?php foreach($array_values as $value){  ?>

        <p><?php echo $value['firstName'].' '.$value['lastName']?></p>

  <?php }?>
</div>

     
  <?php  include('footer.html');     ?>  
    
</html>