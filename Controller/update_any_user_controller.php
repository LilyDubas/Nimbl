<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmUpdate'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
        ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
        ! empty(trim($_POST['mail'])) ? $mail = trim($_POST['mail']) : $mail = null;
        ! empty(trim($_POST['level'])) ? $level = trim($_POST['level']) : $level = null;
        ! empty(trim($_POST['userID'])) ? $userID = (int) trim($_POST['userID']) : $userID = null;
        $userInfo = ['firstname'=>$firstname, 'lastname'=>$lastname, 'mail'=>$mail, 'level_name'=>$level, 'id'=>$userID];
        if (! in_array(null, $userInfo)){
          ! empty(trim($_POST['username'])) ? $username = trim($_POST['username']) : $username = null;
          $userInfo['user_name'] = $username;
          // Sanitize all inputs
          $userInfo['firstname'] = filter_var($userInfo['firstname'], FILTER_SANITIZE_STRING);
          $userInfo['lastname'] = filter_var($userInfo['lastname'], FILTER_SANITIZE_STRING);
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
          if ($username != null){
            if (! preg_match($regExNames, $userInfo['user_name'])) { $userInfo['user_name'] = null; }
          } else {
            // Avoid the null of the empty username be considered as null of bad value
            $userInfo['user_name'] = '00';
          }
          if (! filter_var($userInfo['mail'], FILTER_VALIDATE_EMAIL)) { $userInfo['mail'] = null; }
          if (! preg_match($regExLevels, $userInfo['level_name'])) { $userInfo['level_name'] = null; }
          if (! filter_var($userInfo['id'], FILTER_VALIDATE_INT)) { $userInfo['id'] = null; }
          if (! in_array(null, $userInfo)){
            if ($userInfo['user_name'] == '00') { $userInfo['user_name'] = null; }
            require '../Model/update_user_admin.php';
            $updateValidity = updateUserInfo($userInfo);
            if ($updateValidity == true){
              // If update went well, reload all users info
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
            // One or more input are not allowed
          }
        }
        else {
          // One or more input are empty
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
