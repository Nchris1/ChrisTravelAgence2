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
  .gallery {
    display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  }


.gallery-item {
  position: relative;
  flex: 1 0 300px;
  margin: 10px;
  overflow: hidden;
}

.gallery-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: transform 0.3s ease-in-out;
  border-radius: 8px;
}

.gallery-item:hover img {
  transform: scale(1.2);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  opacity: 0;
  transition: opacity 0.2s ease-in-out;
}

.gallery-item:hover .overlay {
  opacity: 1;
}

.overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  font-size: 1.2rem;
  font-weight: bold;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.9);
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 1200px;
  max-height: 90%;
  object-fit: contain;
}

.close {
  position: absolute;
  top: 20px;
  left: 10px;
  color: white;
  font-size: 3rem;
  font-weight: bold;
  cursor: pointer;
}

.close:hover {
  color: red;
}

</style>



  
</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="motivations.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
      <ul>
        <li><a href="accueil.php">Accueil</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="activites.php">Activites</a></li>
          <li><a href="conseil.php">Conseils</a></li>
          <li><a href="motivations.php" class="active">Motivations</a></li>
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

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/cre.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

  
        <h2>Motivez-Vous</h2>
        <ol>
            <li><a href="motivations.php">ChrisTravelAgence</a></li>
            <li>C'est nous</li>
        </ol>

      </div>
    </div>

    
    <div class="gallery">
    <div class="gallery-item">
    <img src="assets/img/n.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/m.jpeg" alt="Motivation 1 - Travail d'équipe">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>
  <div class="gallery-item">
    <img src="assets/img/3.jpg" alt="Motivation 2 - Dépassement de soi">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>
  <div class="gallery-item">
    <img src="assets/img/be.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>
  

  <div class="gallery-item">
    <img src="assets/img/mm.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/10.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/4.png" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/03.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/ci.png" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/00.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/000.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/01.png" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/02.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/0.png" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>


  <div class="gallery-item">
    <img src="assets/img/08.png" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/07.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>


  <div class="gallery-item">
    <img src="assets/img/11.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/mar.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/777.jpeg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

  <div class="gallery-item">
    <img src="assets/img/004.jpg" alt="Motivation 3 - Persévérance">
    <div class="overlay">
      <div class="overlay-text">Cliquez pour agrandir</div>
    </div>
  </div>

            </div>


<div class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modal-image">
  <div id="caption"></div>
</div>




<script>
  // Ouvre la modal et affiche l'image cliquée
var modal = document.querySelector(".modal");
var modalImage = document.getElementById("modal-image");
var captionText = document.getElementById("caption");
var galleryItems = document.querySelectorAll(".gallery-item");

galleryItems.forEach(function(item) {
  item.addEventListener("click", function() {
    modal.style.display = "block";
    modalImage.src = this.querySelector("img").src;
    captionText.innerHTML = this.querySelector("img").alt;
  });
});

// Ferme la modal lorsque l'utilisateur clique sur X
var closeButton = document.querySelector(".close");

closeButton.addEventListener("click", function() {
  modal.style.display = "none";
});

// Ferme la modal lorsque l'utilisateur clique en dehors de l'image
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

// Zoom sur l'image
var zoomedIn = false;

modalImage.addEventListener("click", function() {
  if (zoomedIn) {
    modalImage.style.transform = "scale(1)";
    zoomedIn = false;
  } else {
    modalImage.style.transform = "scale(2)";
    zoomedIn = true;
  }
});
</script>





































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




























