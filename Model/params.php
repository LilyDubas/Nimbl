<?php
// Declare constants of the parameters to connect to the database
define('USER', 'Lily');
define('PASSWD', 'Iw4nt2break3');
define('HOST', 'localhost');
define('DB', 'Nimbl');

function connectDb()
{
  // Declare the DSN with the database name, the horst and the encoding
  $dsn = 'mysql:dbname=' . DB . ';host=' . HOST . ';charset=utf8';
  try {
    // Set a new PDO Statement as a connection to the database with the user name and password
    return new PDO($dsn, USER, PASSWD);
  } catch (PDOException $ex) {
    // If the connection failed, display the error code ( too risky ? )
    die('La connexion à la bd a échoué !' . $ex->getCode());
  }
}
