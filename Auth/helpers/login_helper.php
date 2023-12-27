<?php

use Auth\Controllers\AuthController;

$login_user = new AuthController;

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$login_result = $login_user->login_user($username, $password);

if($login_result){
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: login.php?message=user name or password is wrong');
    exit;
}
?>
