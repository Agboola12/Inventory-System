<?php 
session_start();
// include 'update.php';
$errors = array();

  // $db = mysqli_connect('localhost', 'root', '', 'inventory');
  // if (mysqli_connect_error())
  // {
  //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }
include '../config.php';
	if (isset($_POST['submit'])){
		$username= $_POST['username'];
		$password=md5($_POST['password']);

    echo $username;
    echo $password;
	  $q = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' and password_1='$password'");

    $res = mysqli_num_rows($q);

 		if($res == 1){
			while ($row = mysqli_fetch_assoc($q))
      {
        $id = $row['id'];
		    $username = $row['username'];
        $email = $row['email'];
        $password_1 = $row['password_1'];
        $first_name = $row['firstname'];
        $last_name = $row['lastname'];
        $phone = $row['phone'];
        $profile = $row['profile'];

        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] =  $email;
        $_SESSION['password_1'] = $password_1;
        $_SESSION['firstname'] = $first_name;
        $_SESSION['lastname'] = $last_name;
        $_SESSION['phone'] = $phone;
        $_SESSION['profile'] = $profile;
     	}
   		header("location:adminhome.php");
 	 }
  else
  {
        array_push($errors, "<h6 style = 'color:red; text-align:center;'>Wrong Username or Password</h6>");
  };

	echo mysqli_error($db);
}




?>
