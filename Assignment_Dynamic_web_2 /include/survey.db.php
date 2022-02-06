<?php
    include "include/database.php";

    $sat1 = $_POST[".survey1"];
    $sat2 = $_POST[".survey2"];
    $sat3 = $_POST[".survey3"];
    $sat4 = $_POST[".survey4"];
    $sat5 = $_POST[".survey5"];
    $comment= $_POST[".comment"];


    $sqlSurvey= "INSERT INTO `survey` (`sat_1`, `sat_2`, `sat_3`, `sat_4`, `sat_5`, `comment_db`) VALUES ('$sat1','$sat2','$sat3','$sat4','$sat5','$comment');";
    mysqli_query ($conn, $sqlSurvey);

    if ($conn->multi_query($sqlSurvey) === TRUE) 
    {
    echo "New records created successfully";
    } else {
    echo "Error: " . $sql .  "<br>" . $connect_error;
    }
?>

