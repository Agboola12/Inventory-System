<?php
session_start();

// initializing variables
$username = "";
$email    = "";

$errors = array(); 

// connect to the database

     include("../config.php");
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name=mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name=mysqli_real_escape_string($db, $_POST['last_name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $mobile= mysqli_real_escape_string($db, $_POST['mobile']);

   $filetoupload = $_FILES["pix"]["name"];
  $target_dir = "profile/";
  $target_file = $target_dir . $filetoupload;
  $filetouploadsize= $_FILES["pix"]['size'];
  $filetouploadtype= $_FILES["pix"]['type'];
  $tmp = $_FILES["pix"]["tmp_name"];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($last_name)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
      $pixmove = move_uploaded_file($tmp, $target_file);

  $user_check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO register (username,email,password_1,first_name,last_name,mobile,profile) 
  			  VALUES('$username', '$email', '$password','$first_name','$last_name',$mobile,'$filetoupload')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['first_name'] =$first_name;
	$_SESSION['last_name'] =$last_name;
  // echo "successful". $first_name;
  	header('location: login.php');
  }
}


























// LOGIN USER
// if(isset($_POST['submit']))
// {
  
  
  
//     $username = mysqli_real_escape_string($db, $_POST['username']);
//     $password = mysqli_real_escape_string ($db, $_POST['password']);
  
//     if (empty($username)) {
//       array_push($errors, "Username is required");
//     }
//     if (empty($password)) {
//       array_push($errors, "Password is required");
//     }
    
//     if (count($errors) == 0) 
//     {
//       $password = md5($password);
//       if (md5($_POST['password']) !== $password)
// {
//     echo "Password is invalid";
// }
//       $query = "SELECT * FROM register WHERE username='$username' AND password_1 ='$password'";
				
// 		$sql="SELECT first_name,last_name FROM register WHERE username='$username' AND password_1 ='$password'";
// 		$result=mysqli_query($db,$sql);  
// 		$row=mysqli_fetch_assoc($result);
	 	 	 
//       $results = mysqli_query($db, $query);
//       $res=mysqli_num_rows($results);


// if ($res)    
//   {
//       while ($row = mysqli_fetch_assoc($res)) 
//       {
//         $username = $row['username'];
//         $email = $row['email'];
//         $password_1 = $row['password_1'];
//         $first_name = $row['first_name'];
//         $last_name = $row['last_name'];
//         $mobile = $row['mobile'];
//          $profilepic = $row['profilepic'];

//         $_SESSION['username'] = $username;
//         $_SESSION['email'] =  $email;
//         $_SESSION['password_1'] = $password_1;
//         $_SESSION['first_name'] = $first_name;
//         $_SESSION['last_name'] = $last_name;
//         $_SESSION['mobile'] = $mobile;
//         $_SESSION['profilepic'] = $profilepic;
//       }
        

//     header("location:dashboard.php");
   
// }

//       else 
//       {
//         array_push($errors, "Wrong username/password combination");
//       }

//     }   
//   }

// echo mysqli_error($db);
  
  ?>
  