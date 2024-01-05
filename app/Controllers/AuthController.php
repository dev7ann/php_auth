<?php 

namespace app\Controllers;

use App\config\DbConnection;

ini_set('display_errors', 1);


class AuthController
{

    public $dbConnection;
    
    public function __construct() {
        $this->dbConnection = DbConnection::getInstance();
    }

    public function login_user($email, $password)
    {

        $sql = "SELECT * FROM users WHERE email = :email";
        
        try {    
            $result = $this->dbConnection->dbConn->prepare($sql);
            $result->bindParam(':email', $email);
            $result->execute();
    
            // Use fetch to get the result as an associative array
            $user = $result->fetch(\PDO::FETCH_ASSOC);
    
            if ($user !== false) {
                // Use password_verify to check if the entered password matches the stored hashed password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    return true; 
                }
            }
    
            return false;
        } catch (\PDOException $e) {
            // Handle database connection errors
            return false;
        }
    }
    

    public function register_user($jsonObj)
    {

        $data = json_decode($jsonObj);

        $hashedPassword = password_hash($data->password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users(email, phone, password, first_name, last_name, age, id_no, gender, middle_name) VALUES(:email, :phone, :password, :first_name, :last_name, :age, :id_no, :gender, :middle_name)";
    
        try {
            $stmt = $this->dbConnection->dbConn->prepare($sql);
            $stmt->bindParam(':email', $data->email);
            $stmt->bindParam(':phone', $data->phone);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':first_name', $data->f_name);
            $stmt->bindParam(':last_name', $data->l_name);
            $stmt->bindParam(':age', $data->age);
            $stmt->bindParam(':id_no', $data->id_no);
            $stmt->bindParam(':gender', $data->gender);
            $stmt->bindParam(':middle_name', $data->m_name);
    
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    
}


?>
