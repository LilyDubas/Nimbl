<?php
// $_SERVER["SCRIPT_FILENAME"] = get the current absolute path of the file
// basename( - , '.php') = get the filename without the '.php' at the end
$currentPage = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$prefix = '';
// check if the current page is the index to change the links accordingly
if ($currentPage != 'index'){
  require '../Share/header_controller.php';
}
else {
  require 'Share/header_controller.php';
}
?>

<nav class="mb-1 p-3 navbar navbar-expand-lg navbar-dark peach-gradient">
  <a class="navbar-brand" href="/">Nimbl</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
  aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-555">
  <ul class="navbar-nav">
    <?php if ($currentPage != 'index'){
      $prefix = '';
    }
    else {
      $prefix = 'View/';
    } ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= $prefix ?>dis-moi_view.php">Dis-moi Nimbl?
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $prefix ?>labo_view.php">Le labo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $prefix ?>lessons_view.php">Cours</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $prefix ?>quizz_view.php">Quiz</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $prefix ?>blog_view.php">Blog</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item avatar">
      <?php if (isset($_COOKIE['random_key']) && ! empty($_COOKIE['random_key'])){ ?>
        <?php if ($currentPage != 'index'){ ?>
          <a class="nav-link p-0" href="profil_view.php">
        <?php } else { ?>
          <a class="nav-link p-0" href="View/profil_view.php">
        <?php } ?>
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
          alt="avatar image" height="40">
        </a>
      <?php } else { ?>
      <a class="nav-link p-0" data-toggle="modal" data-target="#elegantModalForm">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
        alt="avatar image" height="40">
      </a>
    <?php } ?>
    </li>
  </ul>
</div>

</nav>

<!-- Modal sign-in -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-hidden="true">
<form  action="#" method="post" autocomplete="on">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Connexion</strong></h3>
        <?php if ($error_message != '') { ?>
          <h4><?= $error_message ?></h4>
        <?php } ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" name="email" id="email" class="form-control validate" placeholder="Ton email">
          <label data-error="wrong" data-success="right" for="email"></label>
        </div>

        <div class="md-form pb-3">
          <input type="password" name="password" id="password" class="form-control validate" placeholder="Ton mot de passe">
          <label data-error="wrong" data-success="right" for="password"></label>
          <p class="font-small blue-text d-flex justify-content-end">Mot de passe <a href="#" class="blue-text ml-1">oublié?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="submit" name="sign-in" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Connexion</button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="grey-text d-flex justify-content-end">Pas encore inscrit? <a type="button" class="blue-text ml-1 font-weight-bold" data-toggle="modal" data-dismiss="modal" data-target="#elegantModalForm2">
          Inscription</a></p>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </form>
</div>
<!-- Modal sign in-->
<!-- Modal sign up -->
<!-- Modal -->
<div class="modal fade" id="elegantModalForm2" tabindex="-1" role="dialog" aria-hidden="true">
<form action="#" method="post">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Inscription</strong></h3>
        <h5><?php if ($statementValidity == true)
        {
          echo 'Votre compte a bien été créé';
        } ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="row">
          <div class="md-form mb-1">
            <input type="text" name="firstname" id="firstname" class="form-control validate" placeholder="Ton prénom">
            <label data-error="wrong" data-success="right" for="firstname" ></label>
          </div>
          <div class="md-form mb-1 ml-4">
            <input type="text" name="lastname" id="lastname" class="form-control validate" placeholder="Ton nom">
            <label data-error="wrong" data-success="right" for="lastname"></label>
          </div>
        </div>
        <div class="md-form mb-1">
          <input type="email" name="email" id="email" class="form-control validate" placeholder="Ton Email">
          <label data-error="wrong" data-success="right" for="email"></label>
        </div>
        <div class="row">
          <div class="md-form pb-3">
            <input type="password" name="password" id="choose_password" class="form-control validate" placeholder="Choisis un mot de passe">
            <label data-error="wrong" data-success="right" for="choose_password"></label>
          </div>
          <div class="md-form pb-3 ml-4">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control validate" placeholder="Confirme le mot de passe">
            <label data-error="wrong" data-success="right" for="confirm_password"></label>
          </div>
        </div>
        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a" name="sign-up">Inscription</button>
        </div>
      </div>
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</form>
</div>
