<?php
// check if the cookie for the random key of the user is set and not empty
if (isset($_COOKIE['random_key']) && ! empty($_COOKIE['random_key'])){
  $random_key = trim($_COOKIE['random_key']);
  // sanitize and validate the random number indentifying the user
  $random_key = filter_var($random_key, FILTER_SANITIZE_NUMBER_INT);
  if (filter_var($random_key, FILTER_VALIDATE_INT)){
    // If the key is valid
    if (empty($_COOKIE['PHPSESSID']) || ! isset($_SESSION['mail'])){
      // If the session is empty or non existant
      require '../Model/user_info_to_session.php';
      // Get all user's infos in a variable
      $allUserInfo = get_all_user_infos($random_key);
      if ($allUserInfo != false){
        // If all info are found, set them in the $_SESSION
        session_start();
        $_SESSION['id'] = $allUserInfo['id'];
        $_SESSION['firstname'] = $allUserInfo['firstname'];
        $_SESSION['lastname'] = $allUserInfo['lastname'];
        $_SESSION['user_name'] = $allUserInfo['user_name'];
        $_SESSION['password'] = $allUserInfo['password'];
        $_SESSION['mail'] = $allUserInfo['mail'];
        $_SESSION['random_key'] = $random_key;
        $_SESSION['rank_name'] = $allUserInfo['rank_name'];
        $_SESSION['reward_name'] = $allUserInfo['reward_name'];
        $_SESSION['level_name'] = $allUserInfo['level_name'];
      } else {
        // ERROR : All user's infos not found
      }
    } else {
      // User's info already are in the $_SESSION so just start the session 
      session_start();
    }
  } else {
    // ERROR : Random key is not recognized
  }
} ?>
