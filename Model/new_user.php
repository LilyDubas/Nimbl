<?php
function add_new_user($email, $password, $lastname, $firstname,$random_key){
  require 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $password = password_hash($password, PASSWORD_DEFAULT);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('INSERT INTO `user`(`email`, `password`, `lastname`, `firstname`, `random_key`) VALUES (:email, :password, :lastname, :firstname, :random_key)');
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $statement->bindParam(':random_key', $random_key, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
  return $statementValidity;
}
?>
