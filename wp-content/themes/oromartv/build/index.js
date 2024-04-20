/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/comentarios.js":
/*!************************************!*\
  !*** ./src/modules/comentarios.js ***!
  \************************************/
/***/ (() => {

const targets = document.querySelectorAll('[data-target]');
const content = document.querySelectorAll('[data-content]');
targets.forEach(target => {
  target.addEventListener('click', () => {
    content.forEach(c => {
      c.classList.remove('active');
    });
    const t = document.querySelector(target.dataset.target);
    t.classList.add('active');
  });
});

/***/ }),

/***/ "./src/modules/menu.js":
/*!*****************************!*\
  !*** ./src/modules/menu.js ***!
  \*****************************/
/***/ (() => {

//MENU DROPDOWN

var toggle = document.querySelector('.toggle');
var bar = document.querySelector('.bar');
var list = document.querySelector('.nav-menu');
toggle.addEventListener('click', () => {
  bar.classList.toggle('show');
  list.classList.toggle('show');
});

/***/ }),

/***/ "./node_modules/bootstrap-icons/font/bootstrap-icons.css":
/*!***************************************************************!*\
  !*** ./node_modules/bootstrap-icons/font/bootstrap-icons.css ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/base/global.scss":
/*!******************************!*\
  !*** ./css/base/global.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/components/newsletter.scss":
/*!****************************************!*\
  !*** ./css/components/newsletter.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/components/scrollup.scss":
/*!**************************************!*\
  !*** ./css/components/scrollup.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/components/sliders.scss":
/*!*************************************!*\
  !*** ./css/components/sliders.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/ads.scss":
/*!*****************************!*\
  !*** ./css/layout/ads.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/footer.scss":
/*!********************************!*\
  !*** ./css/layout/footer.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header-category.scss":
/*!*****************************************!*\
  !*** ./css/layout/header-category.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header-deportes.scss":
/*!*****************************************!*\
  !*** ./css/layout/header-deportes.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header-live.scss":
/*!*************************************!*\
  !*** ./css/layout/header-live.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header-noticias.scss":
/*!*****************************************!*\
  !*** ./css/layout/header-noticias.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header-single.scss":
/*!***************************************!*\
  !*** ./css/layout/header-single.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/header.scss":
/*!********************************!*\
  !*** ./css/layout/header.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/live-comments.scss":
/*!***************************************!*\
  !*** ./css/layout/live-comments.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/sidebar.scss":
/*!*********************************!*\
  !*** ./css/layout/sidebar.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/layout/single-comments.scss":
/*!*****************************************!*\
  !*** ./css/layout/single-comments.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/archive.scss":
/*!********************************!*\
  !*** ./css/pages/archive.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/bln.scss":
/*!****************************!*\
  !*** ./css/pages/bln.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/deportes.scss":
/*!*********************************!*\
  !*** ./css/pages/deportes.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/enter.scss":
/*!******************************!*\
  !*** ./css/pages/enter.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/fp.scss":
/*!***************************!*\
  !*** ./css/pages/fp.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/live.scss":
/*!*****************************!*\
  !*** ./css/pages/live.scss ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/noticias.scss":
/*!*********************************!*\
  !*** ./css/pages/noticias.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/reportes.scss":
/*!*********************************!*\
  !*** ./css/pages/reportes.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/search.scss":
/*!*******************************!*\
  !*** ./css/pages/search.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/single-video.scss":
/*!*************************************!*\
  !*** ./css/pages/single-video.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./css/pages/single.scss":
/*!*******************************!*\
  !*** ./css/pages/single.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_pages_enter_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../../../../../css/pages/enter.scss */ "./css/pages/enter.scss");
/* harmony import */ var _css_pages_bln_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../../../../../css/pages/bln.scss */ "./css/pages/bln.scss");
/* harmony import */ var _css_base_global_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../../../css/base/global.scss */ "./css/base/global.scss");
/* harmony import */ var _css_components_scrollup_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../../../../css/components/scrollup.scss */ "./css/components/scrollup.scss");
/* harmony import */ var _css_components_sliders_scss__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../../../../../css/components/sliders.scss */ "./css/components/sliders.scss");
/* harmony import */ var _css_components_newsletter_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../../../../../css/components/newsletter.scss */ "./css/components/newsletter.scss");
/* harmony import */ var _css_layout_ads_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../../../../../css/layout/ads.scss */ "./css/layout/ads.scss");
/* harmony import */ var _css_layout_footer_scss__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../../../../../../css/layout/footer.scss */ "./css/layout/footer.scss");
/* harmony import */ var _css_layout_header_deportes_scss__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header-deportes.scss */ "./css/layout/header-deportes.scss");
/* harmony import */ var _css_layout_header_category_scss__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header-category.scss */ "./css/layout/header-category.scss");
/* harmony import */ var _css_layout_header_noticias_scss__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header-noticias.scss */ "./css/layout/header-noticias.scss");
/* harmony import */ var _css_layout_header_live_scss__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header-live.scss */ "./css/layout/header-live.scss");
/* harmony import */ var _css_layout_header_single_scss__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header-single.scss */ "./css/layout/header-single.scss");
/* harmony import */ var _css_layout_header_scss__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../../../../../../../../../css/layout/header.scss */ "./css/layout/header.scss");
/* harmony import */ var _css_layout_live_comments_scss__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../../../../../../../../../css/layout/live-comments.scss */ "./css/layout/live-comments.scss");
/* harmony import */ var _css_layout_sidebar_scss__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ../../../../../../../../../css/layout/sidebar.scss */ "./css/layout/sidebar.scss");
/* harmony import */ var _css_layout_single_comments_scss__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ../../../../../../../../../css/layout/single-comments.scss */ "./css/layout/single-comments.scss");
/* harmony import */ var _css_pages_archive_scss__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ../../../../../../../../../css/pages/archive.scss */ "./css/pages/archive.scss");
/* harmony import */ var _css_pages_fp_scss__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ../../../../../../../../../css/pages/fp.scss */ "./css/pages/fp.scss");
/* harmony import */ var _css_pages_live_scss__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ../../../../../../../../../css/pages/live.scss */ "./css/pages/live.scss");
/* harmony import */ var _css_pages_noticias_scss__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ../../../../../../../../../css/pages/noticias.scss */ "./css/pages/noticias.scss");
/* harmony import */ var _css_pages_single_scss__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ../../../../../../../../../css/pages/single.scss */ "./css/pages/single.scss");
/* harmony import */ var _css_pages_single_video_scss__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ../../../../../../../../../css/pages/single-video.scss */ "./css/pages/single-video.scss");
/* harmony import */ var _css_pages_reportes_scss__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ../../../../../../../../../css/pages/reportes.scss */ "./css/pages/reportes.scss");
/* harmony import */ var _css_pages_search_scss__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ../../../../../../../../../css/pages/search.scss */ "./css/pages/search.scss");
/* harmony import */ var _css_pages_deportes_scss__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ../../../../../../../../../css/pages/deportes.scss */ "./css/pages/deportes.scss");
/* harmony import */ var bootstrap_icons_font_bootstrap_icons_css__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! bootstrap-icons/font/bootstrap-icons.css */ "./node_modules/bootstrap-icons/font/bootstrap-icons.css");
/* harmony import */ var _modules_menu__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./modules/menu */ "./src/modules/menu.js");
/* harmony import */ var _modules_menu__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(_modules_menu__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var _modules_comentarios__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./modules/comentarios */ "./src/modules/comentarios.js");
/* harmony import */ var _modules_comentarios__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(_modules_comentarios__WEBPACK_IMPORTED_MODULE_28__);





























})();

/******/ })()
;
//# sourceMappingURL=index.js.map