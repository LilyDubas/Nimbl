<?php
$quizTheme = '';
if (isset($_GET['theme']) && ! empty($_GET['theme'])){
  $quizTheme = trim($_GET['theme']);
  $quizTheme = filter_var($quizTheme, FILTER_SANITIZE_STRING);
  if (! isset($_SESSION['questions']) || empty($_SESSION['questions'])){
    require '../Model/load_questions.php';
    $questions = load_questions($quizTheme);
  }
}
?>
