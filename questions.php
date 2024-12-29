<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions/Reponses</title>
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



  <style>
  body {
   font-family: Arial, sans-serif;
   font-size: 16px;
   line-height: 2;
  }

  h2 {
   margin-top: 30px;
   margin-bottom: 10px;
   font-size: 20px;
   font-weight: bold;
   cursor: pointer;
  }

  p {
   margin-top: 0;
   margin-bottom: 20px;
   display: none;
   font-size: 18px;
  }

  p.show {
   display: block;
  }



  .survey {
  margin-bottom: 20px;
  text-align: center;
}
.survey form {
  display: inline-block;
}

.survey label {
  
  display: inline-block;
  margin-right: 50px;
}

.survey button {
  display: block;
  margin-top: 10px;
  background-color: blue;
  color: yellow;
 
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
        <li><a href="accueil.php">Accueil</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="activites.php">Activites</a></li>
          <li><a href="conseil.php">Conseils</a></li>
          <li><a href="motivations.php">Motivations</a></li>
          <li><a href="aboutus.php">A propos de nous</a></li>
          <li><a href="questions.php" class="active">Des questions?</a></li>

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

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/aile.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Questions/Reponses</h2>
        <ol>
            <li><a href="questions.php">ChrisTravelAgence</a></li>
            <li>C'est nous</li>
        </ol>

      </div>
    </div>

<ul>
    <h2><li>Vais-je recevoir une recompense si je voyage plusieurs fois avec ChrisTravelAgence ?</li></h2>
 <p>Oui bien evidemment.En tant que client fidele vous meritez une recompense. Si les voyages ont ete effectues dans le pays de residence 10 fois, vous beneficiez d'un billet aller-retour plus un depot taxi aller. Si vous voyagez 5 fois hors du pays, l'agence vous paye un bagage en soute supplementaire. </p>

 <h2><li>Le service est ouvert 24h/24h ?</li></h2>
 <p>Non, mais si vous avez une urgence veuillez nous contacter exclusivement a ce numero +237 677 000 777.</p>

 <h2><li>Que faire si je n'ai pas obtenu une reponse apres 1semaine ?</li></h2>
 <p>Si apres une semaine vous n'avez pas obtenu une reponse, nous ne pouvons malheureument pas vous emmener a votre destination. Votre reservation sera automatiquement supprimee de notre base de donnees.</p>

 <h2><li>Peut-on voyager avec beaucoup d'argent dans la carte ?</li></h2>
 <p>Oui, mais pour toute somme superieure a 3000 euros vous devez la declarer.</p>

 <h2><li>Avez-vous une agence physique ?</li></h2>
 <p>Non, pas pour le moment.</p>

 <h2><li>Le site est-il securise ?</li></h2>
 <p>Oui, notre site web est protege et une tierce personne ne peut voler vos informations personnelles.</p>

 <h2><li>Quels sont les avis des clients sur le site web ?</li></h2>
 <p>Les avis des clients sur le site web de voyage peuvent être consultés en ligne sur des sites d'avis ou sur le site web de voyage lui-même. Il est important de lire les avis des clients pour se faire une idée de la qualité des services proposés par le site web.</p>

 <h2><li>Comment réserver un voyage  ?</li></h2>
 <p>Pour réserver un voyage sur le site , il est généralement possible de le faire en ligne en suivant les instructions spécifiques du site web.</p>
 
 <h2><li>Quels sont les prix proposés par le site web de voyage ?</li></h2>
 <p>Les prix proposés par le site web de voyage varient en fonction de plusieurs facteurs, tels que la destination, la durée du voyage, le type de voyage, etc. Il est important de consulter le site web pour connaître les prix proposés pour un voyage spécifique.
</p>

 <h2><li>Quelles sont les destinations proposées par le site web ?</li></h2>
 <p>Le site web de voyage peut proposer des destinations dans le monde entier ou se concentrer sur des régions spécifiques. Il est important de consulter le site web pour connaître les destinations proposées.
</p>

 <h2><li>Comment contacter le site web de voyage en cas de besoin ?</li></h2>
 <p>Pour contacter le site web de voyage en cas de besoin, il est généralement possible de le faire en utilisant le formulaire de contact disponible sur le site web ou en envoyant un e-mail à l'adresse indiquée sur le site.</p>
 

 <h2><li>Peut-on annuler ou modifier le sejour si necessaire ?</li></h2>
 <p>Oui, vous pouvez le faire si et seulement si les billets et reservations n'ont pas deja ete effectues.</p>

 <h2><li>Faudra-t-il payer des frais supplementaires en cas de modification ou d'annulation ?</li></h2>
 <p>Oui, 10% de la somme sera prelevee du montant initial.</p>
            </ul>
           

 <script>
  var questions = document.querySelectorAll('h2');

  for (var i = 0; i < questions.length; i++) {
   var question = questions[i];

   question.addEventListener('click', function() {
    var answer = this.nextElementSibling;

    if (answer.classList.contains('show')) {
     answer.classList.remove('show');
    } else {
     answer.classList.add('show');
    }
   });
  }
 </script>
    
    <?php
// Code PHP pour traiter les données du formulaire d'inscription et de connexion
?>
















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
            
              <strong>Lieu :</strong> Mvan, Yaoundé Cameroun <br>
              <strong>Phone:</strong> +237 677 007 007<br>
              <strong>Email:</strong> TravelAgence1@gmail.com<br>
            

          </div>

        </div>
      </div>
    </div>
<div class="survey">
  <h2>Que pensez-vous de notre site web ?</h2>
  <form>
    <strong>
    <input type="radio" name="rating" value="5" id="rating-5">
    <label for="rating-5">Excellent</label>
    <input type="radio" name="rating" value="4" id="rating-4">
    <label for="rating-4">Très bien</label>
    <input type="radio" name="rating" value="3" id="rating-3">
    <label for="rating-3">Bien</label>
    <input type="radio" name="rating" value="2" id="rating-2">
    <label for="rating-2">Moyen</label>
    <input type="radio" name="rating" value="1" id="rating-1">
    <label for="rating-1">Mauvais</label>
    <button type="submit">Envoyer</button>
    </strong>
  </form>
</div>



<script>
  // Code JavaScript pour envoyer les données du sondage à un serveur
// et afficher un message de remerciement

const form = document.querySelector('.survey form');
form.addEventListener('submit', (event) => {
  event.preventDefault();
  const rating = form.querySelector('input[name="rating"]:checked');
  if (rating) {
    const value = rating.value;
    // Code pour envoyer la valeur du sondage à un serveur
    form.innerHTML = 'Merci pour votre évaluation !';
  }
});

</script>


    
  

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