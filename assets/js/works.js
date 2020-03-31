"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workSelector = '.works .work';
    const works = document.querySelectorAll(workSelector);

    works.forEach(function (work) {

        work.addEventListener('mouseenter', function (event) {

            const currentTarget = event.currentTarget;
            const target = currentTarget.closest('.work');

            setTimeout(function () {

                $(target).find('.work-info').fadeIn(1000);

            }, 2000);

            works.forEach(function (otherWork) {

               if (otherWork != target) {
                   otherWork.style.filter = 'grayscale(100%)';

                   otherWork.querySelector('.work__video').pause();
               }

            });

            target.querySelector('.work__video').play();

            event.stopImmediatePropagation();

        });

        work.addEventListener('mouseleave', function (event) {

            const currentTarget = event.currentTarget;
            const target = currentTarget.closest('.work');

            $(target).find('.work-info').fadeOut(500);

            works.forEach(function (otherWork) {

                if (otherWork != target) {
                    otherWork.style.filter = 'grayscale(0)';
                }

            });

            target.querySelector('.work__video').pause();

            event.stopImmediatePropagation();

        });

    });

});
