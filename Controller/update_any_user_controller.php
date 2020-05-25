<?php
// If the update user form is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmUpdate'])){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        // Check all inputs. If they are empty, set them as NULL
        ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
        ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
        ! empty(trim($_POST['mail'])) ? $mail = trim($_POST['mail']) : $mail = null;
        ! empty(trim($_POST['level'])) ? $level = trim($_POST['level']) : $level = null;
        ! empty(trim($_POST['userID'])) ? $userID = (int) trim($_POST['userID']) : $userID = null;
        // Put all inputs in an associative array
        $userInfo = ['firstname'=>$firstname, 'lastname'=>$lastname, 'mail'=>$mail, 'level_name'=>$level, 'id'=>$userID];
        // If none of the values are null
        if (! in_array(null, $userInfo)){
          // Check if the username input is empty. If it is, set it as null
          ! empty(trim($_POST['username'])) ? $username = trim($_POST['username']) : $username = null;
          $userInfo['user_name'] = $username;
          // Sanitize all inputs
          $userInfo['firstname'] = filter_var($userInfo['firstname'], FILTER_SANITIZE_STRING);
          $userInfo['lastname'] = filter_var($userInfo['lastname'], FILTER_SANITIZE_STRING);
          // If the username is not empty, validate it
          if ($username != null){
            $userInfo['user_name'] = filter_var($userInfo['user_name'], FILTER_SANITIZE_STRING);
          }
          $userInfo['mail'] = filter_var($userInfo['mail'], FILTER_SANITIZE_EMAIL);
          $userInfo['level_name'] = filter_var($userInfo['level_name'], FILTER_SANITIZE_STRING);
          $userInfo['id'] = filter_var($userInfo['id'], FILTER_SANITIZE_NUMBER_INT);
          // Validate all inputs
          // \x{00C0}-\x{00FF} = all accented letters ( needs /u )
          $regExNames = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,50}$/u';
          $regExLevels = '/^[a-zA-Z \x{00C0}-\x{00FF}"\']{1,50} ?- ?[0-9]$/u';
          if (! preg_match($regExNames, $userInfo['firstname'])) { $userInfo['firstname'] = null; }
          if (! preg_match($regExNames, $userInfo['lastname'])) { $userInfo['lastname'] = null; }
          // If the username is not empty, validate it
          if ($username != null){
            if (! preg_match($regExNames, $userInfo['user_name'])) { $userInfo['user_name'] = null; }
          } else {
            // Avoid the null of the empty username be considered as null of bad value
            $userInfo['user_name'] = '00';
          }
          if (! filter_var($userInfo['mail'], FILTER_VALIDATE_EMAIL)) { $userInfo['mail'] = null; }
          if (! preg_match($regExLevels, $userInfo['level_name'])) { $userInfo['level_name'] = null; }
          if (! filter_var($userInfo['id'], FILTER_VALIDATE_INT)) { $userInfo['id'] = null; }
          // If none of the values are null
          if (! in_array(null, $userInfo)){
            // Set back the username as null if it was orignally empty
            if ($userInfo['user_name'] == '00') { $userInfo['user_name'] = null; }
            require '../Model/update_user_admin.php';
            // Update user info in the database and get the return value in a variable
            $updateValidity = updateUserInfo($userInfo);
            if ($updateValidity == true){
              // If the update went well, reload all users info
              $userList = load_all_users();
              if ($userList != false){
                // If all users are found, display the table
                $usersAvailable = true;
              } else {
                $usersAvailable = false;
                // ERROR : All users not found, something went wrong with the database
              }
            }
            else {
              // ERROR : Update not valid, something went wrong with the database
            }
          }
          else {
            // ERROR : One or more input are not valid
          }
        }
        else {
          // ERROR : One or more input are empty
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
