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

eval("var app = new Vue({\n  el: '#root2',\n  data: {\n    apartmentsIds: '',\n    apartments: ''\n  },\n  methods: {\n    renderChart: function renderChart() {\n      console.log(this.apartments);\n      var ctx = document.getElementById('chart').getContext('2d');\n      var myChart = new Chart(ctx, {\n        type: 'bar',\n        data: {\n          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],\n          datasets: [{\n            label: '# of Votes',\n            data: [12, 19, 3, 5, 2, 3],\n            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],\n            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],\n            borderWidth: 1\n          }]\n        },\n        options: {\n          scales: {\n            y: {\n              beginAtZero: true\n            }\n          }\n        }\n      });\n    } // async getApId(){\n    //     let url = new URL('http://127.0.0.1:8000/apartmentIds/')\n    //     const response = await fetch(url);\n    //     const data = await response.text();\n    //     this.apartmentsIds = data;\n    //     console.log(this.apartmentsIds);\n    // }\n\n  },\n  mounted: function mounted() {\n    this.renderChart(); // this.getApId(\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzPzYwMTEiXSwibmFtZXMiOlsiYXBwIiwiVnVlIiwiZWwiLCJkYXRhIiwiYXBhcnRtZW50c0lkcyIsImFwYXJ0bWVudHMiLCJtZXRob2RzIiwicmVuZGVyQ2hhcnQiLCJjb25zb2xlIiwibG9nIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJteUNoYXJ0IiwiQ2hhcnQiLCJ0eXBlIiwibGFiZWxzIiwiZGF0YXNldHMiLCJsYWJlbCIsImJhY2tncm91bmRDb2xvciIsImJvcmRlckNvbG9yIiwiYm9yZGVyV2lkdGgiLCJvcHRpb25zIiwic2NhbGVzIiwieSIsImJlZ2luQXRaZXJvIiwibW91bnRlZCJdLCJtYXBwaW5ncyI6IkFBQ0EsSUFBSUEsR0FBRyxHQUFHLElBQUlDLEdBQUosQ0FDTjtBQUNJQyxJQUFFLEVBQUUsUUFEUjtBQUdJQyxNQUFJLEVBQUU7QUFDRkMsaUJBQWEsRUFBRSxFQURiO0FBRUZDLGNBQVUsRUFBRTtBQUZWLEdBSFY7QUFRSUMsU0FBTyxFQUFFO0FBQ0xDLGVBREsseUJBQ1E7QUFDVEMsYUFBTyxDQUFDQyxHQUFSLENBQVksS0FBS0osVUFBakI7QUFDQSxVQUFJSyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixPQUF4QixFQUFpQ0MsVUFBakMsQ0FBNEMsSUFBNUMsQ0FBVjtBQUNBLFVBQUlDLE9BQU8sR0FBRyxJQUFJQyxLQUFKLENBQVVMLEdBQVYsRUFBZTtBQUN6Qk0sWUFBSSxFQUFFLEtBRG1CO0FBRXpCYixZQUFJLEVBQUU7QUFDRmMsZ0JBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxNQUFSLEVBQWdCLFFBQWhCLEVBQTBCLE9BQTFCLEVBQW1DLFFBQW5DLEVBQTZDLFFBQTdDLENBRE47QUFFRkMsa0JBQVEsRUFBRSxDQUFDO0FBQ1BDLGlCQUFLLEVBQUUsWUFEQTtBQUVQaEIsZ0JBQUksRUFBRSxDQUFDLEVBQUQsRUFBSyxFQUFMLEVBQVMsQ0FBVCxFQUFZLENBQVosRUFBZSxDQUFmLEVBQWtCLENBQWxCLENBRkM7QUFHUGlCLDJCQUFlLEVBQUUsQ0FDYix5QkFEYSxFQUViLHlCQUZhLEVBR2IseUJBSGEsRUFJYix5QkFKYSxFQUtiLDBCQUxhLEVBTWIseUJBTmEsQ0FIVjtBQVdQQyx1QkFBVyxFQUFFLENBQ1QsdUJBRFMsRUFFVCx1QkFGUyxFQUdULHVCQUhTLEVBSVQsdUJBSlMsRUFLVCx3QkFMUyxFQU1ULHVCQU5TLENBWE47QUFtQlBDLHVCQUFXLEVBQUU7QUFuQk4sV0FBRDtBQUZSLFNBRm1CO0FBMEJ6QkMsZUFBTyxFQUFFO0FBQ0xDLGdCQUFNLEVBQUU7QUFDSkMsYUFBQyxFQUFFO0FBQ0NDLHlCQUFXLEVBQUU7QUFEZDtBQURDO0FBREg7QUExQmdCLE9BQWYsQ0FBZDtBQWtDSCxLQXRDSSxDQXdDTDtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBQ0E7QUFDQTs7QUFsREssR0FSYjtBQTZESUMsU0E3REoscUJBNkRjO0FBQ04sU0FBS3BCLFdBQUwsR0FETSxDQUVOO0FBSUg7QUFuRUwsQ0FETSxDQUFWIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2NoYXJ0cy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIlxyXG52YXIgYXBwID0gbmV3IFZ1ZShcclxuICAgIHtcclxuICAgICAgICBlbDogJyNyb290MicsXHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgIGRhdGE6IHtcclxuICAgICAgICAgICAgYXBhcnRtZW50c0lkczogJycsXHJcbiAgICAgICAgICAgIGFwYXJ0bWVudHM6ICcnXHJcbiAgICAgICAgfSxcclxuICAgICAgICBcclxuICAgICAgICBtZXRob2RzOiB7IFxyXG4gICAgICAgICAgICByZW5kZXJDaGFydCgpe1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2codGhpcy5hcGFydG1lbnRzKTtcclxuICAgICAgICAgICAgICAgIHZhciBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnY2hhcnQnKS5nZXRDb250ZXh0KCcyZCcpO1xyXG4gICAgICAgICAgICAgICAgdmFyIG15Q2hhcnQgPSBuZXcgQ2hhcnQoY3R4LCB7XHJcbiAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2JhcicsXHJcbiAgICAgICAgICAgICAgICAgICAgZGF0YToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBsYWJlbHM6IFsnUmVkJywgJ0JsdWUnLCAnWWVsbG93JywgJ0dyZWVuJywgJ1B1cnBsZScsICdPcmFuZ2UnXSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YXNldHM6IFt7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsYWJlbDogJyMgb2YgVm90ZXMnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YTogWzEyLCAxOSwgMywgNSwgMiwgM10sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDk5LCAxMzIsIDAuMiknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDU0LCAxNjIsIDIzNSwgMC4yKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCAyMDYsIDg2LCAwLjIpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSg3NSwgMTkyLCAxOTIsIDAuMiknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDE1MywgMTAyLCAyNTUsIDAuMiknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMTU5LCA2NCwgMC4yKSdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIF0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJDb2xvcjogW1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgOTksIDEzMiwgMSknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDU0LCAxNjIsIDIzNSwgMSknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMjA2LCA4NiwgMSknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDc1LCAxOTIsIDE5MiwgMSknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDE1MywgMTAyLCAyNTUsIDEpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgyNTUsIDE1OSwgNjQsIDEpJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgXSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlcldpZHRoOiAxXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1dXHJcbiAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICBvcHRpb25zOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHNjYWxlczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgeToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJlZ2luQXRaZXJvOiB0cnVlXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgfSxcclxuXHJcbiAgICAgICAgICAgIC8vIGFzeW5jIGdldEFwSWQoKXtcclxuICAgICAgICAgICAgICAgIFxyXG4gICAgICAgICAgICAvLyAgICAgbGV0IHVybCA9IG5ldyBVUkwoJ2h0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGFydG1lbnRJZHMvJylcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIC8vICAgICBjb25zdCByZXNwb25zZSA9IGF3YWl0IGZldGNoKHVybCk7XHJcblxyXG4gICAgICAgICAgICAvLyAgICAgY29uc3QgZGF0YSA9IGF3YWl0IHJlc3BvbnNlLnRleHQoKTtcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIC8vICAgICB0aGlzLmFwYXJ0bWVudHNJZHMgPSBkYXRhO1xyXG4gICAgICAgICAgICAvLyAgICAgY29uc29sZS5sb2codGhpcy5hcGFydG1lbnRzSWRzKTtcclxuICAgICAgICAgICAgLy8gfVxyXG4gICAgICAgICAgICBcclxuICAgICAgICB9LFxyXG4gICAgICAgIG1vdW50ZWQoKSB7IFxyXG4gICAgICAgICAgICB0aGlzLnJlbmRlckNoYXJ0KCk7XHJcbiAgICAgICAgICAgIC8vIHRoaXMuZ2V0QXBJZChcclxuICAgICAgICAgIFxyXG5cclxuXHJcbiAgICAgICAgfVxyXG5cclxuICAgIH0pO1xyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/charts.js\n");

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