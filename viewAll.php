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
                    <h1 class="display-5">Calls and appointments</h1>
                </div>
                    <p class="lead">Clients that have request a call or appointment.</p>
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
                <div class="col-lg-10 offset-lg-1">
                    <div class="mb-3 text-right">
                        <a href="booking.php" class="btn btn-success">Home</a>
                        <a href="profile.php" class="btn btn-primary">Profile</a>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="cart-title">Details</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hove table-bordered text-center table-responsive-md">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Appointment Date</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Purpose</th>
                                    </tr>
                                        <th scope="col">Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $appointments = getAppointments();
                                        $i = 1;
                                        foreach($appointments as $a) {
                                            echo "<tr>
                                                    <th scope='row'>{$i}</th>
                                                    <td>{$a['name']}</td>
                                                    <td>{$a['email']}</td>
                                                    <td>" . date('M d, Y', $a['date']) . " at {$a['time']}</td>
                                                    <td>";

                                                foreach($a['purpose'] as $p) {
                                                    echo "$p, ";
                                                }

                                              echo "</td>
                                                    <td>{$a['description']}</td>
                                                    <td>
                                                        <a href='#' class='btn btn-sm' title='delete-appointment' data-toggle='modal' data-target='#exampleModal{$a['id']}'><i class='fas fa-trash-alt'></i></a>
                                                    </td>
                                                </tr>";
                                            $i++;
                                            
                                            ?>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure, this can't be undo.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                        <a href="partials/process.php?d=<?php echo $a['id'] ?>" class="btn btn-success">Yes</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        }
                                    ?>
                                </tbody>
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