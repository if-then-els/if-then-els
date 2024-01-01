<?php
// Database connection parameters (Use the same values as in your previous code)
$host = "localhost";
$username = "root";
$password = "";
$database = "kyeni";

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from the "corruption" table
$sql = "SELECT * FROM corruption";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Report Type</th><th>Report Description</th><th>Contact Info</th><th>Submission Date</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["report_type"] . "</td>";
        echo "<td>" . $row["report_description"] . "</td>";
        echo "<td>" . $row["contact_info"] . "</td>";
        echo "<td>" . $row["submission_date"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
