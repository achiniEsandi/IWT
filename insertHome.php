<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if interests are selected
    if (isset($_POST['type'])) {
        // Retrieve interests from form data
        $interests = $_POST['type'];

        // Connect to your database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "flyflex";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO flightsearch (Oneway) VALUES (?)");

        // Bind parameters and execute for each interest
        foreach ($type as $searchType) {
            $stmt->bind_param("s", $serachType);
            $stmt->execute();
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();

        echo "Data inserted successfully!";
    } else {
        echo "No interests selected!";
    }
}
?>
