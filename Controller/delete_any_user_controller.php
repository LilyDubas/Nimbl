<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmDeleteUser'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        ! empty(trim($_POST['userID'])) ? $userID = trim($_POST['userID']) : $userID = null;
        if ($userID != null){
          $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
          if (filter_var($userID, FILTER_VALIDATE_INT)){
            require '../Model/delete_user.php';
            $deleteValidity = delete_user($userID);
            if ($deleteValidity == true){
              // If deletion went well, reload all users info
              $userList = load_all_users();
              if ($userList != false){
                // All users found
                $usersAvailable = true;
              } else {
                $usersAvailable = false;
              }
            }
          }
          else {
            // Input user ID is not recognized ( problem may be with JS )
          }
        }
      }
      else {
        // User ID is not recognized
      }
    }
    else {
      // User is not admin, need to redirect outside of this page
    }
  }
}
?>
