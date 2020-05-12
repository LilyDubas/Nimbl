<?php
function update_question($questionID, $answer, $status, $adminID){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('UPDATE `questions` SET `answer` = :answer, `status` = :status, `admin_id` = :admin_id
    WHERE `id` = :id');
    $statement->bindParam(':answer', $answer, PDO::PARAM_STR);
    $statement->bindParam(':status', $status, PDO::PARAM_STR);
    $statement->bindParam(':admin_id', $adminID, PDO::PARAM_INT);
    $statement->bindParam(':id', $questionID, PDO::PARAM_INT);
    return $statement->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
