const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
var progressBarFull = document.getElementById('progressBarFull');
let currentQuestion = {};
let acceptingAnswers = true;
//initialize score
let scoreNum = null;
//initialize questionCounter
let questionCounter = 0;
let availableQuestions = [];

let questions = [
    {
        question: "Quel mot désigne une personne qui voit dans le noir?",
        choice1: "Héméralope",
        choice2: "Nyctalope",
        choice3: "Cyclope",
        answer: 2
    },
    {
        question: "Qu'est-ce qui se dilate ou se contracte selon l'intensité lumineuse?",
        choice1: "La rétine",
        choice2: "Les cônes",
        choice3: "La pupille",
        answer: 3
    },
    {
        question: "Quelles sont les photorecepteurs présents au centre de la rétine?",
        choice1: "Les cônes",
        choice2: "Les bâtonnets",
        choice3: "L'iris",
        answer: 1
    },
];
//constants
const CORRECT_BONUS = 10; //how much does the correct answer worth
const MAX_QUESTIONS = 3; // how much questions can a quiz have
function startGame() {
    questionCounter = 0; // make sure the game starts at 0
    // scoreNum = 0;
    availableQuestions = [...questions]; //spread each question of questions into an array ( " ... " is a spread operator)
    console.log(availableQuestions);
    getNewQuestion();
}

function getNewQuestion() {
        if (availableQuestions.length == 0 || questionCounter >= MAX_QUESTIONS){  // if there's no more available questions
            //go to the end page
            return window.location.assign('../View/endgame_view.php');
        }
        questionCounter++; //increment questionCounter
        progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;//displays how many available questions left
        progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}`+`%`; //update progress bar
        const questionIndex = Math.floor(Math.random()) * availableQuestions.length; //chose randomly a new question from availableQuestions
        currentQuestion = availableQuestions[questionIndex]; // gives a reference to the currentQuestion
        question.innerText = currentQuestion.question; //get the text of the question

        choices.forEach(choice => {
            const number = choice.dataset['number'];
            choice.innerText = currentQuestion['choice' + number];
        });
        availableQuestions.splice(questionIndex, 1);
        acceptingAnswers = true;

};
choices.forEach(choice => {
    choice.addEventListener('click', e => {  //e is a parameter for "event" argument
        if (!acceptingAnswers) return ;
        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];
        const classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';  //apply 'correct' or 'incorrect class wether if answer is correct or not
        if (classToApply === 'correct'){
            incrementScore(CORRECT_BONUS);
        }
        selectedChoice.parentElement.classList.add(classToApply);
        setTimeout(()=>{
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
            },900)

        console.log(classToApply);

    });
    incrementScore = num =>{
        scoreNum += num;
        scoreText.innerText = scoreNum;
    }
});

startGame();
