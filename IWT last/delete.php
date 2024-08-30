<?php

include 'config.php';

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql2 = "DELETE FROM data WHERE id=$id";

    $result=mysqli_query($con,$sql2);

    if ($result) {
        header('location:crudpage.php');
    }
    
}



?>