<?php 
require_once 'models/category.php';
require_once 'models/product.php';
class Utilities{
  public static function deleteSession($name){
    if (isset($_SESSION[$name])) {
      
      $_SESSION[$name] = null;
       unset($_SESSION[$name]);
    }

    return $name;
  }

  public static function isAdmin(){
    if (!isset($_SESSION['admin'])) {
      echo'<script type="text/javascript">
   window.location.href="index.php";</script>'; 
    }else {
      return true;
    }
  }

  public static function getCategories(){
    $category = new Category();

    $categories = $category->getCategories();

    return $categories;
  }

  public static function getProducts(){
    $product = new Product();

    $products = $product->getAll();

    return $products;
  }
}
  

?>