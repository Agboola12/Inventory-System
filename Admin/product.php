<?php include 'admin dashboard.php'; ?>
<div id="product" class=" jumbotron" style="margin-top: 3em" align="center"><br>
<h1>Product Sold</h1>
<?php

  $db = mysqli_connect('localhost', 'root', '', 'inventory');
 if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $save = mysqli_query($db , 'SELECT * FROM product');

  $row = mysqli_num_rows($save);

  echo "<table class=' table table-bordered table-sm mt-5 text-center'>";
  echo "<thead class=''>";
  echo "<tr>";
  echo "<th>S/N</th>";
  echo "<th>Product_name</th>";
  echo "<th>Price</th>";
  echo "<th>Quantity</th>";
  echo "<th>Total</th>";
  echo "</tr>";
  echo "</thead>";

  $tot = 0;
  while ($retrive = mysqli_fetch_array($save))
  {
  echo "<tr>
          <td>".$retrive['product_id']."</td>
          <td>".$retrive['product_name']."</td>
          <td>".$retrive['price']."</td>
          <td>".$retrive['quantity']."</td>
          <td>".$retrive['total']."</td>
      </tr>";
  $tot += $retrive['total'];
  }
  echo "<tr>
        <td><button class='btn btn-success'>SUM</button></td>
        <td><input type='text' name='' class='form-control' value='".$tot."'></td>
      </tr>";
  echo "</table>";

?>
</div>