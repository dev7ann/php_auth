<?php 

namespace Auth\Controllers;

class AuthController {


    public function login_user($user_name, $password) {
        // Assuming you have a database connection
        $db = new \PDO("mysql:host=localhost;dbname=your_database_name", "your_username", "your_password");

        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $result = $db->prepare($sql);
        $result->bindParam(':username', $user_name);
        $result->bindParam(':password', $password);
        $result->execute();

        // Use fetch to get the result as an associative array
        $user = $result->fetch(\PDO::FETCH_ASSOC);

        if($user) {
            return true;
        } else {
            return false;
        }
    }
}
?>
