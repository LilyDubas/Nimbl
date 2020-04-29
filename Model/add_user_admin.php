<?php
function addUser($firstname, $lastname, $mail, $password, $username, $randomKey, $rank){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $password = password_hash($password, PASSWORD_BCRYPT);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('INSERT INTO `user`(`firstname`, `lastname`, `user_name`, `password`, `mail`, `random_key`, `id_rank`) VALUES (:firstname, :lastname, :user_name, :password, :mail, :random_key, :id_rank)');
    $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':user_name', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':mail', $mail, PDO::PARAM_STR);
    $statement->bindParam(':random_key', $randomKey, PDO::PARAM_INT);
    $statement->bindParam(':id_rank', $rank, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
  return $statementValidity;
} ?>
