<?php
function addNewQuestion($firstname, $lastname, $question, $idea, $userID){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('INSERT INTO `questions` (`user_firstname`, `user_lastname`, `question`, `idea`, `user_id`) VALUES (:user_firstname, :user_lastname, :question, :idea, :user_id)');
    $statement->bindParam(':user_firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':user_lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':question', $question, PDO::PARAM_STR);
    $statement->bindParam(':idea', $idea, PDO::PARAM_STR);
    $statement->bindParam(':user_id', $userID, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
  return $statementValidity;
} ?>
