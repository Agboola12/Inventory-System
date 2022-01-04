<?php include 'dashboard.php'; ?>
<div id="product"   align="center"><br>
     
		<h1 style="text-align:center">PRODUCT</h1>
<body>
<form method="POST" class="form-inline" action="additem.php" >
  <div class="form-group">
    <label for="name">Product</label>
    <input type="text" class="form-control ml-2" required="required" name="product_name">
    
  </div>
  <div class="form-group ml-3">
    <label for="name">Price</label> 
    <input type="number" class="form-control ml-2" id="price" required="required" name="price">
  </div>
  <div class="form-group ml-3">
        <label for="name">Quantity</label>
        <input type="number" name="quant" class="form-control ml-2" id="quant" required="required" min="1" max="">
    </div> 
    <div class="form-group ml-3">
        <label for="name">Total</label>
        <input type="number" name="total" class="form-control ml-2" id="total" >
    </div>

    <input type="button" value="SUM" onclick="button()" class="form-control m-3" style="background-color:blue;width:80px;color: white">    
  <button type="submit" class="btn btn-success ml-4" name="add">Add item</button>
</form>  
<!-- <button class="btn btn-success" onclick="button()">sum</button> -->
</body>
                <script type="text/javascript">
                  function button() 
                  { 
                    var a= price.value;
                    var b=quant.value;
                    var a=parseInt(price.value);
                    var b=parseInt(quant.value);
                    var answer=a*b;
                    total.value=answer;
                  }
                  // over all function
                   // document.getElementById('overall').value =answer ;
                          </script>

           

       <!-- The new div I created   -->
                          <div class="card bg-dark" style="color: white">
    <div class="card-block shadow-lg p-4 m-4" id="print">
    <div class="col-md-12">
           <table class="table table-hover w-100" style="color:white;font-size: 18px" id="show">
              
                <h2><center><b>e-Reciept</b></center></h2>                             
              <thead >
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Total</th>
													 <th scope="col">Action</th>    
                                                </tr>
                                            </thead>
    
                                            <tbody>

			<?php 
			   include("../config.php"); 
               $sql = "SELECT * FROM product";
               $result = $db->query($sql);
                $total=0;
					$count=0;
          $t;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
         
					  $count=$count+1;
                   ?>
                  
                   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["product_name"] ?></th>
                      <th ><?php echo $row["price"]  ?></th>
                      <th ><?php echo $row["quantity"]  ?></th>
                      <th id="sum"><?php echo $row["total"]  ?>
                       
                        <?php 
                              $total += $row["total"];
                         ?>
                      </th>
					  
                    <th> 
                    	<a href="up"Edit></a> <a href="edit.php?id=<?php echo $row["product_id"] ?>">Edit</a>
                    	<a href="up"Edit></a><a href="delete.php?id=<?php echo $row["product_id"] ?>">Delete</a>
                    </th>
                   </tr>


                   
            <?php
                 
                 }
               }

            ?>




        </thead>    
</table>

            <!-- footer preview  -->
    <div class="card-footer">
          <div style="margin-left: 50%">
             <strong>OVER ALL</strong>
             <input type="number" disabled="disabled" class="form-control" value="<?php echo $total;?>" style="width:50%">
         </div>
       
          <div style="margin-left: 90%">
            <button id="reciept" type="submit" onclick="myFunction('print')" class="btn btn-success" name="submit" class="btn btn-dark"> <i class="fa fa-print"></i>Print Reciept</button>
          </div>
                  
                        <script>
                        function myFunction(print) {
                          var restorepage = document.body.innerHTML;
                          var printcontent = document.getElementById(print).innerHTML;
                          document.body.innerHTML = printcontent;
                          window.print();
                          document.body.innerHTML = restorepage;
                           // var vv=document.getElementById('show').innerHTML;
                            // window.print(vv);
                        }
                        
                   
                    </script>
      </div>  
<!-- preview -->


        </div>
    </div>
</div>
 
                                           
                   
        <!-- main content area end -->


</div>