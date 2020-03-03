<?php
define('USER', 'LilyD');
define('PASSWD', 'Iw4nt2break3');
define('HOST', 'localhost');
define('DB', 'Nimbl');


function connectDb() {
  $dsn = 'mysql:dbname=' . DB . ';host=' . HOST. ';charset=utf8';
  try {
    $db = new PDO($dsn, USER, PASSWD);
    return $db;
  } catch (Exception $ex) {
    die('La connexion à la bd a échoué !');
  }
}
?>
