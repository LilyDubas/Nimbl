<?php
function delete_question($questionID){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('DELETE FROM `questions` WHERE `id` = :id');
    $statement->bindParam(':id', $questionID, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
    return $statementValidity;
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
