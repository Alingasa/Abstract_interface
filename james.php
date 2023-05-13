<?php

abstract class Database
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "james";
    public function __construct($conn)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        $db = "CREATE DATABASE IF NOT EXISTS $this->dbName";
        $this->conn->query($db);
        return $this->conn;

    }
    abstract public function db($dbName): string;
}

class user extends Database
{
    public function db(): string;
    {
        return $this->conn;
    }
}
