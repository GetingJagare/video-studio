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
    const animationMarginPerSecond = 150;
    const animationStep = 1000;
    let marqueeItems = [];
    let marqueeWidth = 0;
    let marqueeAnimationSeconds;

    for (let i = 0; i < marqueeWrapper.children.length; i++) {

        const child = marqueeWrapper.children[i];

        marqueeWidth += child.offsetWidth;

        marqueeItems.push('<div class="marquee__item">' + child.outerHTML + '</div>');

    }

    if (marqueeWrapper.dataset.shuffle) {

        /**
         * @see: https://gist.github.com/guilhermepontes/17ae0cc71fa2b13ea8c20c94c5c35dc4
         *
         * @param arr
         * @returns {any[]}
         */
        const shuffleArray = arr => arr
            .map(a => [Math.random(), a])
            .sort((a, b) => a[0] - b[0])
            .map(a => a[1]);

        marqueeItems = shuffleArray(marqueeItems);
    }

    marqueeWrapper.innerHTML = '';

    const repeatCount = Math.ceil(marqueeMinWidth / marqueeWidth);

    for (let i = 0; i < repeatCount; i += 1) {
        marqueeWrapper.innerHTML += marqueeItems.join('');
    }

    marqueeAnimationSeconds = marqueeWidth * repeatCount / animationMarginPerSecond;

    setTimeout(() => {
        const styleElement = document.createElement('style');

        styleElement.textContent = `.marquee__wrapper {` +
            `-webkit-animation: marquee-move ${marqueeAnimationSeconds * 1000}ms linear infinite;` +
            `-moz-animation:    marquee-move ${marqueeAnimationSeconds * 1000}ms linear infinite;` +
            `-ms-animation:     marquee-move ${marqueeAnimationSeconds * 1000}ms linear infinite;` +
            `-o-animation:      marquee-move ${marqueeAnimationSeconds * 1000}ms linear infinite;` +
            `animation:         marquee-move ${marqueeAnimationSeconds * 1000}ms linear infinite;` +
            `}`;

        let keyframes = '';

        for (let i = 0; i <= 100; i += 10) {

            keyframes += `${i}% {margin-left: -${marqueeWidth * repeatCount * i / 100}px}`;

        }

        styleElement.textContent += `@keyframes "marquee-move" {${keyframes}}` +
            `@-moz-keyframes    "marquee-move" {${keyframes}}` +
            `@-webkit-keyframes "marquee-move" {${keyframes}}` +
            `@-ms-keyframes     "marquee-move" {${keyframes}}` +
            `@-o-keyframes      "marquee-move" {${keyframes}}`;

        document.head.appendChild(styleElement);
    }, 500);

});
