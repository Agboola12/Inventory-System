<?php
 include 'dashboard.php'; 
 include '../config.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css"> -->

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


<!-- <div id="home" class="container " ><br> -->
    <div class="text-center" style="color: black; margin-top: 15em">
      <?php  if (isset($_SESSION['first_name']) ) : ?>
      <h2 style="text-align:center"> Welcome <strong><?php echo $_SESSION['first_name'];echo " "; echo $_SESSION['last_name'];?></strong></h2>   <?php endif ?>

    </div>
    <footer>
      <div class="footer-area text-dark" style="text-align: center; margin-top: 23em;">
        <h5>© Copyright Agboola E.I All right reserved. Template by <a href="elijahagboola077">Elite</a>.</h5>
      </div>
    </footer>            
<!-- </div> -->

    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>