"use strict";

import "../scss/marquee.scss";

window.addEventListener('DOMContentLoaded', function () {

    const marqueeMinWidth = 10000;
    let marquee = document.getElementById('marquee');
    let marqueeItems = [];
    let marqueeWidth = 0;
    let marqueeAnimationTime;

    if (marquee && marquee.children) {

        for (let i = 0; i < marquee.children.length; i++) {

            const child = marquee.children[i];

            marqueeWidth += child.offsetWidth;

            marqueeItems.push('<div class="marquee__item"><div>' + child.outerHTML + '</div></div>');

        }

        marqueeAnimationTime = Math.ceil(marqueeWidth / 150);

        marquee.innerHTML = '<div></div>';
        marquee = marquee.firstElementChild;
        marquee.classList.add('marquee__wrapper');

        for (let i = 0; i < Math.ceil(marqueeMinWidth / marqueeWidth); i += 1) {
            marquee.innerHTML += marqueeItems.join('');
        }

        const styleElement = document.createElement('style');

        styleElement.textContent = `.marquee__wrapper {
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
@-o-keyframes      "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}`;

        document.head.appendChild(styleElement);
    }

});
