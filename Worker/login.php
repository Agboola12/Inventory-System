<?php include('loginserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="../style.css">

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
    <!-- <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <style type="text/css">
        .card{
            background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)),url("../images/admindrug2.webp");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /*height: 40em;*/
            padding: 3em;
            width: 100%;
            border-radius: 2em;
            margin-top: 70px;
        }    
        .row{
            margin-top: 4em
        }

        img{
            border-radius: 300px
        }
        form{
            margin-top: 2em;
        }

        input{
            height: 3em;
            border-radius: 0.5em

        }
    </style>
</head>


       
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <figure><img src="../images/logo.jpg" alt="sing up image"></figure>
                         <a href="register.php" class="signup-image-link" style="color:white;font-size: 1.5em">Create an account</a>
                    </div>

                    <div class="col-md-6">
                        <h1 class="form-title" align="center" style="color:white"><b>LOGIN</b></h1>
                        <form method="POST" class="register-form" action="login.php" id="login-form">
                                <?php include('../errors.php'); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-group" name="username"  required="_required"placeholder="username"/><br>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-group" name="password" required="_required" placeholder="Password"/>
                                    </div>
                                    
                                    <div class="form-group form-button" align="center">
                                        <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                                    </div>
                                </form>
                                  <div class="social-login">
                            <span class="social-label" style="color: white">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                <li><a href="../index.php" class="text-light">Go to home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
     </div>

    <!-- JS -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>