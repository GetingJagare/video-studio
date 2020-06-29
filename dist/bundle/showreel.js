/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/showreel.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/showreel.js":
/*!*******************************!*\
  !*** ./assets/js/showreel.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_showreel_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/showreel.scss */ \"./assets/scss/showreel.scss\");\n/* harmony import */ var _scss_showreel_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_showreel_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\n\n\nfunction fade(el) {\n  var direction = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'in';\n  var time = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 400;\n  var delay = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0;\n  var easing = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 'ease-in-out';\n  return new Promise(function (resolve, reject) {\n    setTimeout(function () {\n      el.style.opacity = direction === 'in' ? 0 : 1;\n\n      if (direction === 'in') {\n        el.style.display = 'block';\n        el.style.visibility = 'visible';\n      }\n\n      resolve();\n    }, delay);\n  }).then(function () {\n    return new Promise(function (resolve, reject) {\n      setTimeout(function () {\n        el.style.transition = \"all \".concat(time, \"ms \").concat(easing);\n        el.style.opacity = direction === 'in' ? 1 : 0;\n\n        if (direction === 'out') {\n          el.style.visibility = 'hidden';\n        }\n\n        resolve(el);\n      }, time);\n    });\n  });\n}\n\nfunction fadeIn(el, time, delay) {\n  return fade(el, 'in', time, delay);\n}\n\nfunction fadeOut(el, time, delay) {\n  return fade(el, 'out', time, delay);\n}\n\nwindow.addEventListener('DOMContentLoaded', function (event) {\n  var showreelElement = document.body.querySelector('.showreel');\n  var syndicateLogo = document.body.querySelector('.syndicate-logo');\n  var syndicateLogLine = document.body.querySelector('.syndicate-logline');\n  var chevron = document.body.querySelector('.chevron');\n  var cancelShowreelAnimations = false;\n  var showreelScrollCounter = 0;\n\n  function startShowreelAnimations() {\n    if (!cancelShowreelAnimations) {\n      fadeIn(syndicateLogo, 1000, 1000);\n      fadeOut(syndicateLogo, 1000, 6000);\n      fadeIn(syndicateLogLine, 1000, 6000);\n      fadeIn(chevron, 1000, 6000);\n    }\n  }\n\n  function scrollHelper(e) {\n    cancelShowreelAnimations = true;\n    showreelElement.style.setProperty('--height', 0);\n    setTimeout(function () {\n      showreelElement.style.display = 'none';\n      document.body.classList.remove('showreel-scrolling');\n    }, 1500);\n    fadeOut(syndicateLogo, 400, 500);\n    fadeOut(syndicateLogLine, 400, 500);\n    fadeOut(chevron, 400, 500);\n  }\n\n  window.addEventListener('scroll', function (event) {\n    if (!showreelScrollCounter) {\n      showreelScrollCounter++;\n      document.body.classList.add('showreel-scrolling');\n      scrollHelper.apply(this, event);\n    }\n  });\n  chevron.addEventListener('click', function () {\n    scrollHelper(null);\n  });\n  startShowreelAnimations();\n});\n\n//# sourceURL=webpack:///./assets/js/showreel.js?");

/***/ }),

/***/ "./assets/scss/showreel.scss":
/*!***********************************!*\
  !*** ./assets/scss/showreel.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./assets/scss/showreel.scss?");

/***/ })

/******/ });