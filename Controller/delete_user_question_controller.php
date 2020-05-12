<?php
if (isset($_GET['deleteQuestion']) && ! empty($_GET['deleteQuestion'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        $questionID = (int) trim($_GET['deleteQuestion']);
        $questionID = filter_var($questionID, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($questionID, FILTER_VALIDATE_INT) && $questionID > 0){
          require '../Model/delete_question_admin.php';
          $deleteValidity = delete_question($questionID);
          if ($deleteValidity == true){
            // If deletion went well, reload all questions
            $questionList = load_all_questions();
            if ($questionList != false){
              // All questions found
              $questionsAvailable = true;
            } else {
              $questionsAvailable = false;
            }
            header('Location:?');
          }
        }
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
