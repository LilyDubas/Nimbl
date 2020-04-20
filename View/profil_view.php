<?php require '../Controller/profil_view_controller.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $_SESSION['firstname'] ?? 'Léo' ?> <?= $_SESSION['lastname'] ?? 'Fox' ?></title>
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
      <h4 class="card-title"><strong><?= ucfirst($_SESSION['firstname']) ?? 'Léo' ?> <?= ucfirst($_SESSION['lastname']) ?? 'Fox' ?></strong></h4>
      <!-- Subtitle -->
      <h5 class="blue-text pb-2"><strong><?= ucfirst($_SESSION['level_name']) ?? 'Astronaute en herbe' ?></strong></h5>
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
                <img src="../assets/img/enter.svg" class="img-fluid rounded-circle z-depth-1" alt="enter"/>
              </div>
              <div class="text-center mt-2">
                <h6 class="font-weight-bold pt-2 mb-0">Bienvenue!</h6>
                <p class="text-muted text-center m-2"><small>Première connexion</small></p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-4">
              <div class="avatar white text-center">
                <img src="../assets/img/planet.svg" class="img-fluid rounded-circle z-depth-1" alt="planet"/>
              </div>
              <div class="text-center mt-2">
                <h6 class="font-weight-bold pt-2 m-2">Système solaire</h6>
                <p class="text-muted text-center mb-0"><small>Quiz sur le système solaire réussi</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Block Content -->

  </div>

  <!-- /// Temporary button to delete and update user /// -->
  <div class="card card-cascade wider my-4 w-50 mx-auto">
    <div class="card-body card-body-cascade text-center">
      <div class="btn-group btn-group-lg w-100" role="group">
        <button id="delete-user" type="button" class="btn btn-block btn-info">Supprimer votre compte</button>
        <button id="update-button" type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#update-modal">Changer vos informations</button>
      </div>
    </div>
  </div>
  <!-- /// Temporary button to delete and update user /// -->

<?php include 'update_info_modal.php';
// Footer
include '../Share/footer.php';
require '../Share/js_links.html'; ?>
<script src="../assets/js/profil_view.js"></script>
</body>

</html>
