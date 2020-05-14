<?php
if (isset($_GET['logOff'])){
  // Empty out the session
  if(session_id() == '' || ! isset($_SESSION)) {
    // session isn't started
    session_start();
  }
  $_SESSION = [];
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
  }
  session_destroy();
  session_write_close();
  // Delete the cookie for the random_key by setting its expiration date 1 hour ago
  setcookie('random_key', '', time() - 3600, '/');
  header('Location: /');
} ?>
