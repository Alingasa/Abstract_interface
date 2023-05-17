<?php
include "dbconnection.php";


class Table extends Db implements Manage
{
  public $tblName = "james";
  public function createtbl()
  {
   $this->connect();
   $createtbl = "CREATE TABLE IF NOT EXISTS $this->tblName(id int auto_increment primary key,
   first_name text,
   middle_name text,
   last_name text)";
   $this->conn->query($createtbl);
   
   
  }
  public function insertbl($n,$m,$l)
  {
   $insertbl = "INSERT INTO $this->tblName(first_name, middle_name, last_name) 
   VALUES('$n','$m','$l')";
   $this->conn->query($insertbl);
  }
  public function all()
  {
    $all = "SELECT * FROM $this->tblName";
    return $this->conn->query($all);
  }
  public function update($q,$w,$e,$id)
  {
    $update = $this->conn->query("UPDATE $this->tblName SET first_name='$q', middle_name='$w', last_name='$e' WHERE id='$id'");
    return $update; 
  }
  public function fetch_names($id) {
        $names = $this->conn->query("SELECT * FROM $this->tblName WHERE id = '$id'");
        return $names->fetch_assoc();
}
 public function delete($d)
 {
 $delete = $this->conn->query("DELETE FROM $this->tblName WHERE id='$d'");
 return $delete;
 }
}
