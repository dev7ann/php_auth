<?php 

use Auth\Controllers\AuthController;

$register_user = new AuthController;


if (isset($_POST)) {
    $f_name = $_POST["f_name"];
    $m_name = $_POST["m_name"];
    $l_name = $_POST["l_name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $id_no = $_POST["id_no"];
    $gender = $_POST["gender"];


}else {
    return false;
}
$register_results = $register_user->register_user($f_name, $m_name, $l_name, $phone, $age, $id_no, $gender);

if($register_results){
    header('Location: dashboard.php');
    exit;
} else {
    header('Location: register.php?message=user name or password is wrong');
    exit;
}


?>