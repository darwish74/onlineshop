<?php
include('config.php');
$ID =$_GET['id'];
mysqli_query($con,"DELETE FROM carts WHERE id=$ID");
header('location:padd.php');
?>