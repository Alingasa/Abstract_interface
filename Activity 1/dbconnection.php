<?php

include "classes.php";

class Db extends Database
{
  public $conn;
  public $servername = "0.0.0.0";
  public $username = "root";
  public $password = "root";
  public $dbName = "Activity";
  
  public function connect()
  {
   $this->conn = new mysqli($this->servername, $this->username, $this->password);
   
   $createdb = "CREATE DATABASE IF NOT EXISTS $this->dbName";
   $this->conn->query($createdb);
   
   $use = "USE $this->dbName";
   $this->conn->query($use);
   
  }
}
