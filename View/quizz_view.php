<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Quiz</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?php require '../Share/css_links.html' ?>
  <link rel="stylesheet" href="../assets/css/quiz.css">
</head>
<body>
  <?php include '../Share/header_view.php' ?>

  <h1 class="text-center dark-grey-text">Teste tes connaissances avec les quiz!</h1>
  <div class="container my-5 py-5 z-depth-1">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">
          <h3 class="font-weight-bold">L'oeil et la vision</h3>
          <p class="text-muted">Composition de l'oeil humain, sa perception de la lumière et des couleurs ...</p>
          <a class="btn btn-purple btn-md ml-0" href="quiz_game_view.php?theme=vision" role="button">Jouer<i class="fa fa-play ml-2"></i></a>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="../assets/img/eye.jpg" class="img-fluid"
            alt="">
            <a href="#">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container my-5 py-5 z-depth-1">
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">
          <h3 class="font-weight-bold">La température</h3>
          <p class="text-muted">Le fonctionnement et les records de température .</p>
          <a class="btn btn-purple btn-md ml-0" href="quiz_game_view.php?theme=temperature" role="button">Jouer<i class="fa fa-play ml-2"></i></a>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="../assets/img/thermometer.jpg" class="img-fluid"
            alt="">
            <a href="#">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php include '../Share/footer.php' ?>
</body>
</html>
