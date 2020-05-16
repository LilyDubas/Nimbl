<?php
// Update a user's info in the database
function update_user_info($userID, $password, $user_name, $setSQL, $bindParams){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare("UPDATE `user` SET $setSQL WHERE `id` = :id");
    // Bind all parameters depending on the number of parameters to values with the value's type associated
    if ($bindParams == 'username and password'){
      $statement->bindParam(':user_name', $user_name, PDO::PARAM_STR);
      $statement->bindParam(':password', $password, PDO::PARAM_STR);
    }
    else if ($bindParams == 'username'){
      $statement->bindParam(':user_name', $user_name, PDO::PARAM_STR);
    }
    else if ($bindParams == 'password'){
      $statement->bindParam(':password', $password, PDO::PARAM_STR);
    }
    $statement->bindParam(':id', $userID, PDO::PARAM_INT);
    // Execute the statement and return the value of the execute
    return $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
} ?>
