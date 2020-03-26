"use strict";

$(document).ready(function () {
    let scrollTop = 0;
    let cancelShowreelAnimations = false;


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
        let oldScrollTop = scrollTop;
        scrollTop = $(this).scrollTop();

        if (e === null || scrollTop - oldScrollTop > 0) {
            $(window).unbind("scroll");
            cancelShowreelAnimations = true;
            $("html, body").animate({scrollTop: $(".under-showreel").offset().top}, 1500, "swing", () => {$(".showreel").hide(); window.scrollTo(0, 10)});
            setTimeout(() => {
                $(".syndicate-logo").fadeOut();
                $(".syndicate-logline").fadeOut();
                $(".chevron").fadeOut();
            }, 500);
        }
    }


    $("html, body").scrollTop(0);
    $(".chevron").click(() => scrollHelper(null));
    $(window).scroll(scrollHelper);
    startShowreelAnimations();
});
