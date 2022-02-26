<?php
  require("includes/Common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart | Life Style Store</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
               
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <!-- Bootstrap Core CSS -->
         <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="css/style.css" rel="stylesheet">

        <style>
            footer{
                position: absolute;
                bottom: 0;
            }
        </style>
    </head>
    <body style="padding-top: 50px;">

        <?php
        include 'includes/Header.php';
        ?>
    <?php
        include 'includes/Login_Modal.php';
        include 'includes/Common.php';
        include 'includes/Header.php';
        ?>
<header>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="./Index.php"><span style="color:#3300cc" class="glyphicon glyphicon-home">&nbsp; E-Store.com</span></a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              
                <?php
                      if (isset($_SESSION['email'])) {
                    ?>
                     
                <li><a href = "./Cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href = "./Settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "./Logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                   
                <li><a href="./Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                <li><a href="./About_us.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href="./Contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
    
                    <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
</header>

        
        <div class="container">
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped">

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='Cart_remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='Success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
        </div>
        
        
            <?php include 'includes/Footer.php';?>
            <center>
    <?php
        include './includes/Login_Modal.php';
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="columnf col-sm-4">
              <h3>Information</h3>
                <p><a href="./About_us.php"><span style="color:white">About Us</span></a></p>
                <p><a href="./Contact_us.php"><span style="color:white">Contact Us</span></a></p>
            </div>

            <div class="columnf col-sm-4">
              <h3>My Account</h3>
                <p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:white">Log In</span></a></p>
                <p><a href="./Signup.php"><span style="color:white">Sign Up</span></a></p>
                <a class="link" href="">Made with&nbsp;</a>&#x1f495;<a class="link" href="">&nbsp;in India</a>
            </div>

            <div class="columnf col-sm-4">
              <h3>Contact Us</h3>
                <p>CONTACT No.&nbsp;&nbsp;&nbsp;&nbsp;&#43;91&#45;123&#45;456&#45;7890</p>
                <p>E&#45;Store&#46;com &copy;<?php echo DATE('Y') ;?>.&nbsp;&nbsp;All Rights Reserved.</p>
                
            </div>
        </div>
        
    </div>
</footer>


    </center>
        
    </body>
</html>