
<?php
    include "include/header.php";
    include "include/database.php";


    ?>
<body>
   
   <div class="admin">
       <form action="logincheck.php" class="table-content-admin" method="post">
           <h2 class="custom-font-secondary-admin"> Admin Login </h2>
           
           <input type="text" class="input" placeholder="Email Address" name="admin_email" required>
           
           <input type="password" class="input" placeholder="Your Password" name="admin_pass" required>
           
           <button type="submit" class="input btn btn-submit" name="submit">
               
               Login
               
           </button>
           
       </form>
   </div>
    
</body>
</html>


<?php 

    if(isset($_POST['admins'])){
        
        $admin_email = mysqli_real_escape_string($conn,$_POST['admin_email']);
        
        $admin_pass = mysqli_real_escape_string($conn,$_POST['admin_pass']);
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($conn,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>
        <?php
include "include/footer.php";
?>

