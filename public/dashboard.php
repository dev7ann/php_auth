<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login.php if not logged in
    header("Location: login.php");
    exit();
}

// User is logged in, display the dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include any additional stylesheets or scripts needed for your dashboard -->
</head>
<body>
    <h1>Welcome to the Dashboard!</h1>
    <!-- Include any dashboard content here -->
</body>
</html>
