<?php include('order.php') ?>
<?php include('header.php') ?>
<link rel="stylesheet" type="text/css" href="index.css">
 <script>
        new WOW().init();
      </script>
  <nav class="navbar navbar-expand-sm navbar-light bg-dark fixed-top " id="home" >

    <a href="" class="navbar-brand p-3"><img src="images/logo.jpg" style="width:60px;"></a>
    <button class="navbar-toggler" data-toggle="collapse" type="button" data-target="#sab">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="sab">    
    <ul class="navbar-nav list-line ml-auto">               
        <li class="nav-item active list-line-item mr-5 ">
          <a href="#home" class="nav-link active text-center text-light">Home</a>
        </li>

        <li class="nav-item dropdown list-line-item mr-5 " >
          <a href="#gallery" class="nav-link text-center text-light">Gallery</a>
        </li>
        <li class="nav-item dropdown  list-line-item mr-5" >
        <a href="#about" class="nav-link text-center text-light" >About</a>
        </li>
        <li class="nav-item dropdown  list-line-item mr-5">
          <a href="#contact" class="nav-link text-center text-light">Contact</a>
        </li>
        <li class="nav-item dropdown  list-line-item mr-5">
          <a href="form.php" class="nav-link text-center text-light">Order</a>
        </li>
        <li class="nav-item dropdown  list-line-item mr-5">
          <a href="Worker/login.php" class="nav-link text-center text-light">Workers</a>
        </li>
        <li class="nav-item dropdown  list-line-item mr-5">
          <a href="Admin/adminlogin.php" class="nav-link text-center text-light">Admin</a>
        </li>
      </ul>

    </div>
 </nav>

     <header>

      <div class="text-center middle wow  slideInDown" data-wow-duration="2s" id="home">

      <h1 id="border"> HEALTH&nbsp;<br>IS&nbsp;<br>WEALTH </h1>

      <p class="m-3" style="color: white">
        <b>Health is Wealth !</b> without good <b>health</b>, it is impossible to survive.
      </p>

      <p style="color: white">
       Good <b>Health</b> equates long lasting<b> Wealth.</b>
     </p>

      <button class="btn btn-success"><a href="form.php" class="nav-link h5" style="color: white">Order from us</a></button>
    </div>

    </header>

     <div class="container-fluid text-center gallery" id="gallery">
          <h1 class="wow bounceIn" data-wow-duration="4s" ><b>GALLERY</b></h1><br>
              <p>At the heart of our success is a group of individuals who are passionate about Africa and the digital landscape. <br> You have what it takes to be a part of this . </p>
             <div class="row wow bounceIn" data-wow-duration="4s">
               <div class="col-md-3">
                 <img src="images/01.jpg" class="image" height="200">
               </div>

                <div class="col-md-3">
                  <img src="images/02.jpg" class="image"  height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/04.png" class="image"  height="200">
               </div>

                 <div class="col-md-3">
                   <img src="images/08.jpg" class="image" width="200" height="200">
               </div>               

                <div class="col-md-3">
                    <img src="images/12.webp" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/13.webp" class="image"  width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/13.webp" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/drug.webp" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/drug.webp" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/pharmacy.png" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/00.jpg" class="image" width="200" height="200">
               </div>

                <div class="col-md-3">
                    <img src="images/07.jpg" class="image" width="200" height="200">
               </div>

              
             </div>
      </div>

      <div class="container-fluid About  wow slideInLeft " data-wow-duration="4s" id="about">
         <h1 style="text-align: center; padding-top:2em;color: black"><b>ABOUT US</b></h1>
          <hr class="line">
            <div class="row mt-5">
              <div class="col-md-6">
                <img src="images/02.webp" style="width: 100%">
              </div>

              <div class="col-md-6" style="width: 50%">
              
                  <h3 style="text-align: center;" >WHAT WE DO</h3>
                  <h5 class="mt-4">Improving everyday life in Africa</h5>
                  <p>We harness the power of technology to deliver innovative, convenient and affordable online goods and services to consumers.</p>
                  <h5>Supporting the growth of African companies</h5>
                  <p>More than 80,000 local African companies are doing online business. We are taking the African economies online and enabling our sellers to reach and better serve more consumers.</p>
                  <h5>Creating a substainable impact in Africa</h5>
                  <p>We open up new opportunies and horizons to African talents. We are creating new jobs and developing new skills in the continent.</p>
              
              </div>
            </div>
      </div>

      <!-- Contact Us -->
      <div class="container" id="contact" style="background-color: ">
          <div class="m-5" style="text-align: center;">
            <h1 class="m-4" style="color: black"><b>CONTACT US</b></h1>
            <p style="color: grey">Want to contact us? Call Us. Start Live Chat. Describe your issue.<br>  What can we help you with today? Submit it.
            </p>
          </div>  
          <div class="row">
              <div class="col-md-4">
                <h6>ADDRESS :</h6>
                <p style="color: grey">Masifa, Ogbomoso,</p> <p style="color: grey">Oyo State, Nigeria</p>
              </div>

              <div class="col-md-4">
                <h6>PHONE :</h6>
                <p style="color: grey">09021162807</p> <p style="color: grey">07032724298</p>
              </div>

              <div class="col-md-4">
                <h6>EMAIL :</h6>
                <p style="color: grey">laadey211@gamil.com</p>
              </div>
         </div>
      </div>



<!-- footer -->
<div class="">
  <section  class="offset container-fluid bg-dark">
      <br>
      <br>
      <div class="row">
        

<br><br>
      <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 text-center text-light">
           <div class=""><b>KEEP CONNECTED</b></div><br>
          <span class="fab fa-facebook fa-lg"></span><span class="col"><a href="https://free.facebook.com/elijahiyanuoluwa.agboola" style="color:grey">Like us on Facebook and follow us</a></span><br><br>

            <span class="fab fa-twitter con "></span><span class="col"><a href="https://free.facebook.com/elijahiyanuoluwa.agboola" style="color:grey">Like us on Twiitter and follow us</a></span><br><br>

            <span class="fab fa-instagram con"></span><span class="col"><a href="https://free.facebook.com/elijahiyanuoluwa.agboola" style="color:grey">Like us on Instagram and follow</a></span><br><br>        
        </div>

          <div class="col-md-4 col-sm-12 text-center text-light">
            <div class=""><b>CONTACT INFORMATION</b></div><br>
              <span class="fas fa-envelope fa-lg "></span><span>&nbsp;&nbsp;</span><span class="col"><a href="" style="color:grey">laadey211@gmail.com</a></span><br><br>

              <span class="fa fa-phone fa-lg mr-5"></span><span>&nbsp;&nbsp;</span><span class="col" style="color:grey">09021162807</span><br><br>

              <span class=" fas fa-location-arrow mr-5 "></span><span>&nbsp;</span><span class="col" style="color:grey">Masifa, Ogbomoso</span><br><br>
          </div>

  <br>
         <div class="col-md-4 col-sm-12 text-center text-light">
         <div><b>CONTACT PROGRAMMER<b></div><br>
          <span class="fas fa-envelope fa-lg "></span><span>&nbsp;&nbsp;</span><span class="col"><a href="Portfolio/index.html" style="color:grey">agboolaelijah077@gmail.com</a></span><br><br>
        
      </div>
    </div>
  </div>
    </div>
    </section>
</div>
 

<?php include('footer.php') ?>