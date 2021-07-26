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

<<<<<<< HEAD
eval("var app = new Vue({\n  el: '#root2',\n  data: {\n    views: '',\n    labels: '',\n    datas: '',\n    months: ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'],\n    currentYear: '2021'\n  },\n  methods: {\n    renderChart: function renderChart() {\n      this.labels = views[this.currentYear].labels;\n      this.datas = views[this.currentYear].data;\n      var ctx = document.getElementById('chart').getContext('2d');\n\n      if (myChart) {\n        myChart.destroy();\n      }\n\n      var myChart = new Chart(ctx, {\n        type: 'bar',\n        data: {\n          labels: this.labels,\n          datasets: [{\n            label: '# of Views',\n            data: this.datas,\n            backgroundColor: ['rgba(255, 99, 132, 0.2)' // 'rgba(54, 162, 235, 0.2)',\n            // 'rgba(255, 206, 86, 0.2)',\n            // 'rgba(75, 192, 192, 0.2)',\n            // 'rgba(153, 102, 255, 0.2)',\n            // 'rgba(255, 159, 64, 0.2)'\n            ],\n            borderColor: ['rgba(255, 99, 132, 1)' // 'rgba(54, 162, 235, 1)',\n            // 'rgba(255, 206, 86, 1)',\n            // 'rgba(75, 192, 192, 1)',\n            // 'rgba(153, 102, 255, 1)',\n            // 'rgba(255, 159, 64, 1)'\n            ],\n            borderWidth: 1\n          }]\n        },\n        options: {\n          scales: {\n            y: {\n              beginAtZero: true\n            }\n          }\n        }\n      });\n    }\n  },\n  mounted: function mounted() {\n    // this.views = views;\n    // this.labels = this.views[2021].labels;\n    // this.datas = this.views[2021].data;\n    // console.log(this.labels);\n    // console.log(this.views[2021]);\n    // console.log(Object.values(this.labels));\n    // console.log(Object.values(this.datas));\n    this.renderChart();\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzPzYwMTEiXSwibmFtZXMiOlsiYXBwIiwiVnVlIiwiZWwiLCJkYXRhIiwidmlld3MiLCJsYWJlbHMiLCJkYXRhcyIsIm1vbnRocyIsImN1cnJlbnRZZWFyIiwibWV0aG9kcyIsInJlbmRlckNoYXJ0IiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJteUNoYXJ0IiwiZGVzdHJveSIsIkNoYXJ0IiwidHlwZSIsImRhdGFzZXRzIiwibGFiZWwiLCJiYWNrZ3JvdW5kQ29sb3IiLCJib3JkZXJDb2xvciIsImJvcmRlcldpZHRoIiwib3B0aW9ucyIsInNjYWxlcyIsInkiLCJiZWdpbkF0WmVybyIsIm1vdW50ZWQiXSwibWFwcGluZ3MiOiJBQUNBLElBQUlBLEdBQUcsR0FBRyxJQUFJQyxHQUFKLENBQ047QUFDSUMsSUFBRSxFQUFFLFFBRFI7QUFHSUMsTUFBSSxFQUFFO0FBQ0ZDLFNBQUssRUFBRSxFQURMO0FBRUZDLFVBQU0sRUFBRSxFQUZOO0FBR0ZDLFNBQUssRUFBRSxFQUhMO0FBSUZDLFVBQU0sRUFBRSxDQUFDLFNBQUQsRUFBWSxVQUFaLEVBQXdCLE9BQXhCLEVBQWlDLFFBQWpDLEVBQTJDLFFBQTNDLEVBQXFELFFBQXJELEVBQStELFFBQS9ELEVBQXlFLFFBQXpFLEVBQW1GLFdBQW5GLEVBQWdHLFNBQWhHLEVBQTJHLFVBQTNHLEVBQXVILFVBQXZILENBSk47QUFLRkMsZUFBVyxFQUFFO0FBTFgsR0FIVjtBQVdJQyxTQUFPLEVBQUU7QUFDTEMsZUFESyx5QkFDUTtBQUNULFdBQUtMLE1BQUwsR0FBY0QsS0FBSyxDQUFDLEtBQUtJLFdBQU4sQ0FBTCxDQUF3QkgsTUFBdEM7QUFDQSxXQUFLQyxLQUFMLEdBQWFGLEtBQUssQ0FBQyxLQUFLSSxXQUFOLENBQUwsQ0FBd0JMLElBQXJDO0FBRUEsVUFBSVEsR0FBRyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsT0FBeEIsRUFBaUNDLFVBQWpDLENBQTRDLElBQTVDLENBQVY7O0FBRUEsVUFBR0MsT0FBSCxFQUFXO0FBQ1BBLGVBQU8sQ0FBQ0MsT0FBUjtBQUNIOztBQUNELFVBQUlELE9BQU8sR0FBRyxJQUFJRSxLQUFKLENBQVVOLEdBQVYsRUFBZTtBQUN6Qk8sWUFBSSxFQUFFLEtBRG1CO0FBRXpCZixZQUFJLEVBQUU7QUFDRkUsZ0JBQU0sRUFBRSxLQUFLQSxNQURYO0FBRUZjLGtCQUFRLEVBQUUsQ0FBQztBQUNQQyxpQkFBSyxFQUFFLFlBREE7QUFFUGpCLGdCQUFJLEVBQUUsS0FBS0csS0FGSjtBQUdQZSwyQkFBZSxFQUFFLENBQ2IseUJBRGEsQ0FFYjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBTmEsYUFIVjtBQVdQQyx1QkFBVyxFQUFFLENBQ1QsdUJBRFMsQ0FFVDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBTlMsYUFYTjtBQW1CUEMsdUJBQVcsRUFBRTtBQW5CTixXQUFEO0FBRlIsU0FGbUI7QUEwQnpCQyxlQUFPLEVBQUU7QUFDTEMsZ0JBQU0sRUFBRTtBQUNKQyxhQUFDLEVBQUU7QUFDQ0MseUJBQVcsRUFBRTtBQURkO0FBREM7QUFESDtBQTFCZ0IsT0FBZixDQUFkO0FBa0NIO0FBNUNJLEdBWGI7QUEwRElDLFNBMURKLHFCQTBEYztBQUVOO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsU0FBS2xCLFdBQUw7QUFFSDtBQXJFTCxDQURNLENBQVYiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXHJcbnZhciBhcHAgPSBuZXcgVnVlKFxyXG4gICAge1xyXG4gICAgICAgIGVsOiAnI3Jvb3QyJyxcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgZGF0YToge1xyXG4gICAgICAgICAgICB2aWV3czogJycsXHJcbiAgICAgICAgICAgIGxhYmVsczogJycsXHJcbiAgICAgICAgICAgIGRhdGFzOiAnJyxcclxuICAgICAgICAgICAgbW9udGhzOiBbJ2dlbm5haW8nLCAnZmViYnJhaW8nLCAnbWFyem8nLCAnYXByaWxlJywgJ21hZ2dpbycsICdnaXVnbm8nLCAnbHVnbGlvJywgJ2Fnb3N0bycsICdzZXR0ZW1icmUnLCAnb3R0b2JyZScsICdub3ZlbWJyZScsICdkaWNlbWJyZSddLFxyXG4gICAgICAgICAgICBjdXJyZW50WWVhcjogJzIwMjEnXHJcbiAgICAgICAgfSxcclxuICAgICAgICBcclxuICAgICAgICBtZXRob2RzOiB7IFxyXG4gICAgICAgICAgICByZW5kZXJDaGFydCgpe1xyXG4gICAgICAgICAgICAgICAgdGhpcy5sYWJlbHMgPSB2aWV3c1t0aGlzLmN1cnJlbnRZZWFyXS5sYWJlbHM7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmRhdGFzID0gdmlld3NbdGhpcy5jdXJyZW50WWVhcl0uZGF0YTtcclxuXHJcbiAgICAgICAgICAgICAgICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NoYXJ0JykuZ2V0Q29udGV4dCgnMmQnKTtcclxuXHJcbiAgICAgICAgICAgICAgICBpZihteUNoYXJ0KXtcclxuICAgICAgICAgICAgICAgICAgICBteUNoYXJ0LmRlc3Ryb3koKTtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIHZhciBteUNoYXJ0ID0gbmV3IENoYXJ0KGN0eCwge1xyXG4gICAgICAgICAgICAgICAgICAgIHR5cGU6ICdiYXInLFxyXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWxzOiB0aGlzLmxhYmVscyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YXNldHM6IFt7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsYWJlbDogJyMgb2YgVmlld3MnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YTogdGhpcy5kYXRhcyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJhY2tncm91bmRDb2xvcjogW1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgOTksIDEzMiwgMC4yKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoNTQsIDE2MiwgMjM1LCAwLjIpJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyAncmdiYSgyNTUsIDIwNiwgODYsIDAuMiknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vICdyZ2JhKDc1LCAxOTIsIDE5MiwgMC4yKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoMTUzLCAxMDIsIDI1NSwgMC4yKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoMjU1LCAxNTksIDY0LCAwLjIpJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgXSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiBbXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCA5OSwgMTMyLCAxKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoNTQsIDE2MiwgMjM1LCAxKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoMjU1LCAyMDYsIDg2LCAxKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoNzUsIDE5MiwgMTkyLCAxKScsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gJ3JnYmEoMTUzLCAxMDIsIDI1NSwgMSknLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vICdyZ2JhKDI1NSwgMTU5LCA2NCwgMSknXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBdLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYm9yZGVyV2lkdGg6IDFcclxuICAgICAgICAgICAgICAgICAgICAgICAgfV1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgc2NhbGVzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB5OiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYmVnaW5BdFplcm86IHRydWVcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBcclxuICAgICAgICB9LFxyXG4gICAgICAgIG1vdW50ZWQoKSB7IFxyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgLy8gdGhpcy52aWV3cyA9IHZpZXdzO1xyXG4gICAgICAgICAgICAvLyB0aGlzLmxhYmVscyA9IHRoaXMudmlld3NbMjAyMV0ubGFiZWxzO1xyXG4gICAgICAgICAgICAvLyB0aGlzLmRhdGFzID0gdGhpcy52aWV3c1syMDIxXS5kYXRhO1xyXG4gICAgICAgICAgICAvLyBjb25zb2xlLmxvZyh0aGlzLmxhYmVscyk7XHJcbiAgICAgICAgICAgIC8vIGNvbnNvbGUubG9nKHRoaXMudmlld3NbMjAyMV0pO1xyXG4gICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhPYmplY3QudmFsdWVzKHRoaXMubGFiZWxzKSk7XHJcbiAgICAgICAgICAgIC8vIGNvbnNvbGUubG9nKE9iamVjdC52YWx1ZXModGhpcy5kYXRhcykpO1xyXG4gICAgICAgICAgICB0aGlzLnJlbmRlckNoYXJ0KCk7XHJcblxyXG4gICAgICAgIH1cclxuXHJcbiAgICB9KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/charts.js\n");
=======
eval("var app = new Vue({\n  el: '#root2',\n  data: {\n    apartmentsIds: '',\n    apartments: ''\n  },\n  methods: {\n    renderChart: function renderChart() {\n      console.log(this.apartments);\n      var ctx = document.getElementById('chart').getContext('2d');\n      var myChart = new Chart(ctx, {\n        type: 'bar',\n        data: {\n          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],\n          datasets: [{\n            label: '# of Votes',\n            data: [12, 19, 3, 5, 2, 3],\n            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],\n            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],\n            borderWidth: 1\n          }]\n        },\n        options: {\n          scales: {\n            y: {\n              beginAtZero: true\n            }\n          }\n        }\n      });\n    } // async getApId(){\n    //     let url = new URL('http://127.0.0.1:8000/apartmentIds/')\n    //     const response = await fetch(url);\n    //     const data = await response.text();\n    //     this.apartmentsIds = data;\n    //     console.log(this.apartmentsIds);\n    // }\n\n  },\n  mounted: function mounted() {\n    this.renderChart(); // this.getApId(\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2hhcnRzLmpzPzYwMTEiXSwibmFtZXMiOlsiYXBwIiwiVnVlIiwiZWwiLCJkYXRhIiwiYXBhcnRtZW50c0lkcyIsImFwYXJ0bWVudHMiLCJtZXRob2RzIiwicmVuZGVyQ2hhcnQiLCJjb25zb2xlIiwibG9nIiwiY3R4IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImdldENvbnRleHQiLCJteUNoYXJ0IiwiQ2hhcnQiLCJ0eXBlIiwibGFiZWxzIiwiZGF0YXNldHMiLCJsYWJlbCIsImJhY2tncm91bmRDb2xvciIsImJvcmRlckNvbG9yIiwiYm9yZGVyV2lkdGgiLCJvcHRpb25zIiwic2NhbGVzIiwieSIsImJlZ2luQXRaZXJvIiwibW91bnRlZCJdLCJtYXBwaW5ncyI6IkFBQ0EsSUFBSUEsR0FBRyxHQUFHLElBQUlDLEdBQUosQ0FDTjtBQUNJQyxJQUFFLEVBQUUsUUFEUjtBQUdJQyxNQUFJLEVBQUU7QUFDRkMsaUJBQWEsRUFBRSxFQURiO0FBRUZDLGNBQVUsRUFBRTtBQUZWLEdBSFY7QUFRSUMsU0FBTyxFQUFFO0FBQ0xDLGVBREsseUJBQ1E7QUFDVEMsYUFBTyxDQUFDQyxHQUFSLENBQVksS0FBS0osVUFBakI7QUFDQSxVQUFJSyxHQUFHLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixPQUF4QixFQUFpQ0MsVUFBakMsQ0FBNEMsSUFBNUMsQ0FBVjtBQUNBLFVBQUlDLE9BQU8sR0FBRyxJQUFJQyxLQUFKLENBQVVMLEdBQVYsRUFBZTtBQUN6Qk0sWUFBSSxFQUFFLEtBRG1CO0FBRXpCYixZQUFJLEVBQUU7QUFDRmMsZ0JBQU0sRUFBRSxDQUFDLEtBQUQsRUFBUSxNQUFSLEVBQWdCLFFBQWhCLEVBQTBCLE9BQTFCLEVBQW1DLFFBQW5DLEVBQTZDLFFBQTdDLENBRE47QUFFRkMsa0JBQVEsRUFBRSxDQUFDO0FBQ1BDLGlCQUFLLEVBQUUsWUFEQTtBQUVQaEIsZ0JBQUksRUFBRSxDQUFDLEVBQUQsRUFBSyxFQUFMLEVBQVMsQ0FBVCxFQUFZLENBQVosRUFBZSxDQUFmLEVBQWtCLENBQWxCLENBRkM7QUFHUGlCLDJCQUFlLEVBQUUsQ0FDYix5QkFEYSxFQUViLHlCQUZhLEVBR2IseUJBSGEsRUFJYix5QkFKYSxFQUtiLDBCQUxhLEVBTWIseUJBTmEsQ0FIVjtBQVdQQyx1QkFBVyxFQUFFLENBQ1QsdUJBRFMsRUFFVCx1QkFGUyxFQUdULHVCQUhTLEVBSVQsdUJBSlMsRUFLVCx3QkFMUyxFQU1ULHVCQU5TLENBWE47QUFtQlBDLHVCQUFXLEVBQUU7QUFuQk4sV0FBRDtBQUZSLFNBRm1CO0FBMEJ6QkMsZUFBTyxFQUFFO0FBQ0xDLGdCQUFNLEVBQUU7QUFDSkMsYUFBQyxFQUFFO0FBQ0NDLHlCQUFXLEVBQUU7QUFEZDtBQURDO0FBREg7QUExQmdCLE9BQWYsQ0FBZDtBQWtDSCxLQXRDSSxDQXdDTDtBQUVBO0FBRUE7QUFFQTtBQUVBO0FBQ0E7QUFDQTs7QUFsREssR0FSYjtBQTZESUMsU0E3REoscUJBNkRjO0FBQ04sU0FBS3BCLFdBQUwsR0FETSxDQUVOO0FBSUg7QUFuRUwsQ0FETSxDQUFWIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2NoYXJ0cy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIlxudmFyIGFwcCA9IG5ldyBWdWUoXG4gICAge1xuICAgICAgICBlbDogJyNyb290MicsXG4gICAgICAgICAgICBcbiAgICAgICAgZGF0YToge1xuICAgICAgICAgICAgYXBhcnRtZW50c0lkczogJycsXG4gICAgICAgICAgICBhcGFydG1lbnRzOiAnJ1xuICAgICAgICB9LFxuICAgICAgICBcbiAgICAgICAgbWV0aG9kczogeyBcbiAgICAgICAgICAgIHJlbmRlckNoYXJ0KCl7XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2codGhpcy5hcGFydG1lbnRzKTtcbiAgICAgICAgICAgICAgICB2YXIgY3R4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NoYXJ0JykuZ2V0Q29udGV4dCgnMmQnKTtcbiAgICAgICAgICAgICAgICB2YXIgbXlDaGFydCA9IG5ldyBDaGFydChjdHgsIHtcbiAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2JhcicsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxhYmVsczogWydSZWQnLCAnQmx1ZScsICdZZWxsb3cnLCAnR3JlZW4nLCAnUHVycGxlJywgJ09yYW5nZSddLFxuICAgICAgICAgICAgICAgICAgICAgICAgZGF0YXNldHM6IFt7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWw6ICcjIG9mIFZvdGVzJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiBbMTIsIDE5LCAzLCA1LCAyLCAzXSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYWNrZ3JvdW5kQ29sb3I6IFtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCA5OSwgMTMyLCAwLjIpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoNTQsIDE2MiwgMjM1LCAwLjIpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCAyMDYsIDg2LCAwLjIpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoNzUsIDE5MiwgMTkyLCAwLjIpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMTUzLCAxMDIsIDI1NSwgMC4yKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMTU5LCA2NCwgMC4yKSdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBdLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJvcmRlckNvbG9yOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgOTksIDEzMiwgMSknLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSg1NCwgMTYyLCAyMzUsIDEpJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgJ3JnYmEoMjU1LCAyMDYsIDg2LCAxKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDc1LCAxOTIsIDE5MiwgMSknLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAncmdiYSgxNTMsIDEwMiwgMjU1LCAxKScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICdyZ2JhKDI1NSwgMTU5LCA2NCwgMSknXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBib3JkZXJXaWR0aDogMVxuICAgICAgICAgICAgICAgICAgICAgICAgfV1cbiAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9uczoge1xuICAgICAgICAgICAgICAgICAgICAgICAgc2NhbGVzOiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgeToge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiZWdpbkF0WmVybzogdHJ1ZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSxcblxuICAgICAgICAgICAgLy8gYXN5bmMgZ2V0QXBJZCgpe1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgLy8gICAgIGxldCB1cmwgPSBuZXcgVVJMKCdodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBhcnRtZW50SWRzLycpXG4gICAgICAgICAgICBcbiAgICAgICAgICAgIC8vICAgICBjb25zdCByZXNwb25zZSA9IGF3YWl0IGZldGNoKHVybCk7XG5cbiAgICAgICAgICAgIC8vICAgICBjb25zdCBkYXRhID0gYXdhaXQgcmVzcG9uc2UudGV4dCgpO1xuICAgICAgICAgICAgXG4gICAgICAgICAgICAvLyAgICAgdGhpcy5hcGFydG1lbnRzSWRzID0gZGF0YTtcbiAgICAgICAgICAgIC8vICAgICBjb25zb2xlLmxvZyh0aGlzLmFwYXJ0bWVudHNJZHMpO1xuICAgICAgICAgICAgLy8gfVxuICAgICAgICAgICAgXG4gICAgICAgIH0sXG4gICAgICAgIG1vdW50ZWQoKSB7IFxuICAgICAgICAgICAgdGhpcy5yZW5kZXJDaGFydCgpO1xuICAgICAgICAgICAgLy8gdGhpcy5nZXRBcElkKFxuICAgICAgICAgIFxuXG5cbiAgICAgICAgfVxuXG4gICAgfSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/charts.js\n");
>>>>>>> ec77e76d0e45234a3d268172c777e0a7647b5a97

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