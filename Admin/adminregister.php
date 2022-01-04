<?php include('connect.php') ?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->

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
	
	  <script type="text/javascript" src="../wowjs/wow.min.js"></script>
	<script>
        new WOW().init();
      </script>
<style type="text/css">
	#bg-body{
	   background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.8)),url(../images/admindrug3.webp);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		width: 100%;
		height: 110vh;
	}
	.card{
		background: transparent;
		box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.9);
		padding: 25px;
		margin-top: 20px;
	}
	#Sign{
		/*  border-bottom-right-radius: 20px;
		  border-top-left-radius:20px;
		  border-top-right-radius:20px;
		  border-bottom-left-radius:20px;*/
		  /*border-style: solid;*/
    	  /*border-width: medium;*/
    	  color: white;
    	  margin-top:;
	}
	label{
		font-weight: bolder;
	}

	.form-control{
		border-radius:7px;
	}
	img{
        border-radius: 300px;
        height: 100px;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }
    @-webkit-keyframes mover{
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
    }
    @keyframes mover{
        0% { transform: translateY(0); }
        100% { transform: translateY(-8px); }
    }
	
</style>
</head>
<body id="bg-body">
<div class="container">		
					<div class="login-form col-md-12	mt-4 mb-4 offset-md-0" id="Sign">
				    <div class="card">
				    <h2 align="center" style="text-transform: uppercase;text-shadow:2px 4px 4px #000000"><small style="color:white;"><b>Create</small>  <small style="color:orange">account</small></b></h2><br>
				    <?php include('../errors.php'); ?> 
				    <form method="post" action="" enctype="multipart/form-data">
				    	<center>
				    		<img src="../images/logo.jpg">
				   		</center>
				    <div class="form-group">
				    	<div class="row">
				    		<div class="col-md-6">
				    			<label>Firstname </label>
						        <input type="text" placeholder="Enter your firstname" name="firstname" class="form-control" required=""><br>

						         <label>Email</label>
							    <input type="email" name="email" placeholder="Enter your email" class="form-control" required=""><br>

							    <label>Phone Number</label>
							    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required=""> <br> 	

							     <label>Re-enter Password</label>
							    <input type="password" name="password_2" class="form-control" placeholder="Re-enter your password" required=""><br>	
				    		</div>

				    		<div class="col-md-6 form-group  wow bounceInDown" data-wow-duration="4s">
				    			 <label>Lastname </label>
						        <input type="text" name="lastname" placeholder="Enter your lastname" class="form-control" required=""><br> 

						        <label>Username</label>
							    <input type="text" name="username" placeholder="Enter your Username" class="form-control" required=""><br> 

							     <label>Password</label>
							    <input type="password" name="password_1" class="form-control" placeholder="Enter your password" required=""><br> 

							    <label>Profile Picture</label>
							    <input type="file" name="pix" class="form-control" placeholder="Profile Picture">
				    		</div><br>
				    	</div>    
					</div>
						    	<h5 class="ml-3"><a href="adminlogin.php">Already have an account</a></h5>
						    <div class="form-group">
						    	<center><input type="submit" name="reg_admin" id="reg_admin" value="Login" class="btn btn-success"></center> 
						    </div> 
				            
				            </form>
				           
				        </div>
        
    				</div>
					</div>	


	<!-- <script type="text/javascript" src="../node_modules/jquery/dist/jquery.js"></script> -->
	<!-- <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.js"></script> -->
</body>
</html>