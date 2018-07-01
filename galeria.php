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

          <div id="blueimp-gallery" class="blueimp-gallery">
              <div class="slides"></div>
              <h3 class="title"></h3>
              <a class="prev">‹</a>
              <a class="next">›</a>
              <a class="close">×</a>
              <a class="play-pause"></a>
              <ol class="indicator"></ol>
          </div>

          <div class="row" id="links">

            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/1.jpg" title="Banana">
                <img class="img-responsive" src="/assets/galeria/1.jpg" alt="Banana">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/2.jpg" title="Apple">
                <img class="img-responsive" src="/assets/galeria/2.jpg" alt="Apple">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/3.jpg" title="Orange">
                <img class="img-responsive" src="/assets/galeria/3.jpg" alt="Orange">
              </a>
            </div>

            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/4.jpg" title="Banana">
                <img class="img-responsive" src="/assets/galeria/4.jpg" alt="Banana">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/5.jpg" title="Apple">
                <img class="img-responsive" src="/assets/galeria/5.jpg" alt="Apple">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/6.jpg" title="Orange">
                <img class="img-responsive" src="/assets/galeria/6.jpg" alt="Orange">
              </a>
            </div>

            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/7.jpg" title="Banana">
                <img class="img-responsive" src="/assets/galeria/7.jpg" alt="Banana">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/8.jpg" title="Apple">
                <img class="img-responsive" src="/assets/galeria/8.jpg" alt="Apple">
              </a>
            </div>
            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/9.jpg" title="Orange">
                <img class="img-responsive" src="/assets/galeria/9.jpg" alt="Orange">
              </a>
            </div>

            <div class="col-md-4 m-t-40">
              <a href="/assets/galeria/10.jpg" title="Banana">
                <img class="img-responsive" src="/assets/galeria/10.jpg" alt="Banana">
              </a>
            </div>
          </div>


        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>

    <?php include("inc/scripts.php"); ?>
    
    <script src="scripts/galeria.js"></script>
  </body>

</html>
