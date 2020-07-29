"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workPlayer = document.getElementById('work-player');

    if (workPlayer) {

        workPlayer.addEventListener('click', function () {

            workPlayer.muted = !workPlayer.muted;

        });

        workPlayer.muted = true;

    }

    const muteBtn = document.querySelector('.mute-btn');

    if (muteBtn) {

        muteBtn.addEventListener('click', (event) => {

            const isMuted = muteBtn.classList.contains('mute-btn_muted');

            workPlayer.muted = !isMuted;

            muteBtn.classList.toggle('mute-btn_muted');
            muteBtn.classList.toggle('mute-btn_switched');

        });

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
