"use strict";
self["webpackHotUpdate_roots_bud_sage_sage"]("app",{

/***/ "./scripts/app.js":
/*!************************!*\
  !*** ./scripts/app.js ***!
  \************************/
/***/ ((__webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @roots/sage/client/dom-ready */ "../node_modules/@roots/sage/lib/client/dom-ready.js");
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper */ "../node_modules/swiper/swiper.esm.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! aos */ "../node_modules/aos/dist/aos.js");
var _import$meta$webpackH;



(0,_roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_0__["default"])(async () => {
  aos__WEBPACK_IMPORTED_MODULE_2__.init();
  // create a table of all #menu-header-menu elements
  const menu = document.querySelector('#header-menu');
  const menuItems = menu.querySelectorAll('li');
  const currentMenuItem = menu.querySelector('.current-menu-item');
  menu.style.setProperty("--menu-item-position", currentMenuItem.offsetWidth / 2 + "px");
  menu.addEventListener("mouseleave", () => {
    menu.style.setProperty("--menu-item-position", currentMenuItem.offsetWidth / 2 + "px");
  });
  menuItems.forEach(item => {
    item.positionLeft = item.offsetLeft + item.offsetWidth / 2;
    item.addEventListener('mouseenter', () => {
      menu.style.setProperty('--menu-item-position', item.positionLeft + 'px');
    });
  });
});
(_import$meta$webpackH = __webpack_module__.hot) === null || _import$meta$webpackH === void 0 ? void 0 : _import$meta$webpackH.accept(console.error);

/***/ })

});
//# sourceMappingURL=app.5c55338dd3b587727a3b.hot-update.js.map