<?php

class DB {
    private $host = "localhost";
    private $user = "mariadb_user";
    private $pwd = "VBJC5YukDsh@rB";
    private $db = "library";
    private $con;

    public function __construct()
    {
        // Data Source Name (DSN)
        $dsn = "mysql:host={$this->host};dbname={$this->db}";
        
        // Connect
        try {
            $this->con = new PDO($dsn, $this->user, $this->pwd);
            // Set attribute to enable PHP Data Object (PDO) exceptions
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo "<p><b>Connection failed!</b></p>";
            echo "<p>{$err->getMessage()}</p>";
        } 
    }

    public function searchData($name){
        $query = "SELECT * FROM user_details WHERE username LIKE :name LIMIT 20"; // :name is a placeholder
        $stmt = $this->con->prepare($query);
        $stmt->execute(["name" => "%{$name}%"]); // Fill the placholder
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}