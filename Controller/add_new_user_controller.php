<?php
$displayNewUserForm = false;
if (isset($_GET['newUser'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        $displayNewUserForm = true;
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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmNewUser'])){
  $displayNewUserForm = false;
  ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
  ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
  ! empty(trim($_POST['username'])) ? $username = trim($_POST['username']) : $username = null;
  ! empty(trim($_POST['mail'])) ? $mail = trim($_POST['mail']) : $mail = null;
  ! empty(trim($_POST['password'])) ? $password = trim($_POST['password']) : $password = null;
  ! empty(trim($_POST['rank'])) ? $rank = trim($_POST['rank']) : $rank = null;
  if ($firstname != null && $lastname != null && $mail != null && $password != null){
    // Sanitize all inputs
    $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
    $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);
    $rank = filter_var($rank, FILTER_SANITIZE_NUMBER_INT);
    if ($username != null){
      $username = filter_var($username, FILTER_SANITIZE_STRING);
    }
    // Validate all inputs
    // \x{00C0}-\x{00FF} = all accented letters ( needs /u )
    $regExNames = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,50}$/u';
    $regExPassword = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&])?[\w!@#$%^&]{8,}$/';
    if (! preg_match($regExNames, $firstname)) { $firstname = null; }
    if (! preg_match($regExNames, $lastname)) { $lastname = null; }
    if (! filter_var($mail, FILTER_VALIDATE_EMAIL)) { $mail = null; }
    if (! preg_match($regExPassword, $password)) { $password = null; }
    if (! filter_var($rank, FILTER_VALIDATE_INT)) { $rank = null; }
    if ($username != null){
      if (! preg_match($regExNames, $username)) { $username = 'wrong'; }
    }
    if ($firstname != null && $lastname != null && $mail != null && $password != null && $rank != null && $username != 'wrong'){
      $password = password_hash($password, PASSWORD_BCRYPT);
      $randomKey = random_int(pow(10,6), pow(10,9));
      require '../Model/add_user_admin.php';
      $additionValidity = addUser($firstname, $lastname, $mail, $password, $username, $randomKey, $rank);
      if ($additionValidity == true){
        // If addition went well, reload all users info
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
      // One or more value are invalid
    }
  }
  else {
    // Some important info are important
  }
}
?>
