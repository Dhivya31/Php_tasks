
<!--  Delete records -->
<?php
include ('db_connection.php');

 $id=$_GET['id'];

 mysqli_query($conn,"DELETE FROM multiple_data where id='$id'");
 header('location:index.php');
?>