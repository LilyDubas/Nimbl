<?php
// If the user wants to delete their account
if (isset($_COOKIE['deleteUser']) && $_COOKIE['deleteUser'] == 'true'){
  // Start a session to get the personnal ID of the user
  session_start();
  if (isset($_SESSION['id']) && ! empty($_SESSION['id'])){
    $userID = trim($_SESSION['id']);
    // Sanitize and validate the user ID
    $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userID, FILTER_VALIDATE_INT) && $userID > 0){
      require 'Model/delete_user.php';
      // If the ID is valid, delete the user in the database and get the return value in a variable
      $deleteValidity = delete_user($userID);
      if ($deleteValidity == true){
        // VALIDATION : User deleted
      } else {
        // ERROR : User not deleted, a problem was found with the database
      }
    }
    else {
      // ERROR : User ID is not valid or empty
    }
  } else {
    // ERROR : User not connected
  }
} ?>
