<?php
        include 'Login_Modal.php';
        include 'Common.php';
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
                <a class="navbar-brand" href="../Index.php"><span style="color:magenta" class="glyphicon glyphicon-home">&nbsp; E-Store.com</span></a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              
                <?php
                      if (isset($_SESSION['email'])) {
                    ?>
                     
                <li><a href = "../Cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href = "../Settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "../Logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                   
                <li><a href="../Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                <li><a href="../About_us.php"><span class="glyphicon glyphicon-th-list"></span> About Us</a></li>
                <li><a href="../Contact_us.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
    
                    <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>
</header>