"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workPlayer = document.getElementById('work-player');
    const muteBtn = document.querySelector('.mute-btn');

    let muteObject = {};

    Object.defineProperty(muteObject, 'muted', {
        set: function (value) {

            workPlayer.muted = value;

            muteBtn.classList.toggle('mute-btn_muted');
            muteBtn.classList.toggle('mute-btn_switched');
        }
    });

    workPlayer.addEventListener('click', function () {

        muteObject.muted = !workPlayer.muted;

    });

    muteBtn.addEventListener('click', () => {

        muteObject.muted = !muteBtn.classList.contains('mute-btn_muted');

    });

    const footer = document.body.querySelector('.footer');

    if (!footer) {

        return;

    }

    if (window.innerWidth < 768 && document.body.offsetHeight - footer.offsetHeight < window.innerHeight) {

        footer.classList.add('footer_fixed');
        footer.classList.add('footer_bottom_0');

    }

});
