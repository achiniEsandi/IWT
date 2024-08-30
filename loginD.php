<?php
require "config.php";

// Function to sanitize input
function sanitize_input($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Handle Delete Operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $uID = sanitize_input($_POST['delete']);
    $deleteSql = "DELETE FROM adregister WHERE Id=?";
    $stmt = $con->prepare($deleteSql);
    $stmt->bind_param("i", $uID);
    $stmt->execute();
    if ($stmt->affected_rows) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting record: ".$con->error."');</script>"; 
    }
}

// Fetching all users
$sql = "SELECT * FROM adregister";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin-left: 5vw;
            background-color: rgb(250, 237, 217);
            border-radius: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid red;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 9px 16px;
            background-color: rgb(0, 0, 11);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }
        .btn:hover{
            background-color: rgb(41, 23, 112);
        }
        body{
            background-color: rgb(208, 214, 213);
        }
    </style>
</head>
<body>
    <h2>User Details</h2>
    <form method="get" action="admin_user_add.php">
        <button class="btn" type="submit">Add User</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['FristName']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PhoneNumber']) . "</td>";
                    echo "<td>";
                    echo "<form method='get' action='AdminEdi'>";
                    echo "<input type='hidden' name='Id' value='".$row['Id']."'>";
                    echo "<button class='btn' type='submit'>Edit</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post'>";
                    echo "<button class='btn' style='background-color: red;' type='submit' name='delete' value='".$row['Id']."'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No user found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
$con->close();
?>
