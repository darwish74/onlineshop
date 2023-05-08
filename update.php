<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;700&family=Jomhuria&family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Update</title>
    <Style>
      footer{
            margin-top: 20px;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            background-color: slategrey;
            border-radius: 7px;
            text-align: center;
            position: relative;
            top:90px;
        }
        footer>span {
            font-size: 20px;
        }
    </Style>
</head>
    
<body>
    <?php 
    include('config.php'); 
    $ID=$_GET['id'];
    $sql =mysqli_query($con,"select * FROM prod WHERE id = $ID");
    $result = mysqli_fetch_array($sql);
    ?>
  <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h1>UPDATE PRODUCTS</h1>

                <input type="text" name="id" placeholder=" ENTER Product ID" value="<?php echo $result['id']?>">
                <input type="text" name="name" placeholder=" ENTER Product Name"value="<?php echo $result['name']?>">
                <br/>
                <input type="text" name="price" placeholder="ENTER Product Price"value="<?php echo $result['price']?>">
                <br>
                <input type="file" id="file" name="image" style="display:none;">
                <label for="file">Update Product Image</label>
                <br>
                <button name="update" type="submit">UPDATE</button>
                <br>
                <a href="products.php">SHOW ALL PRODUCTS</a>
            </form>
        </div>
        <footer>Developed by Darwish <span> © </span></footer>
    </center>
</body>

</html>
