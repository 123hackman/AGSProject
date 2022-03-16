/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/publication.js ***!
  \*************************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var revenirBtns = document.querySelectorAll(".btn-revenir");
var continuerBtns = document.querySelectorAll(".btn-continuer");
var progresse = document.getElementById("progresse");
var formSteps = document.querySelectorAll(".form-step");
var progresseSteps = document.querySelectorAll(".progresse-step");
var formStepsNum = 0;
continuerBtns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    formStepsNum++;
    updateFormSteps();
    udapteProgresseBar();
  });
});
revenirBtns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    formStepsNum--;
    updateFormSteps();
    udapteProgresseBar();
  });
});

function updateFormSteps() {
  formSteps.forEach(function (formStep) {
    formStep.classList.contains("form-step-active") && formStep.classList.remove("form-step-active");
  });
  formSteps[formStepsNum].classList.add("form-step-active");
}

function udapteProgresseBar() {
  progresseSteps.forEach(function (progresseStep, idx) {
    if (idx < formStepsNum + 1) {
      progresseStep.classList.add("progresse-bar-active");
    } else {
      progresseStep.classList.remove("progresse-bar-active");
    }
  });
  var progresseActive = document.querySelectorAll(".progresse-bar-active");
  progresse.style.width = (progresseActive.length - 1) / (progresseSteps.length - 1) * 100 + "%";
} //-----------------


var fileInput = document.getElementById("file-input");
var imageContent = document.getElementById("images");
var numFile = document.getElementById("num-file");

function visualiser() {
  imageContent.innerHTML = "";
  numFile.textContent = "".concat(fileInput.files.length, " Photos selectionner");

  var _iterator = _createForOfIteratorHelper(fileInput.files),
      _step;

  try {
    var _loop = function _loop() {
      i = _step.value;
      var reader = new FileReader();
      var figure = document.createElement("figure");
      var figCap = document.createElement("figcaption");
      figCap.innerText = i.name;
      figure.appendChild(figCap);

      reader.onload = function () {
        var img = document.createElement("img");
        img.setAttribute("src", reader.result);
        figure.insertBefore(img, figCap);
      };

      imageContent.appendChild(figure);
      reader.readAsDataURL(i);
    };

    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      _loop();
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}
/******/ })()
;