<?php
// database connection
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hashes the password

    // prepares an SQL query to insert the new user
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username, $email, $password]);

    echo "User registered successfully!";
}
?>

<form method="POST" action="register.php">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>
