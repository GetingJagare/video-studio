import "../scss/main.scss";
import {shuffleArray} from './helpers';

window.addEventListener('DOMContentLoaded', function () {

    let clickCounter = 0;
    const navbarToggler = document.querySelector('.navbar-toggler');
    const blackBack = document.querySelector('.black-back');

    navbarToggler.addEventListener('click', function (event) {
        event.stopImmediatePropagation();

        const toggler = event.target.closest('.navbar-toggler');
        const isEven = clickCounter % 2 === 0;

        toggler.classList[isEven ? 'add' : 'remove']('is-active');

        blackBack.classList[isEven ? 'add' : 'remove']('show');

        clickCounter ++;

    });

    const shuffleBtn = document.querySelector('.shuffle-btn');
    const worksWrapper = document.querySelector('.works');

    if (shuffleBtn && worksWrapper) {

        shuffleBtn.addEventListener('click', (event) => {

            const shuffledWorks = shuffleArray([...worksWrapper.querySelectorAll('.work')]);

            worksWrapper.innerHTML = '';

            shuffledWorks.forEach((work, index) => {

                work.className = '';
                work.classList.add('work');

                if (index === 0) {
                    work.classList.add('work_first');
                }

                const isEven = index % 2 === 0;

                work.classList.add(`work_${isEven ? 'even' : 'odd'}`);

                worksWrapper.appendChild(work);

            });

        });

    }

});
