<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include("inc/header.php"); ?>
  </head>

  <body>
    <?php $menu=2; include("inc/navbar.php"); ?>
    
    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('assets/img/banner_5.jpeg');">
      <div style="height: 200px;"></div>
    </header>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-center">¿Quienes somos?</h1><br><br>
            <p class="text-justify">Aquí en Taller de Torno “Ayala” contamos con una vasta experiencia a su servicio, ya que fue fundado en los 1950’s por Mario Ayala Gómez y con más de 35 años en su sitio actual operado por el Ing. Mario A. Ayala M y su hijo Ing. Mario A. Ayala B.</p>
            <p class="text-justify">Estamos a sus órdenes para trabajos de mantenimiento y fabricación para maquinaria agrícola, industrial, construcción, montacargas y partes automotrices (flechas cardan, ejes traseros y delanteros, etc). Todo esto con una completa gama de maquinaria y herramientas que incluyen tornos, torno CNC, cepillo, taladro, prensa, fresadora, perfiladora y soldadura de varios tipos.</p>
            <p class="text-justify">Se cuenta con operadores experimentados y esperando brindarle la mejor atención, que esta se adecue a sus necesidades para que usted quede conforme y contento por nuestros servicios. Además contamos con servicio a domicilio. Esperamos poder servirle pronto.</p>
          </div>
          <div class="col-md-4">
            <img src="assets/img/taladro_1.jpg" class="img-responsive" width="100%">
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>

  </body>

</html>
