<?php
 include 'admin dashboard.php';
  ?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css"> -->
<link rel="icon" type="image/x-icon" href="favicon.ico">
  <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <style type="text/css">
        h6{
            float: left;
        }
    </style>



<div class="" id="profile" style="margin-left: 20%;margin-top: 2em " >
    <div class="jumbotron">
        <h2 align="center">Profile</h2>
        <hr style="background-color: black;width: 5%">
        <div class="row">
            <div class="" style="width: 30%;height: 20vh" >
              <div class="col-md-4">
                    <?php echo "<img src='profile/".$_SESSION['profile']."' style='width: 450%; height:100%; margin-top:2em'> " ;  ?>                
              </div>   
          </div>

          <div class="" style=" width: 50%; margin-left: 50px; ">
                <form method="POST" action="update.php">
              <div class="col-md-6">
                <input type="hidden" name="worker_id"  class="form-control" value="<?php echo $worker_id; ?>" style="width: 500px"  >
                    <div class="m-3">
                       <h6  align="center">Firstname</h6>
                <input type="text" name="firstname" placeholder="Firstname" class="form-control" value="<?php echo $firstname; ?>"  style="width: 500px">
                    </div>
                    <div class="m-3">
                       <h6   align="center">Lastname</h6>
                <input type="text" name="lastname" placeholder="Lastname" class="form-control" value="<?php echo $lastname; ?>" style="width: 500px">
                    </div>
                    <div class="m-3 ">
                        <h6  align="center">Username</h6>
                <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>" style="width: 500px">     
                    </div>
                    <div class="m-3">    
                     <h6   align="center">E-mail</h6>
                <input type="email" name="email" placeholder="E-mail" class="form-control" value="<?php echo $email; ?>" style="width: 500px">
                    </div>
                    <div class="m-3" style=" "> 
                       <h6  align="center">Phone</h6>
                <input type="text" name="phone" placeholder="Phone" class="form-control" value="<?php echo $phone; ?>" style="width: 500px">
                    </div>   
              </div>
          </div>
             <div class="col-md-1" >
                <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
            </div>

            <center>
               <input type="submit" name="submit" class="btn btn-primary h3" value="Update" style="margin-left: 35em">
            </center>
        </form> 
        <!-- </div> -->
 </div>
 </div>  
</div>
