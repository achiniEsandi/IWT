<?php
    require 'config.php';

    $fType=$_POST["feedbackType"];
    $rate=$_POST["rating"];
    $feedback=$_POST["feedback"];
    $current_time = date('Y-m-d H:i:s');

    $sql="INSERT INTO feedbacks VALUES ('','$fType','$current_time','$rate','$feedback','','','')";

    if($con->query($sql))
    {
        //echo "Sucessfully inserted data";
        session_start();
        header("Location: homepage2.php"); // Redirect to the homepage
        exit(); // Ensure that no further code is executed after redirection
    }

    else
    {
        echo "Error".$con->error;

    }

    $con->close();


?>