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
            top:100px;
        }

        footer>span {
            font-size: 20px;
        }
     h1{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
        color:white;
        background-color: red;
        border-radius: 15px;
        width:80%;
        box-shadow: 1px 1px 10px red;
        padding:10px;
        margin: 10px;
     }
     h1:hover{
        background-color: red;
        opacity: 0.6;
         }
     .container{
        background-color: #f2f2f2; 
        box-shadow: 1px 1px 10px gray;
        border-radius: 20px;
        overflow: hidden;
        text-align: center;
     }
     .card{
        float: right;
        margin: 20px;
     }
     .card img{
        width: 100%;
        height: 200px;
     }
     .card:hover{
        background-color: skyblue;
     }
     h5{
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
     }
     .btn-danger{
        float:left;
        width:40%;
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
     }
     .btn-primary{
        float:right;
        width:40%;
        font-family: 'Cairo', sans-serif;
        font-weight: bold;
        border-radius: 10px;
     }
     .btn-primary:hover{
        background-color: red;
        opacity: 0.5;
     }
    </style>
</head>

<body>
    <center>
       <h1> ADMIN PAGE <i class="fa-solid fa-toolbox fa-lg"></i></h1>
    </center>
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
                <a href='update.php? id=$row[id]' class='btn btn-danger'>Update</a>
                <a href='delete.php? id=$row[id]' class='btn btn-primary'>Delete</a>
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