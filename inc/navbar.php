<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo-menu" src="assets/img/logo_sin_fondo.png" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="width: 100%;" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo $menu == 1?'active':''?>">
              <a class="nav-link" href="/">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $menu == 2?'active':''?>" href="quienes_somos.php">¿Quienes somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $menu == 3?'active':''?>" href="productos.php">Productos y servicios</a>
            </li>
            <li class="nav-item <?php echo $menu == 4?'active':''?>">
              <a class="nav-link" href="english.php">English</a>
            </li>
            <li class="nav-item <?php echo $menu == 5?'active':''?>">
              <a class="nav-link" href="galeria.php">Galeria</a>
            </li>
            <li class="nav-item <?php echo $menu == 6?'active':''?>">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    