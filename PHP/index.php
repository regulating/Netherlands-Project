<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
$profilePic = isset($_SESSION['profile_pic']) ? $_SESSION['profile_pic'] : 'default_profile_pic.jpg'; // Default profile pic
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Future</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header class="main-header">
        <nav class="navbar">
            <div class="logo">
               <a href="index.php"><h1>Green Future</h1></a>
            </div>
            <ul class="nav-links">
                <li><a href="PHP/index.php">Home</a></li>
                <li><a href="HTML/calculator.html">Calculator</a></li>
                <li><a href="HTML/events.html">Events</a></li>
                <li><a href="HTML/register.html">Register</a></li>
                <li><a href="HTML/blog.html">Blog</a></li>
            </ul>

            <!-- Display profile pic or Get Started button depending on login status -->
            <?php if ($isLoggedIn): ?>
                <div class="profile-pic-container">
                    <img src="uploads/<?php echo $profilePic; ?>" alt="Profile Picture" class="profile-pic">
                    <a href="dashboard.php" class="cta-btn">Dashboard</a>
                </div>
            <?php else: ?>
                <a href="register.html" class="cta-btn">Get Started</a>
            <?php endif; ?>
        </nav>

        <div class="header-content">
            <h2 class="header-title">Building a Greener Tomorrow</h2>
            <p class="header-description">Join us in promoting sustainability and eco-friendly living. Calculate your carbon
                footprint, sign up for environmental events, and engage with a like-minded community.</p>
            <a href="#" class="cta-btn cta-large-btn">Join the Movement</a>
        </div>
    </header>

    <section class="features-section">
        <div class="features-container">
            <div class="feature-card">
                <div class="icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Carbon Footprint Calculator</h3>
                <p>Track your carbon emissions and learn how to reduce your environmental impact with our easy-to-use
                    calculator.</p>
            </div>
            <div class="feature-card">
                <div class="icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Upcoming Events</h3>
                <p>Join local events, from clean-up drives to sustainability workshops. Get involved and make a
                    difference.</p>
            </div>
            <div class="feature-card">
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Resources & Blog</h3>
                <p>Read up on the latest sustainability tips and tricks. Discover eco-friendly articles from our blog.</p>
            </div>
        </div>
    </section>

    <footer class="main-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <h1>Green Future</h1>
            </div>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
            <p>&copy; 2024 Green Future. All rights reserved. Site made by <a href="https://github.com/regulating" style="font-weight: bold; text-decoration: underline">Jay</a></p>
        </div>
    </footer>
</body>

</html>
