<?php
// $db = mysqli_connect('localhost', 'root', '', 'inventory');
include("../config.php"); 
// if (mysqli_connect_errno())
    // {
    // echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }



if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM goods WHERE product_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:Goods.php");
}

?>