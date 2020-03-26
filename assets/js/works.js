"use strict";

$(document).ready(function() {

    $(".works > a > video").each(function (i, el) {
        $(el).parent().data("player", new Plyr(`#${el.id}`, {
            blankVideo: "/img/plyr-3.5.10/blank.mp4",
            iconUrl: "/img/plyr-3.5.10/plyr.svg",
            autoplay: false,
            controls: [],
            muted: true,
            loop: {active: true},
            clickToPlay: false,
            keyboard: {focused: false, global: false}
        }));
    });

    $(".works > a").mouseenter(function (e) {
        $(e.currentTarget).data("worksInfoTimeout", setTimeout(() => {
            $(e.currentTarget).find(".work-info").fadeIn(1000);
        }, 2000));

        $(".works > a").each(function(i, el) {
            if (el !== e.currentTarget) {
                $(el).css({filter: "grayscale(100%)"});
            }
            $(el).data("player").pause();
        });
        $(e.currentTarget).data("player").play();
    });

    $(".works > a").mouseleave(function (e) {
        clearTimeout($(e.currentTarget).data("worksInfoTimeout"));

        $(e.currentTarget).find(".work-info").fadeOut(500);

        $(".works > a").each(function(i, el) {
            $(el).css({filter: "grayscale(0)"});
            $(el).data("player").pause();
        });
    });

});
