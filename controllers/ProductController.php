<?php
require_once 'models/product.php';
class ProductController{
  
  public function index(){
     Utilities::isAdmin();
    require_once 'views/layout/main.php';
  }


public function manage(){
  Utilities::isAdmin();
  $product = new Product();
  $products = $product->getAll();

  
  require_once 'views/layout/product/manage.php';
}

public function create(){
  Utilities::isAdmin();
  require_once 'views/layout/product/create.php';
}


public function save(){

  Utilities::isAdmin();
  if (isset($_POST)) {
    

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $description = isset($_POST['description']) ? $_POST['description'] : false;
    $price = isset($_POST['price']) ? $_POST['price'] : false;
    $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
    $category = isset($_POST['category']) ? $_POST['category'] : false;
   // $image = isset($_POST['name']) ? $_POST['name'] : false;


    if ($name & $description & $price & $stock & $category) {
      $product = new Product();

      $product->setName($name);
      $product->setDescription($description);
      $product->setCost($price);
      $product->setStock($stock);
      $product->setCategoryId($category);

      if (isset($_FILES['image'])) {
        $file = $_FILES['image'];
        $fileName = $file['name'];
        $fileType = $file['type'];
        
        if (!is_dir('uploads/images')) {
          mkdir('uploads/images', 0777, true);
        }

        if ($fileType == 'image/jpeg' || $fileType == 'image/png' ||  $fileType == 'image/jpg' || $fileType == 'webp' ||  $fileType == 'image/jfif') {
          
          move_uploaded_file($file['tmp_name'], 'uploads/images/'.$fileName);

          $product->setImage($fileName);
        }
        
      }


      $save = $product->save();

  
      if($save){
        $_SESSION['product'] = 'true';
      }else{
        $_SESSION['product'] = 'error 3';
      }

    }else{
      $_SESSION['product'] = 'error 2';
    }
  }else{
    $_SESSION['product'] = 'error 1';
  }

   echo'<script type="text/javascript">
   window.location.href="index.php?controller=product&method=manage";</script>'; 

  }
  public function edit(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $product = new Product();

      $product->setId($id);
      $item = $product->getOne();

    }

      require_once 'views/layout/product/create.php';
  }

  public function delete(){ 
    if ($_GET['id']) {
      $id = $_GET['id'];

      $product = new Product();

      $product->setId($id);

     $consult = $product->delete();

     if ($consult) {
       $_SESSION['delete_product'] = true;
     }else {
       $_SESSION['delete_product'] = false;
     }
    }
    echo'<script type="text/javascript">
   window.location.href="index.php?controller=product&method=manage";</script>'; 
  }
}



?>

