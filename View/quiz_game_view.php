<?php include '../Controller/load_questions_controller.php'; ?>
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
  <link rel="stylesheet" href="../assets/css/quiz-vision.css">
</head>
<body>
  <?php include '../Share/header_view.php' ?>

  <div class="container my-5">
    <!-- Section: Block Content -->
    <section class="dark-grey-text text-center">
      <h3 id="mainTitle" class="text-center font-weight-bold mb-4 pb-2"></h3>
      <p id="description" class="text-center text-muted w-responsive mx-auto mb-5"></p>
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12 mb-4">
          <!-- Card -->
          <div class="card card-image" style="background-image: url(../assets/img/galaxy-bg.jpg);">
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded">
              <div>
                <h3 class="purple-text" id="quiz-title">
                  <i class="" id="titleLogo"></i>
                  <strong id="secondaryTitle"></strong>
                </h3>
                <div id="hud">
                  <div class="hud-item">
                    <p id="progressText" class="hud-prefix">Question</p>
                    <div id="progressBar">
                      <div id="progressBarFull"></div>
                    </div>
                  </div>
                  <div class="hud-item">
                    <p class="hud-prefix">Score</p>
                    <h1 class="hud-main-text" id="score"></h1>
                  </div>
                </div>
                <h2 id="question"></h2>
                <div class="choice-container">
                  <p class="choice-prefix">A</p>
                  <p class="choice-text" data-number='1'></p>
                </div>
                <div class="choice-container">
                  <p class="choice-prefix">B</p>
                  <p class="choice-text" data-number='2'></p>
                </div>
                <div class="choice-container">
                  <p class="choice-prefix">C</p>
                  <p class="choice-text" data-number='3'></p>
                </div>
                <!-- <a class="btn btn-secondary btn-rounded btn-lg" id="btn-next-question"><i class="fas fa-check left"></i>Question suivante</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
  <?php
  $js_array = json_encode($questions);
  echo 'var questions = ' .$js_array. ';';
  echo "var quizTheme = '" .$quizTheme. "';";
  ?>
  </script>
  <!-- // Put all additionnal scripts under this // -->
  <script src="../assets/js/quizText.js"></script>
  <script src="../assets/js/game.js"></script>
  <?php include '../Share/footer.php' ?>
</body>
</html>
