<?php
include 'config.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if ($hashed_password && password_verify($password, $hashed_password)) {
        echo "Login successful!";
        header("Location: main.html"); // Redirect to the main page
    } else {
        echo "Invalid username or password!";
    }

    $stmt->close();
    $conn->close();
}
?>
