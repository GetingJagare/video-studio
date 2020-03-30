"use strict";

window.addEventListener('DOMContentLoaded', function (event) {

});

$(document).ready(function () {
    let scrollTop = 0;
    let cancelShowreelAnimations = false;
    let cancelScroll = false;


    window.addEventListener('scroll', function (event) {

        if (cancelScroll) {

            event.preventDefault();
        }

    });

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
        cancelScroll = true;

        let oldScrollTop = scrollTop;
        scrollTop = $(this).scrollTop();

        if (e === null || scrollTop - oldScrollTop > 0) {
            $(window).unbind("scroll");
            cancelShowreelAnimations = true;
            $("html, body").animate({scrollTop: $(".under-showreel").offset().top}, 1500, "swing", function() {
                $(".showreel").hide();

                cancelScroll = false;

                window.scrollTo(0, 10)
            });

            setTimeout(function() {
                $(".syndicate-logo").fadeOut();
                $(".syndicate-logline").fadeOut();
                $(".chevron").fadeOut();
            }, 500);
        }
    }


    $("html, body").scrollTop(0);

    $(".chevron").click(function () {
        scrollHelper(null);
    });

    $(window).scroll(scrollHelper);
    startShowreelAnimations();
});
