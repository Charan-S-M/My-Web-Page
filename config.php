<?php
// Database configuration
$host = "localhost";
$db_name = "user_database";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)

// Create a connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
