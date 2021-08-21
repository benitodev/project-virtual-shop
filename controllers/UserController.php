<?php

class UserController{
  public function profile(){
    require_once 'views/layout/profile.php';
  }

   public function menu(){
  require_once 'views/layout/menu.php';
  }

  public function register(){
  require_once 'views/layout/register.php';
  }

 public function saveLogin(){
  if ($_POST) {
    require_once 'models/user.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = new User();
   $identity = $login->login($email, $password);
    var_dump($identity);
   if ($identity && is_object($identity)) {
     $_SESSION['identity'] = $identity;
     $_SESSION['identity-logged'] = 'good';
     if ($identity->tipo == 'admin') {
       $_SESSION['admin'] = true;
     }
   }else {
     $_SESSION['identity-logged'] = 'failed';
   }
 echo'<script type="text/javascript">
   window.location.href="index.php?controller=user&method=register";</script>'; 
  }
 }

  public function saveRegister(){
    if (isset($_POST)) {
  
      require_once 'models/user.php';
      $user = new User();    
      $user->setName($_POST['name']);
      $user->setSurname($_POST['surname']);
      $user->setPassword($_POST['password']);
      $user->setEmail($_POST['email']);
     $save = $user->save();
    
     if ($save) {
       $_SESSION['register'] = 'correctamente';

     }else {
        $_SESSION['register'] = 'fallido';
     
     }
      
    }else {
      $_SESSION['register'] = 'fallido';
    }
  echo'<script type="text/javascript">
   window.location.href="index.php?controller=user&method=register";</script>'; 
  }

 
public function logout(){
  if (isset($_SESSION['identity'])) {
    unset($_SESSION['identity']);
  }
  if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
  }
  echo'<script type="text/javascript">
   window.location.href="index.php";</script>'; 
}
}


?>