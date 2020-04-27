"use strict";

import "../scss/showreel.scss";

function fade(el, direction = 'in', time = 400, delay = 0, easing = 'ease-in-out') {
    return new Promise(function (resolve, reject) {

        setTimeout(function () {

            el.style.opacity = direction === 'in' ? 0 : 1;

            if (direction === 'in') {

                el.style.display = 'block';
                el.style.visibility = 'visible';

            }

            resolve();

        }, delay);

    }).then(function () {

       return new Promise(function (resolve, reject) {

           setTimeout(function () {

               el.style.transition = `all ${time}ms ${easing}`;
               el.style.opacity = direction === 'in' ? 1 : 0;

               if (direction === 'out') {

                   el.style.visibility = 'hidden';

               }

               resolve(el);

           }, time);

       });

    });

}

function fadeIn(el, time, delay) {
    return fade(el, 'in', time, delay);
}

function fadeOut(el, time, delay) {
    return fade(el, 'out', time, delay);
}

window.addEventListener('DOMContentLoaded', function (event) {
    const showreelElement = document.body.querySelector('.showreel');
    const syndicateLogo = document.body.querySelector('.syndicate-logo');
    const syndicateLogLine = document.body.querySelector('.syndicate-logline');
    const chevron = document.body.querySelector('.chevron');

    let cancelShowreelAnimations = false;
    let showreelScrollCounter = 0;

    function startShowreelAnimations() {

        if (!cancelShowreelAnimations) {

            fadeIn(syndicateLogo, 1000, 1000);
            fadeOut(syndicateLogo, 1000, 6000);

            fadeIn(syndicateLogLine, 1000, 6000);

            fadeIn(chevron, 1000, 6000);

        }
    }


    function scrollHelper(e) {
        cancelShowreelAnimations = true;

        showreelElement.style.setProperty('--height', 0);

        setTimeout(function () {
            showreelElement.style.display = 'none';

            document.body.classList.remove('showreel-scrolling');

        }, 1500);

        fadeOut(syndicateLogo, 400, 500);
        fadeOut(syndicateLogLine, 400, 500);
        fadeOut(chevron, 400, 500);
    }

    window.addEventListener('scroll', function (event) {

        if (!showreelScrollCounter) {

            showreelScrollCounter ++;

            document.body.classList.add('showreel-scrolling');

            scrollHelper.apply(this, event);
        }

    });

    chevron.addEventListener('click', function () {
        scrollHelper(null);
    });

    startShowreelAnimations();
});
