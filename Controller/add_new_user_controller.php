<?php
$displayNewUserForm = false;
// If the new user button is pushed
if (isset($_GET['newUser'])){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        // Display the form to enter a new user
        $displayNewUserForm = true;
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
}
// If the new user form is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmNewUser'])){
  // Hide the form
  $displayNewUserForm = false;
  // Check all inputs. If they are empty, set them as NULL
  ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
  ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
  ! empty(trim($_POST['username'])) ? $username = trim($_POST['username']) : $username = null;
  ! empty(trim($_POST['mail'])) ? $mail = trim($_POST['mail']) : $mail = null;
  ! empty(trim($_POST['password'])) ? $password = trim($_POST['password']) : $password = null;
  ! empty(trim($_POST['rank'])) ? $rank = trim($_POST['rank']) : $rank = null;
  // If the main infos aren't empty
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
    // If the main infos are valid
    if ($firstname != null && $lastname != null && $mail != null && $password != null && $rank != null && $username != 'wrong'){
      // Crypt the password the store it safely
      $password = password_hash($password, PASSWORD_BCRYPT);
      // Create a random key between 1 000 and 1 000 000 000
      $randomKey = random_int(pow(10,3), pow(10,9));
      require '../Model/add_user_admin.php';
      // Add the user to the database and get the return value in a variable
      $additionValidity = addUser($firstname, $lastname, $mail, $password, $username, $randomKey, $rank);
      if ($additionValidity == true){
        // If the addition went well, reload all users info
        $userList = load_all_users();
        if ($userList != false){
          // All users found
          $usersAvailable = true;
        } else {
          $usersAvailable = false;
          // ERROR : all users not found
        }
        // VALIDATION : new user added
      } else {
        // ERROR : New user not added, a problem was found with the database
      }
    }
    else {
      // ERROR : One or more value are invalid
    }
  }
  else {
    // ERROR : Some important info are invalid
  }
} ?>
