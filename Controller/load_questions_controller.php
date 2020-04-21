<?php
if (! isset($_SESSION['questions']) || empty($_SESSION['questions'])){
  require '../Model/load_questions.php';
  $questions = load_questions();
  $_SESSION['questions'] = $questions;
} ?>
