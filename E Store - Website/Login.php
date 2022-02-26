<? php require './includes/Common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN</title>
    <style>

        .panel{
            margin-top: 75px;
        }

        form{
            margin: auto;
        }

        footer{
            position: absolute;
            padding: 10px 0;
            background-color: #101010;
            color:#9d9d9d;
            bottom: 0;
            margin-bottom: 0;
            width: 100%;
}
    </style>

<? php
    if (isset($_SESSION['email'])) { 
        header('location: Products.php'); 
    }
?>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                </button>
                    <a class="navbar-brand" href="Index.php">E-Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

  <br>
  <br>
  <br>
  <br>

  <div class="row">
    <div class="col-xs-4 col-xs-offset-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <center><h4>Login</h4></center>
                </div>
                    <div class="panel-body">
                        <p class="text-warning">**Login to make a purchase</p>
                        <form method='POST' action="Login_submit.php">
                            <? php echo $_POST['email'] ?>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button> 
                             </div>
                            </form>
                    </div>

                    <div class="panel-footer">
                        <p>
                            Don't have an account? <a href="Signup.php">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
                   
                 
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