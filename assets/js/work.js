"use strict";

window.addEventListener('DOMContentLoaded', function () {

    const workPlayer = document.getElementById('work-player');

    if (workPlayer) {

        workPlayer.addEventListener('click', function () {

            workPlayer.muted = !workPlayer.muted;

        });

        workPlayer.muted = true;

    }

});
