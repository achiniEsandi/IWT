<?php
    require 'config.php';

    $user=$_POST["username"];
    $password=$_POST["pwd"];

    $sql="INSERT INTO userprofile2 VALUES ('$user','',$password,'','')";

    if($con->query($sql))
    {
        //echo "Sucessfully inserted data";
    }

    else
    {
        echo "Error".$con->error;

    }

    $con->close();


?>