const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
var progressBarFull = document.getElementById('progressBarFull');
var currentQuestion = {};
var acceptingAnswers = true;
// initialize score
var scoreNum = 0;
// initialize questionCounter
var questionCounter = 0;
var availableQuestions = [];

// constants
const CORRECT_BONUS = 10; // how much is the correct answer worth
const MAX_QUESTIONS = 3; // how many questions can a quiz have
function startGame(questions) {
  questionCounter = 0; // make sure the game starts at 0
  scoreNum = 0;
  availableQuestions = [...questions]; // spread each question of questions into an array (" ... " is a spread operator)
  getNewQuestion();
}

function getNewQuestion() {
  if (availableQuestions.length == 0 || questionCounter >= MAX_QUESTIONS){  // if there's no more available questions
    // go to the end page
    return window.location.assign('../View/endgame_view.php?score=' + scoreNum + '&theme=' + quizTheme);
  }
  questionCounter++; // increment questionCounter
  scoreText.innerText = scoreNum;
  progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`; // displays how many available questions left
  progressBarFull.style.width = `${Math.floor((questionCounter / MAX_QUESTIONS) * 100)}`+`%`; // update progress bar
  var questionIndex = Math.floor(Math.random() * availableQuestions.length); // chose randomly a new question from availableQuestions
  currentQuestion = availableQuestions[questionIndex]; // gives a reference to the currentQuestion
  question.innerText = currentQuestion.question; // get the text of the question

  choices.forEach(choice => {
    var number = choice.dataset.number;
    choice.innerText = currentQuestion['choice_' + number];
  });
  availableQuestions.splice(questionIndex, 1);
  acceptingAnswers = true;
}
choices.forEach(choice => {
  var incrementScore = num =>{
    scoreNum += num;
    scoreText.innerText = scoreNum;
  };
  choice.addEventListener('click', e => {  // e is a parameter for "event" argument
    if (!acceptingAnswers) return ;
    acceptingAnswers = false;
    var selectedChoice = e.target;
    var selectedAnswer = selectedChoice.dataset.number;
    var classToApply = selectedAnswer == currentQuestion.right_answer ? 'correct' : 'incorrect';  // apply 'correct' or 'incorrect class wether if answer is correct or not
    if (classToApply === 'correct'){
      incrementScore(CORRECT_BONUS);
    }
    selectedChoice.parentElement.classList.add(classToApply);
    setTimeout(()=>{
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 900);
    // console.log(classToApply);

  });
});
// Get the name of the current file from the url
var current_file = (window.location.pathname.split('/')).pop();
if (current_file == 'quiz_game_view.php'){
  // If the page is of a quiz, start the game with the associated questions
  startGame(questions)
}
