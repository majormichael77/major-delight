<?php include('header.php')?>
<title>Product category Operation</title>
<?php include('nav.php')?>


<div class="container">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item "><a href="admin_page.php">Admin</a></li>
          <li class="breadcrumb-item "><a href="products.php">Product</a></li>


        <li class="breadcrumb-item active" aria-current="page">Category creation $deletion</li>
    </ol>
</nav>


</div>


</div>


</div>



    <div class="container-fluid">
    <div class="row">
    
         <div class="col-md-4 offset-md-4">

         <form class="form-vertical" method="POST" action="deletecategory.php">
          <h5>Delete Category</h5>
          <!----this is to echo the message of insertion to db  from deletecategory.php that was retrieved from--->
            <?php
             if(isset($_GET['message'])){

               echo"<div class='alert alert-info'>".$_GET['message']."</div>";
             }
            ?>
              
               <div class="form-group pt-2">
                    <label for="category_name">Category name</label>
                    <?php $adm->get_Category();?>
               </div>
               
               
               
               <div class="form-group">
                    <button class="btn btn-danger btn-sm" name="submit" type="submit"  onclick='return confirm("Are you sure you want to delete this?")'>Delete Category</button>
                  
               </div>

          </form>
              






          <form class="form-vertical" method="POST" action="insertcategory.php">
          <h5>Add Category</h5>
          <!----this is to echo the message of insertion to db  from addcategory.php that was retrieved from--->
            <?php
             if(isset($_GET['result'])){

               echo"<div class='alert alert-primary'>".$_GET['result']."</div>";
             }
            ?>
               <div class="form-group pt-2">
                    <label for="category_name">Category name</label>
                    <input type="text" name="category_name" class="form-control">
               </div>
               
               
               
               <div class="form-group">
                    <button class="btn btn-success btn-sm"   name="submit" onclick='return confirm("Are you sure you want to add this?")'>Add Category</button>
                  
               </div>

          </form>
              

         </div> 

     </div>
    </div>
<?php include('footer.php')?>
