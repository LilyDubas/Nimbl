<?php
function add_new_user($email, $password, $lastname, $firstname){
  require 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $password = password_hash($password, PASSWORD_DEFAULT);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('INSERT INTO `user`(`email`, `password`, `lastname`, `firstname`) VALUES (:email, :password, :lastname, :firstname)');
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $statementValidity = $statement->execute();
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
  return $statementValidity;
}
?>
