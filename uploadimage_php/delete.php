
<!--  Delete records -->
<?php
include ('connection.php');

 $id=$_GET['id'];

 mysqli_query($conn,"DELETE FROM user where id='$id'");
 header('location:uploadimage.php');
?>