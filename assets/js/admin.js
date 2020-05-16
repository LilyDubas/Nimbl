// Get all buttons with their class
const updateButtons = document.getElementsByClassName('updateUser');
const deleteButtons = document.getElementsByClassName('deleteUser');
const updateQuestion = document.getElementsByClassName('updateQuestion');

// Buttons to update the user's infos
updateButtons.forEach(function(button){
  button.addEventListener('click', function(){
    // Get the id of the user from the id of the button
    var userId = (this.id).replace('update_', '');
    // Get the main <tr> and the form <tr> of the user
    var mainTr = document.getElementById('mainUserInfo_' + userId);
    var formTr = document.getElementById('formUserInfo_' + userId);
    // If the user confirm to update the user, hide the main <tr> and display the form
    if (confirm('Voulez vous modifier cet utilisateur ?')){
      mainTr.style.display = 'none';
      formTr.style.display = 'table-row';
    }
  });
});
const userIDInput = document.getElementById('userIDInput');

// Buttons to delete a user
deleteButtons.forEach(function(button){
  button.addEventListener('click', function(){
    // Get the id of the user from the id of the button
    var userID = (this.id).replace('delete_', '');
    // Set the value of the hidden input as the id of the user
    userIDInput.value = userID;
  });
});
const closeHiddenTr = document.getElementsByClassName('closeHiddenTr');

updateQuestion.forEach(function(button){
  button.addEventListener('click', function(){
    // Get the id of the question from the id of the button
    var questionID = this.id;
    // Get the question and the idea of the question
    var question = document.getElementById('question_' + questionID).innerText;
    var idea = document.getElementById('idea_' + questionID).innerText;
    // Set the question as the title atop the answer input
    document.getElementById('questionDisplay_' + questionID).innerText = question;
    // If the idea isn't empty, display it under the question
    if (idea != '-'){
      document.getElementById('ideaDisplay_' + questionID).innerText = idea;
    }
    // Display the <tr> to answer the question
    document.getElementById('answerQuestion_' + questionID).style.display = 'table-row';
  });
});
// Close the answer section under a question
closeHiddenTr.forEach(function(button){
  button.addEventListener('click', function(){
    // Get the id of the question from the id of the button
    var questionID = (this.id).replace('close_', '');
    // Hide the <tr> to answer the question
    document.getElementById('answerQuestion_' + questionID).style.display = 'none';
  });
});
