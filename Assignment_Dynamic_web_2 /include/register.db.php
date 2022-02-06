<?php
    include "include/database.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $numberMobi = $_POST['numberMobi'];
    $homeAdd = $_POST['homeAdd'];
    $emailAdd = $_POST['emailAdd'];
    $gender= $_POST['gender'];
    $state = $_POST['state'];
    $hearUs = $_POST['hearUs'];
    $recom= $_POST['reco'];

    $sql= "INSERT INTO `register`(`firstname`, `lastname`, `mobile`, `homeaddress`, `emailaddress`, `gender`, `state`, `information_source`, `recom`)
    VALUES ('$fname','$lname','$numberMobi','$homeAdd','$emailAdd','$gender', '$state', '$hearUs' , '$recom');";
    mysqli_query ($conn, $sql);

    if ($conn->multi_query($sql) === TRUE) 
    {
    echo "New records created successfully";
    } else {
    echo "Error: " . $sql .  "<br>" . $connect_error;
    }
?>

