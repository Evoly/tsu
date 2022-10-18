const operations = document.querySelector('.calc-2__form');
const buttonList = operations.querySelectorAll('.js-btn');

const input = document.querySelector('.js-input');
console.log('operations:', input, buttonList);

function startAnimation(el) {
    el.classList.add('animated');
        setTimeout(() => {
            el.classList.remove('animated');
        }, 600);
    
}

buttonList.forEach(item => item.addEventListener('click', function handleClick(e) {
    startAnimation(item);
    input.value += item.textContent;
    input.focus();

}));

input.addEventListener('input', function () {
    let symbol = input.value[input.value.length - 1];
    const elem = [...buttonList].filter(item => item.value === symbol);

    startAnimation(elem[0]);
    
});