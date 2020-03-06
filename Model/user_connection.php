<?php
function check_user($email, $password){
  require 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('SELECT `email`, `password`, `lastname`, `firstname`, `random_key` FROM `user` WHERE `email` = :email');
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statementValidity = $statement->execute();
    if($statementValidity == true){
    $user_info = $statement->fetch(PDO::FETCH_ASSOC);
    return $user_info;
    }
    else {
      return false;
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
}
 ?>
