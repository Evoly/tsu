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
        console.log('len=', len);
        if (len === 0) {
            const myModal = new bootstrap.Modal(document.getElementById('fail'));
            myModal.show();
            console.log('game over');
        }
    }, 500);
};