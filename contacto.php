<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include("inc/header.php"); ?>
  </head>

  <body>
    <?php $menu=6; include("inc/navbar.php"); ?>
    
    <!-- Header - set the background image for the header in the line below -->
    <header class="py-5 bg-image-full" style="background-image: url('assets/img/banner_5.jpeg');">
      <div style="height: 200px;"></div>
    </header>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>CONTÁCTANOS</h1>
            <p class="lead">Nos pondremos en contacto a la brevedad.</p>
            <form method="POST" id="form-contacto" action="ajax/contacto.php">
              <div class="form-group has-feedback">
                <label for="name">Nombre*</label>
                <input type="text" class="form-control required" id="nombre" name="nombre" placeholder="" aria-required="true">
              </div>
              <div class="form-group has-feedback">
                <label for="email">Correo*</label>
                <input type="email" class="form-control required" id="correo" name="correo" placeholder="" aria-required="true">
              </div>
              <div class="form-group has-feedback">
                <label for="subject">Asunto*</label>
                <input type="text" class="form-control required" id="asunto" name="asunto" placeholder="" aria-required="true">
              </div>
              <div class="form-group has-feedback">
                <label for="message">Mensaje*</label>
                <textarea class="form-control required" rows="6" id="mensaje" name="mensaje" placeholder="" aria-required="true"></textarea>
              </div>
              <input type="hidden" id="token" name="token">
              <div class="row">
                 <div class="col-md-4"><input type="submit" value="Enviar correo" class="g-recaptcha submit-button btn btn-lg btn-default" data-sitekey="6Lcltz0aAAAAAL5pNdw8192CBQ7el0UAUdmcqfzM" data-callback='onSubmit' data-action='submit'></div>
                 <div class="col-md-8">
                  <div class="hidden" id="alerta">
                    <label id="content-alerta"></label>
                  </div>
                 </div>
               </div>
             </form>
          </div>
          <div class="col-md-6 text-center">
            <h2>Domicilio</h2>
            <hr>
            <p><i class="fa fa-home pr-10"></i> Matías Romero No. 720 (Esq. con Los Angeles), Col. San Carlos CP 44430 Guadalajara, Jalisco </p>
            <p><i class="fa fa-phone pr-10"></i> (01)-33-3650-1553</p>
            <p><i class="fa fa-fax pr-10"></i> 3650-0648</p>
            <p><i class="fa fa-envelope pr-10"></i> contacto@tornoayala.com </p>
            <div id="mapa" style="height: 400px; width: 100%;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>
    
    <script src="scripts/contacto.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Oq-WHG-knSvcEN8vdKDkWWPfERDV6TA&callback=initMap"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

  </body>

</html>
