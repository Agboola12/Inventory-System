<?php
$db = mysqli_connect('localhost', 'root', '', 'inventory');
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
  $email = $_SESSION ['email'];
  $firstname =$_SESSION ['firstname'];
  $lastname = $_SESSION['lastname'];
  $phone = $_SESSION ['phone'];
  $profile = $_SESSION['profile'];
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

    
   <!--  <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css"> -->
    <link rel="stylesheet" type="text/css" href="dashboard1.css">

<!-- navbar -->
<nav class="navbar navbar-expand-sm " style="background-color: #184D6C;">
  <h2 style="text-align: center; color: white; margin-left:40% " align="center"> Laa-Dey Pharmacy Store </h2>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <input type="text" class="form-control" placeholder="Search..">
    </li>
    <li class="nav-item">
        <?php echo "<img src='profile/".$_SESSION['profile']."'>";  ?>
    </li>
  </ul>
</nav>

<!-- Main content -->
<div class="container-fluid">
<div class="sidenav" style="background-color: #184D6C">
		<div class="center">
			 <center>
			     <img src="../images/logo.jpg">
	     </center>
	  </div>
  <!-- <hr  style="background: white;   "> -->
	<ul class="nav nav-pills" role="tablist">
     <li class="nav-item">
      <a class="nav-link active" href="goback.php"><i class="fa fa-home"></i>Home</a> <hr class="show">
    </li>

		<li class="nav-item">
			<a class="nav-link" href="adminhome.php"><i class="fa fa-dashboard"></i>Dashboard</a> <hr class="show">
    </li>

		<li class="nav-item">
			<a class="nav-link" href="product.php"><i class="fa fa-rub"></i>Product</a> <hr class="show">
      </li>

		<li class="nav-item">
			<a class="nav-link" href="workers.php"><i class="fa fa-group"></i>Workers</a> <hr class="show">
    </li>

		<li class="nav-item">
			<a class="nav-link" href="adminprofile.php"><i class="fa fa-user"></i>Profile</a> <hr class="show">
    </li>

    <li class="nav-item">
      <a class="nav-link" href="Goods.php"><i class="fa fa-check"></i>Goods Available</a> <hr class="show">
     </li>

    <li class="nav-item">
      <a class="nav-link" href="customerorder.php"><i class="fa fa-shopping-cart"></i>Order</a> <hr class="show">
    </li>

		<li class="nav-item">
      <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
	</ul>
</div>



</div>


    <!-- <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script> -->
    <!-- <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script> -->

</body>
</html>