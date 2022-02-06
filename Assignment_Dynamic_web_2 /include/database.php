<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword= "";
$dbName="fashionwave";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error){
    die("Connection failed:" . mysqli::$connect_error);
}
?>

