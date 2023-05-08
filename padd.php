<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- <meta http-equiv='refresh' content='10'> -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Cairo:wght@200;700&family=Jomhuria&family=Open+Sans:ital,wght@1,300&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='index.css'>
    <title>MY CART</title>
    <style>
        h1{
            font-family: 'Cairo', sans-serif;
             font-weight: bold;
        }
        table{
            width:40%;
            margin-top: 20px;
            box-shadow: 1px 1px 1px 10px silver;
            border: 0px;
            text-align: center;
        }
        thead{
            background-color: gray;
            margin-top: 20px;
        }
        div a{
            text-align: center;
            position: relative;
            top: 30px;
            left: 600px;
        }
    </style>
</head>
 
<body>
    <center>
        <h1>
        your reserved products
        </h1>
    
    </center>
<?php
include('config.php');
    $results = mysqli_query($con, 'SELECT * FROM carts');
    while ($row = mysqli_fetch_array($results))
   {
    echo"<center>
    <table>
        <thead>
            <tr>
                <th scope='col'>ProductName</th>
                <th scope='col'>Product Price</th>
                <th scope='col'>Delete product</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td><a href='delcart.php? id=$row[id]' class='btn' style{background-color:red;}>DELETE</a></td>
            </tr>
        </tbody>
    </table>
    
   </center>
";
   }
   
   ?>
   <div>
    <a href='shop.php'>BACK TO SHOPPING</a>
   </div>
</body>

</html>