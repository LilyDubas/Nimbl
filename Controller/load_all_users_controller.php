<?php
// Load all users on admin page load
$usersAvailable = false; $userList = [];
// Check if the user is valid and an admin
if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
  if ($_SESSION['rank_name'] == 'admin'){
    $userId = (int) trim($_SESSION['id']);
    $userId = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userId, FILTER_VALIDATE_INT)){
      require '../Model/load_all_users.php';
      // Load all users from the database in an associative array
      $userList = load_all_users();
      if ($userList != false){
        // If all users are found, display the table
        $usersAvailable = true;
      }
      else {
        // ERROR : All users not found, something went wrong with the database
      }
    }
    else {
      // ERROR : User ID is not recognized
    }
  }
  else {
    // ERROR : User is not admin, need to redirect outside of this page
  }
}
else {
  // ERROR : User is not connected
} ?>
