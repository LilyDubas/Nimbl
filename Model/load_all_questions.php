<?php
// Load all the users' questions from the database
function load_all_questions(){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the SQL statement
    $statement = $db->prepare('SELECT `id`, `user_firstname`, `user_lastname`, `question`, `idea`, `answer`, `status`
    FROM `questions`');
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
    if ($statementValidity == true){
      // If the return value was true, get all values in an associative array
      return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
      return false;
    }
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
} ?>
