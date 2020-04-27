<?php
function load_all_users(){
  require_once 'params.php';
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // declarer la requête sql
    $statement = $db->prepare('SELECT `user`.`id`, `firstname`, `lastname`, `user_name`, `password`, `mail`, `rank`.`rank_name`, `rewards`.`reward_name`, `level`.`level_name`
    FROM `user` INNER JOIN `rank` ON `user`.`id_rank` = `rank`.`id`
    INNER JOIN `rewards` ON `user`.`id_rewards` = `rewards`.`id`
    INNER JOIN `level` ON `user`.`id_level` = `level`.`id`');
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
