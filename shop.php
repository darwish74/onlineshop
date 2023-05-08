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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <title>Products</title>
    <style>
        footer {
            margin-top: 20px;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            background-color: slategrey;
            border-radius: 7px;
            text-align: center;
            position: relative;
            top:150px;
        }

        footer>span {
            font-size: 20px;
        }

        nav {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            color: white;
            background-color: gray;
            border-radius: 15px;
            width: 100%;
            box-shadow: 1px 1px 10px skyblue;
            padding: 10px;
            margin: 10px;
            float: right;
            height: 100px;
        }

        nav h1 {
            text-align: center;
            color: blue;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            opacity: 0.7;
            position: relative;
            bottom: 30px;
        }

        nav a {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            margin-left: 20px;
            margin-right: 5px;
            font-size: 30px;
        }


        .container {
            background-color: #f2f2f2;
            box-shadow: 1px 1px 10px gray;
            border-radius: 20px;
            overflow: hidden;
            text-align: center;
        }

        .card {
            float: right;
            margin: 20px;
        }

        .card img {
            width: 100%;
            height: 200px;
        }

        .card:hover {
            background-color: skyblue;
        }

        h5 {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }

        .btn-danger {
            float: left;
            width: 40%;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }

        .btn-primary {
            text-align: center;
            width: 40%;
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: red;
            opacity: 0.5;
        }

        a {
            cursor: pointer;
        }

        nav a:hover {
            background-color: green;
        }
    </style>
</head>

<body>
    <nav class="ddd">
        <a href="padd.php">MY CART </a>
        <a href="padd.php"><i class="fa-sharp fa-solid fa-cart-plus"></i></a>
        <h1> All products Available </h1>
    </nav>
    <section class='container'>
        <?php
        include('config.php');
        $results = mysqli_query($con, "SELECT * FROM prod");
        while ($row = mysqli_fetch_array($results)) {
            echo "
        <center>
        <main >
        <div class='card' style='width: 20.7rem;'>
            <img src='$row[Image]' class='card-img-top' >
            <div class='card-body'>
                <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price] </p>
              
                <a href='val.php? id=$row[id]' class='btn btn-primary'>ADD TO CART</a>
            </div>
        </div>
    </main>
        
        
        <center>
        ";
        }

        ?>
    </section>
    <footer>Developed by Darwish <span> © </span></footer>
</body>

</html>