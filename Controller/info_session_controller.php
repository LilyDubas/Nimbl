<?php
// check if the cookie for the random key of the user is set and not empty
if (isset($_COOKIE['random_key']) && ! empty($_COOKIE['random_key'])){
  $random_key = trim($_COOKIE['random_key']);
  // sanitize and validate the random number indentifying the user
  $random_key = filter_var($random_key, FILTER_SANITIZE_NUMBER_INT);
  if (filter_var($random_key, FILTER_VALIDATE_INT)){
    // The cookie is valid
    if (empty($_COOKIE['PHPSESSID']) || ! isset($_SESSION['mail'])){
      // The session is empty or non existant
      require '../Model/user_info_to_session.php';
      $allUserInfo = get_all_user_infos($random_key);
      if ($allUserInfo != false){
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
        // Error loading user infos
      }
    } else {
      session_start();
    }
  } else {
    // Random key is not recognized
  }
}
?>
