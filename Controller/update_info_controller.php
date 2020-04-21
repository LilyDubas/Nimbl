<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (! empty($_POST['password']) || ! empty($_POST['username']))){
  if (isset($_SESSION['id']) && ! empty($_SESSION['id'])){
    $userID = trim($_SESSION['id']);
    $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userID, FILTER_VALIDATE_INT) && $userID > 0){
      $formsInfo = [];
      $password = ''; $username = ''; $user_name = '';
      if (! empty(trim($_POST['password']))){
        $password = trim($_POST['password']);
        $passwordConfirmation = trim($_POST['passwordConfirmation']);
        if ($password == $passwordConfirmation){
          $password = filter_var($password, FILTER_SANITIZE_STRING);
          $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
          if (preg_match($regExPassword, $password)){
            $formsInfo['password'] = $password;
          }
          else {
            $password = 'false';
          };
        }
        else {
          // Password and confirmation are different
        }
      }
      if (! empty(trim($_POST['username']))){
        $username = trim($_POST['username']);
        $usernameConfirmation = trim($_POST['usernameConfirmation']);
        if ($username == $usernameConfirmation){
          $username = filter_var($username, FILTER_SANITIZE_STRING);
          // \x{00C0}-\x{00FF} = all accented letters ( needs /u )
          $regExUsername = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,25}$/u';
          if (preg_match($regExUsername, $username)){
            $formsInfo['user_name'] = $username;
          }
          else {
            $username = 'false';
          };
        }
        else {
          // Username and confirmation are different
        }
      }
      $setSQL = ''; $bindParams = '';
      if (count($formsInfo) > 0 && $password != 'false' && $username != 'false'){
        if (count($formsInfo) == 2){
          $bindParams = 'username and password';
          $setSQL = '`password` = :password, `user_name` = :user_name';
          $password = password_hash($formsInfo['password'], PASSWORD_BCRYPT);
          $user_name = $formsInfo['user_name'];
        }
        else if (count($formsInfo) == 1){
          $keys = array_keys($formsInfo);
          if ($keys[0] == 'password'){
            $password = password_hash($formsInfo['password'], PASSWORD_BCRYPT);
            $bindParams = 'password';
            $setSQL = '`password` = :password';
          }
          else if ($keys[0] == 'user_name'){
            $user_name = $formsInfo['user_name'];
            $bindParams = 'username';
            $setSQL = '`user_name` = :user_name';
          }
        }
        else {
          return;
        }
        require '../Model/update_user_info.php';
        $updateValidity = update_user_info($userID, $password, $user_name, $setSQL, $bindParams);
      }
    }
    else {
      // User id is not recognized
    }
  }
  else {
    // User is not connected
  }
} ?>
