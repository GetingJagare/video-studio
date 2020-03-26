"use strict";

$(document).ready(function() {

    const marqueeMinWidth = 10000;
    let marquee = $("#marquee");
    let marqueeItems = [];
    let marqueeWidth = 0;
    let marqueeAnimationTime;

    if (marquee.length !== 0) {
        marquee.children().each(function(i, el) {
            marqueeWidth += $(el).width();
            marqueeItems.push($(el).clone().wrap("<div><div></div></div>").parent().parent().html());
        });

        marqueeAnimationTime = Math.ceil(marqueeWidth / 150);

        marquee = marquee.empty().append("<div></div>").find("div");

        for (let i = 0; i < Math.ceil(marqueeMinWidth / marqueeWidth); i += 1) {
            marquee.append(marqueeItems);
        }

        $("head").append(`<style>
#marquee > div {
  -webkit-animation: marquee-move ${marqueeAnimationTime}s linear infinite;
  -moz-animation:    marquee-move ${marqueeAnimationTime}s linear infinite;
  -ms-animation:     marquee-move ${marqueeAnimationTime}s linear infinite;
  -o-animation:      marquee-move ${marqueeAnimationTime}s linear infinite;
  animation:         marquee-move ${marqueeAnimationTime}s linear infinite;
}

@keyframes         "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}
@-moz-keyframes    "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}
@-webkit-keyframes "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}
@-ms-keyframes     "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}
@-o-keyframes      "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}
</style>`);
    }
});
