<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = ""; // Assuming you have no password for the root user
$database = "kyeni";

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $reportType = $_POST["report-type"];
    $reportDescription = $_POST["report-description"];
    $contactInfo = $_POST["contact-info"];

    // Insert data into the "corruption" table
    $sql = "INSERT INTO corruption (report_type, report_description, contact_info) VALUES ('$reportType', '$reportDescription', '$contactInfo')";

    if ($conn->query($sql) === TRUE) {
        echo "Report submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
