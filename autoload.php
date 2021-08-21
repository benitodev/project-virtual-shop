
<?php
function controller_autoload($class){
  include 'controller/'. $class . '.php';
  var_dump($class);
}

spl_autoload_register('controller_autoload');
?>