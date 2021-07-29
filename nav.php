<?php
session_start();
?>


	</head>



	<html>

  
        <section>


        
            <div class="container-fluid">
            
                <div class="row">
                  <nav class="navbar  navbar-expand-lg navbar-dark  bg-success col-md-12  justify-content-between align-items-center fixed-top  pt-0 mt-0 mb-0 pb-0">
                    <a class="navbar-brand " href="index.php"><b></b><img src="images/logonew3.png" height="50px"  class=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php"><b>HOME</b> <span class="sr-only">(current)</span></a>
                        </li>
                        
            
                        <li class="nav-item">
                          <a class="nav-link" href="blog.php"><b>BLOG</b></a>
                        </li>
            
                        <li class="nav-item">
                          <a class="nav-link" href="contact-us.php"><b>CONTACT US</b></a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>CUSTOMER SERVICES</b>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Email Us</a>
            
                            <a class="dropdown-item" href="#">Track My Order</a>
                            <!-----<div class="dropdown-divider"></div>----->
                            <a class="dropdown-item" href="#">FAQ's</a>
                            <a class="dropdown-item" href="#">Shipping</a>
                          </div>
                        </li>
            
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>CATEGORIES</b>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                          <?php
                          
                //beginning of foreach statement to loop through the array
                 foreach($category_menu as $cat){
                    $category_name=$cat['category_name'];
                    $category_id=$cat['category_id'];
                
                ?>

<!------the content is noinside the php directly but the closing foreach tag closes it in order to get data on the run of each loop also for echo of the contents (category id and category name into the cat list group  ------>
              
                <a class="dropdown-item" href="product_category.php?id=<?php echo $category_id;?>"><?php echo $category_name;?></a>
                

  
            <?php
                 //end of loop 
                }
            ?>       


                          </div>
                        </li>
                        
                      </ul>

                    
                      <ul class="navbar-nav d-flex">

                       <?php if(!isset($_SESSION['username'])){
                  
                    echo  '<li class="nav-item ">
                          <a class="nav-link" href="login.php"><b>Login</b></a>
                        </li>';
            }?>



            
                <?php if(!isset($_SESSION['username'])){
                     echo   '<li class="nav-item ">
                          <a class="nav-link" href="admin_login.php"><b>Admin</b></a>
                        </li>';
                   } 
                  ?>


                   


                <?php if(!isset($_SESSION['username'])){
                      echo  '<li class="nav-item">
                          <a class="nav-link" href="register.php"><b>Register</b></a>
                        </li>';

                } 
                  ?>



                   
                        <li class="nav-item">
                          <a class="nav-link" href="my-account.php"><i class="fas fa-user-friends"></i></a>
                        </li>
            
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
            
                        <li class="nav-item">
                          <a class="nav-link" href="mycart.php"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                      
                    </div>
            
            
                  </nav>
            
                  <!---------nav bar code ends here-->
            
                  </div>
            
            <!--------second row code starts here-->
            
            
                  <div class="row mt-3 pt-5 ">
                    <div class="col-md-2">
                      <div class=" my-0 pt-4">
                        
                      </div>
            
                      
            
                    </div>
            
                    
            
                    
                    
                    <div class="col-md-8 "> <!-----do not show from md downwards this is a break point---->
                      <form class="my-2 pt-0" action="search_action.php" method="GET">
                        <div class="form-row">
                        <div class="form-group col-md-11">
                        
                          <input type="text" name="search"class="form-control" id="search-bar" aria-describedby="search" placeholder="   Search Our Store">
                         
                        </div>
            
                        <div class="form-group col-md-1">
                        
                          <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                         
                        </div>
            
            
            
                      </div>
                        
                      </form>
            
                    </div>
                    
                    <div class="col-md-2 d-none d-md-block">
                      <h6 class="my-2 pt-2 "><i class="fas fa-tags"></i>Best Deals & Prices</h6>
                     
            
                    </div>
                      
            
                      
                    </div>
            
              <!---------end of row 2 -->
            
            
            </div>


              </section>


              