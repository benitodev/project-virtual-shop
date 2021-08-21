<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="assets/images/logo.jpg"/>
   <link rel="stylesheet" href="assets/styles/style.css">
   <link rel="stylesheet" href="assets/styles/pushbar.css">
  <title>Salame company</title>
</head>
<body>
  <header id="">
    <div id="box-logo">
      <div id="logo">
      <img src="assets/images/logo.jpg" alt="">
      </div>
    </div>
    <nav id="nav">
      <ul >
        <li data-pushbar-target="pushbar-nav">Menú</button>
        <li data-pushbar-target="pushbar-nav">Locales</li>
        <li data-pushbar-target="pushbar-nav">Promociones</li>
        <li data-pushbar-target="pushbar-nav">Sobre nosotros</li>
      </ul>
    </nav>
    <div data-pushbar-id="pushbar-menu" data-pushbar-direction="right"></div>
    <div data-pushbar-id="pushbar-nav" data-pushbar-direction="top" class="pushbar-nav">
      <div id="pushbar-content"></div>
      <button data-pushbar-close>Close</button>
  </div>
  </header>

  <main>
    <div id="main-image" >
     
      <div class="circle"  data-pushbar-target="pushbar-menu"><h2><a href="about-us.php">Contacto

      </a></h2></div>
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