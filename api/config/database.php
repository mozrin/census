<?php

class Database{

    // specify your own database credentials
    private $host = "apidbexample.db.5950338.1ea.hostedresource.net";
    private $db_name = "apidbexample";
    private $username = "apidbexample";
    private $password = "P1ssw0rd123!";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
