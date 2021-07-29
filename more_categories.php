<?php include('header.php')?>

<?php include('nav.php')?>

<div class="container">
    <div class="row offset-md-1">

           

                <?php
                //beginning of foreach statement to loop through the array
                 foreach($category_menu as $cat){
                    $category_name=$cat['category_name'];
                    $category_id=$cat['category_id'];
                
                ?>
<div class="col-md-3 dashboard-box-green mx-3 px-3 py-2 my-3">

<!------the content is noinside the php directly but the closing foreach tag closes it in order to get data on the run of each loop also for echo of the contents (category id and category name into the cat list group  ------>
                <a class="catty" href="product_category.php?id=<?php echo $category_id;?>" ><?php echo $category_name;?></a>
            
</div>


  
            <?php
                 //end of loop 
                }
            ?>        
                

            </div>
        
</div>


</div>






<?php include('footer.php')?>