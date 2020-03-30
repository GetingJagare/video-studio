"use strict";

window.addEventListener('DOMContentLoaded', function (event) {
    const showreelElement = document.body.querySelector('.showreel');

    let cancelShowreelAnimations = false;
    let showreelScrollCounter = 0;

    function startShowreelAnimations() {
        setTimeout(function () {
            if (!cancelShowreelAnimations) {
                $(".syndicate-logo").fadeIn(1000);
            }
        }, 1000);

        setTimeout(function () {
            if (!cancelShowreelAnimations) {
                $(".syndicate-logo").fadeOut(1000);
            }
        }, 6000);

        setTimeout(function () {
            if (!cancelShowreelAnimations) {
                $(".syndicate-logline").fadeIn(1000);
            }
        }, 6000);

        setTimeout(function () {
            if (!cancelShowreelAnimations) {
                $(".chevron").fadeIn(1000);
            }
        }, 6000);
    }


    function scrollHelper(e) {
        cancelShowreelAnimations = true;

        showreelElement.style.setProperty('--height', 0);

        setTimeout(function () {
            $(showreelElement).hide();

            document.body.classList.remove('showreel-scrolling');

        }, 1500);

        setTimeout(function() {
            $(".syndicate-logo").fadeOut();
            $(".syndicate-logline").fadeOut();
            $(".chevron").fadeOut();
        }, 500);
    }

    window.addEventListener('scroll', function (event) {

        if (!showreelScrollCounter) {

            showreelScrollCounter ++;

            document.body.classList.add('showreel-scrolling');

            scrollHelper.apply(this, event);
        }

    });

    $(".chevron").click(function () {
        scrollHelper(null);
    });

    startShowreelAnimations();
});
