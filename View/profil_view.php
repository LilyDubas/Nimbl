<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MDB</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<?php require '../Share/css_links.html' ?>
</head>
<body>
  <!--Navbar -->
<?php include '../Share/header_view.php' ?>

  <!-- Card Wider -->
<div class="card card-cascade wider mt-5" id="card-profil">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong><?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?? 'Léo Fox' ?></strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>Astronaute en herbe</strong></h5>
    <!-- Text -->
    <p class="card-text"></p>


  </div>

</div>
<!-- Card Wider -->

<div class="container my-5">

  <!-- Section: Block Content -->
  <section class="team-section">

    <div class="card">
      <div class="card-header white d-flex justify-content-between">
        <p class="h5-responsive font-weight-bold mb-0">Tes badges</p>
      </div>
      <div class="card-body">
        <div class="row pt-4">
          <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="avatar white text-center">
              <img src="../assets/img/enter.svg" class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-2">
              <h6 class="font-weight-bold pt-2 mb-0">Bienvenue!</h6>
              <p class="text-muted text-center m-2"><small>Première connexion</small></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="avatar white text-center">
              <img src="../assets/img/planet.svg" class="img-fluid rounded-circle z-depth-1"/>
            </div>
            <div class="text-center mt-2">
              <h6 class="font-weight-bold pt-2 m-2">Système solaire</h6>
              <p class="text-muted text-center mb-0"><small>Quiz sur le système solaire réussi</small></p>
            </div>
          </div>
    </div>

  </section>
  <!-- Section: Block Content -->

</div>


  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/popper.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="../assets/js/script.jsassets/"></script>

</body>
<!-- Footer -->
<?php include '../Share/footer.php' ?>

</html>
