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
      <a class="navbar-brand text-dark nav-title" href="index.html">Mechanical Services</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
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

<header class="my-3 mt-5 text-center">
    <div class="container">
        <div class="jumbotron jumbotron-fluid bg-transparent text-dark">
            <div class="container">
                <h1 class="display-5">Request detailed information</h1>
                <p class="lead">Schedule a call or appointment.  We will call you to confirm date and time.</p>
            </div>
        </div>
    </div>
</header>

<main class="mb-5">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="mb-3 text-right">
                    <?php
                        if(isset($_SESSION['user_data'])) {
                            echo "<a href='viewAll.php' class='btn btn-success'>Appointments</a> ";
                            echo "<a href='profile.php' class='btn btn-primary'>Profile</a> ";
                            echo "<a href='logout.php' class='btn btn-danger'>Log out</a>";
                        } else {
                            echo "<a href='login.php' class='btn btn-success'>Login</a>";
                        }
                    ?>

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="cart-title text-center">Request information</h5>
                            <hr>
                            <label for="">Hours available</label>
                            <p>
                                <?php
                                    $times = getTimes();
                                    foreach($times as $t){
                                        if($t['start_time'] == ''){
                                            echo "<strong style='width:100px; display:inline-block; text-align:right'>{$t['day']}:</strong> Not available";
                                        } else {
                                            echo "<strong style='width:100px; display:inline-block; text-align:right'>{$t['day']}:</strong> {$t['start_time']} to {$t['end_time']}<br>";
                                        }
                                    }
                                ?>
                            </p>
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
                            <form action="partials/process.php" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="" placeholder="Full Name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Date (Click to select)</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="date" id="date" onchange="loadTimes()" class="form-control" required placeholder="Pick a date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <select name="time" id="time" class="form-control" required>
                                            <option selected>Pick a date first</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Purpose</label>
                                    <div class="col-sm-10 mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="purpose[]" type="checkbox" id="inlineCheckbox1" value="Llamada">
                                            <label class="form-check-label" for="inlineCheckbox1">Call</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="purpose[]" type="checkbox" id="inlineCheckbox2" value="Cita">
                                            <label class="form-check-label" for="inlineCheckbox2">Appointment</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="purpose[]" type="checkbox" id="inlineCheckbox3" value="Otro">
                                            <label class="form-check-label" for="inlineCheckbox3">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">More details (Optional)</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" placeholder="Write here..."></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="add_appointment" class="btn btn-secondary offset-sm-2">Send</button>
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
