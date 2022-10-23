import balloonAnimate from './wrongAnswer.js';
import firework from './firework-start.js';
            const myModal = new bootstrap.Modal(document.getElementById('staticBackdrop2'));
            myModal.show();
console.log('var:', val);
//todo onload ??


import {
    Fireworks
} from './index.es.js'

const container = document.querySelector('#staticBackdrop2')
const fireworks = new Fireworks(container, {
    /* options */ })
fireworks.start()


// game logic: 
// const val will receive from html 
const word = val.toLowerCase().trim().split('');

const letters = document.querySelectorAll('.js-wordLetter');
const wordLentgh = letters.length;

const alphabet = document.querySelectorAll('.js-letter');
const alphabetLetter = document.querySelectorAll('.js-alphabetLetter');
const clickedLetters = [];

//const balloons = document.querySelectorAll('.balloon');

alphabet.forEach(item => item.addEventListener('click', function handleClick(e) {
    if (item.classList.contains('clicked')) {
        return;        
    };

    item.classList.add('clicked');
    const letter = item.querySelector('.js-alphabetLetter').textContent.toLowerCase();    

    if (word.includes(letter)) {
        clickedLetters.push(letter);
        item.querySelector('.yes').classList.add('show');
        word.forEach((item, index) => {
            if (item === letter) {
                letters[index].textContent = letter;
            }
        });
        if (clickedLetters.length === wordLentgh) {
            const myModal = new bootstrap.Modal(document.getElementById('staticBackdrop2'));
            myModal.show();
            //firework('staticBackdrop2');
            console.log('congratulation!');
        }

    } else {
        item.querySelector('.no').classList.add('show');
        balloonAnimate();
    }

}));

//------------------------------------------

/* 
balloons.forEach(item => item.addEventListener('click', function handleClick(e) {
    startAnimation(item);

})); */


// add fade to modal

