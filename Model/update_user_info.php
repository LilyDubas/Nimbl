<?php
function update_user_info($userID, $password, $user_name, $setSQL, $bindParams){
  require_once 'params.php';
  $db = connectDb();
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare("UPDATE `user` SET $setSQL WHERE `id` = :id");
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
    return $statement->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
