<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>principal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/miestilo.css">
  </head>
  <body>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
  <!--Si no comento esto el navbar,hay 2 navbar
    <header>
        <div class="logo-container">
            <img src="Assets/img/yorha.png" alt="Logo de nier" class="logo">
        </div>
        <h1>For The Glory of Mankind</h1>
    </header>

    <nav>
        <ul>
            <li> <a href="home.html">Home</a></li>
            <li><a href="nosotros.html">Quienes somos</a></li>
            <li><a href="registro.html">Formulario de registro</a></li>
        </ul>

    </nav>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

-->
    <section class="principal">

    <div class="texto">
        <h1>Productos/Unidades</h1>
    </div>

    

    <!--Carrusel-->
    <div id="carouselExample" class="carousel slide" data-bs-theme="dark">
        <div class="carousel-inner">
        <div class="carousel-item active" >
        <img src="<?= base_url('assets/img/A2.webp') ?>" class="d-block w-25 " alt="A2">
        <div class="carousel-text d-none d-md-block">
          
          <p>The A-model is a YoRHa prototype that specializes in close-quarters combat. Though not presently in use, it was originally created to speed along the implementation of other official models such as 2B and 9S.</p>
        </div>
    </div>
    
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/type2b.webp') ?>" class="d-block w-25 " alt="type 2b">
        <div class="carousel-text" d-none d-md-block>2B is an all-purpose battle android, deployed as a member of the automated YoRHa infantry. She is equipped with a multitude of weapons for close quarters combat and can attack from range using the Pod support system.</div>
    </div>
    <div class="carousel-item">
        <img src="<?= base_url('assets/img/type9S.webp') ?>" class="d-block w-25 " alt="9S">
        <div class="carousel-text d-none d-md-block">9S is a scanner-type android who served during the 14th Machine War. He has an attack function, but is overall an investigative android—a member of the YoRHa automated infantry unit, which excels in hacking intelligence gathering.</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Fin carrusel-->
  </section>
 

  </body>
