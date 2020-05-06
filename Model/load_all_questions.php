<?php
function load_all_questions(){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql
    $statement = $db->prepare('SELECT `id`, `user_firstname`, `user_lastname`, `question`, `idea`, `answer`, `status`
    FROM `questions`');
    $statementValidity = $statement->execute();
    if ($statementValidity == true){
      return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
      return false;
    }
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
