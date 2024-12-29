<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activites</title>
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
  <link href="assets/css/style.css" rel="stylesheet">




<style>
    .activities {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 50px;
  justify-content:space-between;
  
}


.activity {
  position: relative;
  flex: 1 0 300px;
  margin: 20px;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out;
}

.activity:hover {
  transform: scale(1.05);
  

}

.activity img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  
  
}

.activity-details {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
}

.activity-details h3 {
  margin: 0;
  font-size: 1.5rem;
}

.activity-details p {
  margin: 0;
  font-size: 0.8rem;
}



</style>








  
</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="activites.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
      <ul>
        <li><a href="accueil.php" >Accueil</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="activites.php" class="active">Activites</a></li>
          <li><a href="conseil.php">Conseils</a></li>
          <li><a href="motivations.php">Motivations</a></li>
          <li><a href="aboutus.php">A propos de nous</a></li>
          <li><a href="questions.php">Des questions?</a></li>
          <?php
             session_start();
             if ($_SESSION['type'] == 1) {
               echo "<li><a href='admin.php'>Administrateur</a></li>";
             }
           ?>
         <li><a href="php/logout.php">Deconnexion</a></li>
        </ul>
      </nav>
    </div>
  </header>




  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/Fotolia.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

  
        <h2>Activités à faire pendant votre voyage</h2>
        <ol>
            <li><a href="activites.php">ChrisTravelAgence</a></li>
            <li>C'est nous</li>
        </ol>

      </div>
    </div>

    
    
<div class="activities">
    
  <div class="activity">
    <img src="assets/img/ra.jpg" alt="Randonnée en montagne">
    <div class="activity-details">
      <h3>Randonnée en montagne</h3>
    </div>
  </div>
  <div class="activity">
    <img src="assets/img/cam.jpeg" alt="Visite de monuments historiques">
    <div class="activity-details">
      <h3>Visite de monuments historiques</h3>
    </div>
  </div>
  <div class="activity">
    <img src="assets/img/aus.jpg" alt="Plongée sous-marine">
    <div class="activity-details">
      <h3>Plongée sous-marine</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/tan.jpg" alt="Faire du saut en tandem">
    <div class="activity-details">
      <h3>Faire du saut en tandem</h3>
    </div>
  </div>
  


  <div class="activity">
    <img src="assets/img/cu.jpg" alt="Visiter les lieux de cultes">
    <div class="activity-details">
      <h3>Visiter les lieux de cultes</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/eg.jpg" alt="Faire de la Montgolfière">
    <div class="activity-details">
      <h3>Faire de la Montgolfière</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/raft.jpg" alt="Rafting">
    <div class="Rafting">
      <h3>Plongée sous-marine</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/pict.jpg" alt="Faire des photos">
    <div class="activity-details">
      <h3>Faire des photos</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/best.jpg" alt="La lecture d'un bon livre">
    <div class="activity-details">
      <h3>La lecture d'un bon livre</h3>
    </div>
  </div>
  
  

  <div class="activity">
    <img src="assets/img/course.jpg" alt="Faire du sport">
    <div class="activity-details">
      <h3>Faire du sport</h3>
    </div>
  </div>
  

  <div class="activity">
    <img src="assets/img/port.jpg" alt="Se detendre sur la plage">
    <div class="activity-details">
      <h3>Se detendre sur la plage</h3>
    </div>
  </div>
  
  <div class="activity">
    <img src="assets/img/surf.jpg" alt="Faire du surf">
    <div class="activity-details">
      <h3>Faire du surf</h3>
    </div>
  </div>

</div>












































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

















