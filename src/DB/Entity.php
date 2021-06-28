<?php

namespace CodeExperts\DB;

use \PDO;

abstract class Entity
{
  public function __construct (\PDO $conn)
  {
      $this->conn = $conn;
  }

  public function findALL()
  {
    return 'SELECT * FROM products'; 
  }

  public function find(){
    return 'SELECT *FROM products WHERE id= 10';
  }
}