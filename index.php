<?php
session_start() ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>DH - Proyecto</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/header.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link rel="stylesheet" href="css/footer.css">
      <link href="https://fonts.googleapis.com/css?family=EB+Garamond|News+Cycle" rel="stylesheet">
      <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/animate.css">
      <title>Sale de invierno</title>
      <script src="https://use.fontawesome.com/bb1fbcebba.js"></script>

   </head>
   <body>
     <!--................... Header............................ -->

    <?php include('header.php') ?>

       <!-- ................fin Header.................. -->
    <!-- NOTE: cuerpo -->
      <div class="container">
        <div class="banner">
          <video autoplay loop muted preload="auto">
            <source src="videos/secuencia.mp4" type="video/mp4">
          </video>
          <p class="animated fadeInUp">Liquidación de INVIERNO</p>
        </div>
        <div class="banner-cel">
          <img src="images/nieve.png" alt="">
          <p>Liquidación de INVIERNO</p>
        </div>
        <div class="parallax-primavera">

        </div>

              <section class="ofertas">
                <h2>PRODUCTOS EN OFERTA</h2>
                <div class="prod-oferta">
                  <img  src="images/foto1.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto2.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto3.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto4.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto5.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>
                <div class="prod-oferta">
                  <img src="images/foto1.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
                  <button type="button" name="button">COMPRAR</button>
                </div>

              </section>
              <div class="parallax-divisor1">
              </div>
              <div class="parallax-invierno">
                <a class="animated fadeIn" href="#"><img src="images/inviernocartel.png" alt=""></a>
              </div>
              <div class="parallax-divisor2">
              </div>
              <div class="parallax-verano">
                <a href="#"><img src="images/vermas.png" alt=""></a>
              </div>
              <div class="parallax-divisor3">
              </div>
              <div class="parallax-hombres">
                <a href="#"><img src="images/hombrecartel.png" alt=""></a>
              </div>
              <div class="parallax-divisor4">
              </div>
              <div class="parallax-mujeres">
                <img src="images/mujerescartel.png" alt="">
              </div>

        </div><!-- NOTE: end container -->

              <!-- NOTE: FOOTER  -->

         <?php include('footer.php') ?>



   </body>
</html>
