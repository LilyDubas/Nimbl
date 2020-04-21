<?php
function get_all_user_infos($random_key){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql avec des paramètres
    $statement = $db->prepare('SELECT `user`.`id`, `firstname`, `lastname`, `user_name`, `password`, `mail`, `rank`.`rank_name`, `rewards`.`reward_name`, `level`.`level_name`
    FROM `user` INNER JOIN `rank` ON `user`.`id_rank` = `rank`.`id`
    INNER JOIN `rewards` ON `user`.`id_rewards` = `rewards`.`id`
    INNER JOIN `level` ON `user`.`id_level` = `level`.`id`
    WHERE `random_key` = :random_key');
    // associe la random_key à sa valeur en spécifiant le type ( INT )
    $statement->bindParam(':random_key', $random_key, PDO::PARAM_INT);
    $statementValidity = $statement->execute();
    // si toutes les infos de l'utilisateurs ont étaient récupéré, les fetch dans un tableau associatif
    if ($statementValidity == true){
      return $statement->fetch(PDO::FETCH_ASSOC);
    }
    // sinon, renvoie false
    else {
      return false;
    }
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }
} ?>
