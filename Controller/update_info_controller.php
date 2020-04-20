<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (! empty($_POST['password']) || ! empty($_POST['username']))){
  $formsInfo = []; $password = ''; $username = '';
  if (! empty($_POST['password'])){
    $password = trim($_POST['password']);
    $passwordConfirmation = trim($_POST['passwordConfirmation']);
    if ($password == $passwordConfirmation){
      $password = filter_var($password, FILTER_SANITIZE_STRING);
      $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
      if (preg_match($regExPassword, $password)){
        $formsInfo['password'] = $password;
      }
      else {
        $password = false;
      };
    }
    else {
      // Password and confirmation are different
    }
  }
  if (! empty($_POST['username'])){
    $username = trim($_POST['username']);
    $usernameConfirmation = trim($_POST['usernameConfirmation']);
    if ($username == $usernameConfirmation){
      $username = filter_var($username, FILTER_SANITIZE_STRING);
      // \x{00C0}-\x{00FF} = all accented letters ( needs /u )
      $regExUsername = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,25}$/u';
      if (preg_match($regExUsername, $username)){
        $formsInfo['username'] = $username;
      }
      else {
        $username = false;
      };
    }
    else {
      // Username and confirmation are different
    }
  }
  if (count($formsInfo) > 0 && $username != false && $username != false){
    var_dump($formsInfo);
  }
}
?>
