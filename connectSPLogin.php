<?php

$con = new mysqli("localhost","root","","flyflex");

if ($con ->connect_error) 
{
    die(mysqli_error($con)); 
}
    echo "connection successful!"."<br>";

?>