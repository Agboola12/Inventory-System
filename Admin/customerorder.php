<?php include 'admin dashboard.php'; ?>
<div id="customerorder" class="container" align="center"><br>
          <h1>Goods that are ordered</h1>
<?php
  $db = mysqli_connect('localhost', 'root', '', 'inventory');
 if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $save = mysqli_query($db , 'SELECT * FROM customer_order');
  $select = mysqli_query($db , "SELECT * FROM customer_order order by  email desc");
  $row = mysqli_num_rows($save);

  echo "<table class='table' style='margin-left:110px'>";
  echo "<thead class='thead-light'>";
  echo "<tr>";
  echo "<th>S/N</th>";
  echo "<th>Full Name</th>";
  echo "<th>Address</th>";
  echo "<th>Product</th>";
  echo "<th>Email</th>";
  echo "<th>Quantity</th>";
  echo "<th>Message</th>";
  echo "<th>Delete</th>";
  echo "</tr>";
  echo "</thead>";

  while ($retrive = mysqli_fetch_array($save))
  {
      echo "<tr>
        <td>".$retrive['order_id']."</td>
        <td>".$retrive['fullname']."</td>
        <td>".$retrive['address']."</td>
        <td>".$retrive['product']."</td>
        <td>".$retrive['email']."</td>
        <td>".$retrive['quantity']."</td>
        <td>".$retrive['message']."</td>
        <td>
          <a class='btn btn-danger' href='deleteorder.php?id=".$retrive['order_id']." '>Delete</a>
        </td>
        </tr>";

  }
    echo "</table>";

?>
       </div>



