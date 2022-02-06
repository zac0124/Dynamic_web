<?php
    include "include/header.php";
    include "include/database.php";
    ?>

     <section id= "category">
          <section class = "center add-padding-left">
               <h1 class = "custom-font">Category</h1>
               <h2 class="custom-font-secondary between-sec-color">Form</h2>
               <div class="main-catalogue">
               <div class="men-product">  
                         <a href="product_men.php"> 
                         <h3 class="custom-font-secondary">Men</h3>
                         <img src= "images/Men_category.jpg" class= "btn-pic1" alt="men">
               </div>
               <div class="women-product">  

                         <a href="product_women.php"> 
                         <h3 class="custom-font-secondary">Women</h3>
                         <img src= "images/Women_category.jpg" class= "cover-pic2" alt="women">
               </div>

               </div>          
          </section>
</section>


<?php
include "include/footer.php";

?>