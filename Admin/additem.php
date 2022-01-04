<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: adminlogin.php");
  }
?>
<?php


// initializing variables
$item_name = "";
$item_price    = "";
$total =  "";
 $tot = 0;
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'inventory');
// if (mysqli_connect_errno())
//     {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     }
include("../config.php");

// Add item
if (isset($_POST['add'])) {
  // receive all input values from the form
  echo "connect";
  $item_name=mysqli_real_escape_string($db, $_POST['product_name']);
  $item_price=mysqli_real_escape_string($db, $_POST['price']);
  $quant=mysqli_real_escape_string($db, $_POST['quant']);
   $total=mysqli_real_escape_string($db, $_POST['total']);
  
    $query = "INSERT INTO goods  (product_name,price,quantity,total) 
          VALUES('$item_name','$item_price','$quant','$total')";
           
      if(mysqli_query($db, $query))
      {
      echo "<script>alert('Successfully stored');</script>";
        
    }
    else{
        echo"<script>alert('Somthing wrong!!!');</script>";
    }
    
    header('location: Goods.php');
  
}
?>
  