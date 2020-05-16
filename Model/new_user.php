<?php
// Add new user info to the database
function add_new_user($email, $password, $lastname, $firstname,$random_key){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Crypt the password the store it safely
  $password = password_hash($password, PASSWORD_BCRYPT);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('INSERT INTO `user`(`mail`, `password`, `lastname`, `firstname`, `random_key`) VALUES (:mail, :password, :lastname, :firstname, :random_key)');
    // Bind all parameters to values with the value's type associated
    $statement->bindParam(':mail', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':random_key', $random_key, PDO::PARAM_INT);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
  // Return the status variable
  return $statementValidity;
} ?>
