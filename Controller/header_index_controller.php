<?php
$error_message = '';
$statementValidity = false;
// formulaire sign-in
// récupérer toutes les infos à l'envoi du form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign-in'])) {
  $email = 'ERROR';
  $password = 'ERROR';
  $error_message = '';
  // VÉRIFIE QUE LES VALUES SONT SET ET PAS VIDES
  !empty(trim($_POST['email'])) ? $email = $_POST['email'] : $error_message = 'email ou mot de passe incorrect';
  !empty(trim($_POST['password'])) ? $password = $_POST['password'] : $error_message = 'email ou mot de passe incorrect';

  if($email === 'ERROR' || $password === 'ERROR'){
    // display error message
  }
  else {
    // nettoyer les champs
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    // valider les champs
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    // verifier le type de mail (string si validé sinon booléen)
    if (gettype($email) === 'boolean') {
      $error_message = 'email ou mot de passe invalide';
    }
    else {
      // maintenant que l'email est validé on verifie le password
      $regExPassword = '/^(?=.[\d])(?=.[A-Z])(?=.[a-z])(?=.[!@#$%^&])?[\w!@#$%^&]{8,}$/';
      $passwordOK = preg_match($regExPassword, $password);
      if ($passwordOK) {
        //check si l'utilisateur existe dans la bdd
      }
      else {
        $error_message = 'email ou mot de passe invalide';
      }
    }
  }
}
// récupérer toutes les infos à l'envoi du form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign-in'])){
  $email = 'ERROR';
  $password = 'ERROR';
  $error_message = '';
  // VÉRIFIE QUE LES VALUES SONT SET ET PAS VIDES
  !empty(trim($_POST['email'])) ? $email = $_POST['email'] : $error_message = 'email ou mot de passe incorrect';
  !empty(trim($_POST['password'])) ? $password = $_POST['password'] : $error_message = 'email ou mot de passe incorrect';
  if($email === 'ERROR' || $password === 'ERROR'){
    // display error message
  }
  else {
    // nettoyer les champs
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    // valider les champs
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    // verifier le type de mail (string si validé sinon booléen)
    if (gettype($email) === 'boolean') {
      $error_message = 'email ou mot de passe invalide';
    }
    else {
      // maintenant que l'email est validé on verifie le password
      $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
      $passwordOK = preg_match($regExPassword, $password);
      if ($passwordOK) {
        //check si l'utilisateur existe dans la bdd
        require 'db/user_connection.php';
        $user_connected = check_user($email, $password);
        if ($user_connected == true){
          // message de confirmation, redirection profil
        }else{
          // message d'erreur
        }
      }
      else {
        $error_message = 'email ou mot de passe invalide';
      }
    }
  }
}
// formulaire sign-up
// récupérer toutes les infos à l'envoi du form
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign-up'])){
  $email = 'ERROR';
  $password = 'ERROR';
  $lastname = 'ERROR';
  $firstname = 'ERROR';
  $confirm_password = 'ERROR';
  $error_message = '';
  // VÉRIFIE QUE LES VALUES SONT SET ET PAS VIDES
  !empty(trim($_POST['email'])) ? $email = $_POST['email'] : $error_message = 'Un des champs est incomplet, veuillez vérifier les informations saisies';
  !empty(trim($_POST['password'])) ? $password = $_POST['password'] : $error_message = 'Un des champs est incomplet, veuillez vérifier les informations saisies';
  !empty(trim($_POST['lastname'])) ? $lastname = $_POST['lastname'] : $error_message = 'Un des champs est incomplet, veuillez vérifier les informations saisies';
  !empty(trim($_POST['firstname'])) ? $firstname = $_POST['firstname'] : $error_message = 'Un des champs est incomplet, veuillez vérifier les informations saisies';
  !empty(trim($_POST['confirm_password'])) ? $confirm_password = $_POST['confirm_password'] : $error_message = 'Un des champs est incomplet, veuillez vérifier les informations saisies';

if($email === 'ERROR' || $password === 'ERROR' || $lastname === 'ERROR' || $firstname === 'ERROR' || $confirm_password === 'ERROR'){
  // display error message
}
else {
  // nettoyer les champs
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $password = filter_var($password, FILTER_SANITIZE_STRING);
  $confirm_password = filter_var($confirm_password, FILTER_SANITIZE_STRING);
  $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
  $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
  // valider les champs
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  // verifier le type de mail (string si validé sinon booléen)
  if (gettype($email) === 'boolean') {
    $error_message = 'email invalide';
  }
  else {
    // maintenant que l'email est validé on verifie le password
    $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
    $passwordOK = preg_match($regExPassword, $password);
    if ($passwordOK && $password === $confirm_password) {
      $regExName = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,25}$/u';
      $lastnameOK = preg_match($regExName, $lastname);
      $firstnameOK = preg_match($regExName, $firstname);
      if ($lastnameOK && $firstnameOK){
        // ajout du user à la bdd
        require 'db/new_user.php';
      $statementValidity = add_new_user($email, $password, $lastname, $firstname);

      }
      else {
        $error_message = 'nom ou prénom invalide';
      }
    }
    else {
      $error_message = 'le mot de passe est incorrect ou différent de la confirmation';
    }
  }
}
}
?>
