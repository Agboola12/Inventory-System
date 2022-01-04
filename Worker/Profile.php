<?php 
    include '../config.php';
    include 'dashboard.php' 
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
</head>


<div class="container" id="profile" style="margin-left: 20%; position: fixed; " >
    <h2 align="center">Profile</h2>
    <div class="jumbotron">
        <div class="row">
            <div class="" style="width: 30%;height: 20vh" >
              <div class="col-md-4 " >
                    <?php echo "<img src='profile/".$_SESSION['profile']."' style='width: 470%; height:100%; margin-top:2em'> " ;  ?>                
              </div>   
          </div>

          <div class="" style=" width: 50%; margin-left: 50px; ">
              <form method="POST" action="update.php">
              <div class="col-md-6"   >
                <input type="hidden" name="worker_id"  class="form-control" value="<?php echo $worker_id; ?>" style="width: 500px"  >
                    <div class="m-3">
                        <h6 class="">Firstname</h6>
                        <input type="text" name="first_name"  class="form-control" value="<?php echo $first_name; ?>" style="width: 500px" >
                    </div>
                    <div class="m-3">
                        <h6  class="">Lastname</h6>
                        <input type="text" name="last_name"  class="form-control" value="<?php echo $last_name; ?>" style="width: 500px" > 
                    </div>
                    <div class="m-3 ">
                        <h6 class="" >Username</h6>
                        <input type="text" name="username"  class="form-control" value="<?php echo $username; ?>" style="width: 500px" >     
                    </div>
                    <div class="m-3">    
                        <h6  class="" >E-mail</h6>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" style="width: 500px" > 
                    </div>
                    <div class="m-3" style=" "> 
                        <h6 class="">Mobile</h6>
                        <input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>" style="width: 500px" >  
                    </div>   
              </div>
          </div>
             <div class="col-md-1" >
                <input type="submit" name="submit" class="btn btn-success h3" value="Update Profile" style="margin-top: 25em; padding-top: 10px;padding-bottom: 10px " >
           </div>
        </form> 
        <!-- </div> -->
 </div>
 </div>  
</div>
</div>

</html>



