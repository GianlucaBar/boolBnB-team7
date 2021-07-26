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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/charts.js":
/*!********************************!*\
  !*** ./resources/js/charts.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var app = new Vue({\n  el: '#root2',\n  data: {\n    views: '',\n    labels: '',\n    datas: '',\n    months: ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'],\n    currentYear: '2021',\n    myChart: ''\n  },\n  methods: {\n    renderChart: function renderChart() {\n      if (this.myChart != '') {\n        this.myChart.destroy();\n      }\n\n      this.labels = views[this.currentYear].labels;\n      this.datas = views[this.currentYear].data;\n      var config = {\n        type: 'bar',\n        data: {\n          labels: this.labels,\n          datasets: [{\n            label: '# of Views',\n            data: this.datas,\n            backgroundColor: ['rgba(255, 99, 132, 0.2)' // 'rgba(54, 162, 235, 0.2)',\n            // 'rgba(255, 206, 86, 0.2)',\n            // 'rgba(75, 192, 192, 0.2)',\n            // 'rgba(153, 102, 255, 0.2)',\n            // 'rgba(255, 159, 64, 0.2)'\n            ],\n            borderColor: ['rgba(255, 99, 132, 1)' // 'rgba(54, 162, 235, 1)',\n            // 'rgba(255, 206, 86, 1)',\n            // 'rgba(75, 192, 192, 1)',\n            // 'rgba(153, 102, 255, 1)',\n            // 'rgba(255, 159, 64, 1)'\n            ],\n            borderWidth: 1\n          }]\n        },\n        options: {\n          scales: {\n            y: {\n              beginAtZero: true\n            }\n          }\n        }\n      }; // myChart.update();\n\n      var ctx = document.getElementById('chart').getContext('2d');\n      this.myChart = new Chart(ctx, config);\n    }\n  },\n  mounted: function mounted() {\n    // this.views = views;\n    // this.labels = this.views[2021].labels;\n    // this.datas = this.views[2021].data;\n    // console.log(this.labels);\n    // console.log(this.views[2021]);\n    // console.log(Object.values(this.labels));\n    // console.log(Object.values(this.datas));\n    this.renderChart();\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzPzYwMTEiXSwibmFtZXMiOlsiYXBwIiwiVnVlIiwiZWwiLCJkYXRhIiwidmlld3MiLCJsYWJlbHMiLCJkYXRhcyIsIm1vbnRocyIsImN1cnJlbnRZZWFyIiwibXlDaGFydCIsIm1ldGhvZHMiLCJyZW5kZXJDaGFydCIsImRlc3Ryb3kiLCJjb25maWciLCJ0eXBlIiwiZGF0YXNldHMiLCJsYWJlbCIsImJhY2tncm91bmRDb2xvciIsImJvcmRlckNvbG9yIiwiYm9yZGVyV2lkdGgiLCJvcHRpb25zIiwic2NhbGVzIiwieSIsImJlZ2luQXRaZXJvIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJDaGFydCIsIm1vdW50ZWQiXSwibWFwcGluZ3MiOiJBQUNBLElBQUlBLEdBQUcsR0FBRyxJQUFJQyxHQUFKLENBQ047QUFDSUMsSUFBRSxFQUFFLFFBRFI7QUFHSUMsTUFBSSxFQUFFO0FBQ0ZDLFNBQUssRUFBRSxFQURMO0FBRUZDLFVBQU0sRUFBRSxFQUZOO0FBR0ZDLFNBQUssRUFBRSxFQUhMO0FBSUZDLFVBQU0sRUFBRSxDQUFDLFNBQUQsRUFBWSxVQUFaLEVBQXdCLE9BQXhCLEVBQWlDLFFBQWpDLEVBQTJDLFFBQTNDLEVBQXFELFFBQXJELEVBQStELFFBQS9ELEVBQXlFLFFBQXpFLEVBQW1GLFdBQW5GLEVBQWdHLFNBQWhHLEVBQTJHLFVBQTNHLEVBQXVILFVBQXZILENBSk47QUFLRkMsZUFBVyxFQUFFLE1BTFg7QUFNRkMsV0FBTyxFQUFFO0FBTlAsR0FIVjtBQVlJQyxTQUFPLEVBQUU7QUFDTEMsZUFESyx5QkFDUTtBQUVULFVBQUcsS0FBS0YsT0FBTCxJQUFnQixFQUFuQixFQUFzQjtBQUNsQixhQUFLQSxPQUFMLENBQWFHLE9BQWI7QUFDSDs7QUFFRCxXQUFLUCxNQUFMLEdBQWNELEtBQUssQ0FBQyxLQUFLSSxXQUFOLENBQUwsQ0FBd0JILE1BQXRDO0FBQ0EsV0FBS0MsS0FBTCxHQUFhRixLQUFLLENBQUMsS0FBS0ksV0FBTixDQUFMLENBQXdCTCxJQUFyQztBQUVBLFVBQU1VLE1BQU0sR0FBRztBQUNYQyxZQUFJLEVBQUUsS0FESztBQUVYWCxZQUFJLEVBQUU7QUFDRkUsZ0JBQU0sRUFBRSxLQUFLQSxNQURYO0FBRUZVLGtCQUFRLEVBQUUsQ0FBQztBQUNQQyxpQkFBSyxFQUFFLFlBREE7QUFFUGIsZ0JBQUksRUFBRSxLQUFLRyxLQUZKO0FBR1BXLDJCQUFlLEVBQUUsQ0FDYix5QkFEYSxDQUViO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFOYSxhQUhWO0FBV1BDLHVCQUFXLEVBQUUsQ0FDVCx1QkFEUyxDQUVUO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFOUyxhQVhOO0FBbUJQQyx1QkFBVyxFQUFFO0FBbkJOLFdBQUQ7QUFGUixTQUZLO0FBMEJYQyxlQUFPLEVBQUU7QUFDTEMsZ0JBQU0sRUFBRTtBQUNKQyxhQUFDLEVBQUU7QUFDQ0MseUJBQVcsRUFBRTtBQURkO0FBREM7QUFESDtBQTFCRSxPQUFmLENBVFMsQ0EyQ1Q7O0FBQ0EsVUFBSUMsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsT0FBeEIsRUFBaUNDLFVBQWpDLENBQTRDLElBQTVDLENBQVY7QUFFQSxXQUFLbEIsT0FBTCxHQUFlLElBQUltQixLQUFKLENBQVVKLEdBQVYsRUFBZVgsTUFBZixDQUFmO0FBRUg7QUFqREksR0FaYjtBQWdFSWdCLFNBaEVKLHFCQWdFYztBQUVOO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsU0FBS2xCLFdBQUw7QUFFSDtBQTNFTCxDQURNLENBQVYiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXHJcbnZhciBhcHAgPSBuZXcgVnVlKFxyXG4gICAge1xyXG4gICAgICAgIGVsOiAnI3Jvb3QyJyxcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgZGF0YToge1xyXG4gICAgICAgICAgICB2aWV3czogJycsXHJcbiAgICAgICAgICAgIGxhYmVsczogJycsXHJcbiAgICAgICAgICAgIGRhdGFzOiAnJyxcclxuICAgICAgICAgICAgbW9udGhzOiBbJ2dlbm5haW8nLCAnZmViYnJhaW8nLCAnbWFyem8nLCAnYXByaWxlJywgJ21hZ2dpbycsICdnaXVnbm8nLCAnbHVnbGlvJywgJ2Fnb3N0bycsICdzZXR0ZW1icmUnLCAnb3R0b2JyZScsICdub3ZlbWJyZScsICdkaWNlbWJyZSddLFxyXG4gICAgICAgICAgICBjdXJyZW50WWVhcjogJzIwMjEnLFxyXG4gICAgICAgICAgICBteUNoYXJ0OiAnJ1xyXG4gICAgICAgIH0sXHJcbiAgICAgICAgXHJcbiAgICAgICAgbWV0aG9kczogeyBcclxuICAgICAgICAgICAgcmVuZGVyQ2hhcnQoKXtcclxuXHJcbiAgICAgICAgICAgICAgICBpZih0aGlzLm15Q2hhcnQgIT0gJycpe1xyXG4gICAgICAgICAgICAgICAgICAgIHRoaXMubXlDaGFydC5kZXN0cm95KCk7XHJcbiAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgdGhpcy5sYWJlbHMgPSB2aWV3c1t0aGlzLmN1cnJlbnRZZWFyXS5sYWJlbHM7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRhdGFzID0gdmlld3NbdGhpcy5jdXJyZW50WWVhcl0uZGF0YTtcclxuXHJcbiAgICAgICAgICAgICAgICBjb25zdCBjb25maWcgPSB7XHJcbiAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2JhcicsXHJcbiAgICAgICAgICAgICAgICAgICAgZGF0YToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBsYWJlbHM6IHRoaXMubGFiZWxzLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhc2V0czogW3tcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxhYmVsOiAnIyBvZiBWaWV3cycsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB0aGlzLmRhdGFzLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBbXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCA5OSwgMTMyLCAwLjIpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSg1NCwgMTYyLCAyMzUsIDAuMiknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vICdyZ2JhKDI1NSwgMjA2LCA4NiwgMC4yKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoNzUsIDE5MiwgMTkyLCAwLjIpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSgxNTMsIDEwMiwgMjU1LCAwLjIpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSgyNTUsIDE1OSwgNjQsIDAuMiknXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBdLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyQ29sb3I6IFtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDk5LCAxMzIsIDEpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSg1NCwgMTYyLCAyMzUsIDEpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSgyNTUsIDIwNiwgODYsIDEpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSg3NSwgMTkyLCAxOTIsIDEpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSgxNTMsIDEwMiwgMjU1LCAxKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoMjU1LCAxNTksIDY0LCAxKSdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIF0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJXaWR0aDogMVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XVxyXG4gICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9uczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBzY2FsZXM6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiZWdpbkF0WmVybzogdHJ1ZVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgICAgIC8vIG15Q2hhcnQudXBkYXRlKCk7XHJcbiAgICAgICAgICAgICAgICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NoYXJ0JykuZ2V0Q29udGV4dCgnMmQnKTtcclxuXHJcbiAgICAgICAgICAgICAgICB0aGlzLm15Q2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCBjb25maWcpO1xyXG5cclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgfSxcclxuICAgICAgICBtb3VudGVkKCkgeyBcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIC8vIHRoaXMudmlld3MgPSB2aWV3cztcclxuICAgICAgICAgICAgLy8gdGhpcy5sYWJlbHMgPSB0aGlzLnZpZXdzWzIwMjFdLmxhYmVscztcclxuICAgICAgICAgICAgLy8gdGhpcy5kYXRhcyA9IHRoaXMudmlld3NbMjAyMV0uZGF0YTtcclxuICAgICAgICAgICAgLy8gY29uc29sZS5sb2codGhpcy5sYWJlbHMpO1xyXG4gICAgICAgICAgICAvLyBjb25zb2xlLmxvZyh0aGlzLnZpZXdzWzIwMjFdKTtcclxuICAgICAgICAgICAgLy8gY29uc29sZS5sb2coT2JqZWN0LnZhbHVlcyh0aGlzLmxhYmVscykpO1xyXG4gICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhPYmplY3QudmFsdWVzKHRoaXMuZGF0YXMpKTtcclxuICAgICAgICAgICAgdGhpcy5yZW5kZXJDaGFydCgpO1xyXG5cclxuICAgICAgICB9XHJcblxyXG4gICAgfSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/charts.js\n");

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/charts.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Gianluca\laravel-projects\progetto finale\boolBnB-team7\resources\js\charts.js */"./resources/js/charts.js");


/***/ })

/******/ });