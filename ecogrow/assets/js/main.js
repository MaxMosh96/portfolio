const icons = document.querySelector('#icons');
let thin = document.querySelector('.bx-user');
let thick = document.querySelector('.bxs-user');

icons.onmouseover = function changeIcon() {
    if (thin.classList.contains('active')) {
        thin.classList.remove('active');
        thick.classList.add('active');
    } else {
        thick.classList.remove('active');
        thin.classList.add('active');
    }
};
