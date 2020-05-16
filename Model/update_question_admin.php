<?php
// Update a question with the answer in the database
function update_question($questionID, $answer, $status, $adminID){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with parameters
    $statement = $db->prepare('UPDATE `questions` SET `answer` = :answer, `status` = :status, `admin_id` = :admin_id
    WHERE `id` = :id');
    // Bind all parameters to values with the value's type associated
    $statement->bindParam(':answer', $answer, PDO::PARAM_STR);
    $statement->bindParam(':status', $status, PDO::PARAM_STR);
    $statement->bindParam(':admin_id', $adminID, PDO::PARAM_INT);
    $statement->bindParam(':id', $questionID, PDO::PARAM_INT);
    // Execute the statement and return the value of the execute
    return $statement->execute();
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE SECURED
    echo $ex->getMessage();
  }
} ?>
