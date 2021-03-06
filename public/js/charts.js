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

eval("var app = new Vue({\n  el: '#root2',\n  data: {\n    views: '',\n    labels: '',\n    datas: '',\n    months: ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'],\n    currentYear: '2021',\n    myChart: ''\n  },\n  methods: {\n    renderChart: function renderChart() {\n      // if chart is already loaded, destroy it \n      if (this.myChart != '') {\n        this.myChart.destroy();\n      } // get currentYear datas \n\n\n      this.labels = views[this.currentYear].labels;\n      this.datas = views[this.currentYear].data; // config \n\n      var config = {\n        type: 'bar',\n        data: {\n          labels: this.labels,\n          datasets: [{\n            label: '# of Views',\n            data: this.datas,\n            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],\n            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],\n            borderWidth: 1\n          }]\n        },\n        options: {\n          scales: {\n            y: {\n              beginAtZero: true\n            }\n          }\n        }\n      }; // populate chart \n\n      var ctx = document.getElementById('chart').getContext('2d');\n      this.myChart = new Chart(ctx, config);\n    }\n  },\n  mounted: function mounted() {\n    this.renderChart();\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzPzYwMTEiXSwibmFtZXMiOlsiYXBwIiwiVnVlIiwiZWwiLCJkYXRhIiwidmlld3MiLCJsYWJlbHMiLCJkYXRhcyIsIm1vbnRocyIsImN1cnJlbnRZZWFyIiwibXlDaGFydCIsIm1ldGhvZHMiLCJyZW5kZXJDaGFydCIsImRlc3Ryb3kiLCJjb25maWciLCJ0eXBlIiwiZGF0YXNldHMiLCJsYWJlbCIsImJhY2tncm91bmRDb2xvciIsImJvcmRlckNvbG9yIiwiYm9yZGVyV2lkdGgiLCJvcHRpb25zIiwic2NhbGVzIiwieSIsImJlZ2luQXRaZXJvIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJDaGFydCIsIm1vdW50ZWQiXSwibWFwcGluZ3MiOiJBQUNBLElBQUlBLEdBQUcsR0FBRyxJQUFJQyxHQUFKLENBQ047QUFDSUMsSUFBRSxFQUFFLFFBRFI7QUFHSUMsTUFBSSxFQUFFO0FBQ0ZDLFNBQUssRUFBRSxFQURMO0FBRUZDLFVBQU0sRUFBRSxFQUZOO0FBR0ZDLFNBQUssRUFBRSxFQUhMO0FBSUZDLFVBQU0sRUFBRSxDQUFDLFNBQUQsRUFBWSxVQUFaLEVBQXdCLE9BQXhCLEVBQWlDLFFBQWpDLEVBQTJDLFFBQTNDLEVBQXFELFFBQXJELEVBQStELFFBQS9ELEVBQXlFLFFBQXpFLEVBQW1GLFdBQW5GLEVBQWdHLFNBQWhHLEVBQTJHLFVBQTNHLEVBQXVILFVBQXZILENBSk47QUFLRkMsZUFBVyxFQUFFLE1BTFg7QUFNRkMsV0FBTyxFQUFFO0FBTlAsR0FIVjtBQVlJQyxTQUFPLEVBQUU7QUFDTEMsZUFESyx5QkFDUTtBQUVUO0FBQ0EsVUFBRyxLQUFLRixPQUFMLElBQWdCLEVBQW5CLEVBQXNCO0FBQ2xCLGFBQUtBLE9BQUwsQ0FBYUcsT0FBYjtBQUNILE9BTFEsQ0FPVDs7O0FBQ0EsV0FBS1AsTUFBTCxHQUFjRCxLQUFLLENBQUMsS0FBS0ksV0FBTixDQUFMLENBQXdCSCxNQUF0QztBQUNBLFdBQUtDLEtBQUwsR0FBYUYsS0FBSyxDQUFDLEtBQUtJLFdBQU4sQ0FBTCxDQUF3QkwsSUFBckMsQ0FUUyxDQVdUOztBQUNBLFVBQU1VLE1BQU0sR0FBRztBQUNYQyxZQUFJLEVBQUUsS0FESztBQUVYWCxZQUFJLEVBQUU7QUFDRkUsZ0JBQU0sRUFBRSxLQUFLQSxNQURYO0FBRUZVLGtCQUFRLEVBQUUsQ0FBQztBQUNQQyxpQkFBSyxFQUFFLFlBREE7QUFFUGIsZ0JBQUksRUFBRSxLQUFLRyxLQUZKO0FBR1BXLDJCQUFlLEVBQUUsQ0FDYix5QkFEYSxFQUViLHlCQUZhLEVBR2IseUJBSGEsRUFJYix5QkFKYSxFQUtiLDBCQUxhLEVBTWIseUJBTmEsQ0FIVjtBQVdQQyx1QkFBVyxFQUFFLENBQ1QsdUJBRFMsRUFFVCx1QkFGUyxFQUdULHVCQUhTLEVBSVQsdUJBSlMsRUFLVCx3QkFMUyxFQU1ULHVCQU5TLENBWE47QUFtQlBDLHVCQUFXLEVBQUU7QUFuQk4sV0FBRDtBQUZSLFNBRks7QUEwQlhDLGVBQU8sRUFBRTtBQUNMQyxnQkFBTSxFQUFFO0FBQ0pDLGFBQUMsRUFBRTtBQUNDQyx5QkFBVyxFQUFFO0FBRGQ7QUFEQztBQURIO0FBMUJFLE9BQWYsQ0FaUyxDQStDVDs7QUFDQSxVQUFJQyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixPQUF4QixFQUFpQ0MsVUFBakMsQ0FBNEMsSUFBNUMsQ0FBVjtBQUVBLFdBQUtsQixPQUFMLEdBQWUsSUFBSW1CLEtBQUosQ0FBVUosR0FBVixFQUFlWCxNQUFmLENBQWY7QUFFSDtBQXJESSxHQVpiO0FBb0VJZ0IsU0FwRUoscUJBb0VjO0FBRU4sU0FBS2xCLFdBQUw7QUFFSDtBQXhFTCxDQURNLENBQVYiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXG52YXIgYXBwID0gbmV3IFZ1ZShcbiAgICB7XG4gICAgICAgIGVsOiAnI3Jvb3QyJyxcbiAgICAgICAgICAgIFxuICAgICAgICBkYXRhOiB7XG4gICAgICAgICAgICB2aWV3czogJycsXG4gICAgICAgICAgICBsYWJlbHM6ICcnLFxuICAgICAgICAgICAgZGF0YXM6ICcnLFxuICAgICAgICAgICAgbW9udGhzOiBbJ2dlbm5haW8nLCAnZmViYnJhaW8nLCAnbWFyem8nLCAnYXByaWxlJywgJ21hZ2dpbycsICdnaXVnbm8nLCAnbHVnbGlvJywgJ2Fnb3N0bycsICdzZXR0ZW1icmUnLCAnb3R0b2JyZScsICdub3ZlbWJyZScsICdkaWNlbWJyZSddLFxuICAgICAgICAgICAgY3VycmVudFllYXI6ICcyMDIxJyxcbiAgICAgICAgICAgIG15Q2hhcnQ6ICcnXG4gICAgICAgIH0sXG4gICAgICAgIFxuICAgICAgICBtZXRob2RzOiB7IFxuICAgICAgICAgICAgcmVuZGVyQ2hhcnQoKXtcblxuICAgICAgICAgICAgICAgIC8vIGlmIGNoYXJ0IGlzIGFscmVhZHkgbG9hZGVkLCBkZXN0cm95IGl0IFxuICAgICAgICAgICAgICAgIGlmKHRoaXMubXlDaGFydCAhPSAnJyl7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMubXlDaGFydC5kZXN0cm95KCk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgLy8gZ2V0IGN1cnJlbnRZZWFyIGRhdGFzIFxuICAgICAgICAgICAgICAgIHRoaXMubGFiZWxzID0gdmlld3NbdGhpcy5jdXJyZW50WWVhcl0ubGFiZWxzO1xuICAgICAgICAgICAgICAgIHRoaXMuZGF0YXMgPSB2aWV3c1t0aGlzLmN1cnJlbnRZZWFyXS5kYXRhO1xuXG4gICAgICAgICAgICAgICAgLy8gY29uZmlnIFxuICAgICAgICAgICAgICAgIGNvbnN0IGNvbmZpZyA9IHtcbiAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2JhcicsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxhYmVsczogdGhpcy5sYWJlbHMsXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhc2V0czogW3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsYWJlbDogJyMgb2YgVmlld3MnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHRoaXMuZGF0YXMsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYmFja2dyb3VuZENvbG9yOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgOTksIDEzMiwgMC4yKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDU0LCAxNjIsIDIzNSwgMC4yKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMjA2LCA4NiwgMC4yKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDc1LCAxOTIsIDE5MiwgMC4yKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDE1MywgMTAyLCAyNTUsIDAuMiknLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDE1OSwgNjQsIDAuMiknXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJDb2xvcjogW1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDk5LCAxMzIsIDEpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoNTQsIDE2MiwgMjM1LCAxKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMjA2LCA4NiwgMSknLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSg3NSwgMTkyLCAxOTIsIDEpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMTUzLCAxMDIsIDI1NSwgMSknLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDE1OSwgNjQsIDEpJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyV2lkdGg6IDFcbiAgICAgICAgICAgICAgICAgICAgICAgIH1dXG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHNjYWxlczoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHk6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYmVnaW5BdFplcm86IHRydWVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9O1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIC8vIHBvcHVsYXRlIGNoYXJ0IFxuICAgICAgICAgICAgICAgIHZhciBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2hhcnQnKS5nZXRDb250ZXh0KCcyZCcpO1xuXG4gICAgICAgICAgICAgICAgdGhpcy5teUNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwgY29uZmlnKTtcblxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFxuICAgICAgICB9LFxuICAgICAgICBtb3VudGVkKCkgeyBcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgdGhpcy5yZW5kZXJDaGFydCgpO1xuXG4gICAgICAgIH1cblxuICAgIH0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/charts.js\n");

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/charts.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/manuelbonini/Documenti/Laravel-Projects/boolBnB-team7/resources/js/charts.js */"./resources/js/charts.js");


/***/ })

/******/ });