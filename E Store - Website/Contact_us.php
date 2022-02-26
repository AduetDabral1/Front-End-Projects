<?php
include "includes/Common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
        <link rel="shortcut icon" href="img\sacrt.png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="CSS/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="CSS/style.css" rel="stylesheet">
    </head>

<body style="padding-top: 50px;">
    
    <?php include 'includes/Header.php'; ?>
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
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-8">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-3">
         <img float="right" src="images/contact_us.jpg" alt="contact us">
        </div>
    </div>
<br><br><br>

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 555 3333</p>
				    <p>Fax:(000) 222 55 33 6</p>
				    <p>Email: info@estore.com</p>
	               </address>
	               
	            <div><h2 class="title">Follow Us On&#58;</h2>
                   <a href="http://www.facebook.com/estore" target="_blank"><img src="./images/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>
                   <a href="http://www.twitter.com/estore" target="_blank"><img src="./images/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>
                   <a href="http://www.isntagram.com/estore" target="_blank"><img src="./images/logoinstagram.jpg" alt="instagram logo" style="width:30px; height:30px; border:0"></a>
               </div>
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