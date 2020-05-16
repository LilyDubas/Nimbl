<?php
// Load the quiz questions' from the database
function load_questions($theme){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('SELECT `title`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_answer`, `quiz_type`.`type`
    FROM `quiz` INNER JOIN `quiz_type` ON `quiz`.`id_quiz_type` = `quiz_type`.`id`
    WHERE `quiz`.`title` = :theme');
    // Bind the parameter to the value with the value's type associated
    $statement->bindParam(':theme', $theme, PDO::PARAM_STR);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
    // If the return value was true, get all values in an associative array
    if ($statementValidity == true){
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
