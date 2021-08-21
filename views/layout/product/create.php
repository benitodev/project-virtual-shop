<main style="text-align:center;">

<?php if(isset($item) && is_object($item)) :?>
  <h1>Edita el producto <?= $item->nombre ?></h1>
  <?php else :?>    
    <h1>Crear nuevos productos</h1>
<?php endif?>  

<div  style="width:100%; display:flex; justify-content:center;">
  <form action="index.php?controller=Product&method=save" method="POST" class="form" style="height:700px;" enctype="multipart/form-data">

    <label for="name" class="label">Nombre:</label>
    <input type="text" name="name" class="input" value="<?= isset($item) && is_object($item) ? $item->nombre : '' ?>">


    <label for="description" class="label">Descripción:</label> 
    <textarea  name="description" ><?= isset($item) && is_object($item) ? $item->descripcion : '' ?></textarea>


    <label for="price" class="label">Precio</label>
    <input type="text" name="price" class="input" value="<?= isset($item) && is_object($item) ? $item->precio : '' ?>">


    <label for="stock" class="label">Stock</label>
    <input type="number" name="stock" class="input" value="<?= isset($item) && is_object($item) ? $item->stock : '' ?>">


    <label for="category" class="label">categoria</label>
    <select name="category" >
<?php $categories = Utilities::getCategories();
      while ($category = $categories->fetch_object()):
?>
  <option value="<?= $category->id?>"><?= $category->nombre?></option>

<?php endwhile?>

  </select>


  <label for="image">Imagén</label>
  <input type="file" name="image" >
        <br>
  <input type="submit" class="submit">
  </form>
</div>
</main>