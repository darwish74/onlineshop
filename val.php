<?php
include('config.php'); 
    $ID=$_GET['id'];
    $sql =mysqli_query($con,"select * FROM prod WHERE id = $ID");
    $result = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;700&family=Jomhuria&family=Open+Sans:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <title>Confirm product purchase</title>
    <style>
    footer{
    margin-top: 20px;
    font-family: 'Cairo', sans-serif;
    font-weight: bold;
    background-color: slategrey;
    border-radius: 7px;
    text-align: center;
    position: relative;
    top:150px;
}
footer > span{
    font-size: 20px;
    
}</style>
</head>
<body>
    <center>
        <dev class="main">
            <form action="cart.php" method="post">
            <h2>Do you really want to buy the product?</h2>
            <input type="text" name="id" value="<?php echo $result['id']?>"readonly>
            <input type="text" name="name" value="<?php echo $result['name']?>"readonly>
            <input type="text" name="price" value="<?php echo $result['price']?>"readonly>
            <button name="confirm" type="submit" class="butt">confirm</button>
            </form>
            <br>
            <a href="shop.php">BACK TO SHOPPING</a>
        </dev>
    </center>
    <footer>Developed by Darwish <span> © </span></footer>
</body>

</html>