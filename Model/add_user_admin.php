<?php
// Add new user info to the database
function addUser($firstname, $lastname, $mail, $password, $username, $randomKey, $rank){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Crypt the password the store it safely
  $password = password_hash($password, PASSWORD_BCRYPT);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('INSERT INTO `user` (`firstname`, `lastname`, `user_name`, `password`, `mail`, `random_key`, `id_rank`)
    VALUES (:firstname, :lastname, :user_name, :password, :mail, :random_key, :id_rank)');
    // Bind all parameters to values with the value's type associated
    $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':user_name', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':mail', $mail, PDO::PARAM_STR);
    $statement->bindParam(':random_key', $randomKey, PDO::PARAM_INT);
    $statement->bindParam(':id_rank', $rank, PDO::PARAM_INT);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
  // Return the status variable
  return $statementValidity;
} ?>
