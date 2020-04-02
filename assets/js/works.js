"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workSelector = '.works .work';
    const works = document.querySelectorAll(workSelector);

    works.forEach(function (work) {

        work.addEventListener('mouseenter', function (event) {

            const currentTarget = event.currentTarget;
            const target = currentTarget.closest('.work');

            works.forEach(function (otherWork) {

               if (otherWork != target) {
                   otherWork.classList.add('non-active');

                   otherWork.querySelector('.work__video').pause();
               }

            });

            target.querySelector('.work__video').play();

            event.stopImmediatePropagation();

        });

        work.addEventListener('mouseleave', function (event) {

            const currentTarget = event.currentTarget;
            const target = currentTarget.closest('.work');

            works.forEach(function (otherWork) {

                if (otherWork != target) {
                    otherWork.classList.remove('non-active');
                }

            });

            target.querySelector('.work__video').pause();

            event.stopImmediatePropagation();

        });

    });

});
