<?php
    include "include/header.php";
    include "include/database.php";
    ?>

<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "fashionwave");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="product_men.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed Successfully")</script>';  
                     echo '<script>window.location="product_men.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
  

 <section id= "shop">
            <section class="shop-page-container">
                        <h1 class = "custom-font">Let us shop </h1>
                        <h2 class="custom-font-secondary">ONLINE!</h2>
                        <p>This online shop deliver numerous brand both men and women clothes. Most of the brands are the top quality and famous around the globe. 
                        </p>
                        <h2>Order Details</h2>  
                <div class="table-content">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="product_men.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
                        <section class="main-catalogue">
                <div class="shop-details">   
                        <?php  
                        $query = "SELECT * FROM men_productdetail ORDER BY id ASC";  
                        $result = mysqli_query($connect, $query);  
                        if(mysqli_num_rows($result) > 0)  
                        {  
                            while($row = mysqli_fetch_array($result))  
                            {  
                        ?>
                </div>  

                <div class = "product-details">
                    <div class="table-content">
                    
                    <div class="card p-2 border-secondary mb-2">

                    <form method="post" action="product_men.php?action=add&id=<?php echo $row["id"]; ?>">  


                               <img src="<?php echo $row['photo']; ?>" class="card-img-top" /><br />  
                               <h4 class="text-info"><?php echo $row["productname"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="input btn btn-submit addItemBtn" value="Add to Cart" />  
                          </div>  
                          </div>
                          </div>


                     </form>  


                <?php  
                     }  
                }  
                ?>  
                </section>  
        </section>  

<?php
include "include/footer.php";

?>