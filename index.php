<?php
 session_start();
 require_once 'config/parameters.php';
 require_once 'config/db.php';
 require_once 'helpers/Utilities.php';
 require_once 'controllers/UserController.php';
 require_once 'controllers/ProductController.php';
 require_once 'controllers/CategoryController.php';
 require_once 'controllers/OrderController.php';
 require_once 'controllers/ErrorController.php';
 
 
 require_once 'views/layout/head.php'; 
 require_once 'views/layout/header.php';  
 
  //var_dump($_SESSION['identity']);


 if (isset($_SESSION['identity'])) {
 }else {
   echo 'No existe';
 }

function show_error(){
$error = new ErrorController();
      $error->index();
}

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'] . 'Controller';


}
elseif (!isset($_GET['controller']) && !isset($_GET['method'])) {
 $controller = controller_default;
}

else {
  show_error();
}


if (class_exists($controller)) {
    $usuario = new $controller();
    
    if(isset($_GET['method']) && method_exists($usuario, $_GET['method'])){
      $action = $_GET['method'];
      echo '<h2>'. $usuario->$action(). '<h2>';
    }elseif (!isset($_GET['controller']) && !isset($_GET['method'])) {
      $default = method_default;
     '<h2>'.$usuario->$default().'</h2>';
   
    } 
    
    else {
      show_error();
    }


  }else {
      show_error();
  }


require_once 'views/layout/script.php';


?>