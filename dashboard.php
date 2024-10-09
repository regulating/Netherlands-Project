<?php
session_start();

// Connection details
$serverName = "localhost";
$databaseName = "users";
$username = "root";
$password = "";

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the user's ID from the session
    $user_id = $_SESSION['user_id'];

    // Process the form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
    
        
        if ($action == 'change_username') {
            // Change username
            $new_username = $_POST['new_username'];
            $stmt = $conn->prepare("UPDATE Users SET username = :new_username WHERE id = :user_id");
            $stmt->bindParam(':new_username', $new_username);
            $stmt->bindParam(':user_id', $user_id);

            if ($stmt->execute()) {
                echo "Username updated successfully!";
            } else {
                echo "Error updating username.";
            }

        } elseif ($action == 'change_email') {
            // Change email
            $new_email = $_POST['new_email'];
            $stmt = $conn->prepare("UPDATE Users SET email = :new_email WHERE id = :user_id");
            $stmt->bindParam(':new_email', $new_email);
            $stmt->bindParam(':user_id', $user_id);

            if ($stmt->execute()) {
                echo "Email updated successfully!";
            } else {
                echo "Error updating email.";
            }

        } elseif ($action == 'upload_profile_pic') {
            // Upload profile picture
            if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
                $profilePic = $_FILES['profile_pic']['name'];
                $targetDir = "uploads/";
                $targetFile = $targetDir . basename($profilePic);

                // Move uploaded file to the uploads directory
                if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $targetFile)) {
                    $stmt = $conn->prepare("UPDATE Users SET profile_pic = :profile_pic WHERE id = :user_id");
                    $stmt->bindParam(':profile_pic', $profilePic);
                    $stmt->bindParam(':user_id', $user_id);

                    if ($stmt->execute()) {
                        echo "Profile picture updated successfully!";
                    } else {
                        echo "Error updating profile picture.";
                    }
                } else {
                    echo "Error uploading profile picture.";
                }
            }
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
