<?php require 'Controller/delete_user_controller.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Nimbl</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/libraries/mdb.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!--Navbar -->
  <?php include 'Share/header_view.php'; ?>
  <!-- Dis-moi Nimbl bloc -->
  <div class="container my-5 z-depth-1">
    <section class="dark-grey-text">
      <div class="row pr-lg-5">
        <div class="col-md-7 mb-4">

          <div class="view">
            <img src="assets/img/kid-boy-thinking.jpg" class="img-fluid" alt="smaple image">
          </div>

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <div>

            <h1 class="font-weight-bold mb-4">Dis-moi Nimbl?</h1>
            <h5 class="font-weight-light font-italic mb-5">"Pourquoi le ciel est bleu?", "Peut-on voler?", "C'est quoi la pollution"</h5>
            <p>Ici, Nimbl répond aux questions que tu lui poses et démêle le vrai du faux entre science et fiction!</p>
            <p>N'hésites pas à poser tes questions sur le site et sur les réseaux sociaux! Nous feront tout notre possible pour y répondre!</p>

            <button type="button" class="btn btn-dark peach-gradient btn-rounded mx-0"><a href="View/dis-moi_view.php" id="dis-moi-btn">Voir les question</a></button>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Labo, quiz, blog cards -->
  <div class="container mt-5">
    <section class="mb-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

          <!-- Card -->
          <div class="card hoverable">
            <img class="card-img-top" src="assets/img/labo.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="View/labo_view.php" class="black-text text-center">Le labo</a>
              <p class="card-title text-muted font-small mt-3 mb-2">Viens visiter le labo et découvre des expériences scientifiques que tu peux reproduire à la maison!</p>
              <button class="btn btn-primary"><i class="fas fa-flask mr-2"></i><a href="View/labo_view.php" class="text-white">Le labo</a></button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

          <!-- Card -->
          <div class="card hoverable">
            <img class="card-img-top" src="assets/img/play.jpg" alt="Card image cap">

            <div class="card-body">

              <a href="#!" class="black-text">Quiz</a>

              <p class="card-title text-muted font-small mt-3 mb-2">Teste tes connaissances scientifiques en t'amusant et remporte des succès!</p>
              <button class="btn btn-primary"><i class="fas fa-puzzle-piece mr-2"></i><a href="View/quizz_view.php" class="text-white">Jouer</a></button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-0">

          <!-- Card -->
          <div class="card hoverable">
            <img class="card-img-top" src="assets/img/scienceNews.jpg" alt="Card image cap">

            <div class="card-body">
              <a href="#!" class="black-text">Blog</a>
              <p class="card-title text-muted font-small mt-3 mb-2">L'actualités scientifiques décryptée par Nimbl</p>
              <button class="btn btn-primary"><i class="far fa-newspaper mr-2"></i><a href="View/blog_view.php" class="text-white">Voir</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>

  <div class="container my-5">
    <!--Section: Content-->
    <section class="magazine-section dark-grey-text">
      <!-- Section heading -->
      <h3 class="text-center font-weight-bold mb-4 pb-2">Cours</h3>
      <!-- Section description -->
      <p class="text-center w-responsive mx-auto mb-5">Approfondis tes connaissances dans sur tes sujets préférés et découvres de nouvelles choses!</p>
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!-- Featured news -->
          <div class="single-news mb-3">
            <!-- Image -->
            <div class="view overlay rounded z-depth-2 mb-4">
              <img class="img-fluid" src="assets/img/svt.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Grid row -->
            <div class="row mb-3">
              <!-- Grid column -->
              <div class="col-12">
                <!-- Badge -->
                <a href="#!"><span class="badge deep-orange"><i class="fas fa-leaf p-1"></i>Sciences de la vie et de la Terre</span></a>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
          <!-- Featured news -->
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>La formation des volcans</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>La vraie valeur des diamants</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>Comment fonctionne la digestion?</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0">
                <a>Le moustique, principal prédateur de l'Homme!</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <!-- Featured news -->
          <div class="single-news mb-3">
            <!-- Image -->
            <div class="view overlay rounded z-depth-2 mb-4">
              <img class="img-fluid" src="assets/img/astronaut1.jpg" alt="Espace illustration">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Grid row -->
            <div class="row mb-3">
              <!-- Grid column -->
              <div class="col-12">
                <!-- Badge -->
                <a href="#!"><span class="badge pink"><i class="fas fa-user-astronaut p-1" aria-hidden="true"></i>Espace</span></a>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <!-- Title -->
          </div>
          <!-- Featured news -->
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>Voyage spatial</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>Les galaxies</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>L'âge de l'Univers</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0">
                <a>Les exoplanètes</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
        </div>
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4">
          <!-- Featured news -->
          <div class="single-news mb-3">
            <!-- Image -->
            <div class="view overlay rounded z-depth-2 mb-4">
              <img class="img-fluid" src="assets/img/everyday-science.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Grid row -->
            <div class="row mb-3">
              <!-- Grid column -->
              <div class="col-12">
                <!-- Badge -->
                <a href="#!"><span class="badge success-color"><i class="fas fa-atom p-2"></i>La science tout autour de toi!</span></a>
              </div>
            </div>
          </div>
          <!-- Featured news -->
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>La physique derrière la chasse d'eau</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>Les chats retombent-ls toujours sur leurs pattes?</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news mb-3">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0 mb-3">
                <a>Que deviennent nos déchets?</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- Small news -->
          <div class="single-news">
            <!-- Title -->
            <div class="d-flex justify-content-between">
              <div class="col-11 text-truncate pl-0">
                <a>La science du trampoline</a>
              </div>
              <a><i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="assets/js/libraries/jquery.min.js"></script>
  <script src="assets/js/libraries/popper.min.js"></script>
  <script src="assets/js/libraries/bootstrap.min.js"></script>
  <script src="assets/js/libraries/mdb.min.js"></script>

</body>
<!-- Footer -->
<?php include 'Share/footer.php' ?>

</html>
