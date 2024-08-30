<?php
    require 'config.php';

    $start=$_POST["start"];
    $destination=$_POST["destination"];
    $tripType=$_POST["type"];
    $class=$_POST["class"];
    $passengers=$_POST["passengers"];
    $arrivalD=$_POST["aDate"];
    $departureD=$_POST["dDate"];

    $sql="INSERT INTO flightsearch VALUES ('','$start','$destination','$class','$passengers','$departureD','$arrivalD','$tripType')";

    
    if($con->query($sql))
    {
        //echo "Sucessfully inserted data";
        session_start();
        header("Location: homepage.php"); // Redirect to the homepage
        exit(); // Ensure that no further code is executed after redirection
    }

    else
    {
        echo "Error".$con->error;

    }

    $con->close();


?>