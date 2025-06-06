<?php

namespace App\Config;

use PDO;
use PDOException; 
 
class Database
{
    private $host = "localhost";
    private $db_name = "portfolio";
    private $username = "root";
    private $password = "";
    public $conn;    
    
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Not Connected </br>";
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}


 