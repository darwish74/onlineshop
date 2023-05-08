<?php
include('config.php');
if(isset($_POST['confirm']))
{
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $insert="INSERT INTO carts (name,price) VALUES ('$NAME','$PRICE')";
    mysqli_query($con, $insert);
    header('location:padd.php');
    
}
?>