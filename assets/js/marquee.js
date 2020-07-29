"use strict";

import "../scss/marquee.scss";
import {shuffleArray} from './helpers';

window.addEventListener('DOMContentLoaded', function () {

    const marqueeMinWidth = 10000;
    const animationMarginPerSecond = 150;

    let marquee;
    let marqueeWrapper;
    let marqueeItems = [];
    let marqueeWidth = 0;
    let marqueeAnimationSeconds;
    let repeatCount = 0;
    let marqueeInitialized = false;
    let widthDiff;
    let startTime;

    const init = () => {

        marquee = document.getElementById('marquee');

        if (!marquee) {

            return;

        }

        marqueeWrapper = marquee.querySelector('.marquee__wrapper');

        if (!marqueeWrapper.children.length) {

            return;

        }

        if (marqueeWrapper.dataset.images) {

            const images = marqueeWrapper.querySelectorAll('img');
            let onloadCounter = 0;

            images.forEach((image) => {
                image.complete ? onloadCounter ++ : image.onload = () => {
                   onloadCounter ++;

                   if (onloadCounter === images.length) {
                       initMarquee();
                   }
               }
            });

            if (onloadCounter === images.length) {
                initMarquee();
            }

        } else {
            initMarquee();
        }

    };

    const initMarquee = () => {

        if (marqueeInitialized) {

            return;

        }

        marqueeInitialized = true;

        for (let i = 0; i < marqueeWrapper.children.length; i++) {

            const child = marqueeWrapper.children[i];

            marqueeWidth += child.offsetWidth;

            marqueeItems.push('<div class="marquee__item">' + child.outerHTML + '</div>');

        }

        if (marqueeWrapper.dataset.shuffle) {
            marqueeItems = shuffleArray(marqueeItems);
        }

        marqueeWrapper.innerHTML = '';

        repeatCount = Math.ceil(marqueeMinWidth / marqueeWidth);

        for (let i = 0; i < repeatCount; i ++) {
            marqueeWrapper.innerHTML += marqueeItems.join('');
        }

        widthDiff = marqueeWrapper.offsetWidth - marqueeMinWidth;

        marqueeAnimationSeconds = Math.round(marqueeWidth * repeatCount / animationMarginPerSecond);

        animate(marqueeWrapper);

    };

    let diffRemainedFlag = false;

    const checkDiffRemained = () => {

        const diffRemained = Date.now() / 1000 - startTime >= (marqueeWrapper.offsetWidth - window.innerWidth) / animationMarginPerSecond;

        if (diffRemained && !diffRemainedFlag) {

            diffRemainedFlag = true;

            const newMarqueeWrapper = document.createElement('div');
            newMarqueeWrapper.innerHTML = marqueeWrapper.innerHTML;
            newMarqueeWrapper.classList.add('marquee__wrapper');

            marquee.appendChild(newMarqueeWrapper);

        }

        setTimeout(checkDiffRemained, 50);

    };

    const isEndOfAnimationEnd = () => {

        const nowTime = Date.now() / 1000;

        if (nowTime - startTime >= marqueeAnimationSeconds) {

            startTime = nowTime;

            diffRemainedFlag = false;

            marquee.removeChild(marquee.firstElementChild);
            marquee.firstElementChild.classList.add('marquee__wrapper_active');

        }

        setTimeout(isEndOfAnimationEnd, 50);

    };

    const animate = (marqueeWrapper) => {

        startTime = Date.now() / 1000;

        const styleElement = document.createElement('style');

        styleElement.textContent = `.marquee__wrapper_active {` +
            `-webkit-animation: marquee-move ${marqueeAnimationSeconds}s linear infinite;` +
            `-moz-animation:    marquee-move ${marqueeAnimationSeconds}s linear infinite;` +
            `-ms-animation:     marquee-move ${marqueeAnimationSeconds}s linear infinite;` +
            `-o-animation:      marquee-move ${marqueeAnimationSeconds}s linear infinite;` +
            `animation:         marquee-move ${marqueeAnimationSeconds}s linear infinite;` +
            `}`;

        let keyframes = '';
        const animateWidth = marqueeWidth * repeatCount;

        for (let i = 0; i <= 100; i += 10) {

            keyframes += `${i}% {margin-left: -${animateWidth * i / 100}px}`;

        }

        styleElement.textContent += `@keyframes "marquee-move" {${keyframes}}` +
            `@-moz-keyframes    "marquee-move" {${keyframes}}` +
            `@-webkit-keyframes "marquee-move" {${keyframes}}` +
            `@-ms-keyframes     "marquee-move" {${keyframes}}` +
            `@-o-keyframes      "marquee-move" {${keyframes}}`;

        document.head.appendChild(styleElement);

        setTimeout(checkDiffRemained, 50);
        setTimeout(isEndOfAnimationEnd, 50);

    };

    init();

});
