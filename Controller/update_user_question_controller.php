<?php
$updateValidity = false;
// If the answer question form is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateQuestion'])){
  // Check if the user is valid and an admin
  if (isset($_SESSION['id']) && isset($_SESSION['rank_name'])){
    if ($_SESSION['rank_name'] == 'admin'){
      $adminID = (int) trim($_SESSION['id']);
      $adminID = filter_var($adminID, FILTER_SANITIZE_NUMBER_INT);
      if (filter_var($adminID, FILTER_VALIDATE_INT)){
        // Check all inputs. If they are empty, set them as NULL
        ! empty(trim($_POST['questionID'])) ? $questionID = (int) trim($_POST['questionID']) : $questionID = null;
        ! empty(trim($_POST['answer'])) ? $answer = trim($_POST['answer']) : $answer = null;
        // If both the question ID and the answer are not empty
        if ($questionID != null && $answer != null){
          // Sanitize all inputs
          $questionID = filter_var($questionID, FILTER_SANITIZE_NUMBER_INT);
          $answer = filter_var($answer, FILTER_SANITIZE_STRING);
          if (filter_var($questionID, FILTER_VALIDATE_INT)){
            // If the question ID is valid, put the status of the question as answered
            $status = 'answered';
            require '../Model/update_question_admin.php';
            // Update the question in the database and get the return value in a variable
            $updateValidity = update_question($questionID, $answer, $status, $adminID);
            if ($updateValidity == true){
              // If update went well, reload all questions
              $questionList = load_all_questions();
              if ($questionList != false){
                // All questions found
                $questionsAvailable = true;
              } else {
                $questionsAvailable = false;
                // ERROR : All question not found, something went wrong with the database
              }
            }
            else {
              // ERROR : Update not valid, something went wrong with the database
            }
          }
          else {
            // ERROR : Question ID is not recognized
          }
        }
        else {
          // ERROR : One or more input are empty
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
    // ERROR : User is not connected, need to redirect outside of this page
  }
} ?>
