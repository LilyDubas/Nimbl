<?php
// Delete user from the database
function delete_user($userID){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with a parameter
    $statement = $db->prepare('DELETE FROM `user` WHERE `id` = :id');
    // Bind the parameter to the value with the value's type associated
    $statement->bindParam(':id', $userID, PDO::PARAM_INT);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
  // Return the status variable
  return $statementValidity;
} ?>
