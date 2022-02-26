<?php
require "includes/Common.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <title>About Us | E-Store.com</title>
        <link rel="shortcut icon" href="images\scart.jpg">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="CSS/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="CSS/style.css" rel="stylesheet">
    </head>
    
      
<body>
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
    <br>
    <center>
    <div class='container-fluid'>
    <img src="images/about_us.jpg" alt="about image"><br><br>
    </div>
    </center>
        <div class="container">
        
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                    <h3 style="color:orange" class="color">WHO WE ARE</h3>
                    
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<p>
                </div>
                
            </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                    <h3 style="color:red" class="color">OUR HISTORY</h3><br><br>
                    <h4 style="color:green">1988&#45;</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <br>
                    <h4 style="color:blue">2002&#45;</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <br>
                    <h4 style="color:blue">2016&#45;</h4>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                </div>
            
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                   <div class="panel-body">
                    <h3 style="color:orange" class="color">OPPORTUNITIES</h3><br><br>
                        <b>Available Roles</b>
                            <ol>
                                <li>Full stack Web Developer<br>[Full Time Role + also available as a 6 month internship]</li>
                                <br><br>
                                <li>Data Analytics<br>[6 months internship]</li>
                                <br><br>
                                <li>DataBase Manager<br>[Full Time Role + also available as a 6 month internship]</li>
                                <br><br>
                                <li>Business Analytics<br>[Full Time Roll + also available as a 3 month internship]</li>
                                <br><br>
                                <li>Sales Operations<br>[Full Time Roll + also available as a 6 month internship]</li>
                                <br><br>
                                <li>Content Writer<br>[Full Time Roll]</li>
                            </ol>
                        </div>
                </div>
            </div>
            </div>
        
        <?php include 'includes/Footer.php'; ?>
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