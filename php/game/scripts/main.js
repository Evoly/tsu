import balloonAnimate from './wrongAnswer.js';
import firework from './firework-start.js';

console.log('var:', val);
//todo onload ??

// game logic: 
// const val will receive from html 
const word = val.toLowerCase().trim().split('');

const letters = document.querySelectorAll('.js-wordLetter');
const wordLentgh = letters.length;
console.log('wordLength', wordLentgh);

const alphabet = document.querySelectorAll('.js-letter');
const clickedLetters = [];

alphabet.forEach(item => item.addEventListener('click', function handleClick(e) {
    if (item.classList.contains('clicked')) {
        return;        
    };

    item.classList.add('clicked');
    const letter = item.querySelector('.js-alphabetLetter').textContent.toLowerCase();    

    if (word.includes(letter)) {
        item.querySelector('.yes').classList.add('show');
        word.forEach((item, index) => {
            if (item === letter) {
                clickedLetters.push(letter);
                letters[index].textContent = letter;
            }
        });
        if (clickedLetters.length === wordLentgh) {
            const myModal = new bootstrap.Modal(document.getElementById('success'));
            myModal.show();
            firework('success');
        }

    } else {
        item.querySelector('.no').classList.add('show');
        balloonAnimate();
    }

}));


// todo: add fade to modal

