<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Nimbl</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!--Navbar -->
  <?php include 'View/header_index_view.php' ?>
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
            <h5 class="font-weight-light font-italic mb-5">"Pourquoi le ciel est bleu?", "Peut-on voler?", "C'est quoi la pollution"</h5 class="font-weight-light font-italic">
              <p>Ici, Nimbl répond aux questions que tu lui poses et démêle le vrai du faux entre science et fiction!</p>
              <p>N'hésites pas à poser tes questions sur le site et sur les réseaux sociaux! Nous feront tout notre possible pour y répondre!</p>

              <button type="button" class="btn btn-dark peach-gradient btn-rounded mx-0"><a href="dis-moi.php" id="dis-moi-btn">Voir les question</a></button>

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
                <a href="#!" class="black-text text-center">Le labo</a>
                <p class="card-title text-muted font-small mt-3 mb-2">Viens visiter le labo et découvre des expériences scientifiques que tu peux reproduire à la maison!</p>
                <button class="btn btn-primary"><i class="fas fa-flask mr-2"></i>Le labo</button>
              </div>
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

            <!-- Card -->
            <div class="card hoverable">
              <img class="card-img-top" src="assets/img/play.jpg" alt="Card image cap">

              <div class="card-body">

                <a href="#!" class="black-text">Quiz</a>

                <p class="card-title text-muted font-small mt-3 mb-2">Teste tes connaissances scientifiques en t'amusant et remporte des succès!</p>
                <button class="btn btn-primary"><i class="fas fa-puzzle-piece mr-2"></i><a href="quizz.php" class="text-white">Jouer</a></button>
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
                <button class="btn btn-primary"><i class="far fa-newspaper mr-2"></i></i><a href="blog.php" class="text-white">Voir</a></button>
              </div>
            </div>
          </div>
        </section>



      </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/script.jsassets/"></script>

  </body>
  <!-- Footer -->
  <?php include 'Share/footer.php' ?>

  </html>
