<?php
 session_start();
include('../config.php');

if (isset($_POST['submit']))
{
$worker_id=mysqli_real_escape_string($db, $_SESSION['worker_id']);
$first_name=mysqli_real_escape_string($db, $_POST['first_name']);
$last_name=mysqli_real_escape_string($db, $_POST['last_name']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$username=mysqli_real_escape_string($db, $_POST['username']);
$mobile=mysqli_real_escape_string($db, $_POST['mobile']);

$a = mysqli_query($db,"UPDATE register SET first_name = '$first_name', last_name='$last_name', email='$email', username='$username', mobile='$mobile' WHERE worker_id ='$worker_id'");  
    
    if ($a)  {
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            $_SESSION['email'] = $email;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['username'] = $username;
            header('location: Profile.php');
    } 
     else  {
         echo "something went wrong";
     }
}
?>
