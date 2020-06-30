"use strict";

import "../scss/marquee.scss";

window.addEventListener('DOMContentLoaded', function () {

    const marquee = document.getElementById('marquee');

    if (!marquee) {

        return;

    }

    let marqueeWrapper = marquee.querySelector('.marquee__wrapper');

    if (!marqueeWrapper.children.length) {

        return;

    }

    const marqueeMinWidth = 10000;
    let marqueeItems = [];
    let marqueeWidth = 0;
    let marqueeAnimationTime;

    for (let i = 0; i < marqueeWrapper.children.length; i++) {

        const child = marqueeWrapper.children[i];

        marqueeWidth += child.offsetWidth;

        marqueeItems.push('<div class="marquee__item">' + child.outerHTML + '</div>');

    }

    marqueeAnimationTime = Math.ceil(marqueeWidth / 150);

    marqueeWrapper.innerHTML = '<div></div>';
    marqueeWrapper = marqueeWrapper.firstElementChild;

    for (let i = 0; i < Math.ceil(marqueeMinWidth / marqueeWidth); i += 1) {
        marqueeWrapper.innerHTML += marqueeItems.join('');
    }

    const styleElement = document.createElement('style');

    styleElement.textContent = `.marquee__wrapper {` +
        `-webkit-animation: marquee-move ${marqueeAnimationTime}s linear infinite;` +
        `-moz-animation:    marquee-move ${marqueeAnimationTime}s linear infinite;` +
        `-ms-animation:     marquee-move ${marqueeAnimationTime}s linear infinite;` +
        `-o-animation:      marquee-move ${marqueeAnimationTime}s linear infinite;` +
        `animation:         marquee-move ${marqueeAnimationTime}s linear infinite;` +
        `}` +

        `@keyframes         "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}` +
        `@-moz-keyframes    "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}` +
        `@-webkit-keyframes "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}` +
        `@-ms-keyframes     "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}` +
        `@-o-keyframes      "marquee-move" {0% {margin-left: 0px;} 100% {margin-left: -${marqueeWidth}px;}}`;

    document.head.appendChild(styleElement);

});
