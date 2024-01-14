<?php 

namespace app\Controllers;

use App\config\DbConnection;

ini_set('display_errors', 1);


class UserController
{

    public $dbConnection;
    
    public function __construct() {
        $this->dbConnection = DbConnection::getInstance();
    }

    public function user_details($id) {
     
        $sql = "SELECT * FROM users WHERE id = :id";
        
        try {    
            $result = $this->dbConnection->dbConn->prepare($sql);
            $result->bindParam(':id', $id);
            $result->execute();
    
            // Use fetch to get the result as an associative array
            $user = $result->fetch(\PDO::FETCH_OBJ);
    
    
            return $user;
        } catch (\PDOException $e) {
            // Handle database connection errors
            return false;
        }
    }


    
    
}


?>
