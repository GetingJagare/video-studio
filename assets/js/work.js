"use strict";

$(document).ready(function () {
    const workPlayer = new Plyr("#work-player", {
        blankVideo: "/img/plyr-3.5.10/blank.mp4",
        iconUrl: "/img/plyr-3.5.10/plyr.svg",
        autoplay: true,
        controls: [],
        muted: true,
        loop: {active: true},
        clickToPlay: false,
        keyboard: {focused: false, global: false}
    });

    function unmute() {
        if (workPlayer.muted == true) {
            workPlayer.muted = false;
        } else {
            workPlayer.muted = true;
        }

    }

    $(".plyr__video-wrapper").click(unmute);

    workPlayer.muted = true;
});
