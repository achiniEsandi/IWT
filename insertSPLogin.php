<?php

include 'connectSPLogin.php';
if(isset($_POST['submit'])){

    $UserName = $_POST['username'];
    $Password = $_POST['password'];

    $sql = "insert into splogindatabase(UserName,Password) values('$UserName','$Password')";
    $result = mysqli_query($con,$sql);

    if($result){

        echo "Data Inserted Successfully.";
    }

    else{

        die(mysqli_error($con));
    }
}

?>