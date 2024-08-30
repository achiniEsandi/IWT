<?php
require 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fnam = $_POST["fullname"];
    $lname = $_POST["username"]; // Assuming "lastname" is the correct field name for last name
    $pnumber = $_POST["phone_number"];
    $email = $_POST["email"];
    $pw = $_POST["passw"];
    $conf_pw = $_POST["confirmPassw"];

    // Hash the password securely
    $hash_pass = password_hash($pw, PASSWORD_DEFAULT);

    // Check if the username already exists
    $checkUser = $con->prepare("SELECT LastName FROM adregister WHERE LastName = ?");
    $checkUser->bind_param("s", $lname); // Assuming last name is used as username
    $checkUser->execute();
    $checkUser->store_result();

    if ($checkUser->num_rows > 0) {
        echo "<script> alert('This username already exists. Try again!'); window.location = '../Airline system/Sign_up_ad.html';</script>";
        $checkUser->close();
        $con->close();
        exit;
    }

    $checkUser->close();

    // Prepare the SQL statement to prevent SQL injection
    $sql = $con->prepare("INSERT INTO adregister (FristName, LastName, PhoneNumber, Email, Password) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $fnam, $lname, $pnumber, $email, $hash_pass);
    $sql->execute();

    if ($sql->execute()) {
        header("Location: ../Airline system/Admin login.html?message=success");
    } else {
        echo "<script> alert('Error: " . $con->error . "'); window.location = '../Airline system/Sign_up_ad.html';</script>";
    }

    $sql->close();
    $con->close();
}
?>
