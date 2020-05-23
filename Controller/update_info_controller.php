<?php
// If the update user form is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && (! empty($_POST['password']) || ! empty($_POST['username']))){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && ! empty($_SESSION['id'])){
    $userID = trim($_SESSION['id']);
    $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userID, FILTER_VALIDATE_INT) && $userID > 0){
      $formsInfo = [];
      $password = ''; $username = ''; $user_name = '';
      // Check if the password input is filled
      if (! empty(trim($_POST['password']))){
        $password = trim($_POST['password']);
        $passwordConfirmation = trim($_POST['passwordConfirmation']);
        if ($password != '' && $password == $passwordConfirmation){
          // Sanitize and validate the password
          $password = filter_var($password, FILTER_SANITIZE_STRING);
          $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
          if (preg_match($regExPassword, $password)){
            // If it is valid, add ot the the formsInfo array
            $formsInfo['password'] = $password;
          }
          else {
            $password = 'false';
            // ERROR : password not valid
          }
        }
        else {
          // ERROR : Password and confirmation are different
        }
      }
      // Check if the username input is filled
      if (! empty(trim($_POST['username']))){
        $username = trim($_POST['username']);
        $usernameConfirmation = trim($_POST['usernameConfirmation']);
        if ($username != '' && $username == $usernameConfirmation){
          // Sanitize and validate the username
          $username = filter_var($username, FILTER_SANITIZE_STRING);
          // \x{00C0}-\x{00FF} = all accented letters ( needs /u )
          $regExUsername = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,25}$/u';
          if (preg_match($regExUsername, $username)){
            // If it is valid, add ot the the formsInfo array
            $formsInfo['user_name'] = $username;
          }
          else {
            $username = 'false';
            // ERROR : Username is not valid
          }
        }
        else {
          // ERROR : Username and confirmation are different
        }
      }
      $setSQL = ''; $bindParams = '';
      // If at least one input is set
      if (count($formsInfo) > 0 && $password != 'false' && $username != 'false'){
        // Check how many info there is in the formsInfo array
        if (count($formsInfo) == 2){
          // If both password and username are filled, format theses values to better store them
          $bindParams = 'username and password';
          $setSQL = '`password` = :password, `user_name` = :user_name';
          $password = password_hash($formsInfo['password'], PASSWORD_BCRYPT);
          $user_name = $formsInfo['user_name'];
        }
        else if (count($formsInfo) == 1){
          // If one value is filled, find out which one and format it to store
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
          // formsInfo length of value not recognized
          return;
        }
        require '../Model/update_user_info.php';
        // Update user info in the database and get the return value in a variable
        $updateValidity = update_user_info($userID, $password, $user_name, $setSQL, $bindParams);
      }
    }
    else {
      // ERROR : User id is not recognized
    }
  }
  else {
    // ERROR : User is not connected
  }
} ?>
