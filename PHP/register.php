<?php
// connection details
$serverName = "localhost";
$databaseName = "users";
$username = "root";
$password = ""; // leave empty if no password is set for 'root'

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            header("Location: ../HTML/user_reg_success.html");
            exit;
        } else {
            echo "error: unable to register user.";
        }
    }
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}

