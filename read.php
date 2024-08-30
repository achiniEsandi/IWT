<?php
    require 'config.php';
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
            $sql = "SELECT * FROM feedback";
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
                    echo "<select name='status'>";
                    echo "<option value='Choose option'>Choose option</option>";
                    echo "<option value='Negative'>Negative</option>";
                    echo "<option value='Positive'>Positive</option>";
                    echo "<option value='Neutral'>Neutral</option>";
                    echo "</select>";
                    echo "</td>";
                    echo "<td>";
                    echo "<input type='datetime' name='rTime'>";
                    echo "</td>";
                    echo "<td>";
                    echo "<input type='text' name='response'>";
                    echo "</td>";
                    echo "<td>"."<button>Respond</button>"."</td>";
                    echo "<td>"."<button>Delete Response</button>"."</td>";
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
