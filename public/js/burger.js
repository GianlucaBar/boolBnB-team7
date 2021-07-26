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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/burger.js":
/*!********************************!*\
  !*** ./resources/js/burger.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("document.addEventListener('DOMContentLoaded', nav);\n\nfunction nav() {\n  var burger = document.getElementById(\"ms-burger\");\n  var nav = document.getElementById(\"ms-burger-menu\");\n  burger.addEventListener('click', function () {\n    // nav.classList.toggle('d-none')\n    if (nav.classList.contains('d-none')) {\n      nav.classList.remove('d-none');\n      nav.classList.add('d-block');\n    } else {\n      nav.classList.remove('d-block');\n      nav.classList.add('d-none');\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYnVyZ2VyLmpzPzVjNmUiXSwibmFtZXMiOlsiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwibmF2IiwiYnVyZ2VyIiwiZ2V0RWxlbWVudEJ5SWQiLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInJlbW92ZSIsImFkZCJdLCJtYXBwaW5ncyI6IkFBQ0FBLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQThDQyxHQUE5Qzs7QUFFQSxTQUFTQSxHQUFULEdBQWM7QUFDVixNQUFNQyxNQUFNLEdBQUdILFFBQVEsQ0FBQ0ksY0FBVCxDQUF3QixXQUF4QixDQUFmO0FBQ0EsTUFBTUYsR0FBRyxHQUFHRixRQUFRLENBQUNJLGNBQVQsQ0FBd0IsZ0JBQXhCLENBQVo7QUFDQUQsUUFBTSxDQUFDRixnQkFBUCxDQUF3QixPQUF4QixFQUFpQyxZQUFJO0FBQ2pDO0FBQ0EsUUFBR0MsR0FBRyxDQUFDRyxTQUFKLENBQWNDLFFBQWQsQ0FBdUIsUUFBdkIsQ0FBSCxFQUFvQztBQUNoQ0osU0FBRyxDQUFDRyxTQUFKLENBQWNFLE1BQWQsQ0FBcUIsUUFBckI7QUFDQUwsU0FBRyxDQUFDRyxTQUFKLENBQWNHLEdBQWQsQ0FBa0IsU0FBbEI7QUFFSCxLQUpELE1BSU07QUFDRk4sU0FBRyxDQUFDRyxTQUFKLENBQWNFLE1BQWQsQ0FBcUIsU0FBckI7QUFDQUwsU0FBRyxDQUFDRyxTQUFKLENBQWNHLEdBQWQsQ0FBa0IsUUFBbEI7QUFDSDtBQUNKLEdBVkQ7QUFXSCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9idXJnZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBuYXYpXG5cbmZ1bmN0aW9uIG5hdigpe1xuICAgIGNvbnN0IGJ1cmdlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibXMtYnVyZ2VyXCIpO1xuICAgIGNvbnN0IG5hdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwibXMtYnVyZ2VyLW1lbnVcIik7XG4gICAgYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCk9PntcbiAgICAgICAgLy8gbmF2LmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpXG4gICAgICAgIGlmKG5hdi5jbGFzc0xpc3QuY29udGFpbnMoJ2Qtbm9uZScpKXtcbiAgICAgICAgICAgIG5hdi5jbGFzc0xpc3QucmVtb3ZlKCdkLW5vbmUnKTtcbiAgICAgICAgICAgIG5hdi5jbGFzc0xpc3QuYWRkKCdkLWJsb2NrJyk7XG5cbiAgICAgICAgfSBlbHNle1xuICAgICAgICAgICAgbmF2LmNsYXNzTGlzdC5yZW1vdmUoJ2QtYmxvY2snKTtcbiAgICAgICAgICAgIG5hdi5jbGFzc0xpc3QuYWRkKCdkLW5vbmUnKTtcbiAgICAgICAgfVxuICAgIH0pXG59XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/burger.js\n");

/***/ }),

/***/ 3:
/*!**************************************!*\
  !*** multi ./resources/js/burger.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/manuelbonini/Documenti/Laravel-Projects/boolBnB-team7/resources/js/burger.js */"./resources/js/burger.js");


/***/ })

/******/ });