<?php

$con = new mysqli("localhost","root","","flyflex");

if ($con ->connect_error) 
{
    die("connection error".$con ->connect_error); 
}
    echo "success"."<br>";

?>