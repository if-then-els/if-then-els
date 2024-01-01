<?php
// Replace with your database connection code
$db = new mysqli("localhost", "root", "", "kyeni");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace with your SQL query to check credentials
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, redirect to another page
        header("Location: Appointmentsdashboard1.php");
        exit();
    } else {
        // Login failed, display an error message
        echo "Wrong username or password. Please try again.";
    }
}

$db->close();
?>
