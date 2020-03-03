<?php require '../Share/header_controller.php'; ?>

<nav class="mb-1 p-3 navbar navbar-expand-lg navbar-dark peach-gradient">
  <a class="navbar-brand" href="../../../index.php">Nimbl</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
  aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent-555">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="dis-moi_view.php">Dis-moi Nimbl?
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="labo_view.php">Le labo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="quizz_view.php">Quiz</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="blog_view.php">Blog</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item avatar">
      <a class="nav-link p-0" data-toggle="modal" data-target="#elegantModalForm" >
        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
        alt="avatar image" height="40">
      </a>
    </li>
  </ul>
</div>
</nav>

<!-- Modal sign-in -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
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
          <p class="font-small blue-text d-flex justify-content-end">Mot de passe <a href="#" class="blue-text ml-1">
            oublié?</a></p>
          </div>

          <div class="text-center mb-3">
            <button type="submit" name="sign-in" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Connexion</button>
          </div>
          <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Ou connectes-toi avec :</p>

          <div class="row my-3 d-flex justify-content-center">
            <!--Facebook-->
            <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
            <!--Google +-->
            <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google"></i></button>
          </div>
        </div>
        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Pas encore inscrit? <a type="button" class="blue-text ml-1" data-toggle="modal" data-target="#elegantModalForm2">
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
  <div class="modal fade" id="elegantModalForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
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
              <input type="text" name="firstname" id="firstname" class="form-control validate" placeholder="Ton nom">
              <label data-error="wrong" data-success="right" for="firstname" ></label>
            </div>
            <div class="md-form mb-1 ml-4">
              <input type="text" name="lastname" id="lastname" class="form-control validate" placeholder="Ton prénom">
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
          <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> ou inscrit toi avec :</p>

          <div class="row my-3 d-flex justify-content-center">
            <!--Facebook-->
            <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
            <!--Google +-->
            <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google"></i></button>
          </div>
        </div>
        <!--Footer-->
      </div>
      <!--/.Content-->
    </div>
  </form>
</div>
