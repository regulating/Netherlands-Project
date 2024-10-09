<?php
// Connection details
$serverName = "localhost"; // Your MySQL server name (default: localhost)
$databaseName = "users"; // Your actual database name
$username = "root"; // Default MySQL username in XAMPP is 'root'
$password = ""; // Leave empty if no password is set for 'root'

// PDO connection string for MySQL
try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare SQL query to check if the user exists
        $sql = "SELECT * FROM Users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Fetch the user's data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($user && password_verify($password, $user['password'])) {
            // Start a new session and set session variables
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['loggedin'] = true;

            // Redirect to a dashboard or homepage
            header("Location: dashboard.html"); // You can change this to your dashboard page
            exit;
        } else {
            // Handle incorrect username or password
            $login_error = "Invalid username or password!";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

