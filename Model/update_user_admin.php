<?php
// Update a user's info in the database
function updateUserInfo($userInfo){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('UPDATE `user` SET `firstname` = :firstname, `lastname` = :lastname, `user_name` = :user_name, `mail` = :mail
    WHERE `id` = :id');
    // Bind all parameters to values with the value's type associated
    $statement->bindParam(':firstname', $userInfo['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $userInfo['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':user_name', $userInfo['user_name'], PDO::PARAM_STR);
    $statement->bindParam(':mail', $userInfo['mail'], PDO::PARAM_STR);
    $statement->bindParam(':id', $userInfo['id'], PDO::PARAM_INT);
    // Execute the statement and return the value of the execute
    return $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
} ?>
