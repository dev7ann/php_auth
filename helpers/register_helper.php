<?php 


session_start();

ini_set('display_errors', 1);


require __DIR__ . '/../vendor/autoload.php';  


use App\Controllers\AuthController;

$register_user = new AuthController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
       
        $data =($_POST);
    
        $jsonObj=json_encode($data);



    $register_results = $register_user->register_user($jsonObj);

    if ($register_results) {
        header('Location: ../public/login.php'); 
        exit;
    } else {
        header('Location: ../public/register.php?message=something went wrong, please try again later'); 
        exit;
    }
}



?>