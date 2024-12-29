
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
  <link href="assets/css/style.css" rel="stylesheet">




  <style>


.destinations {
  max-width: 1050px;
  margin: 0 auto;
}

.destinations h2 {
  font-size: 3em;
  text-align: center;
  margin-bottom: 30px;
}

.destinations ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  list-style: none;
  padding: 20;
}

.destinations li {
  width: 30%;
  margin-bottom: 70px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  overflow: hidden;
}

.destinations img {
  width: 110%;
  height: 200px;
  object-fit: cover;
}

.destinations h3 {
  font-size: 4;
  margin: 15px;
}

.destinations p {
  margin: 15px;
  line-height: 2;
}


.container {
  max-width: 1050px;
  margin: 0 auto;
}

.container img{
  width: 100%;
  height: 450px;
  object-fit: cover;
}
.container p{
  margin: 15px;
  line-height: 2.2;
}

 </style>




</head>

<body class="page-index">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="conseil.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">ChrisTravelAgence</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="accueil.php">Accueil</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="activites.php">Activites</a></li>
          <li><a href="conseil.php" class="active">Conseils</a></li>
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

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/corse.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

  
        <h2>Des conseils pour vos voyages</h2>
        <ol>
            <li><a href="conseil.php">ChrisTravelAgence</a></li>
            <li>C'est nous</li>
        </ol>

      </div>
    </div>

    


<div class="container">
<ol>
  <h2><strong><li>Bien choisir sa période de vacances</li></strong></h2>
  <img src="assets/img/top.jpg" alt="Motivation">
  <p>Même si cette suggestion vous semble évidente, elle présente néanmoins quelques interrogations. Quand partir en vacances? En fonction de vos congés vous réserverez peut être votre billet longtemps à l avance, vous n aurez plus la possibilité de modifier les dates après l achat (sauf si vous prenez une option). Un de mes conseils pour voyager est de partir hors saison, lorsque cela vous est possible pour éviter la foule et ainsi faire des économies. En hautes saisons, avec les fortes demandent les prix augmentent pour tout.
La durée de vos vacances conditionnera aussi la destination, pour un week-end vous choisirez probablement une ville ou un pays proche avec un trajet court, histoire de ne pas passez son temps dans un bus ou un aéroport. Pour une semaine, un voyage en Europe ? Et pour plusieurs semaines une destination plus lointaines ! </p>
  
  <h2><strong><li>Vérifier la validité de ses papiers d'identités - le plus important des conseils pour voyager</li></strong></h2>
  <img src="assets/img/pass.jpg" alt="Motivation">
  <p>Le conseil plus important avant de partir voyager ! Voici une étape à laquelle nous ne pensons pas souvent avant d'acheter ses billets pour un voyage, et pourtant sans papiers d'identités valides, tout déplacement sera compromis ! Alors en tout premier lieu, jeter un coup d'œil à la validité de vos papiers d'identités et/ou de vos passeports. Certains pays demandent, par exemple, un passeport avec une validité de 6 mois après la date de votre retour.
Les papiers d'identités valables pour voyager sont:
<ul>
<li>La carte national d'identité (CNI) nécessaire en Europe.</li>
<li>Le passeport pour les autres pays du monde.</li>
            </ul>
Les délais pour créer et recevoir ses papiers d'identités peuvent être long surtout avant les périodes de vacances scolaires. Avant de partir en voyage vérifier vos papiers !</p>

<h2><strong><li>Choisir une destination de voyage</li></strong></h2>
  <img src="assets/img/prive.jpg" alt="Motivation">
  <p>La destination de voyage est à associer avec les dates de vos vacances, je choisi d'abord le mois durant lequel je vais voyager puis la destination en fonction de la météo et de la saison. Dommage de partir en Thailande lors de la mousson, ou en pleine saison touristique, documentez-vous sur la météo et la saison du pays que vous avez choisi.
La destination est à choisir en fonction de vos attentes, envie de soleil et de plage en hiver ? Vous irez surement dans l'hémisphère opposé au votre ! Le temps de trajet sera donc plus conséquent, à cela s'ajoutera les escales pour les pays lointains.
Le budget de voyage est à prendre en considération car des pays comme l'Islande ou le Costa Rica sont très chers et vont limiter vos activités pour des voyageurs à petits budgets. Au contraire, partir dans certains pays à plus faible pouvoir d'achat que le notre, comme la Thaïlande, vous permettra de voyager avec plus de confort.</p>

  <h2><strong><li>Quels vaccins pour voyager ?</li></strong></h2>
  <img src="assets/img/va.jpg" alt="Motivation">
  <p>Lorsque vous aurez choisi votre destination, il y a des vaccins obligatoires selon les pays à faire, éventuellement des protections particulières à prendre ou des traitements préventifs comme pour les zones à paludismes. Toutes ces informations sont disponibles sur le site du gouvernement. Je prends connaissances de toutes ses informations avant de partir en voyage pour choisir ma destination.</p>

  <h2><strong><li>Acheter son billet d'avion, de train, de bus</li></strong></h2>
  <img src="assets/img/bi.jpg" alt="Motivation">
  <p>Après ses 4 étapes, et seulement après, j'achète mon billet de transport pour ma prochaine destination de voyage. Je compare les différentes offres, promotions et compagnies principalement sur internet pour choisir un moyen de transport le plus responsable et le moins cher pour un voyage à petit budget.
Lors de l'achat de vos billets, vérifier bien l'orthographe de votre nom et prénom, ils doivent correspondre exactement à ceux inscrits sur vos papiers d'identités. Une faute de frappe est vite arrivée, ayant pour conséquence que l'embarquement vous sera refuser le jour de votre voyage.</p>

  <h2><strong><li>Ajoutez des bagages et d'autres options</li></strong></h2>
  <img src="assets/img/pre.jpg" alt="Motivation">
  <p>N'oubliez pas de vérifier si votre billet de transport contient vos bagages à la dimension que vous souhaitez. En train ou en avion certaines compagnies facturent le bagage supplémentaire ou la valise en soute. Pensez à les ajouter lors de la réservation de votre billet. Vérifiez aussi les dimensions acceptés des bagages, ceux-ci différent d'une compagnie à l'autre.</p>

  <h2><strong><li>Penser à avoir une assurance</li></strong></h2>
  <img src="assets/img/as.jpg" alt="Motivation">
  <p>Selon le type de carte bleue que vous possédez, une assurance voyage basique est incluse, c’est le cas de la Visa Premier. C’est bien pratique quand on ne part pas longtemps. Mais cette assurance ne couvre pas les voyages de plus de 3 mois en général (à vérifier dans les conditions), et elle ne concerne généralement que les bagages et le rapatriement.</p>

  <h2><strong><li> Éventuellement réserver la première nuit d'hôtel</li></strong></h2>
  <img src="assets/img/sejour.jpg" alt="Motivation">
  <p>Pour des questions pratiques et de sécurité, je réserve souvent la première nuit du voyage. Car après l'acheminement à destination, l'arrivée de nuit ou le décalage horaire, vous allez être fatigué. Le fait aussi d'arrivée dans une capitale, les logements sont plus cher et peuvent être complet. Pour le reste du voyage, je ne planifie pas ou très rarement en fonction de la destination.</p>

  <h2><strong><li>Faire ses bagages et bagages cabine</li></strong></h2>
  <img src="assets/img/cabine.jpg" alt="Motivation">
  <p>Un autre conseil pour voyager sereinement est de commencer à réfléchir à sa valise, en fonction du climat, et des activités prévues tout en gardant un œil sur la météo. Et surtout ne pas trop se charger. Préparer son bagage cabine, peut nécessiter du temps à cause des mesures de sûreté sur les liquides en cabine.
Les liquides et crèmes devront être présentés au contrôle de sécurité dans un sac en plastique transparent fermé. Comme un sac de congélation d'une contenance d'un litre, chaque contenant doit être inférieur à 100 ml chacun.
Vérifiez également que dans vos sacs vous n'emportez pas d'objets interdits en cabine et en soute, le grand classique sont les ciseaux à ongles, ou le couteau suisse.
Pensez à l'adaptateur de prise de courant.</p>

  <h2><strong><li>Préparer ses devises avant de partir en voyage</li></strong></h2>
  <img src="assets/img/les.jpg" alt="Motivation">
  <p>Un autre point à regarder, c'est la devise du pays et le taux de change avec l'euro.
Pour ma part, je voyage avec ma carte de retrait et je retire régulièrement des espèces dans des distributeurs automatiques, pour ne pas voyager avec de grosses sommes d'argents. Des frais bancaires vous seront facturés mais je l'inclus dans mon budget.
Le montant des retraits par carte bancaire est limité à une certaine somme par semaine. Renseignez-vous auprès de votre banque avant le départ et informez-la de votre voyage, certaines banques bloquent les retraits dans des pays étrangers en cas de soupçon de vol.</p>  
            </ol>
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