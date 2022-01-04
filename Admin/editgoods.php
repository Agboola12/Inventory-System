<?php

include('../config.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$name=mysqli_real_escape_string($db, $_POST['product_name']);
$price=mysqli_real_escape_string($db, $_POST['price']);
$quant=mysqli_real_escape_string($db, $_POST['quantity']);
$total=mysqli_real_escape_string($db, $_POST['total']);

mysqli_query($db,"UPDATE goods SET product_name='$name', price='$price',quantity='$quant',total='$total' WHERE product_id='$id'");

header("Location: Goods.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM goods WHERE product_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['product_id'];
$name = $row['product_name'];
$price = $row['price'];
$quant=$row['quantity'];
$total=$row['total'];
}
else
{
echo "No results!";
}
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Item</title>
<style>
table, td, th {    
    border: 1px solid #ddd;
    /*text-align: left;*/
}

table {
    border-collapse: collapse;
    text-align: ;
    /*width: 100%;*/
}

th, td {
    padding: 15px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body >
<form action="" method="post" action="editgoods.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table align="center">
<tr>
	<h1 style="text-align:center;">EDIT RECORD</h1>
<!-- <td ><b><font color='#5F5F5F'>EDIT RECORD </font></b></td> -->
</tr>

<tr>
	<th>Item Name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total</th>
</tr>
<tr>
	<td>
		<input type="text" name="product_name" class="form-control" value="<?php echo $name; ?>" />
	</td>
	<td>
		<input type="text" id="price" name="price" class="form-control" value="<?php echo $price ?>" />
	</td>
	<td>
		<input type="text" id="quantity" name="quantity" class="form-control" value="<?php echo $quant;?>" />
	</td>
	<td>
		<input type="text" name="total" id="total" class="form-control" value="<?php echo $total;?>" />
	</td>
</tr>
<tr>
	<td align="center">
		<input type="button" onclick="sum()" style="background-color:grey; width:70px;height: 30px " value="Sum">
		<!-- <button type="button" onclick="sum()" class="btn btn-success">SUM</button> -->
	</td>
	<td>
		<input type="submit" name="submit" value="Edit Records">
	</td>	
		
</tr>

<script type="text/javascript">
                  function sum() 
                  { 
                    var a= price.value;
                    var b=quantity.value;
                    var a=parseInt(price.value);
                    var b=parseInt(quantity.value);
                    var answer=a*b;
                    total.value=answer;
                  }
                          </script>




</table>
</form>
</body>
</html>
