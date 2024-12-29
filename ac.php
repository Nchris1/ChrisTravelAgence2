<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
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


    .container {
  max-width: 800px;
  margin: 0 auto;
}


.header img {
  width: 100%;
  max-height: 400px;
}

.image-container {
  display: flex;
  justify-content: space-between;


}

.image-container img {
  width: 35%;
  height: auto;
  cursor: pointer;
  border-radius: 8px;
  margin-bottom: 70px;
  margin-right: 270px;
  margin-left: -260px;
}

.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

.modal-content {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 80%;
  max-height: 80%;
  
}

.modal-content img {
  width: 100%;
  height: auto;
}

.close {
  color: #fff;
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  font-weight: bold;
  cursor: pointer;
}



  </style>
  
</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="accueil.php" class="active">Accueil</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="aboutus.php">A propos de nous</a></li>
          <li><a href="conseil.php">Conseils</a></li>
          <li><a href="questions.php">Des questions?</a></li>
          <?php
              session_start();
              if ($_SESSION['type'] == 1) {
                echo "<li><a href='admin.php'>Administrateurr</a></li>";
              }
            ?>
          <li><a href="php/logout.php">Se deconnecter</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/Fotolia.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

  
        <h2>Accueil</h2>
        <ol>
            <li><a href="index.html">ChrisTravelAgence</a></li>
            <li>C'est nous</li>
        </ol>

      </div>
    </div>

    
    <div class="destinations">
  <h2><strong>Voici les meilleures destinations de l'année</strong></h2>
  <h4><p>Explorez les destinations les plus populaires de l'année avec nous.</p></h4>
  <ul>

  <?php
      $destinations = array(
        array('nom' => 'Paris,France', 'image' => 'paris.jpg', 'description' => 'La ville lumière. Une grande ville artistique, de la mode, de la gastronomie et de la culture.'),
        array('nom' => 'Jerusalem,Israel', 'image' => 'israel.jpg', 'description' => 'La Terre Sainte. Visitez le mur des lamentations, baignez vous et faites de nouvelles rencontres.'),
        array('nom' => 'Cancun, Mexique', 'image' => 'cancun.jpg', 'description' => 'La flore et la faune du Mexique sont très riches et hautement diversifiées. Les plages mexicaines sont toujours animées.'),
        array('nom' => 'Baleng,Cameroun', 'image' => 'pet.jpg', 'description' => 'Encore appelé le lac Sabichi, il est situé dans la région de l’ouest, dans le village Baleng à environ 6 kilomètres de la ville de Bafoussam. C’est un lieu sacré où se déroule le plus souvent les cérémonies traditionnelles de tout genre.'),
        array('nom' => 'Nkongsamba', 'image' => 'lac.jpg', 'description' => 'Lac Manengouba au pied du mont Manengouba dans la ville de Nkongsamba, chef-lieu du département du Moungo, on retrouve deux lacs: le lac mâle et le lac femelle.'),
        array('nom' => 'Ngaoundere', 'image' => 'Mosquee.jpg', 'description' => 'La mosquee de Ngaoundere site touristique que vous devez absolument visiter au cameroun.'),
        array('nom' => 'New York,USA', 'image' => 'new.jpg', 'description' => 'La ville qui ne dort jamais.'),
        array('nom' => 'Rome, Italie', 'image' => 'rome.jpg', 'description' => 'La destination de luxe qui ne vous laissera pas indifferent.'),
        array('nom' => 'Londres, Royaume Uni', 'image' => 'big.jpg', 'description' => 'La ville du brouillard. Plus de 200 attractions gratuits pour les voyageurs.'),
        array('nom' => 'Dubai,Emirats Arabe', 'image' => 'dubai.jpg', 'description' => 'Pour les amoureux de sensations fortes, aventures et shopping.'),
        array('nom' => 'Tokyo, Japon', 'image' => 'japon.jpg', 'description' => 'Découvrez la culture fascinante du Japon, entre temples, jardins zen et gastronomie raffinée.'),
        array('nom' => 'Rio de Janeiro, Brésil', 'image' => 'rio.jpg', 'description' => 'Le Christ Redempteur attire les foules sur le mont Corcovado.'),
        array('nom' => 'Berlin,Allemagne', 'image' => 'berlin.jpeg', 'description' => 'La ville qui a plusieurs facettes.'),
        array('nom' => 'San Jose,Costa rica', 'image' => 'rica.jpg', 'description' => 'Explorez la nature luxuriante du Costa Rica, entre forêts tropicales, volcans et plages de sable noir'),
        array('nom' => 'Barcelone, Espagne', 'image' => 'barcelone.jpg', 'description' => 'La ville qui a su conserver son heritage.'),
        array('nom' => 'Bangkok,Thailande', 'image' => 'thai.jpeg', 'description' => 'Découvrez les temples bouddhistes, les plages paradisiaques et la cuisine thaïlandaise.'),
        array('nom' => 'Bali, Sud indonesie', 'image' => 'bali.jpg', 'description' => 'Le paradis en Indonesie avec ses decors de carte postale.'),
        array('nom' => 'Andes peruviens,Perou', 'image' => 'machu.jpg', 'description' => 'Le Machu Picchu est une citadelle inca installée en hauteur, dans les montagnes des Andes, au Pérou, au-dessus de la vallée de la rivière Urubamba.'),
        array('nom' => 'Giseh,Egypte', 'image' => 'ist.jpg', 'description' => 'Gizeh est une ville égyptienne située sur la rive ouest du Nil, près du Caire.'),
        array('nom' => 'Victoria', 'image' => 'po.jpg', 'description' => 'Les chutes Victoria figurent parmi les cascades les plus spectaculaires au monde. A cheval entre la Zambie et le Zimbabwe.'),
        array('nom' => 'Yamoussoukro,Cote d ivoire', 'image' => 'ba.jpg', 'description' => 'La basilique Notre Dame de la Paix, cet incroyable édifice religieux est le plus grand au monde et est inspiré de la Basilique Saint Pierre de Rome.'),

        array('nom' => 'Reykjavik,Islande', 'image' => 'islande.jpg', 'description' => 'Explorez les paysages époustouflants islandais entre glaciers, volcans et aurores boréales.'),
        array('nom' => 'Marrakech, Maroc', 'image' => 'ma.jpg', 'description' => 'La medina est un endroit a ne pas manquer lors de votre visite. Laissez-vous emporter par la magie de cette ville intemporelle.'),
        array('nom' => 'Sydney,Australie', 'image' => 'australie.jpg', 'description' => 'Partez à la découverte de la faune et de la flore australienne, des plages de sable blanc et de la culture aborigène.'),
       
      );
      foreach ($destinations as $destination) {
    ?>

        <li>
          <img src="assets/img/<?php echo $destination['image']; ?>" alt="<?php echo $destination['nom']; ?>">
          <h3><?php echo $destination['nom']; ?></h3>
          <p><?php echo $destination['description']; ?></p>
        </li>
    <?php
      }
    ?>
  </ul>

</div> 



<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/verre.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>"J'ai fait un voyage organisé avec cette agence et j'ai été agréablement surpris par la qualité des prestations et l'organisation sans faille."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/is.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Témoignage de Jeanne</h5>
        <p>"J'ai voyagé avec cette agence et j'ai adoré ! Tout était parfaitement organisé et les guides étaient très professionnels."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/aile.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="inscription.html">Inscription</a></li>
          <li><a href="connexion.html">Connexion</a></li>
          <li><a href="aboutus.php">A propos de nous</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Redecouvrez une autre maniere de voyager avec nous !!!</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Reservez vos voyages et faites vous encadrer par des experts du domaine. Au service du bien-être camerounais.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="connexion.html" class="btn-get-started">Connectez-vous</a>
          </div>

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