<?php
$updateValidity = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateQuestion'])){
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        ! empty(trim($_POST['questionID'])) ? $questionID = (int) trim($_POST['questionID']) : $questionID = null;
        ! empty(trim($_POST['answer'])) ? $answer = trim($_POST['answer']) : $answer = null;
        if ($questionID != null && $answer != null){
          $questionID = filter_var($questionID, FILTER_SANITIZE_NUMBER_INT);
          $answer = filter_var($answer, FILTER_SANITIZE_STRING);
          if (filter_var($questionID, FILTER_VALIDATE_INT)){
            $status = 'answered';
            require '../Model/update_question_admin.php';
            $updateValidity = update_question($questionID, $answer, $status, $adminID);
            if ($updateValidity == true){
              // If update went well, reload all questions
              $questionList = load_all_questions();
              if ($questionList != false){
                // All questions found
                $questionsAvailable = true;
              } else {
                $questionsAvailable = false;
              }
            }
          }
          else {
            // Question ID is not recognized
          }
        }
        else {
          // One or more input are empty
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
}
?>
