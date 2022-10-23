export default () => {
    const node = document.querySelectorAll('.balloon');
    let nodeLength = node.length;
    console.log('node length', nodeLength, node);

    startAnimation(node[nodeLength - 1], nodeLength);

};

function startAnimation(el, len) {
    el.classList.add('animated');
    setTimeout(() => {
        el.remove();
        len -= 1;
        if (len === 0) {
            console.log('game over');
        }
    }, 2000);
};