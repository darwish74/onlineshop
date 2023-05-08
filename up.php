<?php
include('config.php');
if(isset($_POST['update']))
{
 $ID = $_POST['id'];
 $NAME = $_POST['name'];
 $PRICE = $_POST['price'];
 $IMAGE = $_FILES['image'];
 $IMAGE_location =$_FILES['image']['tmp_name'];
 $image_name= $_FILES['image']['name'];
 $image_up= $_FILES="images/".$image_name;
 $update="UPDATE prod SET name='$NAME', price='$PRICE' ,image='$image_up' WHERE id=$ID ";
 mysqli_query($con, $update);
 if(move_uploaded_file($IMAGE_location,'images/'.$image_name)){
    echo "<script>alert('Product updated successfully')</script>";
 }
 else{
    echo "<script>alert('Product Not updated')</script>";
 }
 header('location: products.php');
}

?>