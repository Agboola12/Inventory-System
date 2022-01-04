<?php  
    include 'admin dashboard.php';
    include '../config.php';

      $save = mysqli_query($db, "SELECT * FROM register");
      $row = mysqli_num_rows($save);

      $sav = mysqli_query($db, "SELECT * FROM goods");
      $roll = mysqli_num_rows($sav);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
    <!-- <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css"> -->
    <style type="text/css">
      body{
        background:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(../images/09.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
      }
      .col-md-6{
        width: 170px;
      }
      .wide{
        margin-left: 2.5em;
        padding-top: 0.7em;
        color: orange;
      }

      .card{
        border-top-left-radius: 3em;
        border-bottom-right-radius: 3em;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.9);
        background:transparent;      
      }

    </style>
    
<div id="home"  align="center"><br>
      <div style="color: white">
          <?php  if (isset($_SESSION['firstname']) ) : ?>
          <h2 style="text-align:center"> Welcome <strong><?php echo $_SESSION['firstname']." ". $_SESSION['lastname'];?></strong></h2>
          <?php endif ?>
      </div>  
    

    <div class="container ">
        
      <div class="row" style="margin-top: 50px;padding: 2em ">
        <div class="col-md-5 card">
          <i class="fa fa-users fa-4x wide"></i>
          <?php
             echo "<h2 style='color:black'>Total number of <br> customers </h2>" ."<h2> $row </h2>";
            ?>
        </div>
            <div class="col-md-2"></div>
        <div class="col-md-5 card">
           <i class="fa fa-rub fa-4x wide"></i>
           <?php
             echo "<h2 style='color:black'>Total number of goods available </h2>" ."<h2> $roll </h2>";
            ?>
        </div>
        </div>

    </div>


        <!-- <img src="../images/pharmacy.png" alt="welcome"> -->
             <footer class="card-header">
                  <div class="footer-area" style="text-align: center; margin-top: 8.8em; color: white">
                    <h5>© Copyright Agboola E.I All right reserved. Template by <a href="elijahagboola077">Elite</a>.</h5>
                  </div>
            </footer>
    
</div>
