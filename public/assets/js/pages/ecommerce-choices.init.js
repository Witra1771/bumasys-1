/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************************!*\
  !*** ./resources/js/pages/ecommerce-choices.init.js ***!
  \******************************************************/
/*
Template Name: Borex - Admin & Dashboard Template
Author: Bumi Code
Website: https://Bumi Code.com/
Contact: Bumi Code@gmail.com
File: Ecommerce Choices Js File
*/
// Chocies Select plugin
document.addEventListener('DOMContentLoaded', function () {
  var genericExamples = document.querySelectorAll('[data-trigger]');

  for (i = 0; i < genericExamples.length; ++i) {
    var element = genericExamples[i];
    new Choices(element, {
      placeholderValue: 'This is a placeholder set in the config',
      searchPlaceholderValue: 'This is a search placeholder'
    });
  }
});
/******/ })()
;
