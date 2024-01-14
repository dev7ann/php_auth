<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UserController;

$user = new UserController;

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login.php if not logged in
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_details = $user->user_details($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include any additional stylesheets or scripts needed for your dashboard -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
        }

        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 56px;
                bottom: 0;
                left: 0;
                z-index: 1000;
                padding: 20px;
            }

            .main-content {
                margin-left: 220px;
                padding: 15px;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-toggler {
                display: block;
            }

            .navbar-collapse {
                display: none;
            }

            .navbar-toggler-icon {
                display: inline-block;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                display: none;
            }

            .navbar-expand-md .navbar-nav .nav-link.show {
                display: block;
            }

            .navbar-expand-md .navbar-collapse {
                display: none !important;
            }

            .navbar-expand-md .navbar-toggler {
                display: block;
            }

            .navbar-expand-md .navbar-toggler-icon {
                display: inline-block;
            }

            .navbar-expand-md .collapse.show {
                display: flex !important;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Your Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Side Navigation and Content -->
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 col-12 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

     </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-sF3ZeFOQ+Kk1lxZgOoYicJ1Y1cfPzCApxbRI8ZSLTYmV8T8UuZz8BttqyMRd4eZc" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyDXaA4xI4V8gGgT5z0PQWg8SFI3UtvhN" crossorigin="anonymous"></script>
</body>
</html>
