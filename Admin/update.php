<?php
session_start();
include('../config.php');

if (isset($_POST['submit']))
{
$id=mysqli_real_escape_string($db, $_SESSION['id']);
$firstname=mysqli_real_escape_string($db, $_POST['firstname']);
$lastname=mysqli_real_escape_string($db, $_POST['lastname']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$username=mysqli_real_escape_string($db, $_POST['username']);
$phone=mysqli_real_escape_string($db, $_POST['phone']);


$a = mysqli_query($db,"UPDATE admin SET firstname='$firstname',lastname='$lastname',email='$email',username='$username',phone='$phone' WHERE id='$id'");
    
    if ($a)  {
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['username'] = $username;

            header('location: adminprofile.php');
    } 
     else  {
         echo "something went wrong";
     }
     // session_end();
}

?>
