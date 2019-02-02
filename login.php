<?php
require_once 'partials/config.php';
require_once 'partials/db.php';
require_once 'partials/func.php';
?>

    <?php require_once 'partials/header.php' ?>

  <!-- Start contact content ends -->
  <div class="container-fluid bg-white">
    <div class="container text-center pre-information">
      <div class="row">
        <div class="col-3">
          <img src="img/logo.png" alt="Logo" width="30px;">
        </div>
        <div class="col-3">
          <a href="mailto:antoniogomez@yahoo.com"><i class="text-dark fas fa-envelope"></i></a>
        </div>
        <div class="col-3">
          <a href="tel:2022881554"><i class="text-dark fas fa-phone"></i></a>
        </div>
        <div class="col-3">
          <a href = "https://goo.gl/maps/TcWnQhzFWCP2" target="_blank"><i class="text-dark fas fa-map"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Start contact content ends -->

  <!-- Nav -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-dark nav-title" href="#">Mechanical Services</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="services.html">Equipment Repair</a>
              <a class="dropdown-item" href="services.html">Maintenance</a>
              <a class="dropdown-item" href="services.html">HVAC</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Nav -->

    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card my-5">
                        <div class="card-header">
                            <h5 class="cart-title">Login</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-success">
                                <?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                                ?>
                            </div>
                            <div class="text-danger">
                                <?php
                                if(isset($_SESSION['msgErr'])){
                                    echo $_SESSION['msgErr'];
                                    unset($_SESSION['msgErr']);
                                }
                                ?>
                            </div>
                            <form action="partials/processLogin.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" name="email" class="form-control" id="" placeholder="Enter your email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" name="password" class="form-control" id="" placeholder="Enter your password" required>
                                    </div>
                                </div>

                                <button type="submit" name="login" class="btn btn-secondary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'partials/footer.php' ?>
<!-- Forked toggler button -->
<script>
  $(document).ready(function(){
    $('.navbar-toggler').html('<i class="fa fa-chevron-circle-down"></i>');
  })
</script>