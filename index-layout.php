<?php require_once 'views/layout/head.php' ?>
<body>
  <header id="header">
    <nav id="nav"> 
        <div id="nav-logo" data-active>
          <a href="" id="nav-bar-logo">   
            <img src="assets/images/logo.jpg" alt="">
          </a>
      </div>

      <div id="nav-menu">
        <div id="nav-menu-utilities">
          <div class="utilities-additions">
            <div class="utilities-contact"><h4>Contactá</h4> <h4>Trabajá</h4></div>
            <div class="utilities-buttons">
              <a href="">
                <img src="assets/images/carrito-de-compras.png" alt="carrito"> 
              </a>
              <a href="">

                <img src="assets/images/usuario.png" alt="">  
              </a>

            </div>  

            
          </div>

          <ul >
            <li data-pushbar-target="pushbar-nav"><a href="contact.php" style="text-decoration:none; color: #242220; ">Menú</a></li>
            <li data-pushbar-target="pushbar-nav" data-active> <a href="" style="text-decoration:none; color: #242220; " class="additional">Locales </a></li>
            <li data-pushbar-target="pushbar-nav"><a style="text-decoration:none; color: #242220; "  class="additional">Promociones</a></li>
            <li data-active><a href="contact.php" style="text-decoration:none; color: #242220; margin-right:100px;" class="additional">Contacto</a></li>
          </ul>
        </div>
    
      
    </div>
      
    
    
  </nav >
  <div data-active style="position:absolute; top:62px; height:10px; width:100%;"></div>

    <div data-pushbar-id="pushbar-nav" data-pushbar-direction="top"  id="pushbar-nav">
      <button data-pushbar-close>Close</button>
      <div id="pushbar-content">

    
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt="">adasasdas</img></div>
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt=""></div>
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt=""></div>
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt=""></div>
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt=""></div>
         <div><img src="https://cache-backend-mcd.mcdonaldscupones.com/media/image/product$kKXdw3Ku/200/200/original?country=ar" alt=""></div>
    </div>
</div>
  </header>

  <main>
    <div id="main-image" >
      <img src="assets/images/main-image.jpg" alt="">

    </div>



  </main>

  <script src="js/script.js"></script>
  <script src="js/pushbar.js"></script>
<script>
  const $pushBar = new Pushbar({
   blur:true,
   overlay: true
 })
</script>
</body>
</html>