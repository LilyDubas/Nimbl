const updateButtons = document.getElementsByClassName('updateUser');
const deleteButtons = document.getElementsByClassName('deleteUser');
const updateQuestion = document.getElementsByClassName('updateQuestion');

updateButtons.forEach(function(button){
  button.addEventListener('click', function(){
    var userId = (this.id).replace('update_', '');
    var mainTr = document.getElementById('mainUserInfo_' + userId);
    var formTr = document.getElementById('formUserInfo_' + userId);
    if (confirm('Voulez vous modifier cet utilisateur ?')){
      mainTr.style.display = 'none';
      formTr.style.display = 'table-row';
    }
  });
})
const userIDInput = document.getElementById('userIDInput');

deleteButtons.forEach(function(button){
  button.addEventListener('click', function(){
    var userID = (this.id).replace('delete_', '');
    userIDInput.value = userID;
  });
})
const closeHiddenTr = document.getElementsByClassName('closeHiddenTr');

updateQuestion.forEach(function(button){
  button.addEventListener('click', function(){
    var questionID = this.id;
    var question = document.getElementById('question_' + questionID).innerText;
    var idea = document.getElementById('idea_' + questionID).innerText;
    document.getElementById('questionDisplay_' + questionID).innerText = question;
    if (idea != '-'){
      document.getElementById('ideaDisplay_' + questionID).innerText = idea;
    }
    document.getElementById('answerQuestion_' + questionID).style.display = 'table-row';
  });
})
closeHiddenTr.forEach(function(button){
  button.addEventListener('click', function(){
    var questionID = (this.id).replace('close_', '');
    document.getElementById('answerQuestion_' + questionID).style.display = 'none';
  });
})
