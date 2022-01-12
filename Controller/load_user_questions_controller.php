<?php
// Load all users' questions on admin page load
$questionsAvailable = true;
$questionList = [];
// Set the font color of the different status of the questions
$statusColor = ['pending' => 'text-info', 'cancelled' => 'text-danger', 'answered' => 'text-success'];
// Check if the user is valid and an admin
if (isset($_SESSION['userID']) && isset($_SESSION['rank_name'])) {
  if ($_SESSION['rank_name'] == 'admin') {
    $userID = (int) trim($_SESSION['userID']);
    $userID = filter_var($userID, FILTER_SANITIZE_NUMBER_INT);
    if (filter_var($userId, FILTER_VALIDATE_INT)) {
      require '../Model/load_all_questions.php';
      // Load all users from the database in an associative array
      $questionList = load_all_questions();
      if ($questionList != false) {
        // If all users' questions are found, display the table
        $questionsAvailable = true;
      } else {
        // ERROR : Users' questions not found
      }
    } else {
      // ERROR : User ID is not recognized
    }
  } else {
    // ERROR : User is not admin, need to redirect outside of this page
  }
} else {
  // ERROR : User is not connected, need to redirect outside of this page
}
