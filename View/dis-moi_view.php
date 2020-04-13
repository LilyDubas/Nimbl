<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dis-moi</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?php require '../Share/css_links.html' ?>
</head>
<body>
  <!--Navbar -->
  <?php include '../Share/header_view.php' ?>
  <!-- question de la semaine -->

  <h1 class="text-center p-3 font-weight-bold">La question de la semaine</h1>
  <div class="container mt-5 p-3">
    <section class="mx-md-5 dark-grey-text">
      <div class="row">
        <div class="col-md-12">

          <!-- Card -->
          <div class="card card-cascade wider reverse">

            <!-- Card image -->
            <div class="view view-cascade overlay">
              <img class="card-img-top" src="../assets/img/see-in-the-dark.jpg" alt="Sample image">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card text -->
            <div class="mt-5 p-3">
              <h2 class="text-center font-weight-bold">Pourquoi ne voit-on pas dans le noir?</h2>
              <p>Le fait de ne pas voir dans la nuit en français se dit « héméralopie », alors que l’inverse (voir dans la nuit) se dit « nyctalopie ».</p>

              <h5 class="text-center">Pourquoi l’homme n’est pas nyctalope ?</h5>
              <p>
                C’est à cause de la composition de ses yeux ! Lorsque de la lumière atteint notre œil celle-ci passe d’abord par la pupille et l’iris, qui s’agrandit (se dilate) ou se rétrécit (se contracte) selon l’intensité de la lumière. Quand il y a beaucoup de lumière, ceux-ci se contractent et quand il fait plus sombre ils se dilatent afin de recevoir plus de lumière à transmettre ensuite à la rétine tapissée de récepteurs de lumière.
              </p>
              <div class="m-5 d-flex justify-content-around">
                <img src="../assets/img/reflexe-pupillaire.jpg" alt="illustration pupille"  id="pupille">
                <img src="../assets/img/vision.png" alt="schéma oeil humain" id="oeil">
              </div>
              <p>Les récepteurs (dits photo-récepteurs car ils reçoivent la lumière, qui a pour racine le mot « photos » en grec) sont appelés des cônes et des bâtonnets.</p>
              <p>Les cônes permettent de voir le jour (on dit « vision diurne ») et les bâtonnets permettent de voir la nuit (« vision nocturne »). Les bâtonnets ne perçoivent que le noir, le blanc et les nuances de gris !</p>

              <p>Sur la rétine qui forme un tapis au fond de l’œil et qui reçoit les images que l’on voit, les cônes sont placés vers le centre et les bâtonnets sur les côtés. Lorsque la pupille se contracte ou se dilate en fonction de l’intensité lumineuse, les images ne sont pas traitées de la même manière. En effet, lorsqu’il fait jour, les pupilles sont contractées et envoient donc la lumière vers le centre de l’oeil alors que lorsqu’il fait sombre la pupille se dilate afin de recevoir plus de lumière qui atteint donc aussi les bâtonnets qui se situent sur les côtés !</p>
              <p>Une fois sur les récepteurs la lumière est traitée par plusieurs organes différents selon qu'elle est reçue par les cônes ou les bâtonnets. Ces organes récepteurs sont appelés "cellules bipolaires".</p>
              <p>Au centre de la vision, donc au niveau des cônes, une cellule bipolaire est attribuée à chaque cône pour traiter les informations.</p>
              <p>Mais sur les côtés, là où sont situés les bâtonnets, une cellule bipolaire traite les informations de plusieurs bâtonnets. <span class="font-weight-bold">C'est pour cela que l'on a une vision périphérique plus globale et que l'on distingue mal les détails de ce que l'on voit dans l'obscurité.</span></p>

            </div>
          </div>
        </div>
        <hr class="mb-5 mt-4">

      </div>
    </section>
    <div class="container mt-5">
      <!--Section: Content-->
      <section class="dark-grey-text">
        <!-- Section heading -->
        <h2 class="text-center font-weight-bold mb-4 pb-2">Vos questions</h2>
        <!-- Section description -->
        <p class="text-center mx-auto w-responsive mb-5">Science, actualités, nature, mathématiques, psychologie... Nimbl réponds à toutes vos questions.</p>




        <!-- questions -->
        <div class="row align-items-center">
          <div class="col-lg-5 col-xl-4">
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="../assets/img/sea-lion.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <div class="col-lg-7 col-xl-8">
            <h4 class="font-weight-bold mb-3"><strong>Quelle est la différence entre un phoque et une otarie?</strong></h4>

            <p>Le phoque et l'otarie sont tous deux des mammifères marins carnivores. Ils sont souvent confondus car la forme de leurs corps se ressemble, et un peu leur visages aux yeux ronds. </p>
            <p>Ce sont pourtant deux espèces de mammifères différentes...</p>
            <!-- Post data -->
            <p>question posée par <a class="font-weight-bold">Pierre Monvoisin</a>, le 05/04/2020</p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md mx-0 btn-rounded" href="sealions_view.php">Voir la question</a>

          </div>
        </div>
        <hr class="my-5">
        <div class="row align-items-center">
          <div class="col-lg-5 col-xl-4">
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="../assets/img/seasons.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <div class="col-lg-7 col-xl-8">
            <h4 class="font-weight-bold mb-3"><strong>Pourquoi y a-t-il des saisons?</strong></h4>

            <p>Il y a deux définitions légèrement différentes des saisons: une définition <span class="font-weight-bold">astronomique</span> et une définition <span class="font-weight-bold">météorologique</span>...</p>
            <!-- Post data -->
            <p>question posée par <a class="font-weight-bold">Séverine Picot</a>, le 05/02/2020</p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md mx-0 btn-rounded" href="seasons_view.php">Voir la question</a>

          </div>
        </div>
        <hr class="my-5">
        <details>
          <summary class="p-4 font-weight-bold text-secondary text-center font-size-">Poser une question</summary>
          <div class="form-group border-focus p-5">
            <label for="question-area" class="font-weight-bold">Ta question: </label>
            <textarea class="form-control" id="question-area" rows="3"></textarea>
          </div>
        </details>
      </section>
    </div>
  </div>

  <?php require '../Share/js_links.html' ?>

</body>
<!-- Footer -->
<?php include '../Share/footer.php' ?>
</html>
