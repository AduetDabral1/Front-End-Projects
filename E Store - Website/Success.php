<?php

require("includes/Common.php");
if (!isset($_SESSION['email'])) {
    header('location: Index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>

<head>
    <title>Success | Life Style Store</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
      <link href="CSS/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="CSS/style.css" rel="stylesheet">
   
</head>

    <body>
        <?php include 'includes/Header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="Products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("includes/Footer.php");
        ?>
    </body>
</html>