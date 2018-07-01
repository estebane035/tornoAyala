<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include("inc/header.php"); ?>
  </head>

  <body>
    <?php $menu=3; include("inc/navbar.php"); ?>

   <header class="py-5 bg-image-full" style="background-image: url('assets/img/banner_5.jpeg');">
      <div style="height: 200px;"></div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Productos y servicios</h1>


      <div class="row">
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="/assets/img/flecha_cardan.jpg">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Flechas Cardán</a>
              </h4>
              <p class="card-text">Fabricación, armado, reparación, balanceo y cambio de partes como yugos, espigas, crucetas y tubo. ACERO Y ALUMINIO.</p>
              <p class="card-text">También para su comodidad contamos con un surtido de las refacciones más comunes y especializadas de las mejores marcas, Spicer, Neapco, Rockford, Precision, Autopar entre otras.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="/assets/img/eje_delantero.jpg"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" data-toggle="modal" data-target="#modal-eje-trasero-delantero">Ejes Traseros y Delanteros</a>
              </h4>
              <p class="card-text">Reparamos y enderezamos ejes traseros y delanteros. Reparación, rimado, puesta de pernos, y armado de mangos de ejes de vehículos de carga.</p>
              <p class="card-text">Reconstrucción de espigas de ejes de diferencial.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="/assets/img/flecha_lateral.jpeg" alt="" data-toggle="modal" data-target="#modal-flecha-lateral">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Flechas laterales</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="/assets/img/maza.jpeg">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Mazas</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="/assets/img/piezas.jpeg">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Fabricación y adaptación de piezas</a>
              </h4>
              <p class="card-text">Casquillos, Bujes, Pernos, Flechas estriadas, Cuñeros, Entre otros.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100 alert alert-info" style="background-color:#0b5890; border-color:#1b2a35; color:#ffffff;">
            <div class="card-body" style=" margin-top: 10%;">
              <div class="text-justify">
                <h3>Si no ve el servicio que usted requiere, o tiene alguna duda, con todo gusto le atenderemos.</h3>
                <a href="/contacto.php"><button type="button" class="btn btn-light" style="margin-top:25px; color:#0b5890; margin-left: 25%;width: 50%; font-size: 180%;">Contáctenos</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>

  </body>

</html>
