<?php
// If the question form is sent
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendQuestion'])){
  $userID = null;
  // Check all inputs. If they are empty, set them as NULL
  isset($_POST['firstname']) && ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
  isset($_POST['lastname']) && ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
  ! empty(trim($_POST['question'])) ? $question = trim($_POST['question']) : $question = null;
  ! empty(trim($_POST['idea'])) ? $idea = trim($_POST['idea']) : $idea = null;
  // If firstname and/or lastname is empty, check the session storage if user is connected
  if (isset($_SESSION['id'])){
    $userID = (int) trim($_SESSION['id']);
    if ($firstname == null || $lastname == null){
      $firstname = trim($_SESSION['firstname']);
      $lastname = trim($_SESSION['lastname']);
    }
  }
  // If the user firstname, lastname and question aren't empty
  if ($firstname != null && $lastname != null && $question != null){
    // Sanitize all inputs
    $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
    $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    $question = filter_var($question, FILTER_SANITIZE_STRING);
    if ($idea != null){
      $idea = filter_var($idea, FILTER_SANITIZE_STRING);
    }
    if ($userID != null){
      $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    }
    // Validate all inputs
    $regExNames = '/^[a-zA-Z \x{00C0}-\x{00FF}"\'-]{1,25}$/u';
    $lastnameOK = preg_match($regExNames, $lastname);
    $firstnameOK = preg_match($regExNames, $firstname);
    $userIDOK = false;
    if ($userID != null){
      $userIDOK = filter_var($userID, FILTER_VALIDATE_INT);
    }
    if ($firstnameOK == true && $lastnameOK == true && ($userID == null || $userIDOK != false)){
      $firstname = strtolower($firstname);
      $lastname = strtolower($lastname);
      require '../Model/new_question.php';
      // If all values are valid, add new question in the database and get the return value in a variable
      $additionValidity = addNewQuestion($firstname, $lastname, $question, $idea, $userID);
      if ($additionValidity == true){
        // VALIDATION : Question added
      } else {
        // ERROR : Question not added, a problem was found with the database
      }
    }
    else {
      // One or more input is false
    }
  }
  else {
    // One input is empty
  }
} ?>
