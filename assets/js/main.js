import "../scss/main.scss";

window.addEventListener('DOMContentLoaded', function () {

    let clickCounter = 0;
    const navbarToggler = document.querySelector('.navbar-toggler');
    const blackBack = document.querySelector('.black-back');

    navbarToggler.addEventListener('click', function (event) {
        event.stopImmediatePropagation();

        const toggler = event.target.closest('.navbar-toggler');
        const isEven = clickCounter % 2 === 0;

        document.body.style.overflow = isEven ? 'hidden' : null;

        toggler.classList[isEven ? 'add' : 'remove']('is-active');

        blackBack.classList[isEven ? 'add' : 'remove']('show');

        clickCounter ++;

    });

});