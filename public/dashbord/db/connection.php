<?php
class Connection{
    public $host        = "localhost";
    public $username    = "root";
    public $password    = "";
    public $dbName      = "portfolio_1";
    protected $connection;
    public function __construct(){
        $this->connection = new mysqli($this->host,$this->username,$this->password,$this->dbName);
        // Check connection
        if ($this->connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connection->connect_error;
            exit();
        }
    }
    
}
$connection = new Connection();