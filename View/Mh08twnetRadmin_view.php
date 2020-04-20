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

  <h1 class="text-center text-uppercase py-4">Menu administrateur</h1>
  <div class="d-flex text-center" id="buttons">
    <button type="button" class="btn btn-unique ml-5">Liste des utilisateurs</button>
    <button type="button" class="btn btn-purple ml-5">Articles</button>
    <button type="button" class="btn btn-pink ml-5">Questions des utilisateurs</button>

  </div>
  <!-- Editable table -->
  <div class="card">
    <h3 class="card-header text-center font-weight-bold">Liste des utilisateurs</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Prénom</th>
              <th class="text-center">Nom</th>
              <th class="text-center">Adresse mail</th>
              <th class="text-center">Niveau</th>
              <th class="text-center">Nombre de badges</th>
              <th class="text-center">Modifier</th>
              <th class="text-center">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pt-3-half" contenteditable="true">Kali</td>
              <td class="pt-3-half" contenteditable="true">Meow</td>
              <td class="pt-3-half" contenteditable="true">kali.meow@mail.com</td>
              <td class="pt-3-half" contenteditable="true">4</td>
              <td class="pt-3-half" contenteditable="true">8</td>
              <td>
                <span class="table-remove"><button type="button" class="btn btn-info btn-rounded btn-sm my-0">Modifier</button></span>
              </td>
              <td>
                <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Supprimer</button></span>
              </td>
            </tr>
            <!-- This is our clonable table line -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Editable table -->

  <?php require '../Share/js_links.html' ?>

</body>
<!-- Footer -->
<?php include '../Share/footer.php' ?>
</html>
