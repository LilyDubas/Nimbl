<?php
// Add a question to the database
function addNewQuestion($firstname, $lastname, $question, $idea, $userID){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('INSERT INTO `questions` (`user_firstname`, `user_lastname`, `question`, `idea`, `user_id`)
    VALUES (:user_firstname, :user_lastname, :question, :idea, :user_id)');
    // Bind all parameters to values with the value's type associated
    $statement->bindParam(':user_firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':user_lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':question', $question, PDO::PARAM_STR);
    $statement->bindParam(':idea', $idea, PDO::PARAM_STR);
    $statement->bindParam(':user_id', $userID, PDO::PARAM_INT);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
  // Return the status variable
  return $statementValidity;
} ?>
