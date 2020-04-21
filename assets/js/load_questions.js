
// MOVE THIS FILE TO SPECIFIC QUIZ VIEW AND LOAD ONE QUIZ AT A TIME

var title = ''; var pastTitle = '';
var questionsLength = questions.length;
for (var i = 0; i < questionsLength; i++){
  title = questions[0].title + 'Questions';
  title = title.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
  if (title != pastTitle){
    pastTitle = title;
    questions[title] = [];
  }
  questions[title].push({question:questions[0].question, choice_1:questions[0].choice_1, choice_2:questions[0].choice_2, choice_3:questions[0].choice_3, choice_4:questions[0].choice_4, right_answer:Number(questions[0].right_answer)});
  questions.splice(0, 1);
}
console.log(questions);
