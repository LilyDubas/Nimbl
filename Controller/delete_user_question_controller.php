<?php
// If the " delete question " button is pushed
if (isset($_GET['deleteQuestion']) && ! empty($_GET['deleteQuestion'])){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        // Sanitize and validate the question ID
        $questionID = (int) trim($_GET['deleteQuestion']);
        $questionID = filter_var($questionID, FILTER_SANITIZE_NUMBER_INT);
        if (filter_var($questionID, FILTER_VALIDATE_INT) && $questionID > 0){
          require '../Model/delete_question_admin.php';
          // If the ID is valid, delete the question in the database
          $deleteValidity = delete_question($questionID);
          if ($deleteValidity == true){
            // If the deletion went well, reload all questions
            $questionList = load_all_questions();
            if ($questionList != false){
              // All questions found
              $questionsAvailable = true;
            } else {
              $questionsAvailable = false;
              // ERROR : all users not found
              return;
            }
            // VALIDATION : Question is deleted
            header('Location:?');
          }
          else {
            // ERROR : Question is not deleted, a problem was found with the database
          }
        }
        else {
          // ERROR : Question ID is invalid
        }
      }
      else {
        // ERROR : User ID is not recognized
      }
    }
    else {
      // ERROR : User is not admin, need to redirect outside of this page
    }
  }
  else {
    // ERROR : User is not connected
  }
} ?>
