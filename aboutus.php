<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ChrisTravelAgence</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="aboutus.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <?php
              session_start();
              if (isset($_SESSION['type'])) { 
                echo "<li><a href='accueil.php'>Accueil</a></li>";
                echo "<li><a href='reservation.php'>Reservation</a></li>";
                echo "<li><a href='activites.php'>Activites</a></li>";
                echo "<li><a href='conseil.php'>Conseils</a></li>";
                echo "<li><a href='motivations.php'>Motivations</a></li>";
              } else {
                echo "<li><a href='inscription.html'>Inscription</a></li>
                <li><a href='connexion.html'>Connexion</a></li>

                ";
              }
          ?>
          <li><a href="aboutus.php"  class="active">A propos de nous</a></li>
          <?php
          if (isset($_SESSION['type'])) { 
              if ($_SESSION['type'] == 1) { 
                echo "<li><a href='admin.php'>Administrateur</a></li>";
              }}
          ?>
          <li><a href="questions.php">Des questions?</a></li>
          <li><a href="php/logout.php">Deconnexion</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>A propos de Nous</h2>
        <ol>
          <li><a href="aboutus.php">ChrisTravelAgence</a></li>
          <li>C'est nous</li>
        </ol>

      </div>
    </div>
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos Services</h2>

        </div>

        <div class="row gy-5">
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="reservation.php" class="stretched-link">Reservation</a></h4>
              <p class="description">Reservez votre place dans notre agence.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Suivi</a></h4>
              <p class="description">Verifiez si votre reservation a été approuvée</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="conseil.php" class="stretched-link">Conseil</a></h4>
              <p class="description">Faites vous encadrer par des experts du domaine</p>
            </div>
          </div>
          

        </div>

      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">
        <div class="section-header">
          <h2>CONTACTEZ NOUS</h2>

        </div>
        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>Mvan, Yaoundé Cameroun </p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>christellentonga1@gmail.com</p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Phone:</h4>
                <p>+237 674 70 75 34</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <!--alert messages start
    <div class= "my-3">
    <span>Message sent! Thank you for contacting us.</span>

</div>
<div class="alert-error">
    <span>Something went wront! Please try again.</span>
</div>
alert messages end-->

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Envoyer le Message</button></div>
              <!--alert messages start
    <div class= "my-3">
      <div class="loading">Loading</div>
      <div class="sent-message">
    <span>Message sent! Thank you for contacting us.</span>

</div>
<div class="alert-error">
    <span>Something went wront! Please try again.</span>
</div>
alert messages end-->
              
            </form>

          </div>

        </div>

      </div>
    </section>

    <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>ChrisTravelAgence</span>
            </a>
            <p>Rejoignez nous sur tous nos réseaux sociaux</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="Twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="Facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="Instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="Linkedln"><i class="bi bi-linkedln"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nos Partenaires</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Camair-Co</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Garanti Express</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">United Express</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Fly Emirates</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Reservation</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Suivi</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Conseils</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Motivations</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Nous Contacter</h4>
            <p>
              <strong>Lieu :</strong> Mvan, Yaoundé Cameroun <br>
              <strong>Phone:</strong> +237 677 007 007<br>
              <strong>Email:</strong> TravelAgence1@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Travel WEBSITE</span></strong>. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="">US</a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
  </body>
  
  </html>