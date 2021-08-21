
<?php
if (isset($_SESSION['register']) && ($_SESSION['register'] == 'correctamente')) {
  echo " <div class='good' ><h2>Usuario registrado correctamente</h2> </div>";

}elseif (isset($_SESSION['register']) && ($_SESSION['register'] == 'fallido')) {
   
  echo " <div class='failed'><h2>Fallo al registrarse</h2> </div>";

}elseif (isset($_SESSION['identity-logged']) && ($_SESSION['identity-logged'] == 'good')) {
  var_dump($_SESSION['identity-logged']); 
    echo "<div class='good'> <h2>Usuario logueado</h2> </div>";

}elseif (isset($_SESSION['identity-logged']) && ($_SESSION['identity-logged'] == 'failed')) {
  echo ' <div class="failed"><h2>Error al iniciar sesión</h2> </div>';
  var_dump($_SESSION['identity-logged']);
}
  
Utilities::deleteSession('identity-logged');

Utilities::deleteSession('register');


?>




<div class="form-container">
  <form action="index.php?controller=user&method=saveRegister" class="form" method="POST">
    <h2 class="h2-form">Crear cuenta</h2>
    <label class="label" for="nombre">Nombre</label>
    <input class="input" type="text" name="name" placeholder="Ingresa tu nombre">


    <br>
    <label class="label" for="">Apellido</label>
    <input class="input" type="text" name="surname" placeholder="Ingresa tu apellido">

    <br>
    <label class="label" for="contraseña">Contraseña</label>
    <input class="input" type="password" name="password" placeholder="Ingresa tu contraseña">


      <br>
    <label class="label" for="email">Email</label>
    <input class="input" type="email" name="email" placeholder="Ingresa tu correo electrónico">

<br>
    <input class="input submit" type="submit" value="Enviar">
  </form>





  <form class="form" action="index.php?controller=user&method=saveLogin" method="POST">
    <h2 class="h2-form">Ya tengo una cuenta</h2>
   
    <label class="label" for="email">Email</label>
  <input type="text" class="input" name="email" placeholder="Ingresa tu correo electrónico">
  <br>
  <label class="label" for="password">Contraseña</label>
  <input type="password"class="input" name="password" placeholder="Ingresa tu contraseña">
  <br>
  <input type="submit"class="input"></form>
  </div>