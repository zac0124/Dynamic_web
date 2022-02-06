<?php
    include "include/header.php";
    include "include/database.php";
    if(isset($_POST['pid'])){
        $pid=$_POST['pid'];
        $pname = $_POST['pname'];
        $pprice = $_POST['pprice'];
        $pimage=$_POST['pimage'];
        $pqty=1;

        $stmt= $conn->conn->prepare("SELECT id from cart where id=?");
        $stmt->bind_param("s",$pid);
        $stmt->execute();
        $res= $stmt->get_result();
        $r=$res ->fetch_assoc();
        $code=$r['pid'];
        
        if(!$code){
            $query=$conn->prepare("insert into cart(product_name, product_price,product_image, qty, total_price, product_id) 
            Values(?,?,?,?,?,?)");
            $query->bind_param("sssiss",$pname,$pprice,$pimage,$pqty,$pprice,$pid);
            $query->execute();
            echo 
                '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Item added to your cart!</strong>
                </div>';
        }
             else{
            echo
                '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Item already added to your cart!</strong>
                </div>';

            }
        }
        else{

        }

        
    }

    ?>
<?php
include "include/footer.php";

?>