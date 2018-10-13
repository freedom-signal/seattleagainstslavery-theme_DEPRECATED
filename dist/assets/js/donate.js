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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 21);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ }),

/***/ 21:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(22);


/***/ }),

/***/ 22:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _jquery = __webpack_require__(0);

var _jquery2 = _interopRequireDefault(_jquery);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var Donate = function Donate(elem) {
  var $forms = (0, _jquery2.default)(elem),
      $amountInput = $forms.find('input[name="amount"]');

  $amountInput.on('focus', function () {
    // $('.sas-donate-form--credit-card').hide();
    var $form = (0, _jquery2.default)(this).parents('.sas-donate-form'),
        $creditCard = $form.find('.sas-donate-form--credit-card');

    if ($creditCard.not(':visible')) {
      (0, _jquery2.default)('.sas-donate-form--credit-card').hide();
      (0, _jquery2.default)('.sas-donate-form--button').show();

      $creditCard.slideDown();
      $form.find('.sas-donate-form--button').slideUp();
    }
  }).on('change', function (evt) {
    var $form = (0, _jquery2.default)(this).parents('.sas-donate-form');
    $form.find('.ginput_amount').val(evt.target.value);
  });
};

_jquery2.default.fn.donate = function () {
  return Donate(this);
};

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgMGFmMGM0NjhjMDRjY2I1NmQ4ZTEiLCJ3ZWJwYWNrOi8vL2V4dGVybmFsIFwialF1ZXJ5XCIiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0cy9qcy9kb25hdGUuanMiXSwibmFtZXMiOlsiRG9uYXRlIiwiZWxlbSIsIiRmb3JtcyIsIiRhbW91bnRJbnB1dCIsImZpbmQiLCJvbiIsIiRmb3JtIiwicGFyZW50cyIsIiRjcmVkaXRDYXJkIiwibm90IiwiaGlkZSIsInNob3ciLCJzbGlkZURvd24iLCJzbGlkZVVwIiwiZXZ0IiwidmFsIiwidGFyZ2V0IiwidmFsdWUiLCIkIiwiZm4iLCJkb25hdGUiXSwibWFwcGluZ3MiOiI7QUFBQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsYUFBSztBQUNMO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsbUNBQTJCLDBCQUEwQixFQUFFO0FBQ3ZELHlDQUFpQyxlQUFlO0FBQ2hEO0FBQ0E7QUFDQTs7QUFFQTtBQUNBLDhEQUFzRCwrREFBK0Q7O0FBRXJIO0FBQ0E7O0FBRUE7QUFDQTs7Ozs7Ozs7QUM3REEsd0I7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ0FBOzs7Ozs7QUFFQSxJQUFJQSxTQUFTLFNBQVRBLE1BQVMsQ0FBVUMsSUFBVixFQUFnQjtBQUMzQixNQUFJQyxTQUFTLHNCQUFFRCxJQUFGLENBQWI7QUFBQSxNQUNFRSxlQUFlRCxPQUFPRSxJQUFQLENBQVksc0JBQVosQ0FEakI7O0FBR0FELGVBQ0dFLEVBREgsQ0FDTSxPQUROLEVBQ2UsWUFBWTtBQUN2QjtBQUNBLFFBQUlDLFFBQVEsc0JBQUUsSUFBRixFQUFRQyxPQUFSLENBQWdCLGtCQUFoQixDQUFaO0FBQUEsUUFDQUMsY0FBY0YsTUFBTUYsSUFBTixDQUFXLCtCQUFYLENBRGQ7O0FBR0EsUUFBR0ksWUFBWUMsR0FBWixDQUFnQixVQUFoQixDQUFILEVBQStCO0FBQzdCLDRCQUFFLCtCQUFGLEVBQW1DQyxJQUFuQztBQUNBLDRCQUFFLDBCQUFGLEVBQThCQyxJQUE5Qjs7QUFFQUgsa0JBQVlJLFNBQVo7QUFDQU4sWUFBTUYsSUFBTixDQUFXLDBCQUFYLEVBQXVDUyxPQUF2QztBQUNEO0FBQ0YsR0FiSCxFQWNHUixFQWRILENBY00sUUFkTixFQWNnQixVQUFVUyxHQUFWLEVBQWU7QUFDM0IsUUFBSVIsUUFBUSxzQkFBRSxJQUFGLEVBQVFDLE9BQVIsQ0FBZ0Isa0JBQWhCLENBQVo7QUFDQUQsVUFBTUYsSUFBTixDQUFXLGdCQUFYLEVBQTZCVyxHQUE3QixDQUFpQ0QsSUFBSUUsTUFBSixDQUFXQyxLQUE1QztBQUNELEdBakJIO0FBa0JELENBdEJEOztBQXdCQUMsaUJBQUVDLEVBQUYsQ0FBS0MsTUFBTCxHQUFjLFlBQVk7QUFDeEIsU0FBT3BCLE9BQU8sSUFBUCxDQUFQO0FBQ0QsQ0FGRCxDIiwiZmlsZSI6ImRvbmF0ZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwge1xuIFx0XHRcdFx0Y29uZmlndXJhYmxlOiBmYWxzZSxcbiBcdFx0XHRcdGVudW1lcmFibGU6IHRydWUsXG4gXHRcdFx0XHRnZXQ6IGdldHRlclxuIFx0XHRcdH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIlwiO1xuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDIxKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCAwYWYwYzQ2OGMwNGNjYjU2ZDhlMSIsIm1vZHVsZS5leHBvcnRzID0galF1ZXJ5O1xuXG5cbi8vLy8vLy8vLy8vLy8vLy8vL1xuLy8gV0VCUEFDSyBGT09URVJcbi8vIGV4dGVybmFsIFwialF1ZXJ5XCJcbi8vIG1vZHVsZSBpZCA9IDBcbi8vIG1vZHVsZSBjaHVua3MgPSAwIDEgMiIsImltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XG5cbnZhciBEb25hdGUgPSBmdW5jdGlvbiAoZWxlbSkge1xuICB2YXIgJGZvcm1zID0gJChlbGVtKSxcbiAgICAkYW1vdW50SW5wdXQgPSAkZm9ybXMuZmluZCgnaW5wdXRbbmFtZT1cImFtb3VudFwiXScpO1xuXG4gICRhbW91bnRJbnB1dFxuICAgIC5vbignZm9jdXMnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAvLyAkKCcuc2FzLWRvbmF0ZS1mb3JtLS1jcmVkaXQtY2FyZCcpLmhpZGUoKTtcbiAgICAgIHZhciAkZm9ybSA9ICQodGhpcykucGFyZW50cygnLnNhcy1kb25hdGUtZm9ybScpLFxuICAgICAgJGNyZWRpdENhcmQgPSAkZm9ybS5maW5kKCcuc2FzLWRvbmF0ZS1mb3JtLS1jcmVkaXQtY2FyZCcpO1xuXG4gICAgICBpZigkY3JlZGl0Q2FyZC5ub3QoJzp2aXNpYmxlJykpe1xuICAgICAgICAkKCcuc2FzLWRvbmF0ZS1mb3JtLS1jcmVkaXQtY2FyZCcpLmhpZGUoKTtcbiAgICAgICAgJCgnLnNhcy1kb25hdGUtZm9ybS0tYnV0dG9uJykuc2hvdygpO1xuXG4gICAgICAgICRjcmVkaXRDYXJkLnNsaWRlRG93bigpO1xuICAgICAgICAkZm9ybS5maW5kKCcuc2FzLWRvbmF0ZS1mb3JtLS1idXR0b24nKS5zbGlkZVVwKCk7XG4gICAgICB9XG4gICAgfSlcbiAgICAub24oJ2NoYW5nZScsIGZ1bmN0aW9uIChldnQpIHtcbiAgICAgIHZhciAkZm9ybSA9ICQodGhpcykucGFyZW50cygnLnNhcy1kb25hdGUtZm9ybScpO1xuICAgICAgJGZvcm0uZmluZCgnLmdpbnB1dF9hbW91bnQnKS52YWwoZXZ0LnRhcmdldC52YWx1ZSk7XG4gICAgfSk7XG59O1xuXG4kLmZuLmRvbmF0ZSA9IGZ1bmN0aW9uICgpIHtcbiAgcmV0dXJuIERvbmF0ZSh0aGlzKTtcbn07XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gLi9zcmMvYXNzZXRzL2pzL2RvbmF0ZS5qcyJdLCJzb3VyY2VSb290IjoiIn0=