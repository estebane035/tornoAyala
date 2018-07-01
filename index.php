<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include("inc/header.php"); ?>
  </head>

  <body>
    <?php $menu=1; include("inc/navbar.php"); ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('assets/img/banner_1.jpg')">
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/img/banner_2.jpeg')">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/img/banner_3.jpeg')">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">

        <div class="row">
          <div class="col-sm-8">
            <h2 class="mt-4">¿Qué hacemos?</h2>
            <p>Trabajos de mantenimiento y fabricación para maquinaria agrícola, industrial, construcción, montacargas y partes automotrices (flechas cardan, ejes traseros y delanteros, etc). Todo esto con una completa gama de maquinaria y herramientas que incluyen tornos, torno CNC, cepillo, taladro, prensa, fresadora, perfiladora y soldadura de varios tipos.</p>
            <p>
              <a class="btn btn-primary btn-lg" href="quienes_somos.php">Conoce mas &raquo;</a>
            </p>
          </div>
          <div class="col-sm-4">
            <h2 class="mt-4">Contacto</h2>
            <address>
              <strong>Matías Romero No. 720</strong>
              <br>(Esq. con Los Angeles)
              <br>Col. San Carlos CP 44430 Guadalajara, Jalisco
              <br>
            </address>
            <address>
              <span>Telefono:</span>
              <strong>(01)-33-3650-1553</strong>
              <br>
              <span>Fax:</span>
              <strong>3650-0648</strong>
              <br>
              <span>Correo:</span>
              <a href="mailto:#">contacto@tornoayala.com</a>
            </address>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/servicios.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Productos y servicios</h4>
                <p class="card-text">Conozca a detalle algunos de nuestros productos y servicios.</p>
              </div>
              <div class="card-footer">
                <a href="productos.php" class="btn btn-primary">Ver más!</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/usa_flag.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">English</h4>
                <p class="card-text">Click in here to see a summary of our products and services in English, as well as contact information.</p>
              </div>
              <div class="card-footer">
                <a href="english.php" class="btn btn-primary">Go!</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="assets/img/contacto.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Contacto</h4>
                <p class="card-text">Direcciones, mapa, teléfonos y correo electrónico</p>
              </div>
              <div class="card-footer">
                <a href="contacto.php" class="btn btn-primary">Ver más!</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->
    </section>
    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>

  </body>

</html>
