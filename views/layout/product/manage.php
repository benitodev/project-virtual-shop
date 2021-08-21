<?php require_once 'helpers/Utilities.php'?>


<h1>Gestionar los productos</h1>






<!--  Session comprobate PRODUCT DELETE-->
<?php if (isset($_SESSION['delete_product']) && $_SESSION['delete_product'] == true):?>

 <div class='good'> <h2>Se ha borrado tu producto</h2> </div>;
<?php 
 elseif (isset($_SESSION['delete_product']) && $_SESSION['delete_product'] != true) :
?>  

<?php endif;   
Utilities::deleteSession('delete_product');
?>


<?php if (isset($_SESSION['product']) && $_SESSION['product'] == 'true') :?>

   <div class='good'> <h2>Se ha creado tu product</h2> </div>;

<?php elseif (isset($_SESSION['product']) && $_SESSION['product'] != 'true') :?>

    <div class="failed"><h2>NO se ha podido crear tu producto</h2> </div>
<?php endif;
Utilities::deleteSession('product');
?>  


<div class="container-products">
<?php while ($product = $products->fetch_object()) :?>
    
    <div class="product-manage">
      <div class="text-content-manage">
        <h2>ID: <?= $product->id?></h2>  
        <h2>Nombre: <?= $product->nombre?></h2>
        <h2> Precio: $<?= $product->precio?></h2> 
        <h2>Stock: <?= $product->stock?></h2>
         <h2>categoria ID: <?= $product->categoria_id?></h2>  
      </div>

      <div class="buttons-content-manage buttons-user">
        <a style="background-color:green;" href="index.php?controller=product&method=edit&id=<?= $product->id?>">Editar producto</a>
        <a style="background-color:red;"  href="index.php?controller=product&method=delete&id=<?= $product->id?>">Eliminar producto</a>
      </div>

    </div> 

    
    <?php endwhile?>
</div>

  <div class="buttons-user" >
  <a href="index.php?controller=Product&method=create" >Crear producto</a>
  </div>