<?php
define('USER', 'LilyD');
define('PASSWD', 'Iw4nt2break3');
define('HOST', 'localhost');
define('DB', 'Nimbl');

function connectDb() {
  $dsn = 'mysql:dbname=' . DB . ';host=' . HOST . ';charset=utf8';
  try {
    return new PDO($dsn, USER, PASSWD);
  } catch (PDOException $ex) {
    die('La connexion à la bd a échoué !');
  }
} ?>
