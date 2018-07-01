<!DOCTYPE html>
<html lang="en">

  <head>
    <?php $menu=4; include("inc/header.php"); ?>
  </head>

  <body>
    <?php include("inc/navbar.php"); ?>

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
            <h2 class="mt-4">What We Do</h2>
            <p>Welcome to our Machine Shop “Taller de Torno Ayala”. We're located in Guadalajara, Mexico and has been in its current location for over 30 years. The shop was opened in 1950 and we've been in continuous operation ever since.</p>
            <p>The original owner was Mr. Mario Ayala Gómez. Currently, the shop is owned, managed and operated by his son, the Industrial Engineer Mario Alberto Ayala Macias and his son I. Eng. Mario A. Ayala B.</p>
            <p>We can offer a wide variety of services for maintenance, repairing and fabrication of parts for the industrial, agricultural, construction, and automotive industries. All of these with a complete shop that is specialized in heavy machinery for lathing, milling, drilling, welding and other machining services. The shop has lathe machines, a CNC lathe machine, a drive shaft balancer, milling machines, radial arm drills, diverse cutting machines, plasma and flame cutting machines, and several types of welding equipment.</p>

            <p>Among the most popular products and services is the building and repairing of drive shafts. These drive shafts could be from a simple car, agricultural tractor, construction machines to heavy machinery. We also offer services like axle leveling and repairing, fabrication and adaptation of a wide variety of parts.</p>

            <p>We also sell a whole spectrum of products. For example, some of the most popular drive shafts, as well as specialty ones, parts, and accessories. We carry brands like Spicer, Neapco, Rockford, Precision, etc.</p>

            <p><strong>¡We look forward to serving you soon!</strong></p>
          </div>

          <div class="col-sm-4">
            <h2 class="mt-4">Contact us</h2>
            <h4 class="mt-4">I. Eng. Mario Alberto Ayala M.</h4>
            <address>
              <strong>Matías Romero No. 720</strong>
              <br>(Crossing with Los Angeles avenue)
              <br>Col. San Carlos CP 44430 Guadalajara, Jalisco
              <br>
            </address>
            <address>
              <span>Telefono:</span>
              <strong>(+52) 33-3650-1553</strong>
              <br>
              <span>Tel/Fax:</span>
              <strong>(+52) 33-3650-0648</strong>
              <br>
              <span>Email:</span>
              <a href="mailto:#">contacto@tornoayala.com</a>
            </address>
            <div id="mapa" style="height: 400px; width: 100%;">
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>

    <script src="scripts/english.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Oq-WHG-knSvcEN8vdKDkWWPfERDV6TA&callback=initMap"></script>

  </body>

</html>
