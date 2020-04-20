const finalScore = document.getElementById('finalScore');
const badgeName = document.getElementById('badgeName');
var rewards = [];
rewards['vision'] = 'oeil de Lynx';
rewards['espace'] = 'tête dans les étoiles';

variables = url[1].toString().split('&');
theme = ''; var score = 0;
if (variables.length == 2){
  score = Number(variables[0].replace('score=', ''));
  theme = variables[1].replace('theme=', '');
  finalScore.innerText = score;
  badgeName.innerText = rewards[theme];
}
