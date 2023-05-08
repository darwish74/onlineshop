<?php
include('config.php');
if(isset($_POST['upload']))
{
 $NAME = $_POST['name'];
 $PRICE = $_POST['price'];
 $IMAGE = $_FILES['image'];
 $IMAGE_location =$_FILES['image']['tmp_name'];
 $image_name= $_FILES['image']['name'];
 $image_up= $_FILES="images/".$image_name;
 $insert="INSERT INTO prod (name,price,image) VALUES ('$NAME','$PRICE','$image_up')";
 mysqli_query($con, $insert);
 if(move_uploaded_file($IMAGE_location,'images/'.$image_name)){
    echo "<script>alert('Product uploaded successfully')</script>";
 }
 else{
    echo "<script>alert('Product Not uploaded')</script>";
 }
 header('location: index.php');
}

?>