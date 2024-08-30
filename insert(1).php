<?php

require 'config.php';

$stitle = $_POST["Title"];
$sname = $_POST["fullname"];
$sDOB =$_POST["dob"];
$sGen = $_POST["Gender"];
$sEmail = $_POST["email"];
$scountry = $_POST["country"];
$saddress = $_POST["adress"];
$spostal = $_POST["postalcode"];
$sUname = $_POST["username"];
$sPword = $_POST["password"];
$srepword = $_POST["repassword"];

$sql = "INSERT INTO data VALUES ('','$stitle', '$sname', '$sDOB', '$sGen', '$sEmail', '$scountry', '$saddress', '$spostal', '$sUname', '$sPword', '$srepword' )";

// Execute the SQL query
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>