<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('Location: login.php');
    exit();
}

// Simulate user data (In a real scenario, fetch from the database)
$name = $_SESSION['username'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$dob = $_SESSION['dob']; // Example: Date of Birth
$address = $_SESSION['address']; // Example: Address

// Display user profile HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            margin-top: 20px;
            color: #444;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
        <h1>Profile Options</h1>
        <ul>
            <li><a href="personal.php">Personal Details</a></li>
            <li><a href="family.php">Family Details</a></li>
            <li><a href="emergency_contact.php">Emergency Contact</a></li>
        </ul>
    </div>
</body>
</html>
