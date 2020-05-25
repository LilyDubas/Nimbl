<?php
// If the delete user button is pushed
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmDeleteUser'])){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        // Check the userID input. If it is empty, set it as NULL
        ! empty(trim($_POST['userID'])) ? $userID = trim($_POST['userID']) : $userID = null;
        if ($userID != null){
          // If the ID is found, sanitize and validate it
          $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
          if (filter_var($userID, FILTER_VALIDATE_INT)){
            require '../Model/delete_user.php';
            // If the user ID is valide, delete the user in the database and get the return value in a variable
            $deleteValidity = delete_user($userID);
            if ($deleteValidity == true){
              // If the deletion went well, reload all users info
              $userList = load_all_users();
              if ($userList != false){
                // All users found
                $usersAvailable = true;
              } else {
                $usersAvailable = false;
                // ERROR : all users not found
              }
              // VALIDATION : user deleted
            } else {
              // ERROR : user not deleted, a problem was found with the database
            }
          }
          else {
            // ERROR : Input user ID is not recognized ( problem may be with JS )
          }
        }
        else {
          // ERROR : User ID to delete not found, input empty
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
  }
} ?>
