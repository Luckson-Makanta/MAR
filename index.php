<?php 
include('db_connection/connect.php');

$sql = 'SELECT * FROM reasons';
$values = mysqli_query($connect, $sql);
$results = mysqli_fetch_all($values, MYSQLI_ASSOC);



      


 ?>
<!DOCTYPE html>
<html>
<?php  include('header.html'); ?>

<div class="container">

       <h1>Students Informatiom</h1>
        <p>Requests (<?php echo count($results)?>)</p>

<?php foreach($results as $result){ ?>

       <h2> <?php echo $result['id'].' '.  $result['firstName']; ?></h2>
       <p><?php echo $result['lastName'].' '. $result['message'].' '.$result['dateTime'];  ?></p>


<?php } ?>

</div>
<



<?php include('footer.html'); ?>
</body>
</html>
