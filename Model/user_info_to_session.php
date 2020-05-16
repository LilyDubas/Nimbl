<?php
// Get all user's info from the database
function get_all_user_infos($random_key){
  require_once 'params.php';
  // Connect to the database
  $db = connectDb();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    // Prepare the statement with a parameter
    $statement = $db->prepare('SELECT `user`.`id`, `firstname`, `lastname`, `user_name`, `password`, `mail`, `rank`.`rank_name`, `rewards`.`reward_name`, `level`.`level_name`
    FROM `user` INNER JOIN `rank` ON `user`.`id_rank` = `rank`.`id`
    INNER JOIN `rewards` ON `user`.`id_rewards` = `rewards`.`id`
    INNER JOIN `level` ON `user`.`id_level` = `level`.`id`
    WHERE `random_key` = :random_key');
    // Bind the parameter to a value with the value's type associated
    $statement->bindParam(':random_key', $random_key, PDO::PARAM_INT);
    // Execute the statement and get the return value in a variable
    $statementValidity = $statement->execute();
    // If the return value was true, get all values in an associative array
    if ($statementValidity == true){
      return $statement->fetch(PDO::FETCH_ASSOC);
    }
    else {
      return false;
    }
  } catch (PDOException $ex) {
    // NEED TO CHANGE THE echo TO SOMETHING MORE 
    echo $ex->getMessage();
  }
} ?>
