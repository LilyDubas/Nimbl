<?php
if (isset($_COOKIE['deleteUser']) && $_COOKIE['deleteUser'] == 'true'){
  session_start();
  if (isset($_SESSION['id']) && ! empty($_SESSION['id'])){
    $userID = trim($_SESSION['id']);
    $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userID, FILTER_VALIDATE_INT) && $userID > 0){
      require 'Model/delete_user.php';
      $deleteValidity = delete_user($userID);
      if ($deleteValidity == true){
        // Display confirmation message
      }
    }
  } else {
    // User not connected
  }
} ?>
