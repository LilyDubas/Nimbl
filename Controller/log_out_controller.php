<?php
// If the logout button is pushed
if (isset($_GET['logOff'])){
  // If a session is not yet started, start one to edit it
  if(session_id() == '' || ! isset($_SESSION)) {
    session_start();
  }
  // Empty out the session
  $_SESSION = [];
  if (ini_get('session.use_cookies')) {
    // Set all session cookies to null and to expire 12 hours ago to delete them
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 43200, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
  }
  // Destroy session and close it
  session_destroy();
  session_write_close();
  // Delete the cookie for the random_key by setting its expiration date 1 hour ago
  setcookie('random_key', '', time() - 3600, '/');
  // Redirect to index
  header('Location: /');
} ?>
