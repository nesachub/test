<?php
$insert = false;
if(isset($_POST['name'])){
    
    define('DB_USER', "postgres"); // db user
    define('DB_PASSWORD', "Biswarup1!"); // db password (mention your db password here)
    define('DB_DATABASE', "food"); // database name
    define('DB_SERVER', "localhost"); // db server
    define('DB_PORT', "5432"); // db port

    $con = pg_connect("host=".DB_SERVER." port=".DB_PORT." dbname=".DB_DATABASE." user=".DB_USER." password=".DB_PASSWORD)
        or die("Could not connect to server ... \n" . pg_errormessage($con));

        //echo "connection is established";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="download.jpg" alt="Food">
    <div class="container">
        <h1 style="color:black"> Welcome to NESAC food court</h3>
        <p>Enter your details and submit this form to book your favourite food </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for booking in advance </p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="Name" placeholder="enter your name">
            <input type="text" name="Employee ID" id="Employee ID" placeholder="enter your employee id">
            <input type="text" name="Food you like to order" id="Food you like to order" placeholder="food you like to order">
            <input type="Date" name="Date" id="Date" placeholder="Date">
            <input type="text" name="Coupon code" id="Coupon code" placeholder="coupon code">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other requirement here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    
    
</body>
</html>
