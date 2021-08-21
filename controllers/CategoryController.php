<?php
require_once 'models/category.php';
class CategoryController{

  public function index(){
    Utilities::isAdmin();
    $category = new Category();

    $categories = $category->getCategories();

   require_once 'views/layout/category/index.php';
  }


  public function create(){
Utilities::isAdmin();
   require_once 'views/layout/category/create.php';
  }

  public function save(){
    Utilities::isAdmin();
     $object = new Category();

     $save = $object->saveCategory();
     
     if ($save) {
      echo'<script type="text/javascript">
   window.location.href="index.php?controller=Category&method=index";</script>'; 
     }else {
       $_SESSION['error_category'] = 'error';
       echo'<script type="text/javascript">
       window.location.href="index.php?controller=Category&method=create";</script>'; 
     }
    }

} 


?>