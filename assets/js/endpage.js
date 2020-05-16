const finalScore = document.getElementById('finalScore');
const badgeName = document.getElementById('badgeName');
// Declare rewards text associated to the badges
var rewards = [];
rewards['vision'] = 'Oeil de Lynx';
rewards['temperature'] = 'Garder la tête froide';

// Get all variables in url
var url = (window.location.href).split('?');
var variables = url[1].toString().split('&');
var theme = ''; var score = 0;
// If two variables were found
if (variables.length == 2){
  // Get the theme and the score from the url and display them
  score = Number(variables[0].replace('score=', ''));
  theme = variables[1].replace('theme=', '');
  finalScore.innerText = score;
  badgeName.innerText = rewards[theme];
}
