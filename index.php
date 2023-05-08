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
    <title>OnlineShop22</title>
</head>
 
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h1>Online Marketing</h1>
                <img src="images/241-1.jpg" alt="logo" width="350px" height="150px">
                <input type="text" name="name" placeholder=" ENTER Product Name">
                <br>
                <input type="text" name="price" placeholder="ENTER Product Price" >
                <br>
                <input type="file" id="file" name="image" style="display:none;">
                <label for="file">Upload Product Image</label>
                <br>
                <button name="upload">Add Product ✔️</button>
                <br>
                <a href="products.php">SHOW ALL PRODUCTS</a>
            </form>
        </div>
        <footer>Developed by Darwish <span> © </span></footer>
    </center>
</body>

</html>