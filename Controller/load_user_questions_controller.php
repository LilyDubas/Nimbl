<?php
$questionsAvailable = false; $questionList = [];
$statusColor = ['pending'=>'text-info','cancelled'=>'text-danger','completed'=>'text-success'];
if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
  if ($_SESSION['rank_name'] == 'admin'){
    $userId = (int) trim($_SESSION['id']);
    $userId = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userId, FILTER_VALIDATE_INT)){
      require '../Model/load_all_questions.php';
      $questionList = load_all_questions();
      if ($questionList != false){
        // All questions found
        $questionsAvailable = true;
      }
    }
    else {
      // User ID is not recognized
    }
  }
  else {
    // User is not admin, need to redirect outside of this page
  }
} ?>
