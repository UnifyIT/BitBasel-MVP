!function(e){var r={};function t(o){if(r[o])return r[o].exports;var n=r[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,t),n.l=!0,n.exports}t.m=e,t.c=r,t.d=function(e,r,o){t.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:o})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,r){if(1&r&&(e=t(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(t.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)t.d(o,n,function(r){return e[r]}.bind(null,n));return o},t.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(r,"a",r),r},t.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},t.p="",t(t.s=0)}([function(e,r){document.querySelectorAll(".woocommerce-product-gallery a[href]").forEach((function(e){e.removeAttribute("href")}));var t=document.querySelector(".woocommerce-product-gallery .woocommerce-product-gallery__image:first-child");function o(e,r,t){t.setAttribute(e,r.getAttribute(e))}document.querySelectorAll(".woocommerce-product-gallery .woocommerce-product-gallery__image:not(:first-child)").forEach((function(e){e.onclick=function(){var r=t.querySelector("img"),n=e.querySelector("img");["src","title","data-src","data-large_image","srcset"].forEach((function(e){o(e,n,r)})),o("data-thumb",e,t)}}))}]);