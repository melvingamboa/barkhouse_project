/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var menus = document.querySelectorAll('.navbar-nav.upper .nav-link');
var dropdowns = document.querySelectorAll('.dropdown-content');

var _iterator = _createForOfIteratorHelper(menus),
    _step;

try {
  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    var menu = _step.value;
    menu.addEventListener('click', function (e) {
      var _iterator2 = _createForOfIteratorHelper(dropdowns),
          _step2;

      try {
        for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
          var _dropdown = _step2.value;

          _dropdown.classList.remove('active');
        }
      } catch (err) {
        _iterator2.e(err);
      } finally {
        _iterator2.f();
      }

      var _iterator3 = _createForOfIteratorHelper(menus),
          _step3;

      try {
        for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
          var _menu = _step3.value;

          var _icon = _menu.querySelector('i');

          _icon.classList.add('icofont-rounded-down');

          _icon.classList.remove('icofont-rounded-up');
        }
      } catch (err) {
        _iterator3.e(err);
      } finally {
        _iterator3.f();
      }

      var parent = e.target.closest('.nav-link');
      var name = parent.dataset.target;
      var icon = parent.querySelector('i');
      var dropdown = document.querySelector(".dropdown-content.".concat(name));
      icon.classList.add('icofont-rounded-up');
      icon.classList.remove('icofont-rounded-down');
      dropdown.classList.add('active');
    });
  }
} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}
/******/ })()
;