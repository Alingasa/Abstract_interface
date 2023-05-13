<?php


// interface All
// {
//     public function create()
// }


abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "james";
    public function __construct()
    {
       $this->conn = new mysqli($this->servername, $this->username, $this->password);
    }
    abstract public function db(): string;
}

class DbName extends Database
{
    public function db(): string
    { 
        $dbName = "CREATE DATABASE IF NOT EXISTS $this->dbName";
       return $this->conn->query($dbName);
    }
}
// class Createtbl extends Database implements All
// {
//     public function db(): string{
//         $create = $this->conn->query("CREATE TABLE IF NOT EXISTS")
//     }
//     }


$new = new DbName();
$new->db();

