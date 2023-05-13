<?php

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName;
    public function __construct($conn)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        return $this->conn;
    }
    abstract public function db(): string;
}

// class user extends Database
// {
//     public function db(): string;
//     {

//         return $this->conn;
//     }
// }
