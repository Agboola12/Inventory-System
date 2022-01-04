<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="../style.css">
    <!-- <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->

    <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container{
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),url("../images/pharmacy.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .main{
            margin-top: -100px;
        }
    </style>
</head>
<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="color: white">Sign up</h2>
                    <form method="post" action="" enctype="multipart/form-data">
                         <?php include('../errors.php'); ?>
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" required="_required" placeholder="First Name" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" required="_required" placeholder="Last Name" class="form-control" />
                            </div>
                            <div class="form-group">
                               
                                <input type="text" name="username" id="username" required="_required" placeholder="username" class="form-control"/>
                            </div>
                            <div class="form-group">    
                                <input type="email" name="email" id="email" required="_required" placeholder="Your Email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="mobile" name="mobile" id="mobile"required="_required" placeholder="Your Mobile Number" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_1" id="password_1"required="_required" placeholder="Password" class="form-control"/>
                            </div>
                            <div class="form-group">
                               <input type="password" name="password_2" id="password_2"required="_required" placeholder="Repeat your password" class="form-control"/>
                            </div>
                            <div class="form-group">
                               <input type="file" name="pix" class="form-control" placeholder="">
                            </div>
                         <div class="form-group form-button">
                            <input type="submit" name="reg_user" id="reg_user" class="form-submit" value="Register" class="form-control"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/logo.jpg" alt="sing up image" style="border-radius: 300px;margin-top: 4em"></figure>
                        <a href="login.php" class="signup-image-link" style="color: white; font-size:1.5em">I am already a member</a>
                    </div>
                </div>
            </div>
        </section>
       
    </div>

    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>