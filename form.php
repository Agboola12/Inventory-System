<?php
 include('header.php') ;

 include('order.php');
  ?>


<link rel="stylesheet" type="text/css" href="form.css">
  <center>
      <div class="container-fluid " id="order" align="center">
          <div class="container card m-5 wow bounceIn" data-wow-duration="2s" align="center" >
            <h1 class="m-2" style="text-align:center;">TAKE YOUR ORDER FROM HERE</h1>
          <form method="POST" action="order.php" >
            
              <div>
                <label>Full Name</label><br>
                <input type="text"  name="fullname" class="form-control" required="required" placeholder="Your name.." >

              </div>
            
              <div>
                  <label>Address</label>
                  <input type="text" name="address"  required="required"placeholder="Enter your Address">
              </div>
              
              <div>
                  <label>Product</label>
                </div>
           
              <div>
                <select name="product" id="typs" required="required" onchange="prices()">
                  <option >
                    Select product
                  </option>
                         <?php 
                             include("../config.php"); 
                                   $sql = "SELECT * FROM goods";
                                   $result = $db->query($sql);
                                    $total=0;
                              $count=0;
                              $t;
                                   if ($result -> num_rows >  0) {
                              
                                     while ($row = $result->fetch_assoc()) 
                             {
                                $count=$count+1;
                                       ?>             
                                     <option data-city="<?php echo $row["price"] ?>"  value="<?php echo $row["product_name"] ?>">
                                         <?php echo $row["product_name"] ?>          
                                      </option>
                                       
                                <?php
                                     }
                                   }
                                ?>  
                </select>
                  <!-- <input type="text" name="product" placeholder="Enter your product"> -->
                </div>
              

              <div>
                  <label>Price</label>
                  <input type="text" name="price" id="pri" value="" required="required" disabled="disabled" style="color: black">  
              </div>

              <div>
                <label>Email</label>
                  <input type="text" name="email" required="required" placeholder="Enter your Email">
              </div>

              <div>
                  <label>Quantity</label>
                  <input type="text" name="quantity" required="required" placeholder="Enter the quantity you want to buy">
              </div>

              <div>
                  <label>Messages</label>
                  <textarea  name="message" placeholder="Write something.." required="required" style="height:200px"></textarea>
                </div>
              <br>
              <br>
            
              <div>
                <!-- <center> -->
                <input type="submit" name="submit" id="reg_user" value="Submit" class="form-submit btn-lg" style="margin-right:40%; margin-bottom:10px  ">
              <!-- </center> -->
              </div>
          
      </form>
      </div>
      </div>
    </center>

<?php include('footer.php') ?>
<script> 
  function prices(){
    var i = $('#typs option:selected').data('city');
    document.getElementById('pri').value=+i;
};

</script>