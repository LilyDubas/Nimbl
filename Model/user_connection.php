<?php
// Get user's info from the database, if it exist
function check_user($email, $password){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with a parameter
    $statement = $db->prepare('SELECT `id`, `mail`, `password`, `lastname`, `firstname`, `random_key` FROM `user` WHERE `mail` = :mail');
    // Bind the parameter to a value with the value's type associated
    $statement->bindParam(':mail', $email, PDO::PARAM_STR);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
    // If the return value was true, get all values in an associative array
    if ($statementValidity == true){
      $user_info = $statement->fetch(PDO::FETCH_ASSOC);
      return $user_info;
    }
    else {
      return false;
    }
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
} ?>
