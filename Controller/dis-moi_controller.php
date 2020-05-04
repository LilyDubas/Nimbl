<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendQuestion'])){
  $username = null;
  $userID = null;
  ! empty(trim($_POST['firstname'])) ? $firstname = trim($_POST['firstname']) : $firstname = null;
  ! empty(trim($_POST['lastname'])) ? $lastname = trim($_POST['lastname']) : $lastname = null;
  ! empty(trim($_POST['question'])) ? $question = trim($_POST['question']) : $question = null;
  ! empty(trim($_POST['idea'])) ? $idea = trim($_POST['idea']) : $idea = null;
  // if firstname or lastname is empty, check the session storage if user is connected
  if (isset($_SESSION['id'])){
    $username = trim($_SESSION['user_name']);
    $userID = (int) trim($_SESSION['id']);
    if ($firstname == null || $lastname == null){
      $firstname = trim($_SESSION['firstname']);
      $lastname = trim($_SESSION['lastname']);
    }
  }
  if ($firstname != null && $lastname != null && $question != null){

  }
  else {
    // One input is empty
  }
} ?>
