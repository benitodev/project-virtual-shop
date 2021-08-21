<?php

class Category {
  public $name;
  public $db;
  public $id;

  public function __construct(){
    $this->db = Database::db();
  }
 //getters
  public function getName(){
    return $this->name;
  }

  public function getId(){
    return $this->id;
  }

  //setters
  public function setName($name){
    $this->name = $name;
  }
  public function setId(){
    $this->id = $id;
  }

  //get all categories
  public function getCategories(){
    $sql = "SELECT * FROM categorias";
    $categories = $this->db->query($sql);

    return $categories;
  }

  public function saveCategory(){
    if (isset($_POST)) {
      $name = $_POST['name'];
    }
    $sql = "INSERT INTO categorias VALUES(null, '$name')";

   $comprobate = $this->db->query($sql);

   if ($comprobate) {
     return true;
   }else {
     return false;
   }

  }
  
}

?>