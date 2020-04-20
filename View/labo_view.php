<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Labo</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?php require '../Share/css_links.html' ?>
</head>
<body>
  <!--Navbar -->
  <?php include '../Share/header_view.php' ?>

  <h2 class="text-center font-weight-bold dark-grey-text">Bienvenue au labo!</h2>
  <p class="text-center m-5 dark-grey-text"></p>
  <div class="container my-5 py-5 z-depth-1">
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-12 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
          <img src="../assets/img/elephant-toothpaste.jpg" class="img-fluid" alt="dentifrice pour éléphants">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h3 class="font-weight-bold text-center">La recette du dentifrice pour éléphants</h3>
          <p class="font-weight-bold text-center">(même si vous n'avez pas d'éléphants à portée de main)</p>
          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>
          <a class="font-weight-bold" href="#" >Learn more<i class="fas fa-angle-right ml-2"></i></a>
        </div>
      </div>
    </section>
  </div>

  <?php require '../Share/js_links.html' ?>

</body>
<!-- Footer -->
<?php include '../Share/footer.php' ?>

</html>
