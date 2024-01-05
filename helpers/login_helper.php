<?php

session_start();

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AuthController;

$login_user = new AuthController;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password inputs if needed
    if (empty($email) || empty($password)) {
        header('Location: ../public/login.php?message=Email and password are required');
        exit;
    }
}

try {
    $login_result = $login_user->login_user($email, $password);

    if ($login_result) {
        header('Location: ../public/dashboard.php');
        exit;
    } else {
        header('Location: ../public/login.php?message=Username or password is incorrect');
        exit;
    }
} catch (\PDOException $e) {
    // Handle database connection errors or other exceptions
    echo "Error: " . $e->getMessage();
}
?>
