<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="At Dyna Solutions Mechanical Services we are a reliable solution for industrial mechanical services in a variety of business.">
  <meta name="keywords" content="Industrial Mechanical Services">
  <meta name="author" content="dynasolutionsmechanics.com">
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="button.css">
  <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href=img/favicon.png>
  <title>Dyna Solutions Mechanical Services</title>

  <style>
    body {
      background-color: white;
    }

    .container {
      max-width: 760px;
    }

    span {
      color: #d60000;
    }

    .contact-form {
      background-position: center;
      background-size: cover;
      border-radius: 5px;
    }
  </style>

</head>

<body>

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

  <!-- Jumbotron showcase -->
  <section class="contact-header">
      <div class="contacto__display__picture">
        <div class="container contacto__display__text">
          <h1>Any questions?</h1>
          <p class="text-white mt-3">To schedule an appointment click the button</p>
          <a class="btn btn-color__2 mt-3" href="booking.php">Schedule it now</a>
          
        </div>
      </div>
    </section>
  <!-- Jumbotron showcase ends-->



  <!-- content start -->
  <section class="container">
    <h1 class="welcome-text mt-5">
      <strong>We have answers</strong>
    </h1>
    <h2 class="text-dark mt-5">Ask us any questions</h2>
    <p class="lead mt-5">If you have questions regarding our mechanical services, let us know by filling out the information below.  One of our agents will reply your inquiry as soon as possible.</p>
  </section>

  <div class="container mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form text-light mt-5 px-4 py-5">
          <h3 class="text-center mb-3">Contact form</h3>
          <div class="text-center">
            <?php
                      
                      if(isset($_SESSION['msg'])){
                          echo $_SESSION['msg'];
                          unset($_SESSION['msg']);
                      } else if(isset($_SESSION['msgFields'])){
                          echo $_SESSION['msgFields'];
                          unset($_SESSION['msgFields']);
                      }
                      
                      ?>
          </div>
          <form action="SendGrid-API/f_process.php" method="post">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="Name">Name
                  <span>*</span>
                </label>
                <input type="text" name="name" class="form-control bg-dark text-white">
              </div>
              <div class="form-group col-md-6">
                <label for="Phone">Phone
                  <span>*</span>
                </label>
                <input type="text" name="phone" class="form-control bg-dark text-white">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="Email">Email
                  <span>*</span>
                </label>
                <input type="text" name="email" class="form-control bg-dark text-white">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label for="Name">Message
                  <span>*</span>
                </label>
                <textarea name="message" id="" cols="30" rows="5" class="form-control bg-dark text-white"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-dark">Send questions</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- footer start -->
  <footer class="footer text-white bg-dark pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="text-white col col-12 col-md-4">
            <h5>
              <strong>Navigation</strong>
            </h5>
            <a class="text-white" href="index.html">Home</a>
            <br>
            <a class="text-white" href="servicios.html">Services</a>
            <br>
            <a class="text-white" href="contact.php">Contact</a>
            <br>
            <br>
          </div>
          <div class="text-white col col-12 col-md-4">
            <h5>
              <strong>Contact #1</strong>
            </h5>
            <a class="text-white" href="mailto:antoniogomez@yahoo.com">Email Antonio</a>
            <br>
            <a class="text-white" href="tel:3012634991">Call Antonio</a>
            <br>
          </div>
          <div class="text-white col col-12 col-md-4">
            <h5>
              <strong>Contact #2</strong>
            </h5>
            <a class="text-white" href="mailto:antoniogomez@yahoo.com">Email Fernando</a>
            <br>
            <a class="text-white" href="tel:2022881554">Call Fernando‬</a>
            <br>
          </div>
        </div>
      </div>
  
      <section class="emergency">
        <div class="container">
          <p class="lead text-danger">For emergencies regarding our services please call
            <br>
            <a class="text-white text-center" href="tel:2022881554">(202) 288-1554‬</a>
          </p>
        </div>
      </section>
  
      <div class="container">
        <div class="row">
          <div class="col col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7605837138326!2d-77.3049136846453!3d39.04357787954836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6314c1c3657a5%3A0xdd5f047b6ea69e9d!2s2+Jefferson+Run+Rd%2C+Great+Falls%2C+VA+22066!5e0!3m2!1sen!2sus!4v1527615737242"
              width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="col col-12 col-md-12 mt-2 mb-2">
              <h5>
                <strong>We appreciate your business</strong>
              </h5>
              <p id=pfooter>
                <a class="text-white" href="contact.php">Call or contact us.</a>
              </p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-copyright">
        <div class="container">
          © 2018 All right reserved
          <a class="text-white" href="index.html">Dyna Solutions Mechanical Services</a>
        </div>
      </div>
    </footer>
    <!-- footer ends -->

  <!-- back to top button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-arrow-up"></i>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- back to top button ends -->

</body>

<!-- bootstrap jquery plugins -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- bootstrap jquery plugins ends-->

<!-- Forked toggler button -->
<!-- <script>
  $(document).ready(function(){
    $('.navbar-toggler').html('<i class="fa fa-chevron-circle-down"></i>');
  })
</script> -->

</html>