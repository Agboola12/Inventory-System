 <?php  
	// $db = mysqli_connect('localhost', 'root', '', 'inventory');
	// if (mysqli_connect_errno())
	// {
	//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	// }

 // if (isset($_POST['submit'])) {   
 //   $fullname=mysqli_real_escape_string($db, $_POST['fullname']);
 //   $address=mysqli_real_escape_string($db, $_POST['address']);
 //   $product = mysqli_real_escape_string($db, $_POST['product']);
 //   $email = mysqli_real_escape_string($db, $_POST['email']);
 //   $quantity= mysqli_real_escape_string($db, $_POST['quantity']);
 //   $message = mysqli_real_escape_string($db, $_POST['message']);
    
 //   if (empty($fullname)) { array_push($errors, "Full Name is required"); }
 //   if (empty($address)) { array_push($errors, "Address is required"); }
 //   if (empty($product)) { array_push($errors, "Product is required"); }
 //   if (empty($email)) { array_push($errors, "Email is required"); }
 //   if (empty($quantity)) { array_push($errors, "Quantity is required"); }
 //   if (empty($message)) { array_push($errors, "Message is required"); }
   
 //   	$query = "INSERT INTO customer_order (fullname, address ,product, email, quantity, message) 
 //   			  VALUES('$fullname', '$address' , '$product', '$email', '$quantity', $message)";
 //   	mysqli_query($db, $query);
 //   	$_SESSION['fullname'] = $fullname;
 //   	$_SESSION['address'] =$address;
	// $_SESSION['product'] =$product;
   
 //   echo '<script type="text/javascript"> alert("Your order has been updated") </script>';
 //  	header('location: index.php'); 
// }


$price = "";

$errors = array(); 

// connect to the database
  include("config.php");
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $fullname=mysqli_real_escape_string($db, $_POST['fullname']);
  $address=mysqli_real_escape_string($db, $_POST['address']);
  $product = mysqli_real_escape_string($db, $_POST['product']);
  // $price = mysqli_real_escape_string($db, $_POST['price']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $message= mysqli_real_escape_string($db, $_POST['message']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "fullname is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($product)) { array_push($errors, "product is required"); }
  // if (empty($price)) { array_push($errors, "price is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($quantity)) { array_push($errors, "quantity is required"); }
  if (empty($message)) { array_push($errors, "Message is required"); }
  
 
   $query = mysqli_query($db, "INSERT INTO customer_order(fullname, address, product, price, email,quantity, message)VALUES ('$fullname', '$address', '$product','$price', '$email', '$quantity', '$message')");
   $_SESSION['fullname'] = $fullname;
   // echo "Successful";
   header('location: index.php');
  }

   ?> 































