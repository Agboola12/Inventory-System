<?php include('loginadmin.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
<style type="text/css">
    body{
        background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(../images/admindrug2.webp);
        background-repeat: no-repeat;
        background-size: cover;
        height: 88vh;
        /*width: 94%;*/
    }
     /*   #Sign{
              border-bottom-right-radius: 100px;
              border-top-left-radius:20px;
              border-top-right-radius:20px;
              border-bottom-left-radius:20px;
              color:;
              border-style: solid;
              border-width: medium;
        }*/
    #login{
            color: white

    }
    .card{
        background: transparent;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.9);
        margin-top: 5em;
        border-bottom-right-radius: 5em;
    }
    label{
        color: white;
        font-weight: bolder;
    }
    .form-control{
        border-radius: 10em;
    }
    .show{
       background-color: white;
       width: 10%;
    }

    a{
        color: black;
        
    }
    a:hover{
        color:#094057;
        text-decoration: none;
    }
    img{
        border-radius: 300px;
        height: 100px;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }
    @-webkit-keyframes mover{
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
    }
    @keyframes mover{
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
    }

</style>
</head>
<body id="bg-body">
    <div class="container">
        <div class="login-form col-md-6  offset-md-3 card">
            <div  style="padding-top: 35px;padding-bottom: 10px;">
                <h1 id="Sign" align="center">
                    <strong style="color:white;width: 50%"> Login</strong>
                    <hr class="show">
                </h1>

                <center>
                    <img src="../images/logo.jpg">
                </center>

                <?php include('../errors.php'); ?>
                <div class="" id="login" style="padding-top: 20px;padding-bottom: 10px;">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text"  name="username" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password </label>
                            <input type="password"  name="password" class="form-control" placeholder="Enter Valid Password
                            ">
                        </div>
                        <h5><a href="adminregister.php">Create an account</a></h5>
                        <div class="form-group">
                            <center><input type="submit" name="submit" value="Login" class="btn btn-success " style="background-color: #037B9C"></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>