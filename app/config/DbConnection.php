<?php

namespace app\config;

use PDO;
use PDOException; 

class DbConnection
{
    private static $instance;
    public $dbConn;

    private function __construct()
    {
        require_once __DIR__ . '/config.php'; 

        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

        try {
            // Create a new PDO instance
            $this->dbConn = new PDO($dsn, $username, $password);
            $this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbConn->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        } catch (PDOException $e) {
            // Handle connection errors
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}
