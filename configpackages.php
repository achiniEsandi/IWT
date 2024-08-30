<?php

$con = new mysqli("localhost", "root", "","flyflex","booking");

if ($con->connect_error) {
    echo "unsuccessful".$con->connect_error;
}else{
    echo "successful";
}



?>