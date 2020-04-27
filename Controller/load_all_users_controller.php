<?php
$usersAvailable = false; $userList = [];
if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
  if ($_SESSION['rank_name'] == 'admin'){
    $userId = (int) trim($_SESSION['id']);
    $userId = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userId, FILTER_VALIDATE_INT)){
      require '../Model/load_all_users.php';
      $userList = load_all_users();
      if ($userList != false){
        // All users found
        $usersAvailable = true;
      }
      else {
        // An error occured with the database, please try later
      }
    }
    else {
      // User ID is not recognized
    }
  }
  else {
    // User is not admin, need to redirect outside of this page
  }
} ?>
