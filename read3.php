<?php
    require 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            $feedbackID = $_POST['feedbackID'];
            if ($action === 'update') {
                $rTime = $_POST['rTime'];
                $response = $_POST['response'];
                $status=$_POST['status'];
                // Perform update operation in the database
                $sql = "UPDATE feedbacks SET RespondedTime='$rTime', Response='$response',FeedbackStatus='$status' WHERE FeedbackID=$feedbackID";
                if ($con->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $con->error;
                }
            } elseif ($action === 'delete') {
                // Perform delete operation in the database
                $sql = "UPDATE feedbacks SET RespondedTime=NULL, Response=NULL,FeedbackStatus=NULL WHERE FeedbackID=$feedbackID";
                if ($con->query($sql) === TRUE) {
                    echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . $con->error;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Feedback</h2>
    <table>
        <tr>
            <th>Feedback ID</th>
            <th>Feedback Type</th>
            <th>Feedback Time</th>
            <th>Rating</th>
            <th>Feedback Description</th>
            <th>Feedback Status</th>
            <th>Responded Time</th>
            <th>Response</th>
        </tr>
        <?php
            $sql = "SELECT * FROM feedbacks";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["FeedbackID"] . "</td>";
                    echo "<td>" . $row["Type"] . "</td>";
                    echo "<td>" . $row["FeedbackTime"] . "</td>";
                    echo "<td>" . $row["Rate"] . "</td>";
                    echo "<td>" . $row["FeedbackDescription"] . "</td>";
                    echo "<td>";
                    echo "<form method = 'post'>"."<select name='status'>";
                    echo "<option value='Choose option'>Choose option</option>";
                    echo "<option value='Negative'>Negative</option>";
                    echo "<option value='Positive'>Positive</option>";
                    echo "<option value='Neutral'>Neutral</option>";
                    echo "</select>"."</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='feedbackID' value='" . $row["FeedbackID"] . "'>";
                    echo "<input type='datetime' name='rTime' value='" . $row["RespondedTime"] . "'>";
                    echo "</td>";
                    echo "<td>";
                    echo "<input type='text' name='response' value='" . $row["Response"] . "'>";
                    echo "</td>";
                    echo "<td>";
                    echo "<input type='hidden' name='action' value='update'>";
                    echo "<button type='submit'>Update</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='feedbackID' value='" . $row["FeedbackID"] . "'>";
                    echo "<input type='hidden' name='action' value='delete'>";
                    echo "<button type='submit'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No feedback available</td></tr>";
            }
        ?>
    </table>
    
</body>
</html>

<?php
    $con->close();
?>
