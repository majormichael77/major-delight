<?php include("header.php") ?>
<title>My Cart</title>
<?php include("nav.php") ?>

      <!----end of nav bar-->



      
      <!-------bread crumb-->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item "><a href="my-account.html">My account</a></li>
        
        
          <li class="breadcrumb-item active" aria-current="page">My Cart</li>
        </ol>
      </nav>

      <!------end of bread crumb-->




      <!--------vertical menu codes start here -->
      <div class="container">
        <div class="row">
         

          <div class="offset-2 col-md-8">
         <h3 Class="text-center"><i class="fas fa-shopping-cart fa-2x"></i> My Shopping Cart  </h3>
         <div class="table-responsive">
            <table class="table-bordered table table-striped ">
                <tr>
                    <th>S/N</th>
                    <th> PRODUCT NAME</th>
                    <th>DATE</th>
                    <th> QUANTITY</th>
                    <th> PRICE</th>
                    <th>METHOD OF PAYMENT</th>
                    <th>TOTAL AMOUNT</th>
                    
                    
                </tr>


                <tr>
                    <td>1</td>
                    <td>Carton of Indomie</td>
                    <td>May 07,2021</td>
                    <td>1</td>
                    <td>₦3,200</td>
                
                    <td>Pay on delivery</td>
                    <td>₦15,000</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Iced Italian fish</td>
                    <td>Active</td>
                    <td>1 week</td>
                    <td>August,30th 2021</td>
                    <td>₦10,000 per delivery</td>
                    <td>30,000</td>
                </tr>


                <tr>
                  <td>2</td>
                  <td>Buttered Bread</td>
                  <td>Active</td>
                  <td>Daily</td>
                  <td>August,30th 2021</td>
                  <td>₦5000 per delivery</td>
                  <td>4,500</td>
                </tr>

            </table>

            </div>

          </div>
          
        </div>


        <div class="row">
            <div class="offset-2 col-md-8">
                <button class="btn btn-block btn-success">PROCEED TO CHECKOUT</button>

            </div>

        </div>

        

      </div>


      



      


      

      
      

      <?php include("footer.php") ?>