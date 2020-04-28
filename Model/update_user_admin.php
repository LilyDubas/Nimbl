<?php
function updateUserInfo($userInfo){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('UPDATE `user` SET `firstname` = :firstname, `lastname` = :lastname, `user_name` = :user_name, `mail` = :mail
    WHERE `id` = :id');
    $statement->bindParam(':firstname', $userInfo['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $userInfo['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':user_name', $userInfo['user_name'], PDO::PARAM_STR);
    $statement->bindParam(':mail', $userInfo['mail'], PDO::PARAM_STR);
    $statement->bindParam(':id', $userInfo['id'], PDO::PARAM_INT);
    return $statement->execute();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
