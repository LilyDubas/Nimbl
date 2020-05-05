<?php
if (isset($_GET['deleteQuestion']) && ! empty($_GET['deleteQuestion'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        $questionID = trim($_GET['deleteQuestion']);
        var_dump($questionID);
      }
      else {
        // User ID is not recognized
      }
    }
    else {
      // User is not admin, need to redirect outside of this page
    }
  }
} ?>
