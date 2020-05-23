<?php
$quizTheme = '';
// Check if the theme of the quiz is set in the URL
if (isset($_GET['theme']) && ! empty($_GET['theme'])){
  // Get the quiz theme from the URL
  $quizTheme = trim($_GET['theme']);
  $quizTheme = filter_var($quizTheme, FILTER_SANITIZE_STRING);
  require '../Model/load_questions.php';
  // Get the questions from the database in a variable
  $questions = load_questions($quizTheme);
  if ($questions != false){
    // All questions found
  }
  else {
    // ERROR : questions not found, need to redirect out
  }
}
else {
  // ERROR : No theme found, need to redirect out
} ?>
