<?php


interface All
{ 
    public function createtbl();
}

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "james";
    public $tblName = "activity";
    public function __construct()
    {
       $this->conn = new mysqli($this->servername, $this->username, $this->password);
    }
    abstract public function db(): string;
}

class DbName extends Database implements All
{
    public function db(): string
    { 
        $dbName = "CREATE DATABASE IF NOT EXISTS $this->dbName";
       return $this->conn->query($dbName);
    }
    public function createtbl()
    {
        $create = "CREATE TABLE IF NOT EXISTS $this->tblName
        (id int auto increment primary key,
        first_name text)";
        return $this->conn->query($create);
    }
}



$new = new DbName();
$new->db();
$new->createtbl();

