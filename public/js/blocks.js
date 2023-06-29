"use strict";
(self["webpackChunk_roots_bud_sage_sage"] = self["webpackChunk_roots_bud_sage_sage"] || []).push([["blocks"],{

/***/ "../node_modules/@roots/bud-client/lib/hot/index.mjs?name=sage&indicator=true&overlay=true&reload=true":
/*!*************************************************************************************************************!*\
  !*** ../node_modules/@roots/bud-client/lib/hot/index.mjs?name=sage&indicator=true&overlay=true&reload=true ***!
  \*************************************************************************************************************/
/***/ ((__webpack_module__, __webpack_exports__, __webpack_require__) => {

var __resourceQuery = "?name=sage&indicator=true&overlay=true&reload=true";
__webpack_require__.r(__webpack_exports__);
/* eslint-disable no-console */
/* global __resourceQuery */
/* global module */
var __awaiter = (undefined && undefined.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
;
(() => __awaiter(void 0, void 0, void 0, function* () {
    return yield __webpack_require__.e(/*! import() */ "node_modules_roots_bud-client_lib_hot_client_js").then(__webpack_require__.bind(__webpack_require__, /*! ./client.js */ "../node_modules/@roots/bud-client/lib/hot/client.js")).then((module) => __awaiter(void 0, void 0, void 0, function* () { return yield module.client(__resourceQuery, __webpack_module__.hot); }));
}))();



/***/ }),

/***/ "../node_modules/@roots/sage/lib/client/dom-ready.js":
/*!***********************************************************!*\
  !*** ../node_modules/@roots/sage/lib/client/dom-ready.js ***!
  \***********************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
const domReady = onReady => {
    window.requestAnimationFrame(async function check() {
        document.body ? await onReady() : window.requestAnimationFrame(check);
    });
};
/* harmony default export */ __webpack_exports__["default"] = (domReady);
//# sourceMappingURL=dom-ready.js.map

/***/ }),

/***/ "./scripts/blocks/hero.js":
/*!********************************!*\
  !*** ./scripts/blocks/hero.js ***!
  \********************************/
/***/ ((__webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @roots/sage/client/dom-ready */ "../node_modules/@roots/sage/lib/client/dom-ready.js");
var _import$meta$webpackH;

(0,_roots_sage_client_dom_ready__WEBPACK_IMPORTED_MODULE_0__["default"])(async () => {});
(_import$meta$webpackH = __webpack_module__.hot) === null || _import$meta$webpackH === void 0 ? void 0 : _import$meta$webpackH.accept(console.error);

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./scripts/blocks/hero.js"), __webpack_exec__("../node_modules/@roots/bud-client/lib/hot/index.mjs?name=sage&indicator=true&overlay=true&reload=true"));
/******/ }
]);
//# sourceMappingURL=blocks.js.map