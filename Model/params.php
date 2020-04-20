<?php
define('USER', 'pierremonvoisin');
define('PASSWD', 'f0O91n5QftTYTCj');
define('HOST', 'localhost');
define('DB', 'Nimbl');

function connectDb() {
  $dsn = 'mysql:dbname=' . DB . ';host=' . HOST . ';charset=utf8';
  try {
    return new PDO($dsn, USER, PASSWD);
  } catch (PDOException $ex) {
    die('La connexion à la bd a échoué !'.$e->getCode());
  }
} ?>
