<?php
require_once 'partials/config.php';
require_once 'partials/db.php';
require_once 'partials/func.php';

if(!isset($_SESSION['user_data'])){
    return header('Location:login.php');
}
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

    <header class="my-3 text-center">
        <div class="container">
            <div class="jumbotron jumbotron-fluid bg-transparent text-dark">
                <div class="container">
                    <h1 class="display-5">Profile</h1>
                    <p class="lead">Update your password</p>
                </div>
            </div>
        </div>
    </header>

    <main class="mb-5">
        <div class="container">
            <div>
                <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
    ?>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="mb-3 text-right">
                        <a href="booking.php" class="btn btn-warning">Home</a>
                        <a href="viewAll.php" class="btn btn-success">Appointments</a>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="cart-title">Profile details</h5>
                        </div>
                        <div class="card-body">

                            <table class="table table-hover table-responsive-md">
                                <?php $user_data = $_SESSION['user_data']; ?>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope='row'>
                                        <?php echo $user_data->id; ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <td>
                                        <?php echo $user_data->email; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Password</th>
                                    <td>
                                        <form action="partials/processPassword.php" method="post">
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label class="sr-only">Password</label>
                                                    <input type="password" name="password" class="form-control mb-2" placeholder="Enter new password" required>
                                                </div>
                                                <div class="col-auto">
                                                   <input type="hidden" name="id" value="<?php echo $user_data->id ?>">
                                                    <button type="submit" name="submit" class="btn btn-primary mb-2">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
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