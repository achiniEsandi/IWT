<?php

require 'configbooking.php';

$fname = $_POST["Fname"];
$address = $_POST["Addreess"];
$pnumber = $_POST["Pno"];
$cresi = $_POST["Country"];
$departure = $_POST["Departure"];
$arrival = $_POST["Arrival"];
$ddate = $_POST["departDate"];
$adate = $_POST["arriveDate"];
$ptype = $_POST["package"];
$food = $_POST["Food"];
$need = $_POST["yesno"];


$SQL = "INSERT INTO booking VALUES ('$fname','$address','$pnumber','$cresi','$departure','$arrival','$ddate','$adate','$ptype','$food','$need')";

if ($con->query($SQL) === TRUE) {
    //echo "New record created successfully";
    session_start();
    
    echo "
    <script>
    alert('Booking Successfull');
    window.location.href='payment-portal.php';
    </script>
    ";


} else {
    echo "Error: " . $sql1 . "<br>" . $con->error;
}


?>