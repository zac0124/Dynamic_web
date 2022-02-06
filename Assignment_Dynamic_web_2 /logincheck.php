<?php
include "include/header.php";
include "include/database.php";
?>

<?php
$conn = mysqli_connect('localhost' , 'root', '', 'fashionwave');
if ($conn){

    echo "Connection Successful";
}   else{

    echo "Not connected";
}

$db = mysqli_select_db($conn, 'admins');
if(isset($_POST['submit'])){
    $username = $_POST['admin_email'];
    $password = $_POST['admin_pass'];

    $sql = "select * from admins where admin_email= '$username' and admin_pass='$password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($sql){
        if($row == 1){
            echo "login successful";
            $_SESSION['admin_email']=$username;
            header('location:adminindex.php');
        }else{
            echo "login failed";
            header('location:adminlogin.php')
        }

    }
}
?>
