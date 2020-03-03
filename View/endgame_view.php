<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Score</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<?php require '../Share/css_links.html' ?>
  <link rel="stylesheet" href="../assets/css/quiz.css">
</head>
<body>
<?php include '../Share/header_view.php' ?>

  <div class="container my-5 py-5"id="end">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center white-text grey p-5 z-depth-1 bg aqua-gradient">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-xl-8 col-md-10">
          <i class="fas fa-gem fa-2x mb-4"></i>
          <h3 class="font-weight-bold">Ton score:</h3>
          <p class="font-weight-bold" id="score"></p>
          <p class="text-center">Bravo! Vous remportez le badge "oeil de Lynx"</p>
          <a href="quizz.php" class="btn btn-outline-white btn-md waves-effect" role="button"><i class="fas fa-clone left"></i>Retour aux quiz</a>
        </div>
      </div>
    </section>
  </div>
  <div class="container my-5 py-5">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center blue-text border border-info p-5 z-depth-1">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-xl-8 col-md-10">
          <i class="fas fa-trophy fa-2x mb-4"></i>
          <h3 class="font-weight-bold">Highscores</h3>
          <a href="#" class="btn btn-outline-blue btn-md waves-effect" role="button"><i class="fas fa-clone left"></i> Highscores</a>
        </div>
      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../assets/js/game.js"></script>
  <script src="../assets/js/endpage.js"></script>
</body>
<?php include '../Share/footer.php' ?>
</html>
