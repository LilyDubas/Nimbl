<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cours</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?php require '../Share/css_links.html' ?>
</head>
<body>
  <!--Navbar -->
  <?php include '../Share/header_view.php' ?>
  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-lg-8 text-center">

          <h3 class="font-weight-bold mb-4">Pourquoi y a-t-il des saison?</h3>

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="../assets/img/seasons-page.jpg" class="img-fluid"
            alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
        </div>
        <!--Grid row-->
        <div class="p-4" id="seasons-text">
          <p class="text-info font-weight-bold pt-3">Qu’est-ce qu’une saison? </p>
          <p>Il y a deux définitions légèrement différentes des saisons: une définition <span class="font-weight-bold">astronomique</span> et une définition <span class="font-weight-bold">météorologique</span>.</p>
          <p>En astronomie, une saison est une intervalle de temps délimitée par un solstice et un équinoxe.</p>
          <p>Les solstices et équinoxes sont les périodes de l’année où la différence de durée entre le jour et la nuit est la plus grande pour les solstices et égale pour les équinoxes.</p>
          <p>Ces évènements sont dûs à l’axe d’inclinaison de la Terre.</p>
          <p>Dans l’hémisphère nord, le printemps commence à l’équinoxe du <span class="font-weight-bold">21 mars</span>, l’été commence au solstice du <span class="font-weight-bold">21 juin</span> (où le jour est le plus long de l’année et la nuit la plus courte), l’automne commence à l’équinoxe du <span class="font-weight-bold">21 septembre</span> et l’hiver au solstice du <span class="font-weight-bold">21 décembre</span> (où la nuit est la plus longue et le jour le plus court). </p>
          <p>! les saisons astronomiques sont inversées dans l’hémisphère sud </p>
          <p>En météorologie, les saisons sont des périodes d'événements climatiques récurrentes et constantes en températures et en taux d’humidité.</p>
          <p>Les saisons météorologiques et le climat sont très différents selon les régions du monde.</p>
          <p>Tour du monde des climats du monde : </p>
          <figure>
            <img src="../assets/img/climats_world_larousse.jpg" alt="carte du monde des climats" id="world-climats">
            <figcaption>Source: dictionnaire Larousse</figcaption>
          </figure>
          <p>Les différences de climats s’expliquent par :</p>
          <ul id="climats-list">
            <li>Les différences de latitudes : les régions polaires reçoivent 3x moins d’énergie solaire que l’équateur,</li>
            <li>L’inégale répartition des terres et des mers : différences d’échauffement entre terre et mers, courants marins (comme El Niño par exemple),</li>
            <li>La différence de circulation atmosphérique et de massifs montagneux.</li>
          </ul>
          <p class="bg blue lighten-4 text-center" id="question-el-nino">C'est quoi "El niño?"</p>
          <p>“ El Niño” est un <span class="font-weight-bold">courant marin chaud</span> au large du Pérou et de l’équateur. Ce courant chaud modifie l'atmosphère autour de lui en réchauffant l’air. Cela entraîne une modification du climat autour du courant en augmentant la fréquence et la quantité d’eau tombée des pluies, et en renforçant les vents.</p>
          <p>El Niño est appelé ainsi par les pêcheurs sud-américains car ce courant qui sonne la fin de la période de pêche dans cette région arrive juste après Noël et d’après leurs croyances chrétiennes fait référence à l’enfant Jésus (el niño veut dire l’enfant en espagnol).</p>
          <p>Le phénomène El Niño, bien qu’existant localement depuis sûrement des siècles a aujourd’hui des conséquences au niveau mondial. C’est le réchauffement climatique qui en est la cause car il amplifie de plus en plus le phénomène, le courant est de plus en plus grand et de plus en plus chaud et dérègle donc une plus grande partie du climat de façon plus forte. Ce phénomène va donc continuer d’empirer à mesure que le réchauffement climatique augmente.</p>
          <a class="btn btn-primary btn-md mx-0 btn-rounded" href="dis-moi_view.php">Retour</a>
        </div>
      </div>
      <!--Grid column-->
    </section>
    <!--Section: Content-->


  </div>

  <?php require '../Share/js_links.html' ?>
</body>
<!-- Footer -->
<?php include '../Share/footer.php' ?>
</html>
