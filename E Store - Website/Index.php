<?php
  require("./includes/Common.php");

if (isset($_SESSION['email'])) {
    header('location: Products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | E-Store.com</title>
        <link rel="shortcut icon" href="img\scart.png" type="image/png">

        <meta name="viewport" content="width=device-width, initial-scale=1">
          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Bootstrap Core CSS -->
          <link href="./CSS/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./CSS/style.css" rel="stylesheet">

    </head>
    <body style="padding-top: 50px;">


    <?php 
        include "./includes/Header.php";
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
                <li><a href="./Login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
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

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Laptop Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="./Products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Choose&nbsp;&nbsp;From&nbsp;&nbsp;a wide&nbsp;&nbsp;range&nbsp;&nbsp;of&nbsp;&nbsp;brands</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="./Products.php#acer">
                               <div class="thumbnail">
                                    <img src="./images/acer_nitro5.jpg" alt="Acer Nitro 5" >
                                        <div class="caption">
                                            <h3>Acer</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="./Products.php#lenovo">
                               <div class="thumbnail">
                                    <img src="./images/lenovo_ideapad.jpg" alt="Lenovo IdeaPad D330-10IGM" >
                                        <div class="caption">
                                            <h3>Lenovo</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#hp">
                               <div class="thumbnail">
                                    <img src="./images/hp.jpg" alt="HP 15" >
                                        <div class="caption">
                                            <h3>HP</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="./Products.php#asus">
                               <div class="thumbnail">
                                    <img src="./images/asus.jpg" alt="ASUS VivoBook S14" >
                                        <div class="caption">
                                            <h3>Asus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>

            <!--Item categories listing end-->
        </div>


        <?php
        include './includes/Footer.php';
        ?>
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