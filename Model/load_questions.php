<?php
function load_questions(){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('SELECT `quiz`.`id`, `title`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_answer`, `quiz_type`.`type`
    FROM `quiz` INNER JOIN `quiz_type` ON `quiz`.`id_quiz_type` = `quiz_type`.`id`');
    $statement->bindParam(':mail', $email, PDO::PARAM_STR);
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
}
?>
