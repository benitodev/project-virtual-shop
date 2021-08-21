<?php 
class Product{
  private $id;
  private $category_id;
  private $name;
  private $description;
  private $cost;
  private $stock;
  private $ofert;
  private $date;
  private $image;
  private $db;

  public function __construct(){
    $this->db = Database::db();
  }

  public function getId(){
    return $this->id;
  }
  public function getCategoryId(){
    return $this->category_id;
  }
  public function getName(){
    return $this->name;
  }
  public function getDescription(){
    return $this->description;
  }
  public function getCost(){
    return $this->cost;
  }
  public function getStock(){
    return $this->stock;
  }
  public function getOfert(){
    return $this->ofert;
  }
  public function getDate(){
    return $this->date;
  }
  public function getImage(){
    return $this->image;
  }


  
  public function setId($id){
   $this->id = $id;
  }


  
  public function setCategoryId($category_id){
    $this->category_id = $category_id;
  }


  
  public function setName($name){
    $this->name = $this->db->real_escape_string($name);
  }

  
  public function setDescription($description){
    $this->description = $this->db->real_escape_string($description);
  }

  
  public function setCost($cost){
   $this->cost = $this->db->real_escape_string($cost);
  }
  
  public function setStock($stock){
     $this->stock = $this->db->real_escape_string($stock);
  }
  
  public function setOfert($ofert){
    $this->ofert = $this->db->real_escape_string($ofert);
  }
  
  public function setDate($date){
    $this->date = $date;
  }
  
  public function setImage($image){
     $this->image = $this->db->real_escape_string($image);
  }
  public function getAll(){
    $products = $this->db->query("SELECT * FROM productos ORDER BY id DESC");

    return $products;
  }

  public function save(){
    $sql = "INSERT INTO productos VALUES(null, {$this->getCategoryId()}, '{$this->getName()}', '{$this->getDescription()}', {$this->getCost()}, {$this->getStock()}, null, CURDATE(), '{$this->getImage()}');";
    $query = $this->db->query($sql);
 

    if ($query) {
      return $query;
    }else {
      return 'ERROR EN LA CONSULTA';
    }

    
  }

  public function edit(){
    $sql = "UPDATE productos SET nombre='{$this->getName()}', descripcion = '{$this->getDescription}', precio = '{$this->getCost}', stock = '{$this->stock}', oferta = '{$this->getOfert()}', imagen = '{$this->getImage()}'";

    $consult = $this->db->query($sql);

    $result = false;
    if ($consult) {
      $result = true;
    }

    return $result;
  }

  public function getOne(){
    $sql = "SELECT * FROM productos WHERE id = {$this->getId()}";

    $consult = $this->db->query($sql);

    if($consult){
    return $consult->fetch_object();
  }else {
    return false;
  }

  }

  public function delete(){
    $sql = "DELETE FROM productos WHERE id = '{$this->getId()}'";

    $consult = $this->db->query($sql);

    if($consult){
      return $consult;
    }else {
      return false;
    }
  }
}
?>