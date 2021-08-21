<?php

class database{
  public static function db(){
    $db = new mysqli('localhost', 'root', '', 'tienda');
    $db->query('SET NAMES "utf8"');

    return $db;
  }
}
?>