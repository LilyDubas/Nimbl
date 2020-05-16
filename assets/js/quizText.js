// Declare the text associated with the quiz theme
const visionText = {
  mainTitle:'La vision',
  description:'Teste tes connaissances sur l\'oeil et la vision, et remporte le badge "oeil de Lynx!"',
  logo:'fas fa-eye',
  secondaryTitle:'L\'oeil et la vision'
}
const temperatureText = {
  mainTitle:'La Température',
  description:'Découvre comment fonctionne la température avec ce quiz, n\'oublie pas de "garder la tête froide" !',
  logo:'fab fa-hotjar',
  secondaryTitle:'La température dans le monde'
}
const logo = document.getElementById('titleLogo');
const mainTitle = document.getElementById('mainTitle');
const description = document.getElementById('description');
const secondaryTitle = document.getElementById('secondaryTitle');


// Display related text on page load
var quizText = eval(quizTheme + 'Text');
mainTitle.innerText = quizText.mainTitle;
description.innerText = quizText.description;
logo.className = quizText.logo;
secondaryTitle.innerText = quizText.secondaryTitle;
