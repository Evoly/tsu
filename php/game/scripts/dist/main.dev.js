"use strict";

var _wrongAnswer = _interopRequireDefault(require("./wrongAnswer.js"));

var _fireworkStart = _interopRequireDefault(require("./firework-start.js"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

console.log('var:', val); //todo onload ??
// game logic: 
// const val will receive from html 

var word = val.toLowerCase().trim().split('');
var letters = document.querySelectorAll('.js-wordLetter');
var wordLentgh = letters.length;
console.log('wordLength', wordLentgh);
var alphabet = document.querySelectorAll('.js-letter');
var clickedLetters = [];
alphabet.forEach(function (item) {
  return item.addEventListener('click', function handleClick(e) {
    if (item.classList.contains('clicked')) {
      return;
    }

    ;
    item.classList.add('clicked');
    var letter = item.querySelector('.js-alphabetLetter').textContent.toLowerCase();

    if (word.includes(letter)) {
      item.querySelector('.yes').classList.add('show');
      word.forEach(function (item, index) {
        if (item === letter) {
          clickedLetters.push(letter);
          letters[index].textContent = letter;
        }
      });

      if (clickedLetters.length === wordLentgh) {
        var myModal = new bootstrap.Modal(document.getElementById('success'));
        myModal.show();
        (0, _fireworkStart["default"])('success');
      }
    } else {
      item.querySelector('.no').classList.add('show');
      (0, _wrongAnswer["default"])();
    }
  });
}); // todo: add fade to modal