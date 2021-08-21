<h1>Crea y gestiona tus categorias</h1>
<?php   
  while ($category = $categories->fetch_object()) :
    ?>

<h2><?=$category->id?> - <?=$category->nombre?></h2>

<?php endwhile?>
<div class="buttons-user" >
  <a href="index.php?controller=Category&method=create">Crear categoria</a>

</div>