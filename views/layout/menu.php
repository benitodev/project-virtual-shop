<main class="menu">
<div class="menu-container">
  <aside class="menu-aside">
    <div class="contain-categories title-categories">
      <a  class="" href="" style="    border-left: 6px solid #ffbc0d;">
        <img class="categories-menu-imgs" src="https://www.mcdonalds.com.ar/uploads/bigmac_09ea6e610f.png
    " alt="">
        ¡Nuestros productos!
      </a>

    </div>
    <div class="categories-menu" style="margin-top:30px;">
    <div class="title-categories">
      <a href="">
        <img class="categories-menu-imgs" src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt="">
        Hamburguesas
      </a>
    </div>

    <div  class="title-categories">
      <a href="">
        <img  class="categories-menu-imgs"  src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXEJw3W/200/200/original?country=ar" alt="">
        Linea signature
      </a>
    </div>
    
    </div>
  </aside>




  
  
  <div class="menu-products">
    
    <h1 class="title">Nuestros productos</h1>
    <div class="menu-products-content">
      
      <?php  
      $products = Utilities::getProducts();
      while ($product = $products->fetch_object()) :?>

      <div>
        <a href="" class="product">
          <div>
            <img class="product-image" src="uploads/images/<?=$product->imagen?>" alt="<?=$product->nombre?>">
          </div>
          "<?=$product->nombre?>"
        </a>
      </div>

      <?php endwhile;?>


       <div>
        <a href="" class="product">
          <div>
            <img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kcX5Z3AB/200/200/original?country=ar" alt="">
          </div>
          "Doble cuarto de libra con queso"
        </a>
      </div>

       <div>
        <a href="" class="product">
          <div>
            <img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kcXUf0Vf/200/200/original?country=ar" alt="">
          </div>
          "Doble cuarto de libra con queso"
        </a>
      </div>

    </div>

  </div>

  </div>
</main>