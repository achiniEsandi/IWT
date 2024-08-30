<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to your database
    $conn = new mysqli("localhost","root", "","flyflex");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the username and password match
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if the query returned a row
    if ($result->num_rows > 0) {
        // Successful login
        session_start();
        $_SESSION['username'] = $username; // Store username in session
        header("Location: homepage2.php"); // Redirect to the homepage
        exit(); // Ensure that no further code is executed after redirection
    
    } else {
        // Invalid credentials
       echo "Invalid username or password";
       session_start();
        $_SESSION['username'] != $username; // Store username in session
        header("Location: login.php"); // Redirect to the homepage
        exit();
    }
    
    // Close database connection
    $conn->close();
}
?>


