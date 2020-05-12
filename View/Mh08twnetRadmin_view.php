<?php require '../Controller/info_session_controller.php';
require '../Controller/load_all_users_controller.php';
require '../Controller/update_any_user_controller.php';
require '../Controller/delete_any_user_controller.php';
require '../Controller/add_new_user_controller.php';
require '../Controller/load_user_questions_controller.php';
require '../Controller/delete_user_question_controller.php';
require '../Controller/update_user_question_controller.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?php require '../Share/css_links.html' ?>
  <link rel="stylesheet" href="../assets/css/admin_view.css">
</head>
<body>
  <!--Navbar -->
  <?php include '../Share/header_view.php' ?>

  <h1 class="text-center text-uppercase py-4">Menu administrateur</h1>
  <div class="d-flex text-center nav nav-tabs" id="buttons">
    <a type="button" data-toggle="tab" href="#userList" class="btn btn-unique ml-5">Liste des utilisateurs</a>
    <a type="button" class="btn btn-purple ml-5">Articles</a>
    <a type="button" data-toggle="tab" href="#questionList" class="btn btn-pink ml-5">Questions des utilisateurs</a>

  </div>
  <!-- Editable table -->
  <div class="tab-content">
    <div id="userList" class="card tab-pane fade">
      <h3 class="card-header text-center font-weight-bold">Liste des utilisateurs</h3>
      <div class="card-body">
        <div id="table" class="table-editable">
          <?php if ($displayNewUserForm == true){ ?>
            <span class="table-add float-right mb-3 mr-2"><a href="?" class="text-danger"><i class="fas fa-times fa-2x" aria-hidden="true"></i></a></span>
            <form action="#" method="post">
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Surnom</th>
                    <th>Mail</th>
                    <th>Mot de passe</th>
                    <th>Grade</th>
                    <th>Confirmer</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label for="firstname" class="sr-only">Prénom</label><input type="text" name="firstname" placeholder="Kali"></td>
                    <td><label for="lastname" class="sr-only">Nom de famille</label><input type="text" name="lastname" placeholder="Meow"></td>
                    <td><label for="username" class="sr-only">Surnom</label><input type="text" name="username" placeholder="Optionnel"></td>
                    <td><label for="mail" class="sr-only">Mail</label><input type="text" name="mail" placeholder="kali.meow@mail.com"></td>
                    <td><label for="password" class="sr-only">Mot de passe</label><input type="password" name="password" placeholder="••••••••••"></td>
                    <td><label for="rank" class="sr-only"></label>
                      <select name="rank" class="custom-select">
                        <option value="1" selected>utilisateur</option>
                        <option value="2">admin</option>
                      </select>
                    </td>
                    <td>
                      <span class="table-remove"><button name="confirmNewUser" type="submit" class="btn btn-success btn-rounded btn-block btn-sm"><i class="fas fa-check fa-2x" aria-hidden="true"></i></button></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          <?php } else { ?>
            <span class="table-add float-right mb-3 mr-2"><a href="?newUser=" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
          <?php } ?>
          <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Prénom</th>
                <th class="text-center">Nom</th>
                <th class="text-center">Surnom</th>
                <th class="text-center">Adresse mail</th>
                <th class="text-center">Niveau</th>
                <th class="text-center">Nombre de badges</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($usersAvailable == true){
                foreach ($userList AS $user){ ?>
                  <tr id="mainUserInfo_<?= $user['id'] ?? '0' ?>">
                    <td class="pt-3-half"><?= $user['firstname'] ?? 'Kali' ?></td>
                    <td class="pt-3-half"><?= $user['lastname'] ?? 'Meow' ?></td>
                    <td class="pt-3-half"><?= $user['user_name'] ?? '' ?></td>
                    <td class="pt-3-half"><?= $user['mail'] ?? 'kali.meow@mail.com' ?></td>
                    <td class="pt-3-half"><?= $user['level_name'] ?? '4' ?></td>
                    <!-- Need to have better badge system before displaying the number of badges -->
                    <td class="pt-3-half">0</td>
                    <td>
                      <span class="table-remove"><button id="update_<?= $user['id'] ?? '0' ?>" type="button" class="updateUser btn btn-info btn-rounded btn-sm my-0">Modifier</button></span>
                    </td>
                    <td>
                      <span class="table-remove"><button id="delete_<?= $user['id'] ?? '0' ?>" type="button" data-toggle="modal" data-target="#confirmDeleteModal" class="deleteUser btn btn-danger btn-rounded btn-sm my-0">Supprimer</button></span>
                    </td>
                  </tr>
                  <!-- Hidden row with the same info as a form -->
                  <tr class="userforms" id="formUserInfo_<?= $user['id'] ?? '0' ?>">
                    <form action="#" method="post">
                      <td class="pt-3-half"><label for="firstname" class="sr-only">Prénom</label><input type="text" name="firstname" value="<?= $user['firstname'] ?? 'Kali' ?>"></td>
                      <td class="pt-3-half"><label for="lastname" class="sr-only">Nom</label><input type="text" name="lastname" value="<?= $user['lastname'] ?? 'Meow' ?>"></td>
                      <td class="pt-3-half"><label for="username" class="sr-only">Nom d'utilisateur</label><input type="text" name="username" value="<?= $user['user_name'] ?? '' ?>"></td>
                      <td class="pt-3-half"><label for="mail" class="sr-only">Email</label><input type="text" name="mail" value="<?= $user['mail'] ?? 'kali.meow@mail.com' ?>"></td>
                      <td class="pt-3-half"><label for="level" class="sr-only">Niveau</label><input type="text" name="level" value="<?= $user['level_name'] ?? '4' ?>"></td>
                      <!-- Need to have better badge system before displaying the number of badges -->
                      <td class="pt-3-half"><input type="text" value="0" readonly></td>
                      <td class="d-none"><label for="userID" class="sr-only">ID de l'utilisateur</label><input type="hidden" name="userID" value="<?= $user['id'] ?? '0' ?>"></td>
                      <td colspan="2">
                        <span class="table-remove"><button name="confirmUpdate" type="submit" class="deleteUser btn btn-success btn-rounded btn-block btn-sm my-0">Valider</button></span>
                      </td>
                    </form>
                  </tr>
                <?php } ?>
              <?php } ?>
              <!-- This is our clonable table line -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="questionList" class="card tab-pane fade">
      <h3 class="card-header text-center font-weight-bold">Questions des utilisateurs</h3>
      <div class="card-body">
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Prénom et Nom</th>
              <th class="text-center">Question</th>
              <th class="text-center">Idée</th>
              <th class="text-center">Réponse</th>
              <th class="text-center">Statut</th>
              <th class="text-center">Répondre</th>
              <th class="text-center">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($questionsAvailable == true){
              foreach ($questionList as $question) { ?>
                <tr>
                  <td id="name_<?= $question['id'] ?>" class="pt-3-half"><?= ucfirst($question['user_firstname']) ?? 'John' ?> <?= ucfirst($question['user_lastname']) ?? 'Doe' ?></td>
                  <td id="question_<?= $question['id'] ?>" class="pt-3-half font-weight-bold"><?= $question['question'] ?? '-' ?></td>
                  <td id="idea_<?= $question['id'] ?>" class="pt-3-half"><?= $question['idea'] ?? '-' ?></td>
                  <td class="pt-3-half"><?= $question['answer'] ?? '-' ?></td>
                  <td class="pt-3-half font-weight-bold <?= $statusColor[$question['status']] ?>"><?= $question['status'] ?? 'Unknown' ?></td>
                  <td class="pt-3-half"><a id="<?= $question['id'] ?>" type="button" class="updateQuestion btn btn-info btn-rounded btn-sm my-0"><i class="fas fa-check" aria-hidden="true"></i></a></td>
                  <td class="pt-3-half"><a href="?deleteQuestion=<?= $question['id'] ?? 0 ?>" type="button" class="btn btn-danger btn-rounded btn-sm my-0"><i class="fas fa-times" aria-hidden="true"></i></a></td>
                </tr>
                <tr id="answerQuestion_<?= $question['id'] ?>" class="hiddenTR">
                  <td class="pt-2 text-center" colspan="5">
                    <h5 id="questionDisplay_<?= $question['id'] ?>" class="text-center mt-0 mb-1"></h5>
                    <p id="ideaDisplay_<?= $question['id'] ?>" class="text-center mt-0 mb-2"></p>
                    <form id="answerForm_<?= $question['id'] ?>" class="d-flex" action="#" method="post">
                      <input type="hidden" name="questionID" value="<?= $question['id'] ?>">
                      <label class="my-auto" for="answer">Votre réponse :</label>
                      <textarea class="w-100" name="answer" rows="3"></textarea>
                    </form>
                  </td>
                  <td class="pt-3"><p class="text-center mt-0 mb-2 font-weight-bold">Confirmer</p><button name="updateQuestion" type="submit" form="answerForm_<?= $question['id'] ?>" class="btn btn-success btn-rounded my-2"><i class="fas fa-check" aria-hidden="true"></i></button></td>
                  <td class="pt-3"><p class="text-center mt-0 mb-2 font-weight-bold">Annuler</p><a id="close_<?= $question['id'] ?>" type="button" class="closeHiddenTr btn btn-warning btn-rounded my-2"><i class="fas fa-times" aria-hidden="true"></i></a></td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php require '../View/confirm_delete_user_modal.php'; ?>
  <!-- Footer -->
  <?php include '../Share/footer.php'; ?>
  <!-- Editable table -->

  <?php require '../Share/js_links.html'; ?>
  <script src="../assets/js/admin.js"></script>
</body>
</html>
