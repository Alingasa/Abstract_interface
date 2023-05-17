<?php

abstract class Database
{
abstract public function connect();
}

interface Manage
{
  public function createtbl();
  public function insertbl($n,$m,$l);
  public function all();
  public function update($q,$w,$e,$id);
  public function delete($d);
}