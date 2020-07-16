"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workPlayer = document.getElementById('work-player');

    if (workPlayer) {

        workPlayer.addEventListener('click', function () {

            workPlayer.muted = !workPlayer.muted;

        });

        workPlayer.muted = true;

    }

    const footer = document.body.querySelector('.footer');

    if (!footer) {

        return;

    }

    if (window.innerWidth < 768 && document.body.offsetHeight - footer.offsetHeight < window.innerHeight) {

        footer.classList.add('footer_fixed');
        footer.classList.add('footer_bottom_0');

    }

});
