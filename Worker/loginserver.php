<?php session_start();

$errors = array();

  $db = mysqli_connect('localhost', 'root', '', 'inventory');
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	if (isset($_POST['submit'])){
		$username= $_POST['username'];
		$password=md5($_POST['password']);

    echo $username;
    echo $password;
	  $q = mysqli_query($db, "SELECT * FROM register WHERE username='$username' and password_1='$password'");

    $res = mysqli_num_rows($q);

 		if($res == 1){
			while ($row = mysqli_fetch_assoc($q))
      {
        $worker_id = $row['worker_id'];
		    $username = $row['username'];
        $email = $row['email'];
        $password_1 = $row['password_1'];
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $mobile = $row['mobile'];
        $profile = $row['profile'];

        $_SESSION['worker_id'] = $worker_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] =  $email;
        $_SESSION['password_1'] = $password_1;
        $_SESSION['first_name'] = $firstname;
        $_SESSION['last_name'] = $lastname;
        $_SESSION['mobile'] = $mobile;
        $_SESSION['profile'] = $profile;
     	}
   		header("location: home.php");
 	 }
  else
  {
        array_push($errors, "Wrong username/password combination");
  };

	echo mysqli_error($db);
}




?>
