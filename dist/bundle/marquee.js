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
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/marquee.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/marquee.js":
/*!******************************!*\
  !*** ./assets/js/marquee.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_marquee_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/marquee.scss */ \"./assets/scss/marquee.scss\");\n/* harmony import */ var _scss_marquee_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_marquee_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\n\nwindow.addEventListener('DOMContentLoaded', function () {\n  var marqueeMinWidth = 10000;\n  var marquee = document.getElementById('marquee');\n  var marqueeItems = [];\n  var marqueeWidth = 0;\n  var marqueeAnimationTime;\n\n  if (marquee) {\n    for (var i = 0; i < marquee.children.length; i++) {\n      var child = marquee.children[i];\n      marqueeWidth += child.offsetWidth;\n      marqueeItems.push('<div class=\"marquee__item\"><div>' + child.outerHTML + '</div></div>');\n    }\n\n    marqueeAnimationTime = Math.ceil(marqueeWidth / 150);\n    marquee.innerHTML = '<div></div>';\n    marquee = marquee.firstElementChild;\n    marquee.classList.add('marquee__wrapper');\n\n    for (var _i = 0; _i < Math.ceil(marqueeMinWidth / marqueeWidth); _i += 1) {\n      marquee.innerHTML += marqueeItems.join('');\n    }\n\n    var styleElement = document.createElement('style');\n    styleElement.textContent = \".marquee__wrapper {\\n  -webkit-animation: marquee-move \".concat(marqueeAnimationTime, \"s linear infinite;\\n  -moz-animation:    marquee-move \").concat(marqueeAnimationTime, \"s linear infinite;\\n  -ms-animation:     marquee-move \").concat(marqueeAnimationTime, \"s linear infinite;\\n  -o-animation:      marquee-move \").concat(marqueeAnimationTime, \"s linear infinite;\\n  animation:         marquee-move \").concat(marqueeAnimationTime, \"s linear infinite;\\n}\\n\\n@keyframes         \\\"marquee-move\\\" {0% {margin-left: 0px;} 100% {margin-left: -\").concat(marqueeWidth, \"px;}}\\n@-moz-keyframes    \\\"marquee-move\\\" {0% {margin-left: 0px;} 100% {margin-left: -\").concat(marqueeWidth, \"px;}}\\n@-webkit-keyframes \\\"marquee-move\\\" {0% {margin-left: 0px;} 100% {margin-left: -\").concat(marqueeWidth, \"px;}}\\n@-ms-keyframes     \\\"marquee-move\\\" {0% {margin-left: 0px;} 100% {margin-left: -\").concat(marqueeWidth, \"px;}}\\n@-o-keyframes      \\\"marquee-move\\\" {0% {margin-left: 0px;} 100% {margin-left: -\").concat(marqueeWidth, \"px;}}\");\n    document.head.appendChild(styleElement);\n  }\n});\n\n//# sourceURL=webpack:///./assets/js/marquee.js?");

/***/ }),

/***/ "./assets/scss/marquee.scss":
/*!**********************************!*\
  !*** ./assets/scss/marquee.scss ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./assets/scss/marquee.scss?");

/***/ })

/******/ });