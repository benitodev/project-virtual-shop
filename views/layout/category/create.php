<h1>Crear categoria!</h1>

<?php   if (isset($_SESSION['error_category'])) {
 echo "<div><h2>Error al ingresar su nombre de categoría</h2></div>";
}?>

<form action="index.php?controller=Category&method=save" method="POST">
<label for="name">Nombre de categoría</label>
<input type="text" name="name">
<input type="submit" value="Enviar">
</form>