<?php
function delete_user($userID){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('DELETE FROM `user` WHERE `id` = :id');
    $statement->bindParam(':id', $userID, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
    return $statementValidity;
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
