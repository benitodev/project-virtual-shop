<main>
  <div class="buttons-user">
    <?php if(isset($_SESSION['identity'])) :?>
        <?php if(isset($_SESSION['admin'])) :?>
          <a href="index.php?controller=Product&method=manage">Gestionar producto</a>
          <a href="index.php?controller=Category&method=index">Gestionar categoria</a>
        <?php endif;?>
        <a href="e">Mis pedidos</a>
        <a href="e">Editar perfil</a>
        <a href="index.php?controller=user&method=logout">Cerrar sesión</a>
         <?php endif;?>
 
  </div>
</main>